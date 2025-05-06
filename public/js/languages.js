document.addEventListener('DOMContentLoaded', function() {
    // Language Modal
    const addLanguageBtn = document.getElementById('addLanguageBtn');
    const languageModal = document.getElementById('LanguageModal');
    const languageInput = document.getElementById('languages-input');
    const addLanguageItemBtn = document.getElementById('add-language-btn');
    const languagesContainer = document.getElementById('languages-container');
    const languagesHidden = document.getElementById('languages-hidden');
    const languagesForm = document.getElementById('languages-form');
    const closeButtons = document.querySelectorAll('#LanguageModal .modal-close');
    
    // Array to store languages
    let languages = [];
    
    // Open language modal
    if (addLanguageBtn) {
        addLanguageBtn.addEventListener('click', function() {
            languageModal.classList.remove('hidden');
            languageInput.focus();
        });
    }
    
    // Close language modal
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            languageModal.classList.add('hidden');
            // Reset form
            languagesContainer.innerHTML = '';
            languages = [];
            languagesHidden.value = '';
        });
    });
    
    // Add language when clicking the add button
    if (addLanguageItemBtn) {
        addLanguageItemBtn.addEventListener('click', function() {
            addLanguage();
        });
    }
    
    // Add language when pressing Enter
    if (languageInput) {
        languageInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                addLanguage();
            }
        });
    }
    
    // Function to add a language
    function addLanguage() {
        const language = languageInput.value.trim();
        
        if (language && !languages.includes(language)) {
            languages.push(language);
            
            // Create language tag
            const tag = document.createElement('div');
            tag.className = 'flex items-center bg-blue-100 text-blue-800 text-sm font-medium px-2 py-1 rounded-full';
            tag.innerHTML = `
                <span>${language}</span>
                <button type="button" class="ml-1 text-blue-500 hover:text-blue-700 focus:outline-none">
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            `;
            
            // Add remove event listener
            const removeBtn = tag.querySelector('button');
            removeBtn.addEventListener('click', function() {
                const index = languages.indexOf(language);
                if (index > -1) {
                    languages.splice(index, 1);
                    tag.remove();
                    languagesHidden.value = JSON.stringify(languages);
                }
            });
            
            languagesContainer.appendChild(tag);
            languageInput.value = '';
            languagesHidden.value = JSON.stringify(languages);
        }
    }
    
    // Handle form submission
    if (languagesForm) {
        languagesForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (languages.length === 0) {
                return;
            }
            
            // Submit each language individually
            const promises = languages.map(language => {
                return fetch('/languages/store', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ name: language })
                }).then(response => response.json());
            });
            
            Promise.all(promises)
                .then(() => {
                    // Close modal and refresh page
                    languageModal.classList.add('hidden');
                    window.location.reload();
                })
                .catch(error => {
                    console.error('Error adding languages:', error);
                });
        });
    }
});