<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-sky-200 via-blue-100 to-indigo-200">
    

    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 bg-white opacity-10 rounded-full blur-xl"></div>
        <div class="absolute top-20 right-32 w-24 h-24 bg-white opacity-8 rounded-full blur-lg"></div>
        <div class="absolute bottom-20 left-20 w-40 h-40 bg-white opacity-5 rounded-full blur-2xl"></div>
        <div class="absolute bottom-32 right-16 w-28 h-28 bg-white opacity-7 rounded-full blur-xl"></div>
    </div>


    <nav class="relative z-10 bg-blue-100 backdrop-blur-md border-b border-white/20">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">

                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <span class="text-dark font-semibold text-lg">Madrassa</span>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="text-dark text-sm">
                        Welcome, <span class="font-semibold">{{ auth()->user()->name }}</span>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-full font-medium transition-all duration-200 backdrop-blur-sm border border-white/20 hover:border-white/40">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>


    <main class="relative z-10 max-w-7xl mx-auto px-6 py-12">
        

        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-blue-500 mb-4 drop-shadow-lg">
                User Dashboard
            </h1>
            <p class="text-dark text-xl max-w-2xl mx-auto">
                Welcome back, {{ auth()->user()->name }}! Here's your personalized dashboard where you can manage your account and access all your resources.
            </p>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            

            <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-white/20 hover:shadow-3xl transition-all duration-300 hover:-translate-y-1">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-6 mx-auto">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">My Profile</h3>
                    <p class="text-gray-600 text-center mb-6">View and update your personal information</p>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-xl font-medium transition-all duration-200">
                        View Profile
                    </button>
                </div>
            </div>


            <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-white/20 hover:shadow-3xl transition-all duration-300 hover:-translate-y-1">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-6 mx-auto">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">My Courses</h3>
                    <p class="text-gray-600 text-center mb-6">Access your enrolled courses and materials</p>
                    <button class="w-full bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-xl font-medium transition-all duration-200">
                        View Courses
                    </button>
                </div>
            </div>


            <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-white/20 hover:shadow-3xl transition-all duration-300 hover:-translate-y-1">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-6 mx-auto">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 text-center mb-4">Settings</h3>
                    <p class="text-gray-600 text-center mb-6">Manage your account preferences</p>
                    <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 px-6 rounded-xl font-medium transition-all duration-200">
                        Open Settings
                    </button>
                </div>
            </div>

        </div>


        <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-8 border border-white/20">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Quick Overview</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600 mb-2">5</div>
                    <div class="text-gray-600 font-medium">Enrolled Courses</div>
                </div>
                
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-600 mb-2">12</div>
                    <div class="text-gray-600 font-medium">Completed Lessons</div>
                </div>
                
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-600 mb-2">85%</div>
                    <div class="text-gray-600 font-medium">Progress Rate</div>
                </div>
                
            </div>
        </div>

    </main>

    <style>
        @keyframes pulse {
            0%, 100% { opacity: 0.4; }
            50% { opacity: 0.8; }
        }
        .animate-pulse {
            animation: pulse 3s infinite;
        }
    </style>
</body>
</html>