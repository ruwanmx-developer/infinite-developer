@extends('layouts.app')
@section('meta_description', $post->description)
@section('page_title', 'Infinite Developer | ' . $post->name)
@section('class', 'post')
@section('content')
    <div class="container mt-4">
        @include('partials.post_header')
        <div class="row mb-5">
            <div class="col-12 col-xxl-10 post-cnt">
                <h2 class="title-1">Setup PayHere Sandbox Account</h2>
                <p class="desc">First you need to go to the <a target="_blank"
                        href="https://sandbox.payhere.lk/merchant/sign-in"><span>PayHere Sandbox</span></a> page and make an
                    account. Then you need to select the <a
                        href="https://sandbox.payhere.lk/merchant/domains"><span>Integrations</span></a> from the left
                    sidebar. Next click <span>Add Domain/App</span>. Select <span>Domain</span> for the
                    <span>Domain/APP</span> field. Give your <span>Brand Name</span> and the <span>Domain Name</span>. For
                    the <span>Domain Name</span> if your are using localhost you can give <span>localhost</span> or if you
                    have already host your site you can use your domain like <span>infinitedeveloper.com</span>. Now click
                    save and you can get the <span>Merchant Id</span> and <span>Secrete Key</span> for next steps.

                </p>
                <p class="desc"><span>Important : If you are using localhost you can't recieve the payment confirmation
                        from the
                        PayHere. So we recommand if you can us a hosting service it will be easy to integrate the
                        gateway</span></p>
                <h2 class="title-1">Setup .env file For Payment Gateway</h2>
                <p class="desc">Paste the below code in the end of the .env file and replace with your <span>Merchant
                        Id</span> and <span>Secret Key</span></p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch">PAYHERE_MERCHANT_ID="xxxxxxx"
PAYHERE_SECRET_KEY="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"</code></pre>
                </div>
                <h2 class="title-1">Create Controller For Handle Payments</h2>
                <p class="desc">Run this code to make a new controller named <span>PaymentController</span> to process
                    your payments.</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch">php artisan make:controller PaymentController</code></pre>
                </div>
                <p class="desc">Copy and paste this code in your <span>PaymentController.php</span> in
                    <span>app/http/Controllers/PaymentController.php</span>. In this code we have explaned every detail
                    using comments you should know.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php

namespace App\Http\Controllers;

class PaymentController extends Controller
{

    public function paymentprocess()
    {
        $currency = "USD"; // you can use USD or LKR for this
        $order_id = uniqid(); // this is to recognize order. save this in your database with the customer details so you can verify the payment
        $amount = 100; // this is the payment amount. for this exapmle 100 USD
        // getting the payhere keys from env file
        $merchant_id = env('PAYHERE_MERCHANT_ID');
        $merchant_secret = env('PAYHERE_SECRET_KEY');
        // this hash is very important. we send the raw data and the hash to verify the data hasen't changed by a third party
        $hash = strtoupper(
            md5(
                $merchant_id .
                    $order_id .
                    number_format($amount, 2, '.', '') .
                    $currency .
                    strtoupper(md5($merchant_secret))
            )
        );
        // fill this data of the customer. we have added dummy data
        $data = [
            'hash' => $hash, // this must be the previously build hash
            "merchant_id" => env('PAYHERE_MERCHANT_ID'),
            "amount" => $amount, // this must be the amount you use to build the hash
            "currency" => $currency, // this must be the currency you use to build the hash
            "first_name" => "John",
            "last_name" => "Smith",
            "email" => "test@mail.com",
            "phone" => "00947632654",
            "order_id" => $order_id, // this must be the order id you use to build the hash
            "items" => "Gold Package",
            "address" => "73657 Fay Gardens",
            "city" => "Corpus Christi",
            "country" => "Minnesota",
            "custom_1" => "", // you can send 2 custom data to identify the payment. this data will return to you with the notification response
            "custom_2" => "",
        ];
        // return the data as json response
        return response()->json($data);
    }

