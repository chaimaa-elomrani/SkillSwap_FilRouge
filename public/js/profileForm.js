
document.addEventListener('DOMContentLoaded', function () {
    function getCsrfToken() {
        return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    }
    // Form elements
    const form = document.getElementById('onboarding-form');
    const steps = document.querySelectorAll('.form-step');
    const nextButton = document.querySelector('.next-step');
    const prevButton = document.querySelector('.prev-step');
    const submitButton = document.getElementById('submit-button');
    const stepIndicator = document.getElementById('step-indicator');
    const stepTitle = document.getElementById('step-title');

    let currentStep = 1;
    const totalSteps = 2; 

    const stepTitles = {
        1: "Basic Information",
        2: "Location & Contact"
    };

    function showStep(stepNumber) {
        steps.forEach(step => {
            step.classList.remove('active');
        });

        document.getElementById(`step-${stepNumber}`).classList.add('active');
        currentStep = stepNumber;

        
        stepIndicator.textContent = `Step ${stepNumber} of ${totalSteps}`;
        stepTitle.textContent = stepTitles[stepNumber];
    }

    function validateStep(stepNumber) {
        let isValid = true;
        const errorElements = document.querySelectorAll(`#step-${stepNumber} [id$="-error"]`);
        errorElements.forEach(el => el.classList.add('hidden'));

        if (stepNumber === 1) {
            const fullName = document.getElementById('full-name');
            const profilePhoto = document.getElementById('profile-photo-input');
            const professionalTitle = document.getElementById('professional-title');
            const bio = document.getElementById('bio');

            if (!fullName.value.trim()) {
                document.getElementById('full-name-error').textContent = 'Please enter your full name';
                document.getElementById('full-name-error').classList.remove('hidden');
                isValid = false;
            }

            if (!profilePhoto.files || profilePhoto.files.length === 0) {
                document.getElementById('profile-photo-error').textContent = 'Please upload a profile photo';
                document.getElementById('profile-photo-error').classList.remove('hidden');
                isValid = false;
            }

            if (!professionalTitle.value.trim()) {
                document.getElementById('professional-title-error').textContent = 'Please enter your professional title';
                document.getElementById('professional-title-error').classList.remove('hidden');
                isValid = false;
            }

            if (!bio.value.trim()) {
                document.getElementById('bio-error').textContent = 'Please enter a short bio';
                document.getElementById('bio-error').classList.remove('hidden');
                isValid = false;
            }
        }

        else if (stepNumber === 2) {
            const city = document.getElementById('city');

            if (!city.value.trim()) {
                document.getElementById('city-error').textContent = 'Please enter your city';
                document.getElementById('city-error').classList.remove('hidden');
                isValid = false;
            }
        }

        return isValid;
    }

    function validateImageFile() {
        const fileInput = document.getElementById('profile-photo-input');
        const file = fileInput.files[0];

        if (!file) {
            document.getElementById('profile-photo-error').textContent = 'Please select an image file';
            document.getElementById('profile-photo-error').classList.remove('hidden');
            return false;
        }

        const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/svg+xml'];
        if (!validTypes.includes(file.type)) {
            document.getElementById('profile-photo-error').textContent = 'Please select a valid image file (JPEG, PNG, JPG, GIF, SVG)';
            document.getElementById('profile-photo-error').classList.remove('hidden');
            return false;
        }

        if (file.size > 5 * 1024 * 1024) {
            document.getElementById('profile-photo-error').textContent = 'Image size should not exceed 5MB';
            document.getElementById('profile-photo-error').classList.remove('hidden');
            return false;
        }

        return true;
    }

    function validateStep(stepNumber) {
        let isValid = true;
        const errorElements = document.querySelectorAll(`#step-${stepNumber} [id$="-error"]`);
        errorElements.forEach(el => el.classList.add('hidden'));

        if (stepNumber === 1) {

            if (!validateImageFile()) {
                isValid = false;
            }
        }


        return isValid;
    }


    nextButton.addEventListener('click', () => {
        console.log('clicckkkkkk');
        if (validateStep(currentStep)) {
            showStep(currentStep + 1);
            document.getElementById('step-1').style.display = 'none';
            document.getElementById('step-2').style.display = 'block';
        }
    })

    prevButton.addEventListener('click', () => {
        document.getElementById('step-2').style.display = 'none';
        document.getElementById('step-1').style.display = 'block';
    })


    const bioTextarea = document.getElementById('bio');
    const bioCounter = document.getElementById('bio-counter');

    bioTextarea.addEventListener('input', function () {
        const currentLength = this.value.length;
        const maxLength = this.getAttribute('maxlength');
        bioCounter.textContent = `${currentLength}/${maxLength}`;
    });

    const photoInput = document.getElementById('profile-photo-input');
    const photoBtn = document.getElementById('profile-photo-btn');
    const photoDropzone = document.getElementById('profile-photo-dropzone');
    const photoPreview = document.getElementById('profile-photo-preview');

    photoBtn.addEventListener('click', function () {
        photoInput.click();
    });

    photoInput.addEventListener('change', function () {
        if (this.files && this.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                photoPreview.innerHTML = '';
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'w-full h-full object-cover';
                photoPreview.appendChild(img);
            };

            reader.readAsDataURL(this.files[0]);
        }
    });

    showStep(1);
});
