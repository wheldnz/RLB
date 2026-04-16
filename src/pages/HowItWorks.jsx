import { useState } from 'react'
import { useScrollReveal } from '../hooks/useAnimations'

export default function HowItWorks() {
  const revealRef = useScrollReveal()
  const [openFaq, setOpenFaq] = useState(null)

  const steps = [
    {
      num: '01', title: 'Serahkan Device Anda',
      desc: 'Kunjungi toko kami langsung atau hubungi via WhatsApp untuk booking. Jelaskan masalah layar smartphone Anda: retak, tidak responsif, bergaris, atau dead pixel.',
      tags: ['Walk-in', 'WhatsApp Booking', 'Pickup Service'],
      icon: <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12" y2="18"/></svg>,
    },
    {
      num: '02', title: 'Diagnosis Gratis 15 Menit',
      desc: 'Teknisi kami akan melakukan pemeriksaan menyeluruh terhadap device Anda. Kami akan menjelaskan masalah yang ditemukan dan memberikan estimasi harga yang transparan.',
      tags: ['Gratis', 'Transparan', '15 Menit'],
      icon: <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>,
    },
    {
      num: '03', title: 'Proses Perbaikan',
      desc: 'Setelah Anda setuju dengan estimasi, teknisi langsung mengerjakan perbaikan. Rata-rata waktu pengerjaan 30-60 menit tergantung tingkat kerusakan.',
      tags: ['30-60 Menit', 'OEM Parts', 'Certified Tech'],
      icon: <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>,
    },
    {
      num: '04', title: 'Quality Check & Serah Terima',
      desc: 'Setelah selesai, device melewati 12 poin quality check: warna layar, responsivitas touch, kecerahan, dead pixel scan, dan lainnya. Kartu garansi resmi diberikan.',
      tags: ['12-Point QC', 'Garansi', 'Kartu Garansi'],
      icon: <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>,
    },
  ]

  const faqs = [
    { q: 'Berapa lama waktu pengerjaan service LCD?', a: 'Rata-rata pengerjaan memakan waktu 30-60 menit tergantung tingkat kerusakan dan ketersediaan sparepart. Untuk kasus khusus seperti Samsung Galaxy Z Fold, bisa memakan waktu 1-2 jam.' },
    { q: 'Apakah data di HP saya aman selama service?', a: 'Ya, 100% aman. Proses penggantian LCD tidak mempengaruhi penyimpanan data sama sekali. Kami juga tidak memerlukan password/PIN device Anda selama proses service.' },
    { q: 'Apakah garansi berlaku jika LCD rusak karena jatuh lagi?', a: 'Garansi kami mencakup kerusakan yang terjadi bukan karena faktor eksternal (jatuh, terkena air, dll). Kerusakan akibat cacat produksi atau masalah pemasangan 100% ditanggung garansi.' },
    { q: 'Apa bedanya LCD Original dan KW?', a: 'LCD Original diproduksi oleh manufacturer resmi dengan kualitas warna, kecerahan, dan responsivitas terbaik. LCD KW memiliki kualitas rendah, warna pudar, dan umur pakai pendek. Di RLB, kami hanya menggunakan Original dan OEM A+ Grade.' },
    { q: 'Bagaimana jika saya tidak setuju dengan estimasi harga?', a: 'Tidak masalah sama sekali! Diagnosis kami gratis dan Anda tidak memiliki kewajiban untuk melanjutkan service. Anda bisa membawa pulang device tanpa dikenakan biaya apapun.' },
  ]

  return (
    <div ref={revealRef}>
      <section className="page-hero">
        <div className="container">
          <span className="section-tag">Proses</span>
          <h1 className="page-hero-title">Bagaimana Cara <span className="text-accent">Kerjanya?</span></h1>
          <p className="page-hero-subtitle">Empat langkah mudah dari LCD rusak menuju layar sempurna kembali.</p>
        </div>
      </section>

      {/* TIMELINE */}
      <section className="section section-white">
        <div className="container">
          <div className="timeline">
            {steps.map((step, i) => (
              <div key={step.num} className="timeline-step animate-on-scroll">
                <div className="timeline-connector">
                  <div className="timeline-dot">{step.num}</div>
                  {i < steps.length - 1 && <div className="timeline-line"></div>}
                </div>
                <div className="timeline-card">
                  <div className="timeline-icon">{step.icon}</div>
                  <h3>{step.title}</h3>
                  <p>{step.desc}</p>
                  <div className="timeline-tags">
                    {step.tags.map((t) => <span key={t} className="tag">{t}</span>)}
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* FAQ */}
      <section className="section section-light">
        <div className="container">
          <div className="section-header">
            <span className="section-tag">FAQ</span>
            <h2 className="section-title">Pertanyaan <span className="text-accent">Umum</span></h2>
          </div>
          <div className="faq-list">
            {faqs.map((faq, i) => (
              <div key={i} className={`faq-item${openFaq === i ? ' open' : ''}`}>
                <button className="faq-question" onClick={() => setOpenFaq(openFaq === i ? null : i)}>
                  {faq.q}
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div className="faq-answer"><p>{faq.a}</p></div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="cta-section">
        <div className="container">
          <div className="cta-card">
            <div className="cta-content">
              <h2>Siap Service? <span className="text-accent">Hubungi Kami!</span></h2>
              <p>Konsultasi gratis, diagnosa gratis, harga transparan.</p>
              <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20service%20LCD%20HP" className="btn btn-primary btn-lg" target="_blank" rel="noopener noreferrer">
                WhatsApp Sekarang
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}
