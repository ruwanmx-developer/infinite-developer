@extends('layouts.app')
@section('class', 'post')
@section('content')
    <div class="container mt-5">
        @include('partials.post_header')
        <div class="row post-cnt">
            <div class="col-12">
                <div class="title-1">Make a new Project</div>
                <div class="code">
                    <pre class="line-numbers"><code class="language-css">p { color: red }
red</code></pre>
                </div>
                <div class="desc">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati maxime consectetur voluptatum, enim,
                    animi ab minus tenetur ipsam libero dignissimos nostrum neque magnam placeat eaque rerum similique
                    reiciendis dolorum. Beatae. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit maiores
                    modi velit accusamus, nisi officiis delectus cum distinctio iste minus corrupti. Pariatur rerum eius
                    perferendis in. Non neque ipsa harum.
                </div>
                <hr>
                <div class="title-1">Go and create a new exe file on your desktop</div>
                <div class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem beatae
                    praesentium officia dolorem consequuntur sequi enim sit pariatur excepturi. Voluptatum aut inventore
                    mollitia tempore. Obcaecati placeat esse suscipit commodi. Et. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Aspernatur explicabo numquam nemo sint ut esse at saepe iste ipsam magni, temporibus
                    veniam similique? Commodi, repudiandae blanditiis itaque at doloremque veniam? lorem</div>
                <div class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur est architecto
                    facere, earum deleniti illum iusto! <span class="fname">HomeController.php</span> Dignissimos
                    similique, impedit doloremque ullam exercitationem sint,
                    porro quo rem fuga esse facilis praesentium!</div>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">$view = "posts.laravel.post-" . $id;
return view($view);</code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection
