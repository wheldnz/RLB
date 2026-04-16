@extends('layouts.app')

@section('title', 'Contact')
@section('meta_description', 'Hubungi Restorasi Layar Bersama (RLB) via WhatsApp untuk konsultasi gratis, booking service LCD, atau kunjungi toko kami.')

@section('content')

{{-- ═══ PAGE HERO ═══ --}}
<section class="page-hero">
    <div class="container">
        <span class="section-tag">Kontak</span>
        <h1 class="page-hero-title">Hubungi <span class="text-accent">Kami</span></h1>
        <p class="page-hero-subtitle">Konsultasi gratis via WhatsApp atau kunjungi langsung toko kami.</p>
    </div>
</section>

{{-- ═══ CONTACT INFO ═══ --}}
<section class="section section-white">
    <div class="container">
        <div class="contact-grid">
            {{-- Contact Cards --}}
            <div class="contact-cards">
                <div class="contact-card animate-on-scroll">
                    <div class="cc-icon cc-whatsapp">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 0 0 .612.616l4.529-1.459A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.67-6.309-1.823l-.452-.273-2.682.864.882-2.631-.298-.474A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                    </div>
                    <h3>WhatsApp</h3>
                    <p>Chat langsung dan dapatkan respons cepat dari tim kami.</p>
                    <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20konsultasi%20service%20LCD" class="btn btn-primary" target="_blank" rel="noopener">Chat Sekarang</a>
                </div>

                <div class="contact-card animate-on-scroll">
                    <div class="cc-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                    <h3>Telepon</h3>
                    <p>+62 812-3456-7890</p>
                    <a href="tel:+6281234567890" class="btn btn-outline">Hubungi</a>
                </div>

                <div class="contact-card animate-on-scroll">
                    <div class="cc-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <h3>Jam Operasional</h3>
                    <p>Senin – Sabtu: 09:00 – 21:00</p>
                    <p>Minggu: 10:00 – 18:00</p>
                </div>

                <div class="contact-card animate-on-scroll">
                    <div class="cc-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <h3>Alamat Toko</h3>
                    <p>Jl. Raya Service No. 123<br>Jakarta Selatan, 12345</p>
                </div>
            </div>

            {{-- Map --}}
            <div class="contact-map animate-on-scroll">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322!2d106.8195613!3d-6.194741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sJakarta!5e0!3m2!1sid!2sid!4v1234567890"
                        width="100%"
                        height="100%"
                        style="border:0; border-radius: 16px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
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
                <h2>Layar HP Rusak? <span class="text-accent">Jangan Tunda!</span></h2>
                <p>Semakin cepat ditangani, semakin kecil biayanya. Hubungi kami sekarang.</p>
                <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20service%20LCD%20HP" class="btn btn-primary btn-lg" target="_blank" rel="noopener">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 0 0 .612.616l4.529-1.459A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.67-6.309-1.823l-.452-.273-2.682.864.882-2.631-.298-.474A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                    WhatsApp Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
