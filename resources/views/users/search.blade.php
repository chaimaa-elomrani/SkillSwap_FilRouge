<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Categories - The Complete Freelance Marketplace</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
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
                        accent: {
                            purple: '#8b5cf6',
                            pink: '#ec4899',
                            orange: '#f97316',
                            teal: '#14b8a6',
                            green: '#22c55e',
                            red: '#ef4444',
                            yellow: '#eab308',
                            indigo: '#6366f1',
                        },
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 3s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .text-shadow {
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            .text-shadow-lg {
                text-shadow: 0 4px 8px rgba(0, 0, 0, 0.12), 0 2px 4px rgba(0, 0, 0, 0.08);
            }
            .gradient-overlay {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.6));
            }
            .gradient-text {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-primary-500 to-accent-purple;
            }
            .card-lift {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .card-lift:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            .parallax {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .badge {
                @apply px-2 py-1 text-xs rounded-full;
            }
            .badge-blue {
                @apply bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200;
            }
            .badge-purple {
                @apply bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200;
            }
            .badge-pink {
                @apply bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200;
            }
            .badge-green {
                @apply bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200;
            }
            .badge-red {
                @apply bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200;
            }
            .badge-orange {
                @apply bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200;
            }
            .badge-teal {
                @apply bg-teal-100 dark:bg-teal-900 text-teal-800 dark:text-teal-200;
            }
            .badge-indigo {
                @apply bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200;
            }
            .badge-yellow {
                @apply bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200;
            }
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300"></body>