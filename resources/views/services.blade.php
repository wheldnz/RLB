@extends('layouts.app')

@section('title', 'Services')
@section('meta_description', 'Layanan perbaikan LCD smartphone lengkap: ganti LCD, repair touchscreen, ganti kaca, perbaikan backlight, dead pixel fix, dan lainnya.')

@section('content')

{{-- ═══ PAGE HERO ═══ --}}
<section class="page-hero">
    <div class="container">
        <span class="section-tag">Layanan Kami</span>
        <h1 class="page-hero-title">Solusi Lengkap untuk <span class="text-accent">Layar Smartphone</span></h1>
        <p class="page-hero-subtitle">Perbaikan profesional untuk setiap masalah LCD dan touchscreen, semua merek didukung.</p>
    </div>
</section>

{{-- ═══ SERVICES DETAIL ═══ --}}
<section class="section section-white">
    <div class="container">
        <div class="services-detail-grid">

            <div class="service-detail-card animate-on-scroll">
                <div class="sdc-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                        <path d="M12 18h.01"/>
                    </svg>
                </div>
                <div class="sdc-content">
                    <h3>Penggantian LCD Screen</h3>
                    <p>Penggantian panel LCD lengkap dengan layar OEM A+ Grade atau Original. Hasil jernih, warna akurat, dan touchscreen responsif seperti baru.</p>
                    <ul class="sdc-features">
                        <li>LCD Original & OEM A+ Grade</li>
                        <li>Garansi hingga 6 bulan</li>
                        <li>Selesai dalam 30 menit</li>
                        <li>Support semua merek</li>
                    </ul>
                    <span class="sdc-price">Mulai dari Rp 200.000</span>
                </div>
            </div>

            <div class="service-detail-card animate-on-scroll">
                <div class="sdc-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                        <polyline points="15 3 21 3 21 9"/>
                        <line x1="10" y1="14" x2="21" y2="3"/>
                    </svg>
                </div>
                <div class="sdc-content">
                    <h3>Perbaikan Touch Digitizer</h3>
                    <p>Mengatasi masalah touch tidak responsif, ghost touch, dan digitizer error. Penggantian digitizer terintegrasi untuk responsivitas optimal.</p>
                    <ul class="sdc-features">
                        <li>Fix ghost touch & dead zone</li>
                        <li>Kalibrasi touch precision</li>
                        <li>Test multi-touch setelah perbaikan</li>
                        <li>Garansi fungsi touch</li>
                    </ul>
                    <span class="sdc-price">Mulai dari Rp 150.000</span>
                </div>
            </div>

            <div class="service-detail-card animate-on-scroll">
                <div class="sdc-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <div class="sdc-content">
                    <h3>Ganti Kaca Depan (Glass Only)</h3>
                    <p>Kaca retak tapi LCD masih berfungsi normal? Kami bisa ganti hanya kaca luarnya saja tanpa mengganti keseluruhan LCD. Lebih hemat!</p>
                    <ul class="sdc-features">
                        <li>Hemat biaya hingga 50%</li>
                        <li>Kaca OCA grade premium</li>
                        <li>Proses laminating presisi</li>
                        <li>Hasil mulus tanpa bubble</li>
                    </ul>
                    <span class="sdc-price">Mulai dari Rp 100.000</span>
                </div>
            </div>

            <div class="service-detail-card animate-on-scroll">
                <div class="sdc-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="5"/>
                        <line x1="12" y1="1" x2="12" y2="3"/>
                        <line x1="12" y1="21" x2="12" y2="23"/>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                        <line x1="1" y1="12" x2="3" y2="12"/>
                        <line x1="21" y1="12" x2="23" y2="12"/>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                    </svg>
                </div>
                <div class="sdc-content">
                    <h3>Perbaikan Backlight</h3>
                    <p>Layar redup, berkedip, atau tidak menyala tapi HP masih hidup? Kemungkinan masalah pada komponen backlight yang bisa diperbaiki.</p>
                    <ul class="sdc-features">
                        <li>Diagnosa IC backlight</li>
                        <li>Penggantian LED backlight</li>
                        <li>Repair kabel flex</li>
                        <li>Solusi tanpa ganti LCD penuh</li>
                    </ul>
                    <span class="sdc-price">Mulai dari Rp 150.000</span>
                </div>
            </div>

            <div class="service-detail-card animate-on-scroll">
                <div class="sdc-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <circle cx="12" cy="12" r="1"/>
                    </svg>
                </div>
                <div class="sdc-content">
                    <h3>Dead Pixel Fix</h3>
                    <p>Titik-titik mati atau stuck pixel di layar? Kami bisa diagnosa apakah perlu kalibrasi software atau penggantian panel LCD.</p>
                    <ul class="sdc-features">
                        <li>Kalibrasi pixel advanced</li>
                        <li>Penggantian panel jika perlu</li>
                        <li>Test full screen uniformity</li>
                        <li>Garansi hasil perbaikan</li>
                    </ul>
                    <span class="sdc-price">Mulai dari Rp 100.000</span>
                </div>
            </div>

            <div class="service-detail-card animate-on-scroll">
                <div class="sdc-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="1" y="6" width="22" height="12" rx="2"/>
                        <line x1="23" y1="13" x2="23" y2="11"/>
                        <path d="M6 10h4M6 14h2"/>
                    </svg>
                </div>
                <div class="sdc-content">
                    <h3>Paket LCD + Baterai</h3>
                    <p>Kombinasikan ganti LCD dengan penggantian baterai untuk refresh total device Anda. Dapatkan harga paket yang lebih hemat!</p>
                    <ul class="sdc-features">
                        <li>Bundle hemat LCD + baterai</li>
                        <li>Baterai original capacity</li>
                        <li>Device seperti baru</li>
                        <li>Diskon paket hingga 15%</li>
                    </ul>
                    <span class="sdc-price">Paket mulai Rp 350.000</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══ BRANDS ═══ --}}
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Support</span>
            <h2 class="section-title">Merek yang Kami <span class="text-accent">Support</span></h2>
            <p class="section-subtitle">Kami menangani hampir semua merek smartphone populer di Indonesia.</p>
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
                <h2>Butuh Service <span class="text-accent">LCD?</span></h2>
                <p>Konsultasi gratis dan dapatkan estimasi harga langsung via WhatsApp.</p>
                <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20tanya%20harga%20service%20LCD" class="btn btn-primary btn-lg" target="_blank" rel="noopener">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 0 0 .612.616l4.529-1.459A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.67-6.309-1.823l-.452-.273-2.682.864.882-2.631-.298-.474A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                    Tanya Harga via WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
