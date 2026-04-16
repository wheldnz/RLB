/* ═══════════════════════════════════════════
   RLB — Interactive Script
   ═══════════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', () => {

    // ─── Navbar Scroll Effect ────────────────────
    const navbar = document.getElementById('navbar');

    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // ─── Hamburger Menu ──────────────────────────
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    }

    // ─── Animated Counter ────────────────────────
    const statNumbers = document.querySelectorAll('.stat-number[data-target]');
    let countersStarted = false;

    function animateCounters() {
        statNumbers.forEach(num => {
            const target = +num.getAttribute('data-target');
            const duration = 2000;
            const start = performance.now();

            function updateCounter(currentTime) {
                const elapsed = currentTime - start;
                const progress = Math.min(elapsed / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                const current = Math.floor(eased * target);

                num.textContent = current.toLocaleString('id-ID');

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    num.textContent = target.toLocaleString('id-ID');
                }
            }

            requestAnimationFrame(updateCounter);
        });
    }

    // ─── Intersection Observer for Animations ────
    const observerOptions = {
        threshold: 0.12,
        rootMargin: '0px 0px -40px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Stagger within parent
                const parent = entry.target.parentElement;
                if (parent) {
                    const siblings = Array.from(parent.children).filter(c => c.classList.contains('animate-on-scroll'));
                    const index = siblings.indexOf(entry.target);
                    entry.target.style.transitionDelay = `${index * 0.08}s`;
                }

                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

    // Counter observer
    const statsSection = document.querySelector('.stats-container');
    if (statsSection) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !countersStarted) {
                    countersStarted = true;
                    animateCounters();
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });

        counterObserver.observe(statsSection);
    }

    // ─── Card Hover Tilt ─────────────────────────
    const tiltCards = document.querySelectorAll('.value-card, .flow-card, .service-detail-card');

    tiltCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = ((y - centerY) / centerY) * -3;
            const rotateY = ((x - centerX) / centerX) * 3;

            card.style.transform = `perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
        });
    });

    // ─── Smooth Page Transitions ──────────────────
    document.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');

            // Skip external links, anchors, WhatsApp, tel, and new-tab links
            if (!href ||
                href.startsWith('#') ||
                href.startsWith('http') ||
                href.startsWith('tel:') ||
                href.startsWith('javascript:') ||
                link.getAttribute('target') === '_blank') {
                return;
            }

            e.preventDefault();
            const main = document.querySelector('main');
            if (main) {
                main.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
                main.style.opacity = '0';
                main.style.transform = 'translateY(-8px)';
            }

            setTimeout(() => {
                window.location.href = href;
            }, 250);
        });
    });

});

// ─── FAQ Toggle (global function) ────────────
function toggleFaq(btn) {
    const faqItem = btn.closest('.faq-item');
    const isOpen = faqItem.classList.contains('open');

    // Close all
    document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('open');
    });

    // Open clicked (if wasn't open)
    if (!isOpen) {
        faqItem.classList.add('open');
    }
}
