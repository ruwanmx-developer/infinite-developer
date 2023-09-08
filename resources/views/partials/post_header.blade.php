<div class="row mb-3">
    <div class="col-12 d-flex">
        {{-- <div class="img-wrap">
            <img src="{{ asset('card_images/' . $post->card->image) }}" alt="">
        </div> --}}
        <h1 class="title">
            {{ $post->name }}
        </h1>
    </div>
    <div class="col-12 d-flex tag-wrap">
        @php
            $tags = null;
            if ($post->tags != '') {
                $tags = explode(',', $post->tags);
            }
        @endphp
        @if ($tags)
            @foreach ($tags as $tag)
                @php
                    $tag = str_replace('\'', '', $tag);
                @endphp
                <div class="post-header tag" onclick="search('{{ $tag }}')">{{ $tag }}</div>
            @endforeach
        @endif
    </div>
    <script>
        function search(tag) {
            window.location.href = '/search?key=' + tag;
        }
    </script>
</div>
