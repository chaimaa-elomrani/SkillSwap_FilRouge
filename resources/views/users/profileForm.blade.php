<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap | Complete Your Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .progress-bar {
            transition: width 0.3s ease;
        }

        .tag-container::-webkit-scrollbar {
            width: 4px;
            height: 4px;
        }

        .tag-container::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 2px;
        }

        .tag-container::-webkit-scrollbar-track {
            background-color: #f1f5f9;
        }

        .drag-over {
            border-color: #0ea5e9;
            background-color: #e0f2fe;
        }
    </style>
</head>

<body class="bg-secondary-200 min-h-screen font-sans text-secondary-800">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Header -->
        <header class="text-center mb-8">

            <h2 class="text-3xl font-bold text-secondary-900 mb-2">Complete Your Profile</h2>
            <p class="text-secondary-600 max-w-xl mx-auto">Let's set up your professional profile so others can
                discover your skills and services. This information helps match you with the right opportunities.</p>
        </header>


        <!-- Form Container -->
        <div class="bg-white rounded-xl shadow-sm border border-secondary-200 max-w-3xl mx-auto overflow-hidden">
            <form id="onboarding-form" class="relative" method="POST" action="{{ route('profile.store') }}">
                <!-- Step 1: Basic Information -->
                <div class="form-step active p-8" id="step-1" data-step="1">
                    <h3 class="text-xl font-semibold mb-6">Basic Information</h3>

                    <!-- Full Name -->
                    <div class="mb-6">
                        <label for="full-name" class="block text-sm font-medium text-secondary-700 mb-1">Full Name
                            <span class="text-red-500">*</span></label>
                        <input type="text" id="full-name" name="name"
                            class="w-full px-4 py-2 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Your full name" required>
                        <div class="hidden mt-1 text-sm text-red-500" id="full-name-error"></div>
                    </div>

                    <!-- Profile Photo -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-secondary-700 mb-1">Profile Photo <span
                                class="text-red-500">*</span></label>
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div id="profile-photo-preview"
                                    class="w-24 h-24 rounded-full bg-secondary-100 flex items-center justify-center overflow-hidden border-2 border-secondary-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-secondary-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow">
                                <div id="profile-photo-dropzone"
                                    class="border-2 border-dashed border-secondary-300 rounded-lg p-6 flex flex-col items-center justify-center cursor-pointer hover:bg-secondary-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-secondary-400 mb-2"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p class="text-sm text-secondary-500 mb-1">Drag and drop your photo here, or</p>
                                    <button type="button" id="profile-photo-btn"
                                        class="text-sm font-medium text-primary-600 hover:text-primary-700">Browse
                                        files</button>
                                    <input type="file" id="profile-photo-input" name="image" class="hidden"
                                        accept="image/*" required>
                                    <p class="text-xs text-secondary-400 mt-2">JPG, PNG or GIF, max 5MB</p>
                                </div>
                                <div class="hidden mt-1 text-sm text-red-500" id="profile-photo-error"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Professional Title -->
                    <div class="mb-6">
                        <label for="professional-title"
                            class="block text-sm font-medium text-secondary-700 mb-1">Professional Title <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="professional-title" name="title"
                            class="w-full px-4 py-2 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="e.g., UX Designer, Software Engineer, Marketing Consultant" required>
                        <div class="hidden mt-1 text-sm text-red-500" id="professional-title-error"></div>
                    </div>

                    <!-- Bio -->
                    <div class="mb-6">
                        <div class="flex justify-between mb-1">
                            <label for="bio" class="block text-sm font-medium text-secondary-700">Short Bio <span
                                    class="text-red-500">*</span></label>
                            <span class="text-xs text-secondary-500" id="bio-counter">0/300</span>
                        </div>
                        <textarea id="bio" name="bio" rows="4"
                            class="w-full px-4 py-2 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Tell others about yourself, your expertise, and what you're passionate about"
                            maxlength="300" required></textarea>
                        <div class="hidden mt-1 text-sm text-red-500" id="bio-error"></div>
                    </div>

                    <div class="flex justify-end">
                        <button type="button"
                            class="next-step px-6 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            Continue
                        </button>
                    </div>
                </div>

                <!-- Step 2: Location and Contact -->
                <div class="form-step p-8" id="step-2" data-step="2">
                    <h3 class="text-xl font-semibold mb-6">Location & Contact Information</h3>

                    <!-- Location -->
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-6">
                        <div>
                            <label for="city" class="block text-sm font-medium text-secondary-700 mb-1">City <span
                                    class="text-red-500">*</span></label>
                            <input type="text" id="city" name="location"
                                class="w-full px-4 py-2 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                placeholder="Your city and country" required>
                            <div class="hidden mt-1 text-sm text-red-500" id="city-error"></div>
                        </div>

                    </div>

                    <!-- Optional Contact Fields -->
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-md font-medium text-secondary-700">Optional Contact Information</h4>
                            <div class="flex items-center">
                                <span class="text-xs text-secondary-500 mr-2">Private by default</span>
                                <span
                                    class="inline-flex items-center justify-center w-5 h-5 bg-secondary-100 text-secondary-500 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-4">
                            <div class="flex items-center justify-between mb-1">
                                <label for="phone" class="block text-sm font-medium text-secondary-700">Phone
                                    Number</label>
                                <div class="flex items-center">
                                    <span class="text-xs text-secondary-500 mr-2">Visible to public</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="phone-public" class="sr-only peer"
                                            id="phone-public">
                                        <div
                                            class="w-9 h-5 bg-secondary-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-secondary-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary-500">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <input type="tel" id="phone" name="phone_number"
                                class="w-full px-4 py-2 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                placeholder="Your phone number">
                        </div>

                        <!-- Email Address -->
                        <div class="mb-4">
                            <div class="flex items-center justify-between mb-1">
                                <label for="email" class="block text-sm font-medium text-secondary-700">Email
                                    Address</label>
                                <div class="flex items-center">
                                    <span class="text-xs text-secondary-500 mr-2">Visible to public</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="email-public" class="sr-only peer"
                                            id="email-public">
                                        <div
                                            class="w-9 h-5 bg-secondary-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-secondary-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary-500">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                placeholder="Your email address">
                        </div>
                    </div>

                    <div class="flex justify-between">
                        <button type="button"
                            class="prev-step px-6 py-2 border border-secondary-300 text-secondary-700 rounded-lg hover:bg-secondary-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            Back
                        </button>
                        <button type="button"
                            class="next-step px-6 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            Continue
                        </button>
                    </div>
                </div>

                <!-- Step 3: Skills and Expertise -->
                <div class="form-step p-8" id="step-3" data-step="3">
                    <h3 class="text-xl font-semibold mb-6">Skills & Expertise</h3>


                    <!-- *************************************************************************************************************************************************** -->
                    <!-- Skills -->
                    <div class="mb-8">
                        <div class="flex items-center justify-between mb-1">
                            <label for="skills-input" class="block text-sm font-medium text-secondary-700">Skills
                                <span class="text-red-500">*</span></label>
                            <div class="flex items-center">
                                <span class="text-xs text-secondary-500 mr-1">Add your top skills</span>
                                <span
                                    class="inline-flex items-center justify-center w-5 h-5 bg-secondary-100 text-secondary-500 rounded-full cursor-pointer"
                                    title="Add skills that showcase your expertise. These will help others find you for relevant projects.">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 mb-2">
                            <div class="relative flex-grow">
                                <input type="text" id="skills-input" name="skills[]" multiple
                                    class="w-full px-4 py-2 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                    placeholder="Type a skill and press Enter (e.g., JavaScript, Project Management)">
                            </div>
                            <button type="button" id="add-skill-btn"
                                class="px-4 py-2 bg-secondary-100 text-secondary-700 rounded-lg hover:bg-secondary-200 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                                Add
                            </button>
                        </div>
                        <div id="skills-container"
                            class="flex flex-wrap gap-2 min-h-[40px] max-h-[120px] overflow-y-auto p-2 border border-secondary-200 rounded-lg tag-container">
                            <!-- Skills tags will be added here dynamically -->
                        </div>
                        <div class="hidden mt-1 text-sm text-red-500" id="skills-error"></div>
                        <input type="hidden" name="skills" id="skills-hidden">
                    </div>

                    <!-- *************************************************************************************************************************************************** -->


                    <!-- Services Offered -->
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <label class="block text-sm font-medium text-secondary-700">Services Offered <span
                                    class="text-red-500">*</span></label>
                            <button type="button" id="add-service-btn"
                                class="text-sm font-medium text-primary-600 hover:text-primary-700 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Add Service
                            </button>
                        </div>

                        <div id="services-container" class="space-y-4">
                            <div class="service-item p-4 border border-secondary-200 rounded-lg">
                                <div class="flex justify-between mb-2">
                                    <input type="text" name="service-title[]"
                                        class="service-title w-full px-4 py-2 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                        placeholder="Service Title (e.g., Web Development, Logo Design)" required>
                                    <button type="button"
                                        class="remove-service ml-2 text-secondary-400 hover:text-red-500 hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                                <textarea name="service-description[]"
                                    class="service-description w-full px-4 py-2 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                    rows="3"
                                    placeholder="Describe this service in detail. What do you offer, and what can clients expect?"
                                    required></textarea>
                                <div class="flex items-center mt-2">
                                    <span class="text-sm text-secondary-600 mr-2">Estimated credits:</span>
                                    <div class="flex items-center space-x-2">
                                        <input type="number" name="service-min-credits[]"
                                            class="service-min-credits w-20 px-2 py-1 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                            placeholder="Min" min="1" required>
                                        <span class="text-secondary-500">-</span>
                                        <input type="number" name="service-max-credits[]"
                                            class="service-max-credits w-20 px-2 py-1 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                            placeholder="Max" min="1" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden mt-1 text-sm text-red-500" id="services-error"></div>
                    </div>

                    <div class="flex justify-between">
                        <button type="button"
                            class="prev-step px-6 py-2 border border-secondary-300 text-secondary-700 rounded-lg hover:bg-secondary-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            Back
                        </button>
                        <button type="button"
                            class="next-step px-6 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            Continue
                        </button>
                    </div>
                </div>

                <!-- Step 4: Review and Submit -->
                <div class="form-step p-8" id="step-4" data-step="4">
                    <h3 class="text-xl font-semibold mb-6">Review Your Profile</h3>

                    <!-- Profile Preview -->
                    <div class="mb-8">
                        <div class="bg-white rounded-xl shadow-sm border border-secondary-200 overflow-hidden">
                            <!-- Profile Header -->
                            <div class="relative">
                                <div class="h-32 bg-primary-100"></div>
                                <div class="absolute top-16 left-8">
                                    <div id="review-photo-container"
                                        class="w-24 h-24 rounded-full border-4 border-white bg-white overflow-hidden">
                                        <div id="review-photo"
                                            class="w-full h-full bg-secondary-100 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-secondary-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-20 pb-5 px-8">
                                    <h2 id="review-name" class="text-xl font-bold text-secondary-900 mt-2"></h2>
                                    <p id="review-title" class="text-secondary-600"></p>
                                    <div class="flex items-center mt-2 text-sm text-secondary-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span id="review-location"></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Profile Content -->
                            <div class="p-8 border-t border-secondary-200">
                                <div class="mb-6">
                                    <h3 class="text-lg font-semibold mb-2">About Me</h3>
                                    <p id="review-bio" class="text-secondary-600"></p>
                                </div>

                                <div class="mb-6">
                                    <h3 class="text-lg font-semibold mb-2">Skills</h3>
                                    <div id="review-skills" class="flex flex-wrap gap-2"></div>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Services Offered</h3>
                                    <div id="review-services" class="space-y-3"></div>
                                </div>
                            </div>

                            <!-- Contact Information -->
                            <div class="p-8 bg-secondary-50 border-t border-secondary-200">
                                <h3 class="text-lg font-semibold mb-2">Contact Information</h3>
                                <div class="space-y-2">
                                    <p class="text-secondary-600" id="review-email-container">
                                        <span class="font-medium">Email:</span>
                                        <span id="review-email">Not provided</span>
                                    </p>
                                    <p class="text-secondary-600" id="review-phone-container">
                                        <span class="font-medium">Phone:</span>
                                        <span id="review-phone">Not provided</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Privacy Notice -->
                    <div class="bg-secondary-50 border border-secondary-200 rounded-lg p-4 mb-6">
                        <h4 class="font-medium text-secondary-800 mb-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary-500 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Privacy Notice
                        </h4>
                        <p class="text-sm text-secondary-600 mb-3">
                            By submitting this form, you agree to share the following information publicly on your
                            SkillSwap profile:
                        </p>
                        <ul class="text-sm text-secondary-600 list-disc list-inside space-y-1 mb-3">
                            <li>Your name, profile photo, professional title, and bio</li>
                            <li>Your location (city and country)</li>
                            <li>Your skills and services offered</li>
                        </ul>
                        <p class="text-sm text-secondary-600">
                            Optional contact information will only be visible if you've enabled public visibility for
                            those fields.
                        </p>
                    </div>

                    <!-- Terms Checkbox -->
                    <div class="mb-6">
                        <label class="flex items-start">
                            <input type="checkbox" name="terms" id="terms"
                                class="rounded text-primary-600 focus:ring-primary-500 h-4 w-4 mt-1" required>
                            <span class="ml-2 text-secondary-700 text-sm">
                                I agree to SkillSwap's <a href="#" class="text-primary-600 hover:text-primary-700">Terms
                                    of Service</a> and <a href="#"
                                    class="text-primary-600 hover:text-primary-700">Privacy
                                    Policy</a>. I confirm that all information provided is accurate.
                            </span>
                        </label>
                        <div class="hidden mt-1 text-sm text-red-500" id="terms-error"></div>
                    </div>

                    <div class="flex justify-between">
                        <button type="button"
                            class="prev-step px-6 py-2 border border-secondary-300 text-secondary-700 rounded-lg hover:bg-secondary-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            Back
                        </button>
                        <div id="skills-hidden-inputs"></div>
                        <button type="submit" id="submit-button"
                            class="px-6 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            Complete Profile
                        </button>
                    </div>
                </div>

                <!-- Success Message (Hidden by default) -->
                <div class="form-step p-8 text-center" id="success-step">
                    <div class="mb-6">
                        <div class="mx-auto w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-secondary-900 mb-2">Profile Completed!</h3>
                        <p class="text-secondary-600 mb-6">Your profile has been successfully created. You're now ready
                            to start exchanging skills on SkillSwap.</p>
                        <div class="flex flex-col sm:flex-row justify-center gap-4">
                            <a href="#"
                                class="px-6 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                                View Your Profile
                            </a>
                            <a href="#"
                                class="px-6 py-2 border border-secondary-300 text-secondary-700 rounded-lg hover:bg-secondary-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                                Explore SkillSwap
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Form elements
            const form = document.getElementById('onboarding-form');
            const steps = document.querySelectorAll('.form-step');
            const nextButtons = document.querySelectorAll('.next-step');
            const prevButtons = document.querySelectorAll('.prev-step');
            const submitButton = document.getElementById('submit-button');


            // Current step tracking
            let currentStep = 1;
            const totalSteps = 4; // Total number of steps


            // Show a specific step
            function showStep(stepNumber) {
                steps.forEach(step => {
                    step.classList.remove('active');
                });

                document.getElementById(`step-${stepNumber}`).classList.add('active');
                currentStep = stepNumber;
            }

            // Basic validation
            function validateStep(stepNumber) {
                let isValid = true;

                // Reset all error messages
                const errorElements = document.querySelectorAll(`#step-${stepNumber} [id$="-error"]`);
                errorElements.forEach(el => el.classList.add('hidden'));

                // Step 1 validation
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

                // Step 2 validation
                else if (stepNumber === 2) {
                    const city = document.getElementById('city');

                    if (!city.value.trim()) {
                        document.getElementById('city-error').textContent = 'Please enter your city';
                        document.getElementById('city-error').classList.remove('hidden');
                        isValid = false;
                    }


                }

                // Step 3 validation
                else if (stepNumber === 3) {
                    const skillsContainer = document.getElementById('skills-container');
                    const skillTags = skillsContainer.querySelectorAll('.skill-tag');

                    if (skillTags.length === 0) {
                        document.getElementById('skills-error').textContent = 'Please add at least one skill';
                        document.getElementById('skills-error').classList.remove('hidden');
                        isValid = false;
                    }

                    const serviceItems = document.querySelectorAll('.service-item');
                    let servicesValid = true;

                    serviceItems.forEach(item => {
                        const title = item.querySelector('.service-title');
                        const description = item.querySelector('.service-description');
                        const minCredits = item.querySelector('.service-min-credits');
                        const maxCredits = item.querySelector('.service-max-credits');

                        if (!title.value.trim() || !description.value.trim() || !minCredits.value || !maxCredits.value) {
                            servicesValid = false;
                        }
                    });

                    if (!servicesValid) {
                        document.getElementById('services-error').textContent = 'Please complete all service details';
                        document.getElementById('services-error').classList.remove('hidden');
                        isValid = false;
                    }
                }

                return isValid;
            }

            // Next button click handler
            nextButtons.forEach(button => {
                button.addEventListener('click', () => {
                    if (validateStep(currentStep)) {
                        if (currentStep === 3) {
                            // Update review page before showing it
                            updateReviewPage();
                        }
                        showStep(currentStep + 1);
                    }
                });
            });

            // Previous button click handler
            prevButtons.forEach(button => {
                button.addEventListener('click', () => {
                    showStep(currentStep - 1);
                });
            });

            // Update review page with form data
            function updateReviewPage() {
                // Basic information
                document.getElementById('review-name').textContent = document.getElementById('full-name').value;
                document.getElementById('review-title').textContent = document.getElementById('professional-title').value;
                document.getElementById('review-bio').textContent = document.getElementById('bio').value;

                // Profile photo
                const photoPreview = document.getElementById('review-photo');
                photoPreview.innerHTML = '';
                const img = document.createElement('img');
                img.src = document.getElementById('profile-photo-preview').querySelector('img').src;
                img.className = 'w-full h-full object-cover';
                photoPreview.appendChild(img);

                // Contact information
                const email = document.getElementById('email').value;
                if (email) {
                    document.getElementById('review-email').textContent = email;
                }

                const phone = document.getElementById('phone').value;
                if (phone) {
                    document.getElementById('review-phone').textContent = phone;
                }

                // Skills
                const reviewSkills = document.getElementById('review-skills');
                reviewSkills.innerHTML = '';
                const skillTags = document.querySelectorAll('.skill-tag');
                skillTags.forEach(tag => {
                    const skillName = tag.querySelector('span').textContent;
                    const skillBadge = document.createElement('span');
                    skillBadge.className = 'px-2 py-1 bg-primary-100 text-primary-700 rounded-full text-sm';
                    skillBadge.textContent = skillName;
                    reviewSkills.appendChild(skillBadge);
                });

                // Services
                const reviewServices = document.getElementById('review-services');
                reviewServices.innerHTML = '';
                const serviceItems = document.querySelectorAll('.service-item');
                serviceItems.forEach(item => {
                    const title = item.querySelector('.service-title').value;
                    const description = item.querySelector('.service-description').value;
                    const minCredits = item.querySelector('.service-min-credits').value;
                    const maxCredits = item.querySelector('.service-max-credits').value;

                    const serviceDiv = document.createElement('div');
                    serviceDiv.className = 'p-3 border border-secondary-200 rounded-lg';
                    serviceDiv.innerHTML = `
                        <div class="flex justify-between">
                            <h4 class="font-medium text-secondary-800">${title}</h4>
                            <span class="text-sm bg-primary-50 text-primary-700 px-2 py-0.5 rounded">${minCredits}-${maxCredits} credits</span>
                        </div>
                        <p class="text-sm text-secondary-600 mt-1">${description}</p>
                    `;
                    reviewServices.appendChild(serviceDiv);
                });
            }

            // Form submission
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Validate terms checkbox
                const termsCheckbox = document.getElementById('terms');
                if (!termsCheckbox.checked) {
                    document.getElementById('terms-error').textContent = 'You must agree to the terms to continue';
                    document.getElementById('terms-error').classList.remove('hidden');
                    return;
                }

                // Create form data to send
                const formData = new FormData(form);

                // Get all skills
                const skillTags = skillsContainer.querySelectorAll('.skill-tag');

                // Remove any existing skills inputs from form data
                formData.delete('skills[]');

                // Add each skill to form data
                skillTags.forEach(tag => {
                    const skillName = tag.querySelector('span').textContent;
                    formData.append('skills[]', skillName);
                });

                // Set the CSRF token
                formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                // Submit the form via AJAX
                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                })
                    .then(response => {
                        if (!response.ok) {
                            return response.json().then(errors => {
                                throw errors;
                            });
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Show success message
                        steps.forEach(step => {
                            step.classList.remove('active');
                        });
                        document.getElementById('success-step').classList.add('active');

                        // Hide progress bar
                        document.querySelector('.mb-8.max-w-xl.mx-auto').style.display = 'none';
                    })
                    .catch(errors => {
                        // Display validation errors
                        if (errors.errors) {
                            Object.keys(errors.errors).forEach(field => {
                                const errorElement = document.getElementById(`${field.replace(/\.|\[|\]/g, '-')}-error`);
                                if (errorElement) {
                                    errorElement.textContent = errors.errors[field][0];
                                    errorElement.classList.remove('hidden');
                                }
                            });
                        }
                    });
            });
            // Bio character counter
            const bioTextarea = document.getElementById('bio');
            const bioCounter = document.getElementById('bio-counter');

            bioTextarea.addEventListener('input', function () {
                const currentLength = this.value.length;
                const maxLength = this.getAttribute('maxlength');
                bioCounter.textContent = `${currentLength}/${maxLength}`;
            });

            // Profile photo upload
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

            // Drag and drop for photo upload
            photoDropzone.addEventListener('dragover', function (e) {
                e.preventDefault();
                this.classList.add('drag-over');
            });

            photoDropzone.addEventListener('dragleave', function (e) {
                e.preventDefault();
                this.classList.remove('drag-over');
            });

            photoDropzone.addEventListener('drop', function (e) {
                e.preventDefault();
                this.classList.remove('drag-over');

                if (e.dataTransfer.files && e.dataTransfer.files[0]) {
                    photoInput.files = e.dataTransfer.files;

                    const reader = new FileReader();
                    reader.onload = function (e) {
                        photoPreview.innerHTML = '';
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'w-full h-full object-cover';
                        photoPreview.appendChild(img);
                    };
                    reader.readAsDataURL(e.dataTransfer.files[0]);
                }
            });

            // Skills input
            const skillsInput = document.getElementById('skills-input');
            const addSkillBtn = document.getElementById('add-skill-btn');
            const skillsContainer = document.getElementById('skills-container');

            const skillsHiddenInputs = document.getElementById('skills-hidden-inputs');

            function addSkill(skillName) {
                if (!skillName.trim()) return;

                // Check if skill already exists
                const existingSkills = Array.from(skillsContainer.querySelectorAll('.skill-tag')).map(tag =>
                    tag.querySelector('span').textContent.toLowerCase()
                );

                if (existingSkills.includes(skillName.toLowerCase())) return;

                // Create skill tag
                const skillTag = document.createElement('div');
                skillTag.className = 'skill-tag inline-flex items-center bg-primary-100 text-primary-700 rounded-full px-3 py-1 text-sm';
                skillTag.innerHTML = `
        <span>${skillName}</span>
        <button type="button" class="ml-1 text-primary-500 hover:text-primary-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    `;

                // Create hidden input
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'skills[]';
                hiddenInput.value = skillName;
                skillTag.appendChild(hiddenInput);

                // Add remove logic
                skillTag.querySelector('button').addEventListener('click', function () {
                    skillTag.remove();
                });

                skillsContainer.appendChild(skillTag);
                skillsInput.value = '';
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

            // Services
            const addServiceBtn = document.getElementById('add-service-btn');
            const servicesContainer = document.getElementById('services-container');

            addServiceBtn.addEventListener('click', function () {
                const serviceItem = document.createElement('div');
                serviceItem.className = 'service-item p-4 border border-secondary-200 rounded-lg';
                serviceItem.innerHTML = `
                    <div class="flex justify-between mb-2">
                        <input type="text" name="service-title[]" class="service-title w-full px-4 py-2 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Service Title (e.g., Web Development, Logo Design)" required>
                        <button type="button" class="remove-service ml-2 text-secondary-400 hover:text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                    <textarea name="service-description[]" class="service-description w-full px-4 py-2 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" rows="3" placeholder="Describe this service in detail. What do you offer, and what can clients expect?" required></textarea>
                    <div class="flex items-center mt-2">
                        <span class="text-sm text-secondary-600 mr-2">Estimated credits:</span>
                        <div class="flex items-center space-x-2">
                            <input type="number" name="service-min-credits[]" class="service-min-credits w-20 px-2 py-1 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Min" min="1" required>
                            <span class="text-secondary-500">-</span>
                            <input type="number" name="service-max-credits[]" class="service-max-credits w-20 px-2 py-1 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Max" min="1" required>
                        </div>
                    </div>
                `;

                servicesContainer.appendChild(serviceItem);

                // Show remove button for all service items
                document.querySelectorAll('.remove-service').forEach(btn => {
                    btn.classList.remove('hidden');
                });

                // Add remove event listener
                serviceItem.querySelector('.remove-service').addEventListener('click', function () {
                    serviceItem.remove();

                    // Hide remove button if only one service item remains
                    if (servicesContainer.querySelectorAll('.service-item').length === 1) {
                        servicesContainer.querySelector('.remove-service').classList.add('hidden');
                    }
                });
            });

            // Initialize the form
        });
    </script>
</body>

</html>