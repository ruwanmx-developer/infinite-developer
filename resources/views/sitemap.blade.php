<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}/learn</loc>
        <lastmod>2023-09-02T03:19:52+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($cards as $card)
        <url>
            <loc>{{ url('/') }}/{{ $card->link_tag }}</loc>
            <lastmod>{{ $card->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.1</priority>
        </url>
    @endforeach
    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/') }}/{{ $post->link_tag }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.1</priority>
        </url>
    @endforeach
</urlset>
