import { Link } from 'react-router-dom'
import { useScrollReveal, useAnimatedCounter, useCardTilt } from '../hooks/useAnimations'
import { articles } from '../data/articles'
import { formatDate } from '../hooks/useAnimations'

function StatItem({ target, suffix, label }) {
  const ref = useAnimatedCounter(target)
  return (
    <div className="stat-item">
      <span className="stat-number" ref={ref}>0</span>
      <span className="stat-suffix">{suffix}</span>
      <span className="stat-label">{label}</span>
    </div>
  )
}

export default function Home() {
  const revealRef = useScrollReveal()
  const tilt = useCardTilt()

  const flowSteps = [
    { num: '01', icon: '📱', title: 'Serahkan Device', desc: 'Walk-in ke toko atau booking online. Jelaskan masalah layar Anda.' },
    { num: '02', icon: '🔍', title: 'Diagnosis Gratis', desc: 'Pengecekan 15 menit oleh teknisi. Estimasi harga transparan.' },
    { num: '03', icon: '🔧', title: 'Proses Perbaikan', desc: 'Pengerjaan 30-60 menit dengan sparepart OEM/Original.' },
    { num: '04', icon: '✅', title: 'Quality Check', desc: '12 poin pengecekan kualitas. Kartu garansi resmi diberikan.' },
  ]

  const values = [
    { icon: '🛡️', title: 'Garansi Resmi', desc: 'Garansi hingga 6 bulan untuk setiap penggantian LCD. Kami bertanggung jawab penuh.', tag: 'Terjamin' },
    { icon: '⚡', title: 'Proses Cepat', desc: 'Rata-rata pengerjaan hanya 30 menit. Ditangani oleh teknisi bersertifikat.', tag: 'Efisien' },
    { icon: '💎', title: 'Sparepart Original', desc: 'Hanya menggunakan LCD Original atau OEM A+ Grade. Tidak ada sparepart KW.', tag: 'Premium' },
    { icon: '💰', title: 'Harga Transparan', desc: 'Estimasi harga di awal, tanpa biaya tersembunyi. Bayar sesuai kesepakatan.', tag: 'Jujur' },
    { icon: '🏆', title: 'Teknisi Berpengalaman', desc: '5+ tahun pengalaman menangani puluhan ribu device dari berbagai merek.', tag: 'Expert' },
    { icon: '📋', title: 'Diagnosis Gratis', desc: 'Pengecekan awal tanpa biaya. Anda berhak menolak tanpa kewajiban apapun.', tag: 'No Risk' },
  ]

  const services = [
    { icon: '📱', title: 'Ganti LCD', desc: 'Penggantian panel LCD dengan sparepart original.' },
    { icon: '👆', title: 'Perbaikan Touchscreen', desc: 'Layar sentuh tidak responsif? Kami perbaiki.' },
    { icon: '🔲', title: 'Ganti Kaca Depan', desc: 'Kaca retak tanpa kerusakan LCD di bawahnya.' },
    { icon: '💡', title: 'Perbaikan Backlight', desc: 'Layar gelap atau redup? Cek backlight-nya.' },
  ]

  return (
    <div ref={revealRef}>
      {/* HERO */}
      <section className="hero">
        <div className="hero-shapes">
          <div className="shape shape-1"></div>
          <div className="shape shape-2"></div>
          <div className="shape shape-3"></div>
        </div>
        <div className="container">
          <div className="hero-content">
            <div className="hero-text">
              <div className="hero-badge">
                <span className="badge-dot"></span>
                #1 Trusted LCD Repair Service
              </div>
              <h1 className="hero-title">
                Restorasi <span className="text-accent">Layar</span> Smartphone Anda dengan Sempurna
              </h1>
              <p className="hero-subtitle">
                Perbaikan LCD profesional dengan sparepart original. Proses cepat, harga transparan, bergaransi resmi hingga 6 bulan.
              </p>
              <div className="hero-actions">
                <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20konsultasi%20service%20LCD" className="btn btn-primary btn-lg" target="_blank" rel="noopener noreferrer">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12 0 14.625.846 17.059 2.284 19.034L.789 23.492a.5.5 0 0 0 .612.616l4.529-1.459A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.67-6.309-1.823l-.452-.273-2.682.864.882-2.631-.298-.474A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                  Konsultasi Gratis
                </a>
                <Link to="/how-it-works" className="btn btn-outline">
                  Lihat Prosesnya →
                </Link>
              </div>
            </div>
            <div className="hero-visual">
              <div className="phone-showcase">
                <div className="phone-frame">
                  <div className="phone-screen">
                    <div className="screen-content">
                      <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#f5a623" strokeWidth="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                      <span>LCD Restored ✓</span>
                    </div>
                  </div>
                </div>
                <div className="phone-glow"></div>
              </div>
            </div>
          </div>

          {/* Stats */}
          <div className="stats-bar">
            <div className="stats-container">
              <StatItem target={15000} suffix="+" label="Device Diperbaiki" />
              <div className="stat-divider"></div>
              <StatItem target={98} suffix="%" label="Tingkat Kepuasan" />
              <div className="stat-divider"></div>
              <StatItem target={30} suffix=" min" label="Rata-rata Waktu" />
              <div className="stat-divider"></div>
              <StatItem target={6} suffix=" bln" label="Garansi Resmi" />
            </div>
          </div>
        </div>
      </section>

      {/* FLOW */}
      <section className="section section-light">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">Proses</span>
            <h2 className="section-title">Bagaimana <span className="text-accent">Cara Kerjanya?</span></h2>
            <p className="section-subtitle">Empat langkah mudah menuju layar smartphone yang sempurna kembali.</p>
          </div>
          <div className="flow-grid">
            {flowSteps.map((step) => (
              <div key={step.num} className="flow-card animate-on-scroll" {...tilt}>
                <div className="flow-number">{step.num}</div>
                <div className="flow-icon"><span style={{ fontSize: '1.6rem' }}>{step.icon}</span></div>
                <h3>{step.title}</h3>
                <p>{step.desc}</p>
              </div>
            ))}
          </div>
          <div className="section-cta">
            <Link to="/how-it-works" className="btn btn-outline">Detail Lengkap →</Link>
          </div>
        </div>
      </section>

      {/* VALUES */}
      <section className="section section-white">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">Keunggulan</span>
            <h2 className="section-title">Mengapa Memilih <span className="text-accent">RLB?</span></h2>
            <p className="section-subtitle">Komitmen kami terhadap kualitas dan kepuasan pelanggan.</p>
          </div>
          <div className="values-grid">
            {values.map((v) => (
              <div key={v.title} className="value-card animate-on-scroll" {...tilt}>
                <div className="value-icon"><span style={{ fontSize: '1.4rem' }}>{v.icon}</span></div>
                <h3>{v.title}</h3>
                <p>{v.desc}</p>
                <div className="value-tag"><span className="tag-dot"></span>{v.tag}</div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* SERVICES PREVIEW */}
      <section className="section section-light">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">Layanan</span>
            <h2 className="section-title">Layanan <span className="text-accent">Kami</span></h2>
            <p className="section-subtitle">Solusi lengkap untuk setiap masalah layar smartphone Anda.</p>
          </div>
          <div className="services-grid-home">
            {services.map((s) => (
              <div key={s.title} className="service-card-home animate-on-scroll">
                <div className="service-icon-home">{s.icon}</div>
                <h3>{s.title}</h3>
                <p>{s.desc}</p>
              </div>
            ))}
          </div>
          <div className="section-cta">
            <Link to="/services" className="btn btn-primary">Semua Layanan →</Link>
          </div>
        </div>
      </section>

      {/* ARTICLES PREVIEW */}
      <section className="section section-white">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">Blog</span>
            <h2 className="section-title">Artikel <span className="text-accent">Terbaru</span></h2>
            <p className="section-subtitle">Tips, edukasi, dan info terkini seputar layar smartphone.</p>
          </div>
          <div className="articles-grid">
            {articles.slice(0, 3).map((a) => (
              <Link key={a.slug} to={`/articles/${a.slug}`} className="article-card animate-on-scroll">
                <div className="article-img">
                  <div className="article-img-placeholder">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                  </div>
                  <span className="article-category">{a.category}</span>
                </div>
                <div className="article-body">
                  <span className="article-date">{formatDate(a.date)}</span>
                  <h3>{a.title}</h3>
                  <p>{a.excerpt}</p>
                  <span className="article-read-more">Baca Selengkapnya →</span>
                </div>
              </Link>
            ))}
          </div>
          <div className="section-cta">
            <Link to="/articles" className="btn btn-outline">Semua Artikel →</Link>
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="cta-section">
        <div className="container">
          <div className="cta-card">
            <div className="cta-content">
              <h2>Layar HP Rusak? <span className="text-accent">Jangan Tunda!</span></h2>
              <p>Semakin cepat ditangani, semakin kecil biayanya. Konsultasi gratis sekarang.</p>
              <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20service%20LCD%20HP" className="btn btn-primary btn-lg" target="_blank" rel="noopener noreferrer">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 0 0 .612.616l4.529-1.459A11.944 11.944 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.67-6.309-1.823l-.452-.273-2.682.864.882-2.631-.298-.474A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                WhatsApp Sekarang
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}
