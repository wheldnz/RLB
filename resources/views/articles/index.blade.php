@extends('layouts.app')

@section('title', 'Articles')
@section('meta_description', 'Artikel terbaru seputar tips perawatan layar smartphone, edukasi sparepart, dan info harga service LCD dari RLB.')

@section('content')

{{-- ═══ PAGE HERO ═══ --}}
<section class="page-hero">
    <div class="container">
        <span class="section-tag">Blog</span>
        <h1 class="page-hero-title">Artikel & <span class="text-accent">Tips</span></h1>
        <p class="page-hero-subtitle">Edukasi, tips perawatan, dan info terkini seputar layar smartphone.</p>
    </div>
</section>

{{-- ═══ ARTICLES LIST ═══ --}}
<section class="section section-white">
    <div class="container">
        <div class="articles-list-grid">
            @foreach($articles as $article)
            <a href="{{ route('articles.show', $article['slug']) }}" class="article-card-list animate-on-scroll">
                <div class="acl-img">
                    <div class="article-img-placeholder">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                    </div>
                    <span class="article-category">{{ $article['category'] }}</span>
                </div>
                <div class="acl-body">
                    <div class="acl-meta">
                        <span class="article-date">{{ \Carbon\Carbon::parse($article['date'])->translatedFormat('d M Y') }}</span>
                        <span class="acl-author">• {{ $article['author'] }}</span>
                    </div>
                    <h2>{{ $article['title'] }}</h2>
                    <p>{{ $article['excerpt'] }}</p>
                    <span class="article-read-more">Baca Selengkapnya →</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

@endsection
