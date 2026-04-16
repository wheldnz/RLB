@extends('layouts.app')

@section('title', 'How It Works')
@section('meta_description', 'Pelajari proses perbaikan LCD smartphone di RLB. Dari diagnosis gratis hingga quality check — semua transparan dan cepat.')

@section('content')

{{-- ═══ PAGE HERO ═══ --}}
<section class="page-hero">
    <div class="container">
        <span class="section-tag">Proses</span>
        <h1 class="page-hero-title">Bagaimana Cara <span class="text-accent">Kerjanya?</span></h1>
        <p class="page-hero-subtitle">Proses simpel, transparan, dan tanpa ribet. Device Anda di tangan ahli dari awal sampai akhir.</p>
    </div>
</section>

{{-- ═══ TIMELINE ═══ --}}
<section class="section section-white">
    <div class="container">
        <div class="timeline">
            {{-- Step 1 --}}
            <div class="timeline-step animate-on-scroll">
                <div class="timeline-connector">
                    <div class="timeline-dot">01</div>
                    <div class="timeline-line"></div>
                </div>
                <div class="timeline-card">
                    <div class="timeline-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                            <path d="M12 18h.01"/>
                            <path d="M8 6h8M8 10h5"/>
                        </svg>
                    </div>
                    <h3>Bawa atau Book Online</h3>
                    <p>Datang langsung ke toko kami atau booking online via WhatsApp. Ceritakan masalah pada layar HP Anda — layar retak, dead pixel, touch tidak responsif, atau masalah LCD lainnya. Kami menangani semua merk smartphone.</p>
                    <div class="timeline-tags">
                        <span class="tag">Walk-in</span>
                        <span class="tag">Online Booking</span>
                        <span class="tag">Semua Merk</span>
                    </div>
                </div>
            </div>

            {{-- Step 2 --}}
            <div class="timeline-step animate-on-scroll">
                <div class="timeline-connector">
                    <div class="timeline-dot">02</div>
                    <div class="timeline-line"></div>
                </div>
                <div class="timeline-card">
                    <div class="timeline-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                            <path d="M11 8v6M8 11h6"/>
                        </svg>
                    </div>
                    <h3>Diagnosis Gratis (15 Menit)</h3>
                    <p>Teknisi bersertifikat kami melakukan pemeriksaan menyeluruh dalam waktu 15 menit. Kami identifikasi masalah yang tepat dan memberikan estimasi harga di depan — tanpa biaya diagnosis, tanpa kejutan.</p>
                    <div class="timeline-tags">
                        <span class="tag">15 Menit Cek</span>
                        <span class="tag">Estimasi Gratis</span>
                        <span class="tag">No Hidden Fees</span>
                    </div>
                </div>
            </div>

            {{-- Step 3 --}}
            <div class="timeline-step animate-on-scroll">
                <div class="timeline-connector">
                    <div class="timeline-dot">03</div>
                    <div class="timeline-line"></div>
                </div>
                <div class="timeline-card">
                    <div class="timeline-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                    <h3>Proses Perbaikan Ahli (~30 Menit)</h3>
                    <p>Menggunakan sparepart OEM A+ Grade atau Original dan alat presisi, spesialis kami mengganti atau memperbaiki layar LCD Anda. Kebanyakan perbaikan selesai dalam waktu kurang dari 30 menit.</p>
                    <div class="timeline-tags">
                        <span class="tag">Sparepart OEM</span>
                        <span class="tag">30 Menit</span>
                        <span class="tag">Teknisi Sertifikat</span>
                    </div>
                </div>
            </div>

            {{-- Step 4 --}}
            <div class="timeline-step animate-on-scroll">
                <div class="timeline-connector">
                    <div class="timeline-dot">04</div>
                </div>
                <div class="timeline-card">
                    <div class="timeline-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </div>
                    <h3>Quality Check & Ambil Device</h3>
                    <p>Setiap perbaikan melalui 12-point quality check yang ketat — tes display, sensitivitas touch, kalibrasi warna, dan lainnya. Ambil device Anda yang sudah seperti baru, dilengkapi kartu garansi resmi.</p>
                    <div class="timeline-tags">
                        <span class="tag">12-Point QC</span>
                        <span class="tag">Kartu Garansi</span>
                        <span class="tag">Seperti Baru</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ FAQ ═══ --}}
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">FAQ</span>
            <h2 class="section-title">Pertanyaan yang Sering <span class="text-accent">Ditanyakan</span></h2>
        </div>

        <div class="faq-list">
            <div class="faq-item animate-on-scroll">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Berapa lama proses perbaikan LCD?</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </button>
                <div class="faq-answer">
                    <p>Kebanyakan penggantian LCD selesai dalam 30 menit. Untuk kasus yang lebih rumit (seperti perbaikan connector atau backlight), bisa memakan waktu 1-2 jam. Kami akan memberitahu estimasi waktu saat diagnosis.</p>
                </div>
            </div>
            <div class="faq-item animate-on-scroll">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Apakah data di HP saya aman?</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </button>
                <div class="faq-answer">
                    <p>100% aman. Proses penggantian LCD tidak mempengaruhi data, penyimpanan, atau software HP Anda. Semua data, foto, aplikasi, dan pengaturan tetap utuh.</p>
                </div>
            </div>
            <div class="faq-item animate-on-scroll">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Apa bedanya LCD Original dan OEM?</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </button>
                <div class="faq-answer">
                    <p>LCD Original 100% sama dengan pabrik. LCD OEM A+ Grade diproduksi oleh pabrik pihak ketiga dengan standar mendekati original (85-95% kualitas) dengan harga lebih terjangkau. Keduanya berkualitas tinggi dan kami tidak pernah menggunakan LCD KW.</p>
                </div>
            </div>
            <div class="faq-item animate-on-scroll">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Bagaimana garansinya?</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </button>
                <div class="faq-answer">
                    <p>Setiap perbaikan dilengkapi garansi resmi hingga 6 bulan. Garansi mencakup kerusakan sparepart yang kami ganti (dead pixel, backlight, touch malfunction). Garansi tidak berlaku untuk kerusakan fisik baru (jatuh, terkena air).</p>
                </div>
            </div>
            <div class="faq-item animate-on-scroll">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Apakah bisa ditunggu?</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </button>
                <div class="faq-answer">
                    <p>Tentu! Kami menyediakan ruang tunggu yang nyaman. Kebanyakan perbaikan LCD selesai dalam 30 menit sehingga bisa langsung ditunggu. Kami juga menyediakan charger dan WiFi gratis di ruang tunggu.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ CTA ═══ --}}
<section class="cta-section">
    <div class="container">
        <div class="cta-card">
            <div class="cta-content">
                <h2>Siap Untuk <span class="text-accent">Service?</span></h2>
                <p>Hubungi kami via WhatsApp untuk booking jadwal atau langsung Walk-in.</p>
                <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20booking%20service%20LCD" class="btn btn-primary btn-lg" target="_blank" rel="noopener">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 0 0 .612.616l4.529-1.459A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.67-6.309-1.823l-.452-.273-2.682.864.882-2.631-.298-.474A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                    Booking via WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
