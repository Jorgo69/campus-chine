import './bootstrap';

// ========================================
// SCROLL ANIMATIONS WITH INTERSECTION OBSERVER
// Pure JS approach - no Alpine dependency
// ========================================
document.addEventListener('DOMContentLoaded', () => {
    
    // Intersection Observer for scroll animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('scroll-visible');
                entry.target.classList.remove('scroll-hidden', 'scroll-hidden-left', 'scroll-hidden-right', 'scroll-hidden-scale');
                observer.unobserve(entry.target);
            }
        });
    };

    const scrollObserver = new IntersectionObserver(observerCallback, observerOptions);

    // Observe all elements with scroll animation classes
    document.querySelectorAll('.scroll-hidden, .scroll-hidden-left, .scroll-hidden-right, .scroll-hidden-scale').forEach(el => {
        scrollObserver.observe(el);
    });

    // ========================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ========================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
