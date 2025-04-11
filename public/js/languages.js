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
            if (tabPane) {
                tabPane.classList.remove('hidden');
                tabPane.classList.add('active', 'slide-in-up');
                
                // Reset animation to allow it to play again
                tabPane.style.animation = 'none';
                tabPane.offsetHeight; // Trigger reflow
                tabPane.style.animation = null;
            }
        });
    });

    // Modal functionality with animations
    const addLanguageBtn = document.getElementById('add-language-btn');
    const closeModalBtns = document.querySelectorAll('.close-modal');
    const languageModal = document.getElementById('add-language-modal');
    const allModals = [languageModal];

    // Function to show modal with animation
    function showModal(modal) {
        if (!modal) return;
        
        modal.classList.remove('hidden');
        const modalContent = modal.querySelector('.bg-white');
        if (modalContent) {
            modalContent.classList.add('scale-in');
        }

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
        if (!modal) return;
        
        const modalContent = modal.querySelector('.bg-white');
        if (modalContent) {
            modalContent.style.transition = 'all 0.3s ease';
            modalContent.style.transform = 'scale(0.95)';
            modalContent.style.opacity = '0';
        }

        setTimeout(() => {
            modal.classList.add('hidden');
            if (modalContent) {
                modalContent.style.transform = '';
                modalContent.style.opacity = '';
            }
        }, 300);
    }

    // Add language button click event
    if (addLanguageBtn) {
        addLanguageBtn.addEventListener('click', function () {
            showModal(languageModal);
            this.classList.add('animate-wiggle');
            setTimeout(() => this.classList.remove('animate-wiggle'), 500);
        });
    }

    // Close modal buttons
    closeModalBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const modal = this.closest('.fixed');
            hideModal(modal);
        });
    });

    // Close modal when clicking outside
    window.addEventListener('click', function (e) {
        allModals.forEach(modal => {
            if (modal && e.target === modal) {
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
    
    // Handle language form submission
    const languageForm = document.getElementById('add-language-form');
    if (languageForm) {
        languageForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const languageName = formData.get('name');
            const languageType = formData.get('type');
            const languageStatus = formData.get('status');
            const languageDescription = formData.get('description');
            
            // Add success animation
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i> Saved!';
            submitBtn.classList.add('bg-green-600');
            
            // Here you would typically send the data to the server
            // For now, we'll just simulate a successful submission
            setTimeout(() => {
                hideModal(languageModal);
                
                // Reset button after hiding
                setTimeout(() => {
                    submitBtn.innerHTML = '<i class="fas fa-plus mr-2"></i> Save Language';
                    submitBtn.classList.remove('bg-green-600');
                    
                    // Reset form
                    languageForm.reset();
                }, 300);
                
                // Optionally, refresh the page to show the new language
                // window.location.reload();
            }, 1000);
        });
    }
});