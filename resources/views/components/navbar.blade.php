<nav class="navbar" id="navbar">
    <div class="container nav-container">
        <a href="{{ route('home') }}" class="logo">
            <span class="logo-icon">
                <svg width="32" height="32" viewBox="0 0 40 40" fill="none">
                    <rect x="8" y="4" width="24" height="32" rx="4" stroke="currentColor" stroke-width="2.5" fill="none"/>
                    <path d="M16 30h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M14 12l5 5-5 5" stroke="#f5a623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 22h6" stroke="#f5a623" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
            </span>
            <span class="logo-text">R<span class="accent">LB</span></span>
        </a>

        <ul class="nav-links" id="navLinks">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('how-it-works') }}" class="{{ request()->routeIs('how-it-works') ? 'active' : '' }}">How It Works</a></li>
            <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
            <li><a href="{{ route('articles') }}" class="{{ request()->routeIs('articles*') ? 'active' : '' }}">Articles</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>

        <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20service%20LCD" class="nav-cta" target="_blank" rel="noopener">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 0 0 .612.616l4.529-1.459A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.67-6.309-1.823l-.452-.273-2.682.864.882-2.631-.298-.474A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
            WhatsApp
        </a>

        <button class="hamburger" id="hamburger" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>
