import { useEffect, useRef, useCallback } from 'react'

// Scroll-reveal animation hook
export function useScrollReveal() {
  const ref = useRef(null)

  useEffect(() => {
    const el = ref.current
    if (!el) return

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const parent = entry.target.parentElement
            if (parent) {
              const siblings = Array.from(parent.children).filter((c) =>
                c.classList.contains('animate-on-scroll')
              )
              const index = siblings.indexOf(entry.target)
              entry.target.style.transitionDelay = `${index * 0.08}s`
            }
            entry.target.classList.add('visible')
            observer.unobserve(entry.target)
          }
        })
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    )

    // Observe all animate-on-scroll elements within the ref container
    const elements = el.querySelectorAll('.animate-on-scroll')
    elements.forEach((e) => observer.observe(e))

    return () => observer.disconnect()
  }, [])

  return ref
}

// Animated counter hook
export function useAnimatedCounter(target, duration = 2000) {
  const ref = useRef(null)
  const started = useRef(false)

  useEffect(() => {
    const el = ref.current
    if (!el) return

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !started.current) {
            started.current = true
            const start = performance.now()

            function update(currentTime) {
              const elapsed = currentTime - start
              const progress = Math.min(elapsed / duration, 1)
              const eased = 1 - Math.pow(1 - progress, 3)
              el.textContent = Math.floor(eased * target).toLocaleString('id-ID')
              if (progress < 1) {
                requestAnimationFrame(update)
              } else {
                el.textContent = target.toLocaleString('id-ID')
              }
            }

            requestAnimationFrame(update)
            observer.unobserve(el)
          }
        })
      },
      { threshold: 0.4 }
    )

    observer.observe(el)
    return () => observer.disconnect()
  }, [target, duration])

  return ref
}

// Card tilt effect hook
export function useCardTilt() {
  const handleMouseMove = useCallback((e) => {
    const card = e.currentTarget
    const rect = card.getBoundingClientRect()
    const x = e.clientX - rect.left
    const y = e.clientY - rect.top
    const centerX = rect.width / 2
    const centerY = rect.height / 2
    const rotateX = ((y - centerY) / centerY) * -3
    const rotateY = ((x - centerX) / centerX) * 3
    card.style.transform = `perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`
  }, [])

  const handleMouseLeave = useCallback((e) => {
    e.currentTarget.style.transform = ''
  }, [])

  return { onMouseMove: handleMouseMove, onMouseLeave: handleMouseLeave }
}

// Format date to Indonesian
export function formatDate(dateStr) {
  const months = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
  const d = new Date(dateStr)
  return `${d.getDate()} ${months[d.getMonth()]} ${d.getFullYear()}`
}
