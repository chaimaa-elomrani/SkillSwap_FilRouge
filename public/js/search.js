const scrollDownBtn = document.getElementById('scroll-down-btn');
const servicesSection = document.getElementById('services');

scrollDownBtn.addEventListener('click', () => {
    servicesSection.scrollIntoView({ behavior: 'smooth' });
});


function revealOnScroll() {
    const reveals = document.querySelectorAll('.reveal');
    
    reveals.forEach(element => {
        const windowHeight = window.innerHeight;
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        
        if (elementTop < windowHeight - elementVisible) {
            element.classList.add('active');
        }
    });
}

window.addEventListener('scroll', revealOnScroll);
window.addEventListener('load', revealOnScroll);

// Search functionality
const searchInputs = document.querySelectorAll('input[placeholder*="Search"]');

searchInputs.forEach(input => {
    input.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            alert('Searching for: ' + input.value);
            // Here you would typically implement actual search functionality
        }
    });
});
