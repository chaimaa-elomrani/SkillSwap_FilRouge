<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap - Échangez vos compétences facilement</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>Service Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out bg-white border-r border-gray-200">
            <div class="flex h-16 items-center border-b px-6">
                <div class="flex items-center gap-2 font-semibold">
                    <i class="fas fa-box text-gray-700"></i>
                    <span>ServiceHub</span>
                </div>
            </div>
            <nav class="flex flex-col gap-1 p-4">
                <a href="#" class="flex items-center gap-3 rounded-lg bg-gray-100 px-4 py-2 text-gray-900 transition-all">
                    <i class="fas fa-home text-sm"></i>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-all">
                    <i class="fas fa-credit-card text-sm"></i>
                    <span>Transactions</span>
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-all">
                    <i class="fas fa-box-open text-sm"></i>
                    <span>Services</span>
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-all">
                    <i class="fas fa-user text-sm"></i>
                    <span>Profile</span>
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-all">
                    <i class="fas fa-cog text-sm"></i>
                    <span>Settings</span>
                </a>
            </nav>
            <div class="mt-auto border-t p-4">
                <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-50 hover:text-gray-900 transition-all">
                    <i class="fas fa-sign-out-alt text-sm"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 md:ml-64">
            <!-- Header -->
            <header class="sticky top-0 z-10 flex h-16 items-center gap-4 border-b bg-white px-6">
                <button id="sidebar-toggle" class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 md:hidden">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="ml-auto flex items-center gap-4">
                    <button class="relative rounded-full p-2 text-gray-500 hover:bg-gray-100">
                        <i class="fas fa-bell"></i>
                        <span class="absolute top-1 right-1 h-2 w-2 rounded-full bg-red-500"></span>
                    </button>
                    <div class="relative" id="user-menu">
                        <button class="flex items-center gap-2 rounded-lg border px-3 py-1.5 text-sm text-gray-700 hover:bg-gray-50" id="user-menu-button">
                            <img src="https://via.placeholder.com/32" alt="User" class="h-8 w-8 rounded-full">
                            <span class="hidden md:inline-block">John Doe</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 hidden" id="user-dropdown">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="p-6">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold tracking-tight">Dashboard</h1>
                    <p class="text-gray-500">Welcome back, John! Here's an overview of your service activity.</p>
                </div>

                <!-- Transactions History -->
                <div class="mb-8 rounded-lg border bg-white shadow-sm">
                    <div class="flex flex-wrap items-center justify-between border-b p-6">
                        <div>
                            <h2 class="text-lg font-semibold">Transactions History</h2>
                            <p class="text-sm text-gray-500">A record of your past service transactions.</p>
                        </div>
                        <button class="mt-2 rounded-lg border px-3 py-1.5 text-sm hover:bg-gray-50 sm:mt-0">
                            View All
                        </button>
                    </div>
                    <div class="overflow-x-auto p-6">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="border-b text-left text-sm font-medium text-gray-500">
                                    <th class="pb-3 pr-6">Service</th>
                                    <th class="pb-3 pr-6">Date</th>
                                    <th class="pb-3 text-right">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction )
                                <tr class="border-b">
                                    <td class="py-4 pr-6 font-medium">{{ $transaction->post->title ?? 'N/A' }}</td>
                                    <td class="py-4 pr-6 text-sm text-gray-500">{{ $transaction->created_at }}</td>
                                    <td class="py-4 text-right">{{ $transaction->amount }}</td>
                                </tr>                                 
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pending Services and Services to Confirm -->
                <div class="grid gap-8 md:grid-cols-1">
                    <!-- Services to Confirm -->
                    <div class="rounded-lg border bg-white shadow-sm w-full ">
                        <div class="border-b p-6">
                            <h2 class="text-lg font-semibold">Services to Confirm</h2>
                            <p class="text-sm text-gray-500">Services awaiting your confirmation to release payment.</p>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach ($pendingServices as $post)
                            @foreach ($post->requests as $request)
                                <div class="rounded-lg border p-4">
                                    <div class="flex flex-wrap items-start justify-between gap-2">
                                        <div>
                                            <h3 class="font-medium">{{ $post->title}}</h3>
                                            <p class="text-gray-700 text-sm mb-3">{{ $post->description }}</p>
                                            <p class="text-sm text-gray-500">Delivered on May 12, 2023</p>
                                        </div>
                                        <span class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                                            with: {{ $request->user->name }}
                                        </span>
                                    </div>
                                    <div class="mt-4 grid md:grid-cols-3 gap-4">
                                        <form action="{{ route('transactions.confirm' , $request->id)}}" method="POST">
                                            @csrf
                                        <button type="submit" id=" ConfirmBtn" class="flex-1 rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                                            Confirm Delivery
                                        </button>
                                        </form>
                                        <button id="DisputeBtn" class="flex-1 rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                                            Dispute
                                        </button>
                                    </div>  
                                </div>
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
</html>