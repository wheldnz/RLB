@extends('layouts.app')

@section('title', $article['title'])
@section('meta_description', $article['excerpt'])

@section('content')

{{-- ═══ ARTICLE HEADER ═══ --}}
<section class="article-hero">
    <div class="container">
        <a href="{{ route('articles') }}" class="back-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Kembali ke Artikel
        </a>
        <span class="article-category-badge">{{ $article['category'] }}</span>
        <h1>{{ $article['title'] }}</h1>
        <div class="article-meta">
            <span>{{ \Carbon\Carbon::parse($article['date'])->translatedFormat('d M Y') }}</span>
            <span>•</span>
            <span>{{ $article['author'] }}</span>
        </div>
    </div>
</section>

{{-- ═══ ARTICLE CONTENT ═══ --}}
<section class="section section-white">
    <div class="container">
        <div class="article-layout">
            <article class="article-content">
                {!! $article['content'] !!}
            </article>

            <aside class="article-sidebar">
                <div class="sidebar-card">
                    <h4>Butuh Service LCD?</h4>
                    <p>Konsultasi gratis dan dapatkan estimasi harga via WhatsApp.</p>
                    <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20konsultasi%20service%20LCD" class="btn btn-primary btn-sm" target="_blank" rel="noopener">Chat WhatsApp</a>
                </div>

                @if(count($otherArticles) > 0)
                <div class="sidebar-card">
                    <h4>Artikel Lainnya</h4>
                    <div class="sidebar-articles">
                        @foreach($otherArticles as $other)
                        <a href="{{ route('articles.show', $other['slug']) }}" class="sidebar-article">
                            <span class="sa-category">{{ $other['category'] }}</span>
                            <h5>{{ $other['title'] }}</h5>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </aside>
        </div>
    </div>
</section>

@endsection
