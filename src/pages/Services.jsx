import { useScrollReveal, useCardTilt } from '../hooks/useAnimations'

export default function Services() {
  const revealRef = useScrollReveal()
  const tilt = useCardTilt()

  const services = [
    {
      icon: <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12" y2="18"/></svg>,
      title: 'Penggantian LCD Full Assembly',
      desc: 'Penggantian panel LCD beserta frame assembly secara keseluruhan. Cocok untuk kerusakan LCD total, layar pecah parah, atau touchscreen mati total.',
      features: ['LCD + Touch + Frame', 'Sparepart OEM A+ / Original', 'Garansi 6 bulan', 'Pengerjaan 30-60 menit'],
      price: 'Mulai Rp 200.000',
    },
    {
      icon: <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>,
      title: 'Perbaikan Touchscreen',
      desc: 'Layar sentuh tidak responsif di area tertentu, ghost touch, atau sentuhan tidak akurat? Kami bisa memperbaikinya tanpa harus ganti LCD.',
      features: ['Kalibrasi ulang digitizer', 'Penggantian flex cable', 'Tanpa ganti LCD', 'Garansi 3 bulan'],
      price: 'Mulai Rp 150.000',
    },
    {
      icon: <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>,
      title: 'Penggantian Kaca Depan',
      desc: 'Kaca depan smartphone retak tapi LCD di bawahnya masih baik? Kami bisa ganti kaca saja tanpa perlu mengganti seluruh LCD assembly.',
      features: ['Hanya ganti kaca', 'Teknik OCA lamination', 'Hemat biaya', 'Garansi 3 bulan'],
      price: 'Mulai Rp 100.000',
    },
    {
      icon: <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>,
      title: 'Perbaikan Backlight',
      desc: 'Layar gelap tetapi masih menyala samar? Masalah biasanya ada di komponen backlight atau IC backlight.',
      features: ['Diagnosis backlight IC', 'Penggantian LED strip', 'Soldering presisi', 'Garansi 3 bulan'],
      price: 'Mulai Rp 200.000',
    },
    {
      icon: <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>,
      title: 'Dead Pixel Repair',
      desc: 'Titik-titik mati (dead pixel) yang mengganggu tampilan layar? Kami menggunakan teknik profesional untuk mengatasinya.',
      features: ['Pixel massage technique', 'Stuck pixel software fix', 'Panel replacement jika perlu', 'Garansi 3 bulan'],
      price: 'Mulai Rp 100.000',
    },
    {
      icon: <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>,
      title: 'Layanan Garansi',
      desc: 'Klaim garansi untuk service sebelumnya? Bawa kartu garansi dan device Anda, kami akan menangani tanpa biaya tambahan.',
      features: ['Garansi resmi RLB', 'Tanpa biaya tambahan', 'Proses klaim mudah', 'Penanganan prioritas'],
      price: 'Gratis (dalam garansi)',
    },
  ]

  const brands = ['Samsung', 'iPhone', 'Xiaomi', 'OPPO', 'Vivo', 'Realme', 'Huawei', 'OnePlus', 'POCO', 'Infinix']

  return (
    <div ref={revealRef}>
      <section className="page-hero">
        <div className="container">
          <span className="section-tag">Layanan</span>
          <h1 className="page-hero-title">Layanan <span className="text-accent">Kami</span></h1>
          <p className="page-hero-subtitle">Solusi lengkap untuk setiap masalah layar smartphone Anda.</p>
        </div>
      </section>

      <section className="section section-white">
        <div className="container">
          <div className="services-detail-grid">
            {services.map((s) => (
              <div key={s.title} className="service-detail-card animate-on-scroll" {...tilt}>
                <div className="sdc-icon">{s.icon}</div>
                <div className="sdc-content">
                  <h3>{s.title}</h3>
                  <p>{s.desc}</p>
                  <ul className="sdc-features">
                    {s.features.map((f) => <li key={f}>{f}</li>)}
                  </ul>
                  <span className="sdc-price">{s.price}</span>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className="section section-light">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">Merek</span>
            <h2 className="section-title">Merek yang Kami <span className="text-accent">Dukung</span></h2>
            <p className="section-subtitle">Kami melayani hampir semua merek smartphone populer di Indonesia.</p>
          </div>
          <div className="brands-grid">
            {brands.map((b) => (
              <div key={b} className="brand-item animate-on-scroll">{b}</div>
            ))}
          </div>
        </div>
      </section>

      <section className="cta-section">
        <div className="container">
          <div className="cta-card">
            <div className="cta-content">
              <h2>Butuh Service? <span className="text-accent">Konsultasi Gratis!</span></h2>
              <p>Ceritakan masalah layar smartphone Anda dan dapatkan estimasi harga.</p>
              <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20service%20LCD%20HP" className="btn btn-primary btn-lg" target="_blank" rel="noopener noreferrer">WhatsApp Sekarang</a>
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}
