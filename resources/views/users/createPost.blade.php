<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap - Échangez vos compétences facilement</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <style>
        /* Animation classes */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(30px);
        }
        
        /* Custom select styling */
        .custom-select-dropdown {
            position: absolute;
            z-index: 10;
            width: 100%;
            border-radius: 0.375rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        /* Tags input styling */
        .tags-container {
            display: flex;
            flex-wrap: wrap;
            padding: 0.5rem;
            gap: 0.5rem;
            align-items: center;
        }
        
        .tag {
            display: flex;
            align-items: center;
            background-color: #EBF5FF;
            color: #3B82F6;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.875rem;
        }
        
        .tag-remove {
            margin-left: 0.25rem;
            cursor: pointer;
        }
        
        /* Progress indicator */
        .progress-container {
            width: 100%;
            height: 4px;
            background-color: #E5E7EB;
            border-radius: 2px;
            margin-bottom: 1.5rem;
        }
        
        .progress-bar {
            height: 100%;
            background-color: #3B82F6;
            border-radius: 2px;
            transition: width 0.3s ease;
        }
        
        /* Form section transitions */
        .form-section {
            transition: all 0.3s ease;
        }
        
        .form-section.hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-[#ebf1fa] min-h-screen ">
@include('layouts/header')
    <div class="container mx-auto px-4 max-w-4xl">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Create a New Service</h1>
            <p class="text-gray-600">Fill out the form below to post your service and find the perfect match</p>
        </div>
        
        <!-- Form Container -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">

            <form id="serviceForm" class="p-6" method="POST" action="{{ route('posts.store') }}">
              @csrf
                <!-- Basic Information Section -->
                <div class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Basic Information</h2>
                    <div class="space-y-6">
                        <!-- Service Title -->
                        <div>
                            <label for="serviceTitle" class="block text-sm font-medium text-gray-700">Service Title <span class="text-red-500">*</span></label>
                            <input type="text" id="serviceTitle" name="title" 
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="A short, clear name for your service" required>
                            <p class="mt-1 text-xs text-gray-500">Keep it concise and descriptive (max 60 characters)</p>
                        </div>
                        
                        <!-- Service Description -->
                        <div>
                            <label for="serviceDescription" class="block text-sm font-medium text-gray-700">Description <span class="text-red-500">*</span></label>
                            <textarea id="serviceDescription" name="description" rows="4"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Provide a detailed explanation of what your service includes..." required></textarea>
                            <p class="mt-1 text-xs text-gray-500">Be specific about what you offer, your process, and expected outcomes.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Skills & Matchmaking Criteria Section -->
                <div class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Skills & Criteria</h2>
                    <div class="space-y-6">
                        <!-- Service Category -->
                        <div>
                            <label for="serviceCategory" class="block text-sm font-medium text-gray-700">Domain <span class="text-red-500">*</span></label>
                            <select id="serviceCategory" name="domain_id" 
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md" required>
                                <option value="" disabled selected>Choose a relevant Domain</option>
                                @foreach ($domains as $domain)
                                <option value="{{ $domain->id }}">{{ $domain->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- Skills Required -->
                        <div>
                            <label for="skillsInput" class="block text-sm font-medium text-gray-700">Skills Required <span class="text-red-500">*</span></label>
                            <div class="mt-1 border border-gray-300 rounded-md shadow-sm focus-within:border-blue-500 focus-within:ring-1 focus-within:ring-blue-500">
                                <div id="tagsContainer" class="tags-container">
                                    <div id="tagsDisplay" class="flex flex-wrap gap-2"></div>
                                    <input type="text" id="skillsInput"
                                        class="flex-grow min-w-[120px] border-0 p-0 focus:ring-0 sm:text-sm"
                                        placeholder="Type a skill and press Enter">
                                </div>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">Add keywords representing the skills needed for the service (minimum 3)</p>
                            <input type="hidden" id="skillsHidden" name="skills" required>
                        </div>
                        
                        <!-- Experience Level -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Preferred Experience Level <span class="text-red-500">*</span></label>
                            <div class="mt-2 space-y-2 w-full">
                               <select name="experience" id="experienceSelect" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md" required>
                                  <option value="">Select Experience Level</option>
                                  <option value="Beginner">Beginner</option>
                                  <option value="Intermediate">Intermediate</option>
                                  <option value="Expert">Expert</option>
                               </select>
                            </div>
                        </div>
                        
                        <!-- Languages -->
                        <div>
                            <label for="languages" class="block text-sm font-medium text-gray-700">Language(s) Preferred</label>
                            <select id="languages" name="languages[]" multiple 
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="english">English</option>
                                <option value="spanish">Spanish</option>
                                <option value="french">French</option>
                                <option value="german">German</option>
                                <option value="chinese">Chinese</option>
                                <option value="japanese">Japanese</option>
                                <option value="arabic">Arabic</option>
                                <option value="russian">Russian</option>
                            </select>
                            <p class="mt-1 text-xs text-gray-500">Hold Ctrl/Cmd to select multiple languages</p>
                        </div>
                    </div>
                </div>
                
                <!-- Transaction Details Section -->
                <div class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Transaction Details</h2>
                    <div class="space-y-6">
                        <!-- Credit Cost -->
                        <div>
                            <label for="creditCost" class="block text-sm font-medium text-gray-700">Credit Cost <span class="text-red-500">*</span></label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="number" name="credits_cost" id="creditCost" min="1" step="1"
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 pr-12 sm:text-sm border-gray-300 rounded-md"
                                    placeholder="0" required>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">credits</span>
                                </div>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">How many credits you will charge for this service</p>
                        </div>
                        
                        <!-- Estimated Time -->
                        <div>
                            <label for="estimatedTime" class="block text-sm font-medium text-gray-700">Estimated Time to Complete <span class="text-red-500">*</span></label>
                            <div class="mt-1 grid grid-cols-2 gap-4">
                                <div>
                                    <input type="number" name="duration" id="timeValue" min="1" step="1"
                                        class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 pr-3 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Duration" required>
                                </div>
                                <div>
                                    <select id="timeUnit" name="duration_unit" 
                                        class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md" required>
                                        <option value="hours">Hours</option>
                                        <option value="days">Days</option>
                                        <option value="weeks">Weeks</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Publish Service
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tags input
            initTagsInput();
            
            // Remove local validation to allow the server-side validation to work
            const form = document.getElementById('serviceForm');
            // We will keep the basic field validation but remove the preventDefault
        });
        
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
            }
            
            // Function to remove a tag
            function removeTag(tag, element) {
                tags = tags.filter(t => t !== tag);
                element.remove();
                updateHiddenField();
            }
            
            // Update hidden field with tags
            function updateHiddenField() {
                tagsHidden.value = tags.join(',');
            }
        }
    </script>
</body>
</html>