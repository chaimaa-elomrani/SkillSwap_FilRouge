
// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Run animations
    runAnimations();
    
    // Initialize form navigation
    initFormNavigation();
    
    // Initialize tags input
    initTagsInput();
    
    // Initialize form validation and submission
    initFormHandling();
    
    // Initialize preview card
    initPreview();
});

// Run entrance animations
function runAnimations() {
    // Animate fade-in elements
    gsap.to('.fade-in', {
        opacity: 1,
        y: 0,
        duration: 0.8,
        stagger: 0.2,
        ease: 'power2.out'
    });
    
    // Animate slide-in elements
    gsap.to('.slide-in-right', {
        opacity: 1,
        x: 0,
        duration: 0.6,
        delay: 0.3,
        ease: 'power2.out'
    });
}

// Initialize form navigation
function initFormNavigation() {
    const sections = ['basic', 'skills', 'transaction'];
    const navButtons = {
        navBasic: 'basic',
        navSkills: 'skills',
        navTransaction: 'transaction'
    };
    
    // Section navigation buttons
    Object.keys(navButtons).forEach(btnId => {
        document.getElementById(btnId).addEventListener('click', function() {
            showSection(navButtons[btnId]);
        });
    });
    
    // Next/Previous buttons
    document.getElementById('basicNextBtn').addEventListener('click', function() {
        if (validateSection('basic')) {
            showSection('skills');
        }
    });
    
    document.getElementById('skillsPrevBtn').addEventListener('click', function() {
        showSection('basic');
    });
    
    document.getElementById('skillsNextBtn').addEventListener('click', function() {
        if (validateSection('skills')) {
            showSection('transaction');
        }
    });
    
    document.getElementById('transactionPrevBtn').addEventListener('click', function() {
        showSection('skills');
    });
    
    // Function to show a specific section
    function showSection(sectionName) {
        // Hide all sections
        sections.forEach(section => {
            document.getElementById(`${section}Section`).classList.add('hidden');
            document.getElementById(`nav${section.charAt(0).toUpperCase() + section.slice(1)}`).classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
            document.getElementById(`nav${section.charAt(0).toUpperCase() + section.slice(1)}`).classList.add('text-gray-500');
        });
        
        // Show the selected section
        document.getElementById(`${sectionName}Section`).classList.remove('hidden');
        document.getElementById(`nav${sectionName.charAt(0).toUpperCase() + sectionName.slice(1)}`).classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
        document.getElementById(`nav${sectionName.charAt(0).toUpperCase() + sectionName.slice(1)}`).classList.remove('text-gray-500');
        
        // Animate the newly visible section
        gsap.fromTo(`#${sectionName}Section .slide-in-right`, 
            { opacity: 0, x: 30 },
            { opacity: 1, x: 0, duration: 0.5, ease: 'power2.out' }
        );
        
        // Update progress bar
        updateProgress(sectionName);
    }
    
    // Update progress bar based on current section
    function updateProgress(sectionName) {
        const progressBar = document.getElementById('progressBar');
        switch(sectionName) {
            case 'basic':
                progressBar.style.width = '33%';
                break;
            case 'skills':
                progressBar.style.width = '66%';
                break;
            case 'transaction':
                progressBar.style.width = '100%';
                break;
        }
    }
}

// Initialize tags input functionality
function initTagsInput() {
    const tagsInput = document.getElementById('skillsInput');
    const tagsDisplay = document.getElementById('tagsDisplay');
    const tagsHidden = document.getElementById('skillsHidden');
    let tags = [];
    
    // Add tag when Enter is pressed
    tagsInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ',') {
            e.preventDefault();
            
            const tag = tagsInput.value.trim();
            if (tag && !tags.includes(tag) && tags.length < 10) {
                addTag(tag);
                tagsInput.value = '';
                updateHiddenField();
            }
        }
    });
    
    // Function to add a tag
    function addTag(tag) {
        tags.push(tag);
        
        const tagElement = document.createElement('div');
        tagElement.className = 'tag';
        tagElement.innerHTML = `
            ${tag}
            <span class="tag-remove ml-1" data-tag="${tag}">&times;</span>
        `;
        tagsDisplay.appendChild(tagElement);
        
        // Add click event to remove tag
        tagElement.querySelector('.tag-remove').addEventListener('click', function() {
            const tagToRemove = this.getAttribute('data-tag');
            removeTag(tagToRemove, tagElement);
        });
        
        // Animate tag entrance
        gsap.from(tagElement, {
            scale: 0.8,
            opacity: 0,
            duration: 0.3,
            ease: 'back.out(1.7)'
        });
    }
    
    // Function to remove a tag
    function removeTag(tag, element) {
        tags = tags.filter(t => t !== tag);
        
        // Animate tag removal
        gsap.to(element, {
            scale: 0.8,
            opacity: 0,
            duration: 0.2,
            onComplete: () => {
                element.remove();
                updateHiddenField();
            }
        });
    }
    
    // Update hidden field with tags
    function updateHiddenField() {
        tagsHidden.value = tags.join(',');
    }
}

