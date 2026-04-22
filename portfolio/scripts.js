// Smooth Scrolling for Nav Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Simple Scroll Animation Effect
window.addEventListener('scroll', () => {
    const cards = document.querySelectorAll('.project-card');
    const triggerBottom = window.innerHeight / 5 * 4;

    cards.forEach(card => {
        const cardTop = card.getBoundingClientRect().top;

        if(cardTop < triggerBottom) {
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
        }
    });
});

console.log("Portfolio loaded successfully!");