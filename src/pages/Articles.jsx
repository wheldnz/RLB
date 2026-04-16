import { Link } from 'react-router-dom'
import { useScrollReveal } from '../hooks/useAnimations'
import { articles } from '../data/articles'
import { formatDate } from '../hooks/useAnimations'

export default function Articles() {
  const revealRef = useScrollReveal()

  return (
    <div ref={revealRef}>
      <section className="page-hero">
        <div className="container">
          <span className="section-tag">Blog</span>
          <h1 className="page-hero-title">Artikel & <span className="text-accent">Tips</span></h1>
          <p className="page-hero-subtitle">Edukasi, tips perawatan, dan info terkini seputar layar smartphone.</p>
        </div>
      </section>

      <section className="section section-white">
        <div className="container">
          <div className="articles-list-grid">
            {articles.map((article) => (
              <Link key={article.slug} to={`/articles/${article.slug}`} className="article-card-list animate-on-scroll">
                <div className="acl-img">
                  <div className="article-img-placeholder">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                  </div>
                  <span className="article-category">{article.category}</span>
                </div>
                <div className="acl-body">
                  <div className="acl-meta">
                    <span className="article-date">{formatDate(article.date)}</span>
                    <span className="acl-author">• {article.author}</span>
                  </div>
                  <h2>{article.title}</h2>
                  <p>{article.excerpt}</p>
                  <span className="article-read-more">Baca Selengkapnya →</span>
                </div>
              </Link>
            ))}
          </div>
        </div>
      </section>
    </div>
  )
}