// Initialize form validation and submission
function initFormHandling() {
    const form = document.getElementById('serviceForm');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate all sections
        if (validateSection('basic') && validateSection('skills') && validateSection('transaction')) {
            // Show preview
            updatePreview();
            document.getElementById('previewCard').classList.remove('hidden');
            
            // Scroll to preview
            document.getElementById('previewCard').scrollIntoView({ behavior: 'smooth' });
            
            // Animate preview card
            gsap.fromTo('#previewCard', 
                { opacity: 0, y: 20 },        
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.8, ease: 'power2.out' }
            );
            
            // In a real application, you would submit the form data to a server here
            console.log('Form submitted successfully!');
            
            // For demo purposes, we'll just show a success message
            showSuccessMessage();
        }
    });
    
    // Show success message
    function showSuccessMessage() {
        // Create success message
        const successMsg = document.createElement('div');
        successMsg.className = 'fixed top-4 right-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-md';
        successMsg.innerHTML = `
            <div class="flex items-center">
                <svg class="h-6 w-6 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <p>Service posted successfully!</p>
            </div>
        `;
        document.body.appendChild(successMsg);
        
        // Animate success message
        gsap.fromTo(successMsg, 
            { opacity: 0, x: 20 },
            { opacity: 1, x: 0, duration: 0.5, ease: 'power2.out' }
        );
        
        // Remove after 5 seconds
        setTimeout(() => {
            gsap.to(successMsg, {
                opacity: 0,
                y: -10,
                duration: 0.3,
                onComplete: () => successMsg.remove()
            });
        }, 5000);
    }
}

// Validate form sections
function validateSection(sectionName) {
    let isValid = true;
    
    switch(sectionName) {
        case 'basic':
            // Validate title
            const title = document.getElementById('serviceTitle').value.trim();
            if (!title) {
                highlightError('serviceTitle');
                isValid = false;
            }
            
            // Validate description
            const description = document.getElementById('serviceDescription').value.trim();
            if (!description || description.length < 100) {
                highlightError('serviceDescription');
                isValid = false;
            }
            break;
            
        case 'skills':
            // Validate category
            const category = document.getElementById('serviceCategory').value;
            if (!category) {
                highlightError('serviceCategory');
                isValid = false;
            }
            
            // Validate skills
            const skills = document.getElementById('skillsHidden').value;
            if (!skills || skills.split(',').length < 3) {
                highlightError('tagsContainer');
                isValid = false;
            }
            
            // Validate experience level
            const expLevel = document.querySelector('input[name="experienceLevel"]:checked');
            if (!expLevel) {
                document.querySelectorAll('input[name="experienceLevel"]').forEach(el => {
                    el.parentElement.classList.add('border', 'border-red-500', 'rounded-md', 'p-1');
                });
                isValid = false;
            }
            
            // Validate target audience
            const audience = document.getElementById('targetAudience').value;
            if (!audience) {
                highlightError('targetAudience');
                isValid = false;
            }
            break;
            
        case 'transaction':
            // Validate credit cost
            const credits = document.getElementById('creditCost').value;
            if (!credits || credits < 1) {
                highlightError('creditCost');
                isValid = false;
            }
            
            // Validate estimated time
            const timeValue = document.getElementById('timeValue').value;
            if (!timeValue || timeValue < 1) {
                highlightError('timeValue');
                isValid = false;
            }
            
            // Validate availability
            const availability = document.querySelectorAll('input[name="availability"]:checked');
            if (availability.length === 0) {
                document.querySelectorAll('input[name="availability"]').forEach(el => {
                    el.parentElement.classList.add('border', 'border-red-500', 'rounded-md', 'p-1');
                });
                isValid = false;
            }
            break;
    }
    
    return isValid;
}

// Highlight error on input
function highlightError(elementId) {
    const element = document.getElementById(elementId);
    element.classList.add('border-red-500', 'bg-red-50');
    
    // Add shake animation
    gsap.to(element, {
        x: [-5, 5, -5, 5, 0],
        duration: 0.4,
        ease: 'power2.inOut'
    });
    
    // Remove highlight after 3 seconds
    setTimeout(() => {
        element.classList.remove('border-red-500', 'bg-red-50');
    }, 3000);
    
    // Add input event to remove error on change
    element.addEventListener('input', function() {
        element.classList.remove('border-red-500', 'bg-red-50');
    }, { once: true });
}

// Initialize preview functionality
function initPreview() {
    // Update preview when inputs change
    const previewInputs = [
        'serviceTitle', 'serviceDescription', 'skillsHidden', 'creditCost',
        'timeValue', 'timeUnit'
    ];
    
    previewInputs.forEach(inputId => {
        document.getElementById(inputId).addEventListener('change', updatePreview);
        document.getElementById(inputId).addEventListener('input', updatePreview);
    });
}

// Update preview card with form data
function updatePreview() {
    const title = document.getElementById('serviceTitle').value || 'Service Title';
    const description = document.getElementById('serviceDescription').value || 'Service description will appear here...';
    const credits = document.getElementById('creditCost').value || '0';
    const timeValue = document.getElementById('timeValue').value || '--';
    const timeUnit = document.getElementById('timeUnit').value;
    
    document.getElementById('previewTitle').textContent = title;
    document.getElementById('previewDescription').textContent = description;
    document.getElementById('previewCredits').textContent = credits;
    document.getElementById('previewTime').textContent = timeValue ? `${timeValue} ${timeUnit}` : '--';
    
    // Update tags
    const tagsContainer = document.getElementById('previewTags');
    tagsContainer.innerHTML = '';
    
    const skills = document.getElementById('skillsHidden').value;
    if (skills) {
        skills.split(',').forEach(skill => {
            const tagElement = document.createElement('span');
            tagElement.className = 'inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800';
            tagElement.textContent = skill;
            tagsContainer.appendChild(tagElement);
        });
    }
}
