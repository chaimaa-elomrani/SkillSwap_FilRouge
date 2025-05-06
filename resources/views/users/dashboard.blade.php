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
    <!-- Add Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50 font-sans">
  
        
      
            <!-- Header -->
            @include('layouts.header   ')
           

            <!-- Dashboard Content -->
            <main class="p-6">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold tracking-tight">Dashboard</h1>
                    <p class="text-gray-500">Welcome back, John! Here's an overview of your service activity.</p>
                </div>

                <!-- Analytics Section with Charts -->
                <div class="mb-8 grid gap-8 md:grid-cols-2">
                    <!-- Activity Overview Chart -->
                    <div class="rounded-lg border bg-white shadow-sm p-6">
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold">Activity Overview</h2>
                            <p class="text-sm text-gray-500">Your service activity over the last 6 months</p>
                        </div>
                        <div class="h-80">
                            <canvas id="activityChart"></canvas>
                        </div>
                    </div>
                    
                    <!-- Credits Distribution Chart -->
                    <div class="rounded-lg border bg-white shadow-sm p-6">
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold">Credits Distribution</h2>
                            <p class="text-sm text-gray-500">How your credits are earned and spent</p>
                        </div>
                        <div class="h-80">
                            <canvas id="creditsChart"></canvas>
                        </div>
                    </div>
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

    <!-- Add Chart.js initialization script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Activity Chart
            const activityCtx = document.getElementById('activityChart').getContext('2d');
            const activityChart = new Chart(activityCtx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [
                        {
                            label: 'Services Provided',
                            data: [5, 8, 12, 9, 14, 16],
                            borderColor: 'rgb(59, 130, 246)',
                            backgroundColor: 'rgba(59, 130, 246, 0.1)',
                            tension: 0.4,
                            fill: true
                        },
                        {
                            label: 'Services Received',
                            data: [3, 5, 7, 8, 6, 10],
                            borderColor: 'rgb(236, 72, 153)',
                            backgroundColor: 'rgba(236, 72, 153, 0.1)',
                            tension: 0.4,
                            fill: true
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            backgroundColor: 'rgba(255, 255, 255, 0.9)',
                            titleColor: '#111827',
                            bodyColor: '#4B5563',
                            borderColor: '#E5E7EB',
                            borderWidth: 1,
                            padding: 12,
                            boxPadding: 6,
                            usePointStyle: true,
                            callbacks: {
                                // You can customize tooltip text here
                                label: function(context) {
                                    return context.dataset.label + ': ' + context.raw + ' services';
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: true,
                            grid: {
                                borderDash: [2, 4],
                                color: '#E5E7EB'
                            },
                            ticks: {
                                precision: 0
                            }
                        }
                    },
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    elements: {
                        point: {
                            radius: 3,
                            hoverRadius: 6
                        }
                    }
                }
            });

            // Credits Distribution Chart
            const creditsCtx = document.getElementById('creditsChart').getContext('2d');
            const creditsChart = new Chart(creditsCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Earned', 'Spent', 'Available'],
                    datasets: [{
                        data: [350, 220, 130],
                        backgroundColor: [
                            'rgba(16, 185, 129, 0.8)',  // Green for earned
                            'rgba(239, 68, 68, 0.8)',   // Red for spent
                            'rgba(59, 130, 246, 0.8)'   // Blue for available
                        ],
                        borderColor: [
                            'rgba(16, 185, 129, 1)',
                            'rgba(239, 68, 68, 1)',
                            'rgba(59, 130, 246, 1)'
                        ],
                        borderWidth: 1,
                        hoverOffset: 15
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '65%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(255, 255, 255, 0.9)',
                            titleColor: '#111827',
                            bodyColor: '#4B5563',
                            borderColor: '#E5E7EB',
                            borderWidth: 1,
                            padding: 12,
                            boxPadding: 6,
                            usePointStyle: true,
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + context.raw + ' credits';
                                }
                            }
                        }
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            });

            // Make charts responsive
            window.addEventListener('resize', function() {
                activityChart.resize();
                creditsChart.resize();
            });
        });
    </script>
</body>
</html>
