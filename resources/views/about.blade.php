@extends('layouts.app')

@section('title', 'About Us')
@section('meta_description', 'Kenali Restorasi Layar Bersama (RLB) - Tim kami yang berpengalaman dan berdedikasi untuk memberikan service LCD smartphone terbaik.')

@section('content')

{{-- ═══ PAGE HERO ═══ --}}
<section class="page-hero">
    <div class="container">
        <span class="section-tag">Tentang Kami</span>
        <h1 class="page-hero-title">Restorasi Layar <span class="text-accent">Bersama</span></h1>
        <p class="page-hero-subtitle">Mitra terpercaya Anda untuk perbaikan LCD smartphone berkualitas tinggi sejak 2020.</p>
    </div>
</section>

{{-- ═══ STORY ═══ --}}
<section class="section section-white">
    <div class="container">
        <div class="about-story">
            <div class="story-content animate-on-scroll">
                <span class="section-tag">Cerita Kami</span>
                <h2 class="section-title">Dari Hobi Menjadi <span class="text-accent">Passion</span></h2>
                <p>Restorasi Layar Bersama (RLB) lahir dari kesadaran bahwa terlalu banyak orang yang kecewa dengan service LCD yang menggunakan sparepart murahan, harga tidak transparan, dan garansi yang tidak jelas.</p>
                <p>Kami memulai dengan misi sederhana: <strong>memberikan service LCD smartphone yang jujur, berkualitas, dan terjangkau.</strong> Setiap teknisi kami terlatih langsung dari ahli, menggunakan tools presisi, dan hanya memakai sparepart OEM A+ Grade atau Original.</p>
                <p>Sekarang, dengan lebih dari <strong>15.000+ device</strong> yang telah kami perbaiki dan <strong>rating 4.9★</strong> dari pelanggan, RLB telah menjadi rujukan utama untuk perbaikan layar smartphone di Indonesia.</p>
            </div>
            <div class="story-visual animate-on-scroll">
                <div class="story-stats-card">
                    <div class="mini-stat">
                        <span class="mini-stat-number">2020</span>
                        <span class="mini-stat-label">Didirikan</span>
                    </div>
                    <div class="mini-stat">
                        <span class="mini-stat-number">15K+</span>
                        <span class="mini-stat-label">Device Diperbaiki</span>
                    </div>
                    <div class="mini-stat">
                        <span class="mini-stat-number">4.9★</span>
                        <span class="mini-stat-label">Rating Customer</span>
                    </div>
                    <div class="mini-stat">
                        <span class="mini-stat-number">98%</span>
                        <span class="mini-stat-label">Success Rate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ MISSION & VISION ═══ --}}
<section class="section section-light">
    <div class="container">
        <div class="mission-grid">
            <div class="mission-card animate-on-scroll">
                <div class="mission-icon">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                </div>
                <h3>Misi Kami</h3>
                <p>Memberikan layanan perbaikan LCD smartphone yang berkualitas tinggi, transparan, dan terjangkau. Memastikan setiap pelanggan mendapatkan pengalaman terbaik dengan sparepart original dan garansi yang terpercaya.</p>
            </div>
            <div class="mission-card animate-on-scroll">
                <div class="mission-icon">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                </div>
                <h3>Visi Kami</h3>
                <p>Menjadi pusat perbaikan LCD smartphone #1 yang paling dipercaya di Indonesia, dikenal karena kejujuran, kecepatan, dan kualitas tanpa kompromi.</p>
            </div>
        </div>
    </div>
</section>

{{-- ═══ WHY CHOOSE US ═══ --}}
<section class="section section-white">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Keunggulan</span>
            <h2 class="section-title">Kenapa Harus <span class="text-accent">RLB?</span></h2>
        </div>

        <div class="advantage-grid">
            <div class="advantage-item animate-on-scroll">
                <div class="advantage-num">01</div>
                <h4>Sparepart Original Dijamin</h4>
                <p>Kami hanya menggunakan LCD Original dan OEM A+ Grade langsung dari supplier terpercaya. Tidak pernah pakai sparepart KW.</p>
            </div>
            <div class="advantage-item animate-on-scroll">
                <div class="advantage-num">02</div>
                <h4>Harga Paling Transparan</h4>
                <p>Quote harga diberikan sebelum pengerjaan. Setuju dulu, baru kerjakan. Tidak ada biaya tambahan mendadak.</p>
            </div>
            <div class="advantage-item animate-on-scroll">
                <div class="advantage-num">03</div>
                <h4>Garansi Resmi 6 Bulan</h4>
                <p>Setiap perbaikan dilengkapi kartu garansi resmi. Jika ada masalah, kami perbaiki gratis.</p>
            </div>
            <div class="advantage-item animate-on-scroll">
                <div class="advantage-num">04</div>
                <h4>Teknisi Bersertifikat</h4>
                <p>Tim kami terlatih untuk menangani semua merek: Apple, Samsung, Xiaomi, OPPO, Vivo, Realme, dan lainnya.</p>
            </div>
            <div class="advantage-item animate-on-scroll">
                <div class="advantage-num">05</div>
                <h4>Proses Cepat 30 Menit</h4>
                <p>Tidak perlu menunggu berjam-jam. Kebanyakan penggantian LCD selesai dalam 30 menit.</p>
            </div>
            <div class="advantage-item animate-on-scroll">
                <div class="advantage-num">06</div>
                <h4>12-Point Quality Check</h4>
                <p>Setiap device melalui 12 titik pengecekan kualitas: display test, touch sensitivity, color calibration, dan lainnya.</p>
            </div>
        </div>
    </div>
</section>

{{-- ═══ BRANDS ═══ --}}
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Merek</span>
            <h2 class="section-title">Merek yang Kami <span class="text-accent">Tangani</span></h2>
        </div>
        <div class="brands-grid">
            <div class="brand-item animate-on-scroll">Apple / iPhone</div>
            <div class="brand-item animate-on-scroll">Samsung</div>
            <div class="brand-item animate-on-scroll">Xiaomi / Redmi</div>
            <div class="brand-item animate-on-scroll">OPPO</div>
            <div class="brand-item animate-on-scroll">Vivo</div>
            <div class="brand-item animate-on-scroll">Realme</div>
            <div class="brand-item animate-on-scroll">POCO</div>
            <div class="brand-item animate-on-scroll">Infinix</div>
            <div class="brand-item animate-on-scroll">Huawei</div>
            <div class="brand-item animate-on-scroll">Google Pixel</div>
        </div>
    </div>
</section>

{{-- ═══ CTA ═══ --}}
<section class="cta-section">
    <div class="container">
        <div class="cta-card">
            <div class="cta-content">
                <h2>Siap Mempercayakan <span class="text-accent">Device Anda?</span></h2>
                <p>Hubungi kami via WhatsApp untuk konsultasi gratis dan estimasi harga.</p>
                <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20konsultasi%20service%20LCD" class="btn btn-primary btn-lg" target="_blank" rel="noopener">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 0 0 .612.616l4.529-1.459A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.67-6.309-1.823l-.452-.273-2.682.864.882-2.631-.298-.474A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                    WhatsApp Kami
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
