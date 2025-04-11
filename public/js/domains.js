
// Tab switching functionality
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#tabs a');
    const tabPanes = document.querySelectorAll('.tab-pane');

    tabs.forEach(tab => {
        tab.addEventListener('click', function (e) {
            e.preventDefault();

            // Remove active class from all tabs
            tabs.forEach(t => {
                t.classList.remove('text-blue-500', 'font-medium', 'border-b-2', 'border-blue-500', 'tab-active');
                t.classList.add('text-gray-500');
            });

            // Add active class to clicked tab
            this.classList.add('text-blue-500', 'font-medium', 'border-b-2', 'border-blue-500', 'tab-active');
            this.classList.remove('text-gray-500');

            // Hide all tab panes
            tabPanes.forEach(pane => {
                pane.classList.add('hidden');
                pane.classList.remove('active');
            });

            // Show the corresponding tab pane with animation
            const tabId = this.getAttribute('data-tab');
            const tabPane = document.getElementById(tabId + '-tab');
            tabPane.classList.remove('hidden');
            tabPane.classList.add('active', 'slide-in-up');

            // Reset animation to allow it to play again
            tabPane.style.animation = 'none';
            tabPane.offsetHeight; // Trigger reflow
            tabPane.style.animation = null;
        });
    });

    // Modal functionality with animations
    const addSkillBtn = document.getElementById('add-skill-btn');
    const addDomainBtn = document.getElementById('add-domain-btn');
    const addLanguageBtn = document.getElementById('add-language-btn');
    const closeModalBtns = document.querySelectorAll('.close-modal');
    const skillModal = document.getElementById('add-skill-modal');
    const domainModal = document.getElementById('add-domain-modal');
    const languageModal = document.getElementById('add-language-modal');
   

    // Function to show modal with animation
    function showModal(modal) {
        modal.classList.remove('hidden');
        modal.querySelector('.bg-white').classList.add('scale-in');

        // Add fade-in animation to modal background
        modal.classList.add('fade-in');

        // Animate the form fields sequentially
        const formFields = modal.querySelectorAll('input, select, textarea');
        formFields.forEach((field, index) => {
            field.style.opacity = '0';
            field.style.transform = 'translateY(10px)';
            setTimeout(() => {
                field.style.transition = 'all 0.3s ease';
                field.style.opacity = '1';
                field.style.transform = 'translateY(0)';
            }, 100 + (index * 50));
        });
    }

    // Function to hide modal with animation
    function hideModal(modal) {
        const modalContent = modal.querySelector('.bg-white');
        modalContent.style.transition = 'all 0.3s ease';
        modalContent.style.transform = 'scale(0.95)';
        modalContent.style.opacity = '0';

        setTimeout(() => {
            modal.classList.add('hidden');
            modalContent.style.transform = '';
            modalContent.style.opacity = '';
        }, 300);
    }

    addDomainBtn.addEventListener('click', function () {
        showModal(domainModal);
        this.classList.add('animate-wiggle');
        setTimeout(() => this.classList.remove('animate-wiggle'), 500);
    });

 
    closeModalBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const modal = this.closest('.fixed');
            hideModal(modal);
        });
    });

    // Close modal when clicking outside
    window.addEventListener('click', function (e) {
        allModals.forEach(modal => {
            if (e.target === modal) {
                hideModal(modal);
            }
        });
    });

 

    // Add hover effect to table rows
    const tableRows = document.querySelectorAll('tbody tr');
    tableRows.forEach(row => {
        row.classList.add('hover-effect');
    });

    // Add initial animations to sidebar items
    const sidebarItems = document.querySelectorAll('.sidebar-link');
    sidebarItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(-10px)';
        setTimeout(() => {
            item.style.transition = 'all 0.3s ease';
            item.style.opacity = '1';
            item.style.transform = 'translateX(0)';
        }, 200 + (index * 50));
    });
});