    public function notifyUrl()
    {
        // this is the data that payhere will return to you
        $merchant_id = $_POST['merchant_id'];
        $order_id = $_POST['order_id'];
        $payment_id = $_POST['payment_id'];
        $captured_amount = $_POST['captured_amount'];
        $payhere_amount = $_POST['payhere_amount'];
        $payhere_currency = $_POST['payhere_currency'];
        $status_code = $_POST['status_code'];
        $md5sig = $_POST['md5sig'];
        $custom_1 = $_POST['custom_1'];
        $custom_2 = $_POST['custom_2'];
        $status_message = $_POST['status_message'];
        $method = $_POST['method'];
        $card_holder_name = $_POST['card_holder_name'];
        $card_no = $_POST['card_no'];
        $card_expiry = $_POST['card_expiry'];
        $merchant_secret = env('PAYHERE_SECRET_KEY');
        // use this method to veify the details are valid
        $local_md5sig = strtoupper(
            md5(
                $merchant_id .
                    $order_id .
                    $payhere_amount .
                    $payhere_currency .
                    $status_code .
                    strtoupper(md5($merchant_secret))
            )
        );
        // if this 2 conditions are true then your payment has been completed successfully
        if (($local_md5sig === $md5sig) and ($status_code == 2)) {
            // update the database or do your task
        }
    }

    // this function will work when payment has completed the client
    public function returnUrl()
    {
        return view('payment-return');
    }

    // this function will work when payment has canceled by the client
    public function cancelUrl()
    {
        return view('payment-cancel');
    }
}
                        </code></pre>
                </div>
                <h2 class="title-1">Create Routes For The Payment Process</h2>
                <p class="desc">Copy and paste this code in your <span>web.php</span>.</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">// this route is to process your payment and make the initial data
Route::post('/paymentprocess', [App\Http\Controllers\PaymentController::class, 'paymentprocess'])->name('paymentprocess');

// this route is for the payment confirmation. this won't work if your are in localhost
Route::post('/payment-notify', [App\Http\Controllers\PaymentController::class, 'notifyUrl'])->name('notify-url');

// this route is to redirect the request if payment canceled by the user
Route::get('/payment-cancel', [App\Http\Controllers\PaymentController::class, 'cancelUrl'])->name('cancel-url');

// this route is to redirect the request if payment processed
Route::get('/payment-return', [App\Http\Controllers\PaymentController::class, 'returnUrl'])->name('return-url');</code></pre>
                </div>
                <h2 class="title-1">Prepare Frontend File</h2>
                <p class="desc">Add this javascript to connect payhere sdk</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-html">&lt;script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js">&lt;/script></code></pre>
                </div>
                <p class="desc">Add this button to make a payment in your view</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-html">&lt;button onclick="pay()">Pay&lt;/button></code></pre>
                </div>
                <p class="desc">Copy and paste this code to handle payment</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-html">&lt;script>
function pay() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '&#123;&#123; route('paymentprocess') &#125;&#125;',
        type: 'POST',
        data: formData,
        success: function(res) {
            payhere.onCompleted = function onCompleted(orderId) {
                console.log("Payment completed. OrderID:" + orderId);
                // Note: validate the payment and show success or failure page to the customer
            };

            // Payment window closed
            payhere.onDismissed = function onDismissed() {
                // Note: Prompt user to pay again or show an error page
                console.log("Payment dismissed");
            };

            // Error occurred
            payhere.onError = function onError(error) {
                // Note: show an error page
                console.log("Error:" + error);
            };

            // Put the payment variables here
            var payment = {
                "sandbox": true, // add this to use sandbox
                "merchant_id": res.merchant_id,
                "return_url": "&#123;&#123; route('return-url') &#125;&#125;", // Important
                "cancel_url": "&#123;&#123; route('cancel-url') &#125;&#125;", // Important
                "notify_url": "&#123;&#123; route('notify-url') &#125;&#125;",
                "order_id": res.order_id,
                "items": res.items,
                "amount": res.amount,
                "currency": res.currency,
                "hash": res.hash,
                "first_name": res.first_name,
                "last_name": res.last_name,
                "email": res.email,
                "phone": res.phone,
                "address": res.address,
                "city": res.city,
                "country": res.country,
                "delivery_address": "No. 46, Dummy Street",
                "delivery_city": "Dummy City",
                "delivery_country": "Dummy Country",
                "custom_1": res.custom_1,
                "custom_2": res.custom_2
            };
            payhere.startPayment(payment);

        },
        error: function(xhr, status, error) {
            // Code to handle the error response
            console.error('Form submission error', error);
        }
    });
}
&lt;/script></code></pre>
                </div>
                <p class="desc">Now you can run the application and click the <span>Pay</span> button and do payments</p>
                <p class="desc"><span>Important : In sandbox mode you can do limited amount of transactions. So remember
                        to use small prices to do payments in test mode (sandbox)</span></p>
            </div>
        </div>
    </div>
@endsection
