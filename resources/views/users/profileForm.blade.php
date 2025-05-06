<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap - Échangez vos compétences facilement</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SkillSwap | Complete Your Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .drag-over {
            border-color: #0ea5e9;
            background-color: #e0f2fe;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen font-sans text-gray-800">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Header -->
        <header class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Complete Your Profile</h2>
            <p class="text-gray-600 max-w-xl mx-auto">Let's set up your professional profile so others can
                discover your services. This information helps match you with the right opportunities.</p>
        </header>

     

        <!-- Form Container -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 max-w-3xl mx-auto overflow-hidden">
            <form id="onboarding-form" action="{{ route('profile.store') }}" method='POST' class="relative" enctype="multipart/form-data">
                @csrf
                <!-- Hidden input for user ID -->
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <!-- Step 1: Basic Information -->
                <div class="form-step active p-8 " id="step-1" data-step="1">
                    <h3 class="text-xl font-semibold mb-6">Basic Information</h3>

                    <!-- Full Name -->
                    <div class="mb-6">
                        <label for="full-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name
                            <span class="text-red-500">*</span></label>
                        <input type="text" id="full-name" name="name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Your full name" required>
                        <div class="hidden mt-1 text-sm text-red-500" id="full-name-error"></div>
                    </div>

                    <!-- Profile Photo -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Profile Photo <span
                                class="text-red-500">*</span></label>
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div id="profile-photo-preview"
                                    class="w-24 h-24 rounded-full bg-gray-100 flex items-center justify-center overflow-hidden border-2 border-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow">
                                <div id="profile-photo-dropzone"
                                    class="border-2 border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center cursor-pointer hover:bg-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400 mb-2"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p class="text-sm text-gray-500 mb-1">Drag and drop your photo here, or</p>
                                    <button type="button" id="profile-photo-btn"
                                        class="text-sm font-medium text-blue-600 hover:text-blue-700">Browse
                                        files</button>
                                    <input type="file" id="profile-photo-input" name="image" class="hidden"
                                        accept="image/*" required>
                                    <p class="text-xs text-gray-400 mt-2">JPG, PNG or GIF, max 5MB</p>
                                </div>
                                <div class="hidden mt-1 text-sm text-red-500" id="profile-photo-error"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Professional Title -->
                    <div class="mb-6">
                        <label for="professional-title"
                            class="block text-sm font-medium text-gray-700 mb-1">Professional Title <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="professional-title" name="title"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="e.g., UX Designer, Software Engineer, Marketing Consultant" required>
                        <div class="hidden mt-1 text-sm text-red-500" id="professional-title-error"></div>
                    </div>

                    <!-- Bio -->
                    <div class="mb-6">
                        <div class="flex justify-between mb-1">
                            <label for="bio" class="block text-sm font-medium text-gray-700">Short Bio <span
                                    class="text-red-500">*</span></label>
                            <span class="text-xs text-gray-500" id="bio-counter">0/300</span>
                        </div>
                        <textarea id="bio" name="bio" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Tell others about yourself, your expertise, and what you're passionate about"
                            maxlength="300" required></textarea>
                        <div class="hidden mt-1 text-sm text-red-500" id="bio-error"></div>
                    </div>

                    <div class="flex justify-end">
                        <button type="button"
                            class="next-step px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Continue
                        </button>
                    </div>
                </div>

                <!-- Step 2: Location and Contact -->
                <div class="form-step p-8 hidden" id="step-2" data-step="2">
                    <h3 class="text-xl font-semibold mb-6">Location & Contact Information</h3>

                    <!-- Location -->
                    <div class="mb-6">
                        <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="city" name="location"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Your city and country" required>
                        <div class="hidden mt-1 text-sm text-red-500" id="city-error"></div>
                    </div>

                    <!-- status  -->
                    <div class="mb-6">
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status <span
                                class="text-red-500">*</span></label>
                        <select id="status" name="status"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option value="">Select your status</option>
                            <option value="available">Available</option>
                            <option value="limited_availability">Limited Availability</option>
                            <option value="unavailable">unvailable</option>
                        </select>
                    </div>


                    <!--  domain -->
                    <div class="mb-6">
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Domain <span
                                class="text-red-500">*</span></label>
                        <select id="domain_id" name="domain_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            required>
                            <option value="">Select your Domain</option>
                            @foreach ($domains as $domain)
                                <option value="{{ $domain->id }}">{{ $domain->name }}</option>
                            @endforeach

                        </select>
                    </div>


                    <!-- Optional Contact Fields -->
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-md font-medium text-gray-700">Optional Contact Information</h4>
                            <div class="flex items-center">
                                <span class="text-xs text-gray-500 mr-2">Private by default</span>
                                <span
                                    class="inline-flex items-center justify-center w-5 h-5 bg-gray-100 text-gray-500 rounded-full">
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
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone
                                    Number</label>
                                <div class="flex items-center">
                                    <span class="text-xs text-gray-500 mr-2">Visible to public</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="phone-public" class="sr-only peer"
                                            id="phone-public">
                                        <div
                                            class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-blue-500">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <input type="tel" id="phone" name="phone_number"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Your phone number">
                        </div>

                        <!-- Email Address -->
                        <div class="mb-4">
                            <div class="flex items-center justify-between mb-1">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email
                                    Address</label>
                                <div class="flex items-center">
                                    <span class="text-xs text-gray-500 mr-2">Visible to public</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="email-public" class="sr-only peer"
                                            id="email-public">
                                        <div
                                            class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-blue-500">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Your email address">
                        </div>
                    </div>

                    <!-- Terms Checkbox -->
                    <div class="mb-6">
                        <label class="flex items-start">
                            <input type="checkbox" name="terms" id="terms"
                                class="rounded text-blue-600 focus:ring-blue-500 h-4 w-4 mt-1" required>
                            <span class="ml-2 text-gray-700 text-sm">
                                I agree to SkillSwap's <a href="#" class="text-blue-600 hover:text-blue-700">Terms
                                    of Service</a> and <a href="#" class="text-blue-600 hover:text-blue-700">Privacy
                                    Policy</a>. I confirm that all information provided is accurate.
                            </span>
                        </label>
                        <div class="hidden mt-1 text-sm text-red-500" id="terms-error"></div>
                    </div>

                    <div class="flex justify-between">
                        <button type="button"
                            class="prev-step px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Back
                        </button>
                        <button type="submit" id="submit-button"
                            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
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
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Profile Completed!</h3>
                        <p class="text-gray-600 mb-6">Your profile has been successfully created. You're now ready
                            to start exchanging skills on SkillSwap.</p>
                        <div class="flex flex-col sm:flex-row justify-center gap-4">
                            <a href="#"
                                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                View Your Profile
                            </a>
                            <a href="#"
                                class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Explore SkillSwap
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

   <script src="{{ asset('js/profileForm.js') }}"></script>
</body>

</html>