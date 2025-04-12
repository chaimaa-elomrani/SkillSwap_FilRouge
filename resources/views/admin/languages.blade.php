<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills Management - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        secondary: '#6366f1',
                        success: '#10b981',
                        warning: '#f59e0b',
                        danger: '#ef4444',
                        info: '#3b82f6',
                        light: '#f3f4f6',
                        dark: '#1f2937',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideInUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        pulse: {
                            '0%, 100%': { opacity: '1' },
                            '50%': { opacity: '0.7' },
                        },
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' },
                        }
                    },
                    animation: {
                        fadeIn: 'fadeIn 0.5s ease-out',
                        slideInUp: 'slideInUp 0.5s ease-out',
                        pulse: 'pulse 2s infinite',
                        wiggle: 'wiggle 0.3s ease-in-out',
                    }
                }
            }
        }
    </script>


    <style>
        /* Animation classes */
        .fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }

        .slide-in-up {
            animation: slideInUp 0.5s ease-out forwards;
        }

        .scale-in {
            animation: scaleIn 0.3s ease-out forwards;
        }

        .tab-transition {
            transition: all 0.3s ease;
        }

        .btn-transition {
            transition: all 0.2s ease;
            transform: translateY(0);
        }

        .btn-transition:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .btn-transition:active {
            transform: translateY(0);
        }

        /* Modal animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Table row hover effect */
        tr.hover-effect {
            transition: background-color 0.2s ease;
        }

        tr.hover-effect:hover {
            background-color: rgba(243, 244, 246, 0.7);
        }

        /* Input focus animation */
        .input-focus-effect {
            transition: all 0.3s ease;
        }

        .input-focus-effect:focus {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.1), 0 2px 4px -1px rgba(79, 70, 229, 0.06);
        }

        /* Sidebar link hover effect */
        .sidebar-link {
            transition: all 0.2s ease;
            position: relative;
        }

        .sidebar-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #4f46e5;
            transition: width 0.3s ease;
        }

        .sidebar-link:hover::after {
            width: 100%;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-10 fade-in">
        <div class="p-4 border-b">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded bg-blue-500 flex items-center justify-center text-white">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div class="ml-3">
                    <h1 class="text-lg font-semibold">SkillSwap</h1>
                    <p class="text-xs text-gray-500">Admin Dashboard</p>
                </div>
            </div>
        </div>

        <div class="py-4">
            <p class="px-4 text-xs text-gray-400 mb-2">MENU</p>
            <ul>
                <li class="px-4 py-2 hover:bg-gray-100">
                    <a href="#" class="flex items-center text-gray-700 sidebar-link">
                        <i class="fas fa-tachometer-alt w-5"></i>
                        <span class="ml-2">Dashboard</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-100">
                    <a href="#" class="flex items-center text-gray-700 sidebar-link">
                        <i class="fas fa-users w-5"></i>
                        <span class="ml-2">User Management</span>
                    </a>
                </li>
                <li class="px-4 py-2 bg-blue-50 text-blue-600 border-l-4 border-blue-500">
                    <a href="#" class="flex items-center sidebar-link">
                        <i class="fas fa-cogs w-5"></i>
                        <span class="ml-2">Skills Management</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-100">
                    <a href="#" class="flex items-center text-gray-700 sidebar-link">
                        <i class="fas fa-exchange-alt w-5"></i>
                        <span class="ml-2">Transactions</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-100">
                    <a href="#" class="flex items-center text-gray-700 sidebar-link">
                        <i class="fas fa-shield-alt w-5"></i>
                        <span class="ml-2">Content Moderation</span>
                    </a>
                </li>
            </ul>

            <p class="px-4 text-xs text-gray-400 mt-6 mb-2">REPORTS</p>
            <ul>
                <li class="px-4 py-2 hover:bg-gray-100">
                    <a href="#" class="flex items-center text-gray-700 sidebar-link">
                        <i class="fas fa-chart-line w-5"></i>
                        <span class="ml-2">Performance</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-100">
                    <a href="#" class="flex items-center text-gray-700 sidebar-link">
                        <i class="fas fa-file-alt w-5"></i>
                        <span class="ml-2">Reports</span>
                    </a>
                </li>
            </ul>

            <p class="px-4 text-xs text-gray-400 mt-6 mb-2">SETTINGS</p>
            <ul>
                <li class="px-4 py-2 hover:bg-gray-100">
                    <a href="#" class="flex items-center text-gray-700 sidebar-link">
                        <i class="fas fa-cog w-5"></i>
                        <span class="ml-2">General Settings</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-100">
                    <a href="#" class="flex items-center text-gray-700 sidebar-link">
                        <i class="fas fa-credit-card w-5"></i>
                        <span class="ml-2">Credit System</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-4 border-t">
            <div class="flex items-center">
                <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                <div class="ml-3">
                    <p class="text-sm font-medium">Admin User</p>
                    <p class="text-xs text-gray-500">Super Admin</p>
                </div>
                <div class="ml-auto">
                    <i class="fas fa-sign-out-alt text-gray-400 hover:text-gray-700 transition-colors duration-200"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="ml-64 p-8 slide-in-up" style="animation-delay: 0.2s;">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-2xl font-semibold">Skills Management</h1>
                <p class="text-gray-500">Manage and oversee all skills, domains, and languages on the SkillSwap platform
                </p>
            </div>
            <div class="flex items-center">
                <div class="relative mr-4">
                    <input type="text" placeholder="Search..."
                        class="pl-10 pr-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500 input-focus-effect">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <div class="relative mr-4">
                    <i class="fas fa-bell text-gray-500 hover:text-gray-700 transition-colors duration-200"></i>
                    <span
                        class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full text-white text-xs flex items-center justify-center animate-pulse">3</span>
                </div>
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                    <span class="ml-2 text-sm font-medium">Admin User</span>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <div class="mb-6 border-b">
            <ul class="flex" id="tabs">
                <li class="mr-1">
                    <a href="#"
                        class="inline-block px-4 py-2 text-blue-500 font-medium border-b-2 border-blue-500 tab-active tab-transition"
                        data-tab="skills">Languages</a>
                </li>

            </ul>
        </div>

        <!-- Tab Content -->
        <div id="tab-content">
            <!-- Languages Tab -->
            <div id="languages-tab" class="">
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex justify-between items-center mb-6">
                        <div class="flex space-x-4">


                        </div>
                        <div class="flex space-x-3">
                            <button id="add-language-btn"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md flex items-center btn-transition">
                                <i class="fas fa-plus mr-2"></i> Add New Language
                            </button>
                            <button
                                class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-md flex items-center btn-transition">
                                <i class="fas fa-file-export mr-2"></i> Export
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center mb-4">

                        <div class="ml-auto text-sm text-gray-500">
                            <span>kdj</span> languages total
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="text-left text-xs text-gray-500 border-b">
                                    <th class="pb-3 font-medium">LANGUAGE <i class="fas fa-sort ml-1"></i></th>
                                    <th class="pb-3 font-medium">CREATED <i class="fas fa-sort ml-1"></i></th>
                                    <th class="pb-3 font-medium">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($languages as $language)
                                    <tr class="border-b hover-effect">
                                        <td class="py-4 font-medium">{{ $language->name }}</td>

                                        <td class="py-4 text-gray-500">{{$language->created_at}}</td>
                                        <td class="py-4">
                                            <button
                                                class="text-blue-500 hover:text-blue-700 mr-3 transition-colors duration-200 hover:scale-110 transform"><i
                                                    class="fas fa-edit"></i></button>
                                            <form action="{{ route('languages.destroy', $language->id) }}" method="POST"
                                                style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-500 hover:text-red-700 transition-colors hover:scale-110 "><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="flex justify-between items-center mt-6">
                        <div class="text-sm text-gray-500">
                            <p class="text-muted text-center mt-3">
                                Page {{ $languages->currentPage() }} sur {{ $languages->lastPage() }} —
                                Total : {{ $languages->total() }} compétences
                            </p>
                        </div>
                        <div class="d-flex ">
                            {{ $languages->onEachSide(0)->links('pagination::simple-bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal for Add Language -->
    <div id="languagesModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg w-full max-w-md p-6 scale-in">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Add New Language</h3>
                <button
                    class="text-gray-500 hover:text-gray-700 close-modal transition-colors duration-200 hover:rotate-90 transform">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form id="add-language-form" method="POST" action="{{ route('languages.create') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Language Name</label>
                    <input id="log" type="text" name="name"
                        class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 input-focus-effect"
                        required>
                </div>

                <div class="flex justify-end space-x-3">
                    <button type="button"
                        class="px-4 py-2 border rounded-md text-gray-700 hover:bg-gray-100 close-modal btn-transition">Cancel</button>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 btn-transition">Save
                        Language</button>
                </div>
            </form>
        </div>
    </div>



    <script>

        document.addEventListener('DOMContentLoaded', function () {
            // Get references to DOM elements
            const addlanguageBtn = document.getElementById('add-language-btn');
            const languageModal = document.getElementById('languagesModal');
            const closeModalBtns = document.querySelectorAll('.close-modal');
            const addlanguageForm = document.getElementById('add-language-form');

            // Show modal when "Add New language" button is clicked
            addlanguageBtn.addEventListener('click', function () {
                languageModal.classList.remove('hidden');
            });

            // Hide modal when close buttons are clicked
            closeModalBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    languageModal.classList.add('hidden');
                });
            });

            // Close modal when clicking outside the modal content
            window.addEventListener('click', function (e) {
                if (e.target === languageModal) {
                    languageModal.classList.add('hidden');
                }
            });

            // Handle form submission
            if (addlanguageForm) {
                addlanguageForm.addEventListener('submit', function (e) {
                    // Let the form submit naturally - no need to prevent default
                    // The form already has the correct action and method attributes
                    // and will automatically include the CSRF token
                });
            }
        });
    </script>


</body>

</html>