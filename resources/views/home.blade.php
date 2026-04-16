@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', 'Restorasi Layar Bersama (RLB) - Jasa service LCD smartphone #1. Ganti layar HP cepat, sparepart original, garansi resmi, harga transparan.')

@section('content')

{{-- ═══ HERO ═══ --}}
<section class="hero" id="hero">
    <div class="hero-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>
    <div class="container hero-content">
        <div class="hero-text">
            <div class="hero-badge animate-on-scroll">
                <span class="badge-dot"></span>
                #1 Trusted LCD Repair Service
            </div>
            <h1 class="hero-title animate-on-scroll">
                Restorasi <span class="text-accent">Layar</span> Smartphone Anda dengan Sempurna
            </h1>
            <p class="hero-subtitle animate-on-scroll">
                Perbaikan LCD profesional dengan sparepart original. Proses cepat, harga transparan, bergaransi resmi hingga 6 bulan.
            </p>
            <div class="hero-actions animate-on-scroll">
                <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20konsultasi%20service%20LCD" class="btn btn-primary" target="_blank" rel="noopener">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 0 0 .612.616l4.529-1.459A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.67-6.309-1.823l-.452-.273-2.682.864.882-2.631-.298-.474A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                    Konsultasi Gratis
                </a>
                <a href="{{ route('how-it-works') }}" class="btn btn-outline">
                    Lihat Prosesnya
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
        <div class="hero-visual animate-on-scroll">
            <div class="phone-showcase">
                <div class="phone-frame">
                    <div class="phone-screen">
                        <div class="screen-content">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#f5a623" stroke-width="1.5">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                <polyline points="22 4 12 14.01 9 11.01"/>
                            </svg>
                            <span>LCD Restored!</span>
                        </div>
                    </div>
                </div>
                <div class="phone-glow"></div>
            </div>
        </div>
    </div>

    {{-- Stats Bar --}}
    <div class="stats-bar">
        <div class="container stats-container">
            <div class="stat-item animate-on-scroll">
                <span class="stat-number" data-target="15000">0</span><span class="stat-suffix">+</span>
                <span class="stat-label">Device Diperbaiki</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item animate-on-scroll">
                <span class="stat-number" data-target="98">0</span><span class="stat-suffix">%</span>
                <span class="stat-label">Tingkat Keberhasilan</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item animate-on-scroll">
                <span class="stat-number" data-target="30">0</span><span class="stat-suffix"> mnt</span>
                <span class="stat-label">Rata-rata Pengerjaan</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item animate-on-scroll">
                <span class="stat-number" data-target="6">0</span><span class="stat-suffix"> bln</span>
                <span class="stat-label">Garansi Resmi</span>
            </div>
        </div>
    </div>
</section>

{{-- ═══ HOW IT WORKS PREVIEW ═══ --}}
<section class="section section-white" id="flow-preview">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Proses</span>
            <h2 class="section-title">Bagaimana Cara <span class="text-accent">Kerjanya?</span></h2>
            <p class="section-subtitle">Proses simpel, transparan, dan tanpa ribet. Device Anda di tangan ahli dari awal sampai akhir.</p>
        </div>

        <div class="flow-grid">
            <div class="flow-card animate-on-scroll">
                <div class="flow-number">01</div>
                <div class="flow-icon">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                        <path d="M12 18h.01"/>
                    </svg>
                </div>
                <h3>Bawa Device</h3>
                <p>Datang langsung atau booking online. Ceritakan masalah layar HP Anda.</p>
            </div>
            <div class="flow-card animate-on-scroll">
                <div class="flow-number">02</div>
                <div class="flow-icon">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
                    </svg>
                </div>
                <h3>Diagnosis Gratis</h3>
                <p>Teknisi cek masalah dalam 15 menit. Quote harga di depan, tanpa biaya tersembunyi.</p>
            </div>
            <div class="flow-card animate-on-scroll">
                <div class="flow-number">03</div>
                <div class="flow-icon">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                </div>
                <h3>Proses Perbaikan</h3>
                <p>LCD diganti dengan sparepart original oleh teknisi bersertifikat. Selesai ~30 menit.</p>
            </div>
            <div class="flow-card animate-on-scroll">
                <div class="flow-number">04</div>
                <div class="flow-icon">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <h3>Quality Check & Ambil</h3>
                <p>12-point QC test, kartu garansi, device siap pakai seperti baru!</p>
            </div>
        </div>

        <div class="section-cta">
            <a href="{{ route('how-it-works') }}" class="btn btn-outline">
                Lihat Detail Proses
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ═══ CORE VALUES ═══ --}}
<section class="section section-light" id="values">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Komitmen Kami</span>
            <h2 class="section-title">Mengapa <span class="text-accent">Memilih RLB?</span></h2>
            <p class="section-subtitle">Nilai-nilai yang membedakan kami dari tempat service lainnya.</p>
        </div>

        <div class="values-grid">
            <div class="value-card animate-on-scroll">
                <div class="value-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <h3>Kualitas Premium</h3>
                <p>Hanya menggunakan LCD Original & OEM A+ Grade. Tanpa sparepart KW — dijamin.</p>
                <div class="value-tag"><span class="tag-dot"></span>100% Genuine Parts</div>
            </div>
            <div class="value-card animate-on-scroll">
                <div class="value-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                </div>
                <h3>Transparan</h3>
                <p>Harga dikasih tau di depan. Tidak ada biaya tersembunyi. Approve dulu, baru kerjakan.</p>
                <div class="value-tag"><span class="tag-dot"></span>No Hidden Fees</div>
            </div>
            <div class="value-card animate-on-scroll">
                <div class="value-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                </div>
                <h3>Cepat Kilat</h3>
                <p>Kebanyakan ganti LCD selesai 30 menit. Same-day service untuk walk-in customer.</p>
                <div class="value-tag"><span class="tag-dot"></span>30 Menit Selesai</div>
            </div>
            <div class="value-card animate-on-scroll">
                <div class="value-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>Bergaransi</h3>
                <p>Setiap perbaikan dilengkapi garansi resmi hingga 6 bulan. Rusak? Kami ganti gratis.</p>
                <div class="value-tag"><span class="tag-dot"></span>Garansi 6 Bulan</div>
            </div>
            <div class="value-card animate-on-scroll">
                <div class="value-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3>Teknisi Bersertifikat</h3>
                <p>Tim kami terlatih dan bersertifikat untuk semua merek — Apple, Samsung, Xiaomi, OPPO, Vivo.</p>
                <div class="value-tag"><span class="tag-dot"></span>Factory-Trained</div>
            </div>
            <div class="value-card animate-on-scroll">
                <div class="value-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                </div>
                <h3>Customer First</h3>
                <p>Pelayanan ramah, komunikasi jelas, dan kepedulian yang melampaui perbaikan.</p>
                <div class="value-tag"><span class="tag-dot"></span>Rating 4.9★</div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ SERVICES PREVIEW ═══ --}}
<section class="section section-white" id="services-preview">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Layanan</span>
            <h2 class="section-title">Layanan <span class="text-accent">Kami</span></h2>
            <p class="section-subtitle">Solusi lengkap untuk setiap masalah layar smartphone Anda.</p>
        </div>

        <div class="services-grid-home">
            <div class="service-card-home animate-on-scroll">
                <div class="service-icon-home">📱</div>
                <h3>Ganti LCD</h3>
                <p>Penggantian panel LCD lengkap dengan kualitas OEM untuk tampilan jernih.</p>
            </div>
            <div class="service-card-home animate-on-scroll">
                <div class="service-icon-home">🔧</div>
                <h3>Repair Touchscreen</h3>
                <p>Perbaikan touch tidak responsif, ghost touch, dan masalah digitizer.</p>
            </div>
            <div class="service-card-home animate-on-scroll">
                <div class="service-icon-home">🛡️</div>
                <h3>Ganti Kaca Saja</h3>
                <p>Kaca retak tapi LCD masih bagus? Kami ganti kaca luarnya saja.</p>
            </div>
            <div class="service-card-home animate-on-scroll">
                <div class="service-icon-home">💡</div>
                <h3>Perbaikan Backlight</h3>
                <p>Layar redup atau berkedip? Perbaikan komponen backlight oleh ahli.</p>
            </div>
        </div>

        <div class="section-cta">
            <a href="{{ route('services') }}" class="btn btn-primary">
                Lihat Semua Layanan
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ═══ ARTICLES PREVIEW ═══ --}}
<section class="section section-light" id="articles-preview">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Blog</span>
            <h2 class="section-title">Artikel <span class="text-accent">Terbaru</span></h2>
            <p class="section-subtitle">Tips, edukasi, dan info terkini seputar perawatan layar smartphone.</p>
        </div>

        <div class="articles-grid">
            @foreach($articles as $article)
            <a href="{{ route('articles.show', $article['slug']) }}" class="article-card animate-on-scroll">
                <div class="article-img">
                    <div class="article-img-placeholder">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                    </div>
                    <span class="article-category">{{ $article['category'] }}</span>
                </div>
                <div class="article-body">
                    <span class="article-date">{{ \Carbon\Carbon::parse($article['date'])->translatedFormat('d M Y') }}</span>
                    <h3>{{ $article['title'] }}</h3>
                    <p>{{ $article['excerpt'] }}</p>
                    <span class="article-read-more">Baca Selengkapnya →</span>
                </div>
            </a>
            @endforeach
        </div>

        <div class="section-cta">
            <a href="{{ route('articles') }}" class="btn btn-outline">
                Lihat Semua Artikel
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ═══ CTA ═══ --}}
<section class="cta-section">
    <div class="container">
        <div class="cta-card">
            <div class="cta-content">
                <h2>Layar HP Rusak?<br>Hubungi Kami <span class="text-accent">Sekarang!</span></h2>
                <p>Konsultasi gratis via WhatsApp. Dapatkan estimasi harga dalam hitungan menit.</p>
                <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20konsultasi%20service%20LCD" class="btn btn-primary btn-lg" target="_blank" rel="noopener">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 0 0 .612.616l4.529-1.459A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.67-6.309-1.823l-.452-.273-2.682.864.882-2.631-.298-.474A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                    Chat WhatsApp Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
