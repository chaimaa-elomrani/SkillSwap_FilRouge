
document.addEventListener('DOMContentLoaded', function () {

    // Tab switching
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            tabButtons.forEach(btn => {
                btn.classList.remove('tab-active');
            });
            
            // Add active class to clicked button
            button.classList.add('tab-active');

            // Hide all tab contents
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            // Show the corresponding tab content
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.remove('hidden');
        });
    });

    // Tab triggers from other elements
    const tabTriggers = document.querySelectorAll('[data-tab-trigger]');

    tabTriggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            const tabId = trigger.getAttribute('data-tab-trigger');
            const tabButton = document.querySelector(`.tab-button[data-tab="${tabId}"]`);
            tabButton.click();
        });
    });

    // Modal functionality
    function openModal(modal) {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(modal) {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }

    // Close modals when clicking on backdrop or close button
    document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
        backdrop.addEventListener('click', (e) => {
            if (e.target === backdrop) {
                const modal = backdrop.closest('.fixed');
                closeModal(modal);
            }
        });
    });

    document.querySelectorAll('.modal-close').forEach(closeBtn => {
        closeBtn.addEventListener('click', () => {
            const modal = closeBtn.closest('.fixed');
            closeModal(modal);
        });
    });

    // Bio editing functionality
    const editBioModal = document.getElementById('editBioModal');
    const editBioBtn = document.getElementById('editBioBtn');
    const editBioForm = document.getElementById('editBioForm');
    const bioInput = document.getElementById('bioInput');
    const bioCharCount = document.getElementById('bioCharCount');
    const userBio = document.getElementById('userBio');

    editBioBtn.addEventListener('click', () => {
        bioInput.value = userBio.innerText.trim();
        updateBioCharCount();
        openModal(editBioModal);
    });

    function updateBioCharCount() {
        const length = bioInput.value.length;
        bioCharCount.textContent = `${length}/500`;
    }

    bioInput.addEventListener('input', updateBioCharCount);

    editBioForm.addEventListener('submit', (e) => {
        e.preventDefault();
        userBio.innerHTML = bioInput.value.replace(/\n/g, '<br>');
        closeModal(editBioModal);
    });


    // Skills  functionality

    const addSkillBtn = document.getElementById('addSkillBtn')
    const skillsModal = document.getElementById('skillModal');
    const canselBtn = document.getElementById('cancelbtn');
    const skillsInput = document.getElementById('skills-input');
    const skillsContainer = document.getElementById('skills-container');
    const skillsForm = document.getElementById('skills-form');
    const skillsError = document.getElementById('skills-error');
    const skillsHidden = document.getElementById('skills-hidden');
    let skillsData = [];
    let nextId = 1;


    addSkillBtn.addEventListener('click', () => {
        openModal(skillsModal);
    });
    canselBtn.addEventListener('click', () => {
        closeModal(skillsModal);
    });
    skillsForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const skillName = skillsInput.value.trim();
        if (skillName) {
            addSkill(skillName);
            skillsInput.value = '';
            closeModal(skillsModal);
        }
    });

    function addSkill(skillName) {
        if (!skillName.trim()) return;

        // Check if skill already exists
        const existingSkills = Array.from(skillsContainer.querySelectorAll('.skill-tag')).map(tag =>
            tag.querySelector('span').textContent.toLowerCase()
        );

        if (existingSkills.includes(skillName.toLowerCase())) return;

        // Create skill tag
        const skillTag = document.createElement('div');
        skillTag.className = 'skill-tag inline-flex items-center bg-blue-100 text-blue-700 rounded-full px-3 py-1 text-sm';
        skillTag.innerHTML = `
            <span>${skillName}</span>
            <button type="button" class="ml-1 text-blue-500 hover:text-blue-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        `;
        const skillId = nextId++;
        skillsData.push({ id: skillId, name: skillName });

        // Add remove event listener
        skillTag.querySelector('button').addEventListener('click', function () {
            skillTag.remove();
            updateHiddenField();
        });

        skillsContainer.appendChild(skillTag);
        skillsInput.value = '';
        updateHiddenField();
    }

    function updateHiddenField() {
        const skills = Array.from(skillsContainer.querySelectorAll('.skill-tag')).map(tag =>
            tag.querySelector('span').textContent
        );
        skillsHidden.value = JSON.stringify(skills);
    }

    addSkillBtn.addEventListener('click', function () {
        addSkill(skillsInput.value);
    });

    skillsInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            addSkill(this.value);
        }
    });

    skillsForm.addEventListener('submit', function (e) {
        e.preventDefault();

        // Validate that at least one skill is added
        const skillTags = skillsContainer.querySelectorAll('.skill-tag');

        if (skillTags.length === 0) {
            skillsError.textContent = 'Please add at least one skill';
            skillsError.classList.remove('hidden');
            return;
        } else {
            skillsError.classList.add('hidden');
        }

        // Get all skills
        const skills = Array.from(skillTags).map(tag =>
            tag.querySelector('span').textContent
        );

        // Send data to server
        sendSkills(skills);
    });

    async function sendSkills(skills) {
        try {
            // Show loading indicator if you have one
            // loader.style.display = 'flex';

            // Check if CSRF token exists
            const csrfToken = document.querySelector('meta[name="csrf-token"]');
            if (!csrfToken) {
                console.error('CSRF token not found');
                alert('CSRF token not found. Please refresh the page.');
                return;
            }

            console.log('Sending skills:', skills);
            console.log('CSRF token:', csrfToken.getAttribute('content'));

            const response = await fetch('/save-skills', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken.getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    skills: JSON.stringify(skills)
                })
            });

            console.log('Response status:', response.status);

            // Try to get the response text first to debug
            const responseText = await response.text();
            console.log('Response text:', responseText);

            // Parse the JSON if possible
            let result;
            try {
                result = JSON.parse(responseText);
                console.log('Parsed result:', result);
            } catch (e) {
                console.error('Could not parse JSON response:', e);
                alert('Server returned invalid JSON. Check console for details.');
                return;
            }

            if (result.success) {
                alert('Skills saved successfully!');
            } else {
                alert('Error saving skills: ' + (result.message || 'Unknown error'));
            }
        } catch (error) {
            console.error('Fetch error:', error);
            alert('An error occurred while saving skills: ' + error.message);
        } finally {

        }
    };


    // services modal 
    const addServiceBtn = document.getElementById('addServiceBtn');
    const addServiceModal = document.getElementById('AddServiceModal');
    
    addServiceBtn.addEventListener('click', ()=> {
        addServiceModal.classList.remove('hidden');
    });

});


