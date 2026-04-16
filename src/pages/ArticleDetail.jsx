import { useParams, Link } from 'react-router-dom'
import { articles } from '../data/articles'
import { formatDate } from '../hooks/useAnimations'

export default function ArticleDetail() {
  const { slug } = useParams()
  const article = articles.find((a) => a.slug === slug)
  const otherArticles = articles.filter((a) => a.slug !== slug).slice(0, 3)

  if (!article) {
    return (
      <div style={{ padding: '200px 20px', textAlign: 'center' }}>
        <h1>Artikel tidak ditemukan</h1>
        <Link to="/articles" className="btn btn-primary" style={{ marginTop: '20px' }}>Kembali ke Artikel</Link>
      </div>
    )
  }

  return (
    <div>
      <section className="article-hero">
        <div className="container">
          <Link to="/articles" className="back-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Kembali ke Artikel
          </Link>
          <span className="article-category-badge">{article.category}</span>
          <h1>{article.title}</h1>
          <div className="article-meta">
            <span>{formatDate(article.date)}</span>
            <span>•</span>
            <span>{article.author}</span>
          </div>
        </div>
      </section>

      <section className="section section-white">
        <div className="container">
          <div className="article-layout">
            <article className="article-content" dangerouslySetInnerHTML={{ __html: article.content }} />

            <aside className="article-sidebar">
              <div className="sidebar-card">
                <h4>Butuh Service LCD?</h4>
                <p>Konsultasi gratis dan dapatkan estimasi harga via WhatsApp.</p>
                <a href="https://wa.me/6281234567890?text=Halo%20RLB%2C%20saya%20ingin%20konsultasi%20service%20LCD" className="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Chat WhatsApp</a>
              </div>

              {otherArticles.length > 0 && (
                <div className="sidebar-card">
                  <h4>Artikel Lainnya</h4>
                  <div className="sidebar-articles">
                    {otherArticles.map((other) => (
                      <Link key={other.slug} to={`/articles/${other.slug}`} className="sidebar-article">
                        <span className="sa-category">{other.category}</span>
                        <h5>{other.title}</h5>
                      </Link>
                    ))}
                  </div>
                </div>
              )}
            </aside>
          </div>
        </div>
      </section>
    </div>
  )
}
