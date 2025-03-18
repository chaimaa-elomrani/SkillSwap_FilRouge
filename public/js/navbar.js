
document.addEventListener('DOMContentLoaded', function() {
    // Desktop dropdown functionality
    const navItems = document.querySelectorAll('.nav-item');
    const dropdowns = document.querySelectorAll('.dropdown-menu');
    
    // Function to show dropdown
    function showDropdown(dropdown) {
        dropdown.classList.add('opacity-100', 'visible');
        dropdown.classList.add('dropdown-visible');
        dropdown.classList.remove('opacity-0', 'invisible');
        
        // Add active class to parent button
        const parentButton = dropdown.previousElementSibling;
        if (parentButton) {
            parentButton.setAttribute('aria-expanded', 'true');
            parentButton.closest('.nav-item').classList.add('dropdown-active');
        }
    }
    
    // Function to hide dropdown
    function hideDropdown(dropdown) {
        dropdown.classList.remove('opacity-100', 'visible');
        dropdown.classList.remove('dropdown-visible');
        dropdown.classList.add('opacity-0', 'invisible');
        
        // Remove active class from parent button
        const parentButton = dropdown.previousElementSibling;
        if (parentButton) {
            parentButton.setAttribute('aria-expanded', 'false');
            parentButton.closest('.nav-item').classList.remove('dropdown-active');
        }
    }
    
    // Add event listeners to nav items
    navItems.forEach(item => {
        const dropdown = document.getElementById(item.dataset.dropdown);
        if (!dropdown) return;
        
        // Show dropdown on hover
        item.addEventListener('mouseenter', () => {
            dropdowns.forEach(d => {
                if (d !== dropdown) hideDropdown(d);
            });
            showDropdown(dropdown);
        });
        
        // Hide dropdown when mouse leaves nav item
        item.addEventListener('mouseleave', (e) => {
            // Check if mouse is moving to the dropdown
            if (e.relatedTarget && dropdown.contains(e.relatedTarget)) return;
            
            // Check if mouse is moving to another nav item
            if (e.relatedTarget && e.relatedTarget.closest('.nav-item') === item) return;
            
            hideDropdown(dropdown);
        });
        
        // Add event listener to dropdown to keep it open when hovered
        dropdown.addEventListener('mouseenter', () => {
            showDropdown(dropdown);
        });
        
        dropdown.addEventListener('mouseleave', () => {
            hideDropdown(dropdown);
        });
        
        // Add keyboard accessibility
        const button = item.querySelector('button');
        if (button) {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const isExpanded = button.getAttribute('aria-expanded') === 'true';
                
                // Close all other dropdowns
                dropdowns.forEach(d => {
                    if (d !== dropdown) hideDropdown(d);
                });
                
                if (isExpanded) {
                    hideDropdown(dropdown);
                } else {
                    showDropdown(dropdown);
                }
            });
            
            button.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    hideDropdown(dropdown);
                    button.focus();
                }
            });
        }
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.nav-item') && !e.target.closest('.dropdown-menu')) {
            dropdowns.forEach(dropdown => {
                hideDropdown(dropdown);
            });
        }
    });
    
    // Mobile menu functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenuButton.addEventListener('click', () => {
        mobileMenuButton.classList.toggle('active');
        mobileMenu.classList.toggle('active');
    });
    
    // Mobile dropdown toggles
    const mobileDropdownButtons = [
        { button: document.getElementById('mobile-engagement-button'), dropdown: document.getElementById('mobile-engagement-dropdown'), icon: document.getElementById('mobile-engagement-icon') },
        { button: document.getElementById('mobile-resources-button'), dropdown: document.getElementById('mobile-resources-dropdown'), icon: document.getElementById('mobile-resources-icon') },
        { button: document.getElementById('mobile-products-button'), dropdown: document.getElementById('mobile-products-dropdown'), icon: document.getElementById('mobile-products-icon') }
    ];
    
    mobileDropdownButtons.forEach(({ button, dropdown, icon }) => {
        button.addEventListener('click', () => {
            const isExpanded = dropdown.classList.contains('block');
            
            // Close all other dropdowns
            mobileDropdownButtons.forEach(item => {
                if (item.dropdown !== dropdown) {
                    item.dropdown.classList.add('hidden');
                    item.dropdown.classList.remove('block');
                    item.icon.style.transform = 'rotate(0deg)';
                }
            });
            
            if (isExpanded) {
                dropdown.classList.add('hidden');
                dropdown.classList.remove('block');
                icon.style.transform = 'rotate(0deg)';
            } else {
                dropdown.classList.remove('hidden');
                dropdown.classList.add('block');
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
    
    // Nav indicator functionality
    const navIndicator = document.getElementById('nav-indicator');
    const navLinks = document.querySelectorAll('.nav-item');
    
    function positionIndicator(element) {
        if (!navIndicator) return;
        
        const rect = element.getBoundingClientRect();
        const parentRect = element.parentElement.getBoundingClientRect();
        
        navIndicator.style.width = `${rect.width}px`;
        navIndicator.style.transform = `translateX(${rect.left - parentRect.left}px)`;
        navIndicator.style.opacity = '1';
    }
    
    navLinks.forEach(link => {
        link.addEventListener('mouseenter', () => {
            positionIndicator(link);
        });
    });
    
    document.querySelector('nav').addEventListener('mouseleave', () => {
        if (navIndicator) {
            navIndicator.style.opacity = '0';
        }
    });
    
    // Scroll effect for header
    const header = document.getElementById('main-header');
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 50) {
            header.classList.add('shadow');
        } else {
            header.classList.remove('shadow');
        }
        
        lastScrollTop = scrollTop;
    });
});
