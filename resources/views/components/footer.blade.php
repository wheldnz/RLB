<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="logo">
                    <span class="logo-icon">
                        <svg width="28" height="28" viewBox="0 0 40 40" fill="none">
                            <rect x="8" y="4" width="24" height="32" rx="4" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <path d="M16 30h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M14 12l5 5-5 5" stroke="#f5a623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21 22h6" stroke="#f5a623" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </span>
                    <span class="logo-text">R<span class="accent">LB</span></span>
                </a>
                <p class="footer-desc">Restorasi Layar Bersama — Solusi terpercaya untuk perbaikan LCD smartphone. Sparepart original, teknisi bersertifikat, garansi resmi.</p>
            </div>

            <div class="footer-links-group">
                <h4>Menu</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('how-it-works') }}">How It Works</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('articles') }}">Articles</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="footer-links-group">
                <h4>Layanan</h4>
                <ul>
                    <li><a href="{{ route('services') }}">Ganti LCD</a></li>
                    <li><a href="{{ route('services') }}">Perbaikan Touchscreen</a></li>
                    <li><a href="{{ route('services') }}">Ganti Kaca Depan</a></li>
                    <li><a href="{{ route('services') }}">Perbaikan Backlight</a></li>
                    <li><a href="{{ route('services') }}">Dead Pixel Fix</a></li>
                </ul>
            </div>

            <div class="footer-links-group">
                <h4>Kontak</h4>
                <ul>
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Jl. Raya Service No. 123, Jakarta
                    </li>
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        +62 812-3456-7890
                    </li>
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        Senin – Sabtu: 09:00 – 21:00
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Restorasi Layar Bersama. All rights reserved.</p>
        </div>
    </div>
</footer>
