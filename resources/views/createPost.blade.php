<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Posting Form</title>
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
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Header -->
        <div class="text-center mb-8 fade-in">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Create a New Service</h1>
            <p class="text-gray-600">Fill out the form below to post your service and find the perfect match</p>
        </div>
        
        <!-- Progress Bar -->
        <div class="progress-container fade-in">
            <div id="progressBar" class="progress-bar" style="width: 33%;"></div>
        </div>
        
        <!-- Form Container -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden fade-in">
            <form id="serviceForm" class="p-6">
                <!-- Section Navigation -->
                <div class="flex border-b border-gray-200 mb-6">
                    <button type="button" id="navBasic" class="section-nav px-4 py-2 font-medium text-blue-600 border-b-2 border-blue-600">Basic Info</button>
                    <button type="button" id="navSkills" class="section-nav px-4 py-2 font-medium text-gray-500">Skills & Criteria</button>
                    <button type="button" id="navTransaction" class="section-nav px-4 py-2 font-medium text-gray-500">Transaction Details</button>
                </div>
                
                <!-- Basic Information Section -->
                <div id="basicSection" class="form-section">
                    <div class="space-y-6 slide-in-right">
                        <!-- Service Title -->
                        <div>
                            <label for="serviceTitle" class="block text-sm font-medium text-gray-700">Service Title <span class="text-red-500">*</span></label>
                            <input type="text" id="serviceTitle" name="serviceTitle" 
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="A short, clear name for your service" required>
                            <p class="mt-1 text-xs text-gray-500">Keep it concise and descriptive (max 60 characters)</p>
                        </div>
                        
                        <!-- Service Description -->
                        <div>
                            <label for="serviceDescription" class="block text-sm font-medium text-gray-700">Description <span class="text-red-500">*</span></label>
                            <textarea id="serviceDescription" name="serviceDescription" rows="5"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Provide a detailed explanation of what your service includes..." required></textarea>
                            <p class="mt-1 text-xs text-gray-500">Minimum 100 characters. Be specific about what you offer, your process, and expected outcomes.</p>
                        </div>
                        
                        <!-- Navigation Buttons -->
                        <div class="flex justify-end">
                            <button type="button" id="basicNextBtn" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Next
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Skills & Matchmaking Criteria Section -->
                <div id="skillsSection" class="form-section hidden">
                    <div class="space-y-6 slide-in-right">
                        <!-- Service Category -->
                        <div>
                            <label for="serviceCategory" class="block text-sm font-medium text-gray-700">Category <span class="text-red-500">*</span></label>
                            <select id="serviceCategory" name="serviceCategory" 
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md" required>
                                <option value="" disabled selected>Choose a relevant category</option>
                                <option value="development">Development</option>
                                <option value="design">Design</option>
                                <option value="writing">Writing</option>
                                <option value="marketing">Marketing</option>
                                <option value="video">Video & Animation</option>
                                <option value="audio">Audio & Music</option>
                                <option value="business">Business</option>
                                <option value="lifestyle">Lifestyle</option>
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
                            <div class="mt-2 space-y-2">
                                <div class="flex items-center">
                                    <input id="expBeginner" name="experienceLevel" type="radio" value="beginner" 
                                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300" required>
                                    <label for="expBeginner" class="ml-3 block text-sm font-medium text-gray-700">
                                        Beginner
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="expIntermediate" name="experienceLevel" type="radio" value="intermediate" 
                                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                    <label for="expIntermediate" class="ml-3 block text-sm font-medium text-gray-700">
                                        Intermediate
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="expExpert" name="experienceLevel" type="radio" value="expert" 
                                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300">
                                    <label for="expExpert" class="ml-3 block text-sm font-medium text-gray-700">
                                        Expert
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Target Audience -->
                        <div>
                            <label for="targetAudience" class="block text-sm font-medium text-gray-700">Target Audience <span class="text-red-500">*</span></label>
                            <select id="targetAudience" name="targetAudience" 
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md" required>
                                <option value="" disabled selected>Select target audience</option>
                                <option value="individuals">Individuals</option>
                                <option value="small-businesses">Small Businesses</option>
                                <option value="startups">Startups</option>
                                <option value="enterprises">Enterprises</option>
                            </select>
                        </div>
                        
                        <!-- Languages -->
                        <div>
                            <label for="languages" class="block text-sm font-medium text-gray-700">Language(s) Preferred</label>
                            <select id="languages" name="languages" multiple 
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
                        
                        <!-- Navigation Buttons -->
                        <div class="flex justify-between">
                            <button type="button" id="skillsPrevBtn" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                                Previous
                            </button>
                            <button type="button" id="skillsNextBtn" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Next
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Transaction Details Section -->
                <div id="transactionSection" class="form-section hidden">
                    <div class="space-y-6 slide-in-right">
                        <!-- Credit Cost -->
                        <div>
                            <label for="creditCost" class="block text-sm font-medium text-gray-700">Credit Cost <span class="text-red-500">*</span></label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="number" name="creditCost" id="creditCost" min="1" step="1"
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
                                    <input type="number" name="timeValue" id="timeValue" min="1" step="1"
                                        class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 pr-3 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Duration" required>
                                </div>
                                <div>
                                    <select id="timeUnit" name="timeUnit" 
                                        class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md" required>
                                        <option value="hours">Hours</option>
                                        <option value="days">Days</option>
                                        <option value="weeks">Weeks</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Availability -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Availability <span class="text-red-500">*</span></label>
                            <div class="mt-2 space-y-2">
                                <div class="flex items-center">
                                    <input id="availImmediate" name="availability" type="checkbox" value="immediate" 
                                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                    <label for="availImmediate" class="ml-3 block text-sm font-medium text-gray-700">
                                        Immediate Start
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="availScheduled" name="availability" type="checkbox" value="scheduled" 
                                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                    <label for="availScheduled" class="ml-3 block text-sm font-medium text-gray-700">
                                        Scheduled
                                    </label>
                                </div>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">Select at least one option</p>
                        </div>
                        
                        <!-- Additional Notes -->
                        <div>
                            <label for="additionalNotes" class="block text-sm font-medium text-gray-700">Additional Notes</label>
                            <textarea id="additionalNotes" name="additionalNotes" rows="3"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Any other details you'd like to share..."></textarea>
                        </div>
                        
                        <!-- Navigation Buttons -->
                        <div class="flex justify-between">
                            <button type="button" id="transactionPrevBtn" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                                Previous
                            </button>
                            <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Publish Service
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Preview Card (shows up after form is filled) -->
        <div id="previewCard" class="mt-8 bg-white rounded-xl shadow-md overflow-hidden hidden fade-in">
            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Service Preview</h2>
                <div class="border border-gray-200 rounded-lg p-4">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-medium">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-base font-semibold text-gray-900">Your Name</h3>
                            <p class="text-sm text-gray-500">Just now</p>
                        </div>
                    </div>
                    
                    <h2 id="previewTitle" class="text-xl font-bold text-gray-900 mb-2">Service Title</h2>
                    <p id="previewDescription" class="text-gray-700 mb-4">Service description will appear here...</p>
                    
                    <div id="previewTags" class="flex flex-wrap gap-2 mb-4">
                        <!-- Tags will be added here dynamically -->
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="text-gray-700 font-medium">
                            <span id="previewCredits" class="text-lg font-bold text-gray-900">0</span> credits
                        </div>
                        <div class="text-sm text-gray-500">
                            Est. time: <span id="previewTime">--</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   <script src="{{ asset('js/createPost.js') }}"></script>
</body>
</html>