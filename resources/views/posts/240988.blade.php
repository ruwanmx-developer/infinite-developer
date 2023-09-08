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
            </div>
        </div>
    </div>
@endsection
