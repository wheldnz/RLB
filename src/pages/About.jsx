import { useScrollReveal, useCardTilt } from '../hooks/useAnimations'

export default function About() {
  const revealRef = useScrollReveal()
  const tilt = useCardTilt()

  const advantages = [
    { num: '01', title: 'Teknisi Bersertifikat', desc: 'Semua teknisi kami telah melewati pelatihan intensif dan memiliki sertifikasi resmi.' },
    { num: '02', title: 'Sparepart Terverifikasi', desc: 'Setiap komponen melewati quality check ketat sebelum dipasang di device Anda.' },
    { num: '03', title: 'Ruang Kerja Steril', desc: 'Area kerja bersih dan terkontrol untuk menghindari kontaminasi debu pada komponen.' },
    { num: '04', title: 'Peralatan Modern', desc: 'Menggunakan tools dan mesin separator LCD terbaru untuk presisi maksimal.' },
    { num: '05', title: 'Garansi Tertulis', desc: 'Setiap service dilengkapi kartu garansi resmi dengan durasi yang jelas.' },
    { num: '06', title: 'Konsultasi Gratis', desc: 'Diagnosis dan konsultasi tanpa biaya. Anda bebas memutuskan tanpa tekanan.' },
  ]

  const brands = ['Samsung', 'iPhone', 'Xiaomi', 'OPPO', 'Vivo', 'Realme', 'Huawei', 'OnePlus', 'POCO', 'Infinix']

  return (
    <div ref={revealRef}>
      {/* PAGE HERO */}
      <section className="page-hero">
        <div className="container">
          <span className="section-tag">Tentang Kami</span>
          <h1 className="page-hero-title">Restorasi Layar <span className="text-accent">Bersama</span></h1>
          <p className="page-hero-subtitle">Partner terpercaya Anda untuk perbaikan LCD smartphone sejak 2020.</p>
        </div>
      </section>

      {/* STORY */}
      <section className="section section-white">
        <div className="container">
          <div className="about-story">
            <div className="story-content">
              <h2 className="section-title">Cerita <span className="text-accent">Kami</span></h2>
              <p>Restorasi Layar Bersama (RLB) didirikan pada tahun 2020 dengan misi sederhana: memberikan layanan perbaikan LCD smartphone yang jujur, transparan, dan berkualitas tinggi.</p>
              <p>Frustasi dengan banyaknya service center yang menggunakan sparepart abal-abal dan memberikan harga tidak transparan, kami memutuskan untuk membangun alternatif yang lebih baik.</p>
              <p>Hari ini, RLB telah melayani lebih dari 15.000 device dari berbagai merek. Dengan tingkat kepuasan pelanggan 98%, kami terus berkomitmen menjadi pusat perbaikan LCD terpercaya di Indonesia.</p>
            </div>
            <div className="story-stats-card animate-on-scroll">
              <div className="mini-stat">
                <span className="mini-stat-number">15.000+</span>
                <span className="mini-stat-label">Device Diperbaiki</span>
              </div>
              <div className="mini-stat">
                <span className="mini-stat-number">98%</span>
                <span className="mini-stat-label">Kepuasan Pelanggan</span>
              </div>
              <div className="mini-stat">
                <span className="mini-stat-number">5+</span>
                <span className="mini-stat-label">Tahun Pengalaman</span>
              </div>
              <div className="mini-stat">
                <span className="mini-stat-number">10+</span>
                <span className="mini-stat-label">Merek Didukung</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* MISSION / VISION */}
      <section className="section section-light">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">Visi & Misi</span>
            <h2 className="section-title">Arah & <span className="text-accent">Tujuan</span></h2>
          </div>
          <div className="mission-grid">
            <div className="mission-card animate-on-scroll">
              <div className="mission-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
              </div>
              <h3>Visi</h3>
              <p>Menjadi pusat perbaikan LCD smartphone #1 di Indonesia yang dikenal karena kejujuran, kualitas, dan inovasi dalam memberikan pengalaman service terbaik bagi pelanggan.</p>
            </div>
            <div className="mission-card animate-on-scroll">
              <div className="mission-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <h3>Misi</h3>
              <p>Menghadirkan layanan perbaikan LCD yang transparan, terjangkau, dan bergaransi. Kami berkomitmen menggunakan sparepart berkualitas tinggi dan terus mengembangkan kemampuan teknisi kami.</p>
            </div>
          </div>
        </div>
      </section>

      {/* ADVANTAGES */}
      <section className="section section-white">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">Keunggulan</span>
            <h2 className="section-title">Mengapa <span className="text-accent">Kami Berbeda?</span></h2>
          </div>
          <div className="advantage-grid">
            {advantages.map((a) => (
              <div key={a.num} className="advantage-item animate-on-scroll" {...tilt}>
                <div className="advantage-num">{a.num}</div>
                <h4>{a.title}</h4>
                <p>{a.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* BRANDS */}
      <section className="section section-light">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">Merek</span>
            <h2 className="section-title">Merek yang Kami <span className="text-accent">Dukung</span></h2>
          </div>
          <div className="brands-grid">
            {brands.map((b) => (
              <div key={b} className="brand-item animate-on-scroll">{b}</div>
            ))}
          </div>
        </div>
      </section>
    </div>
  )
}
