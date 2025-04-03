// navbar dropdowns
document.addEventListener('DOMContentLoaded', function() {

    const dropdownButtons = document.querySelectorAll('[data-dropdown]');
    
    dropdownButtons.forEach(button => {
        const dropdownId = button.getAttribute('data-dropdown');
        const dropdown = document.getElementById(dropdownId);
        
        button.addEventListener('mouseenter', () => {
            dropdown.classList.add('dropdown-visible');
            dropdown.style.opacity = '1';
            dropdown.style.visibility = 'visible';
            button.classList.add('dropdown-active');
        });
        
        button.addEventListener('mouseleave', () => {
            setTimeout(() => {
                if (!dropdown.matches(':hover')) {
                    dropdown.classList.remove('dropdown-visible');
                    dropdown.style.opacity = '0';
                    dropdown.style.visibility = 'hidden';
                    button.classList.remove('dropdown-active');
                }
            }, 100);
        });
        
        dropdown.addEventListener('mouseleave', () => {
            dropdown.classList.remove('dropdown-visible');
            dropdown.style.opacity = '0';
            dropdown.style.visibility = 'hidden';
            button.classList.remove('dropdown-active');
        });
    });
    
    // Mobile menu
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenuButton.addEventListener('click', () => {
        mobileMenuButton.classList.toggle('active');
        mobileMenu.classList.toggle('active');
    });
    
    // Mobile dropdowns
    const mobileDropdownButtons = [
        document.getElementById('mobile-engagement-button'),
        document.getElementById('mobile-resources-button'),
        document.getElementById('mobile-products-button')
    ];
    
    const mobileDropdowns = [
        document.getElementById('mobile-engagement-dropdown'),
        document.getElementById('mobile-resources-dropdown'),
        document.getElementById('mobile-products-dropdown')
    ];
    
    const mobileIcons = [
        document.getElementById('mobile-engagement-icon'),
        document.getElementById('mobile-resources-icon'),
        document.getElementById('mobile-products-icon')
    ];
    
    mobileDropdownButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            mobileDropdowns[index].classList.toggle('hidden');
            mobileIcons[index].classList.toggle('transform');
            mobileIcons[index].classList.toggle('rotate-180');
        });
    });
});




// services modal 
const addServiceBtn = document.getElementById('addPost');
const modal = document.getElementById('addServiceModal');
 function openModal() {
        modal.classList.remove('hidden');
        setTimeout(() => {
            modalOverlay.classList.add('active');
            modalContainer.classList.add('active');
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    

    function closeModalFunc() {
        modalOverlay.classList.remove('active');
        modalContainer.classList.remove('active');
        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }, 300);
    }

