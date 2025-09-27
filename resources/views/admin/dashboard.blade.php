<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-800 via-gray-800 to-black">
    

    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500 opacity-10 rounded-full blur-xl"></div>
        <div class="absolute top-20 right-32 w-24 h-24 bg-purple-500 opacity-8 rounded-full blur-lg"></div>
        <div class="absolute bottom-20 left-20 w-40 h-40 bg-indigo-500 opacity-5 rounded-full blur-2xl"></div>
        <div class="absolute bottom-32 right-16 w-28 h-28 bg-cyan-500 opacity-7 rounded-full blur-xl"></div>
    </div>

    <nav class="relative z-10 bg-black/30 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">

                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center backdrop-blur-sm shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div>
                        <span class="text-white font-semibold text-lg">Madrassa</span>
                        <div class="text-blue-400 text-xs font-medium">ADMIN PANEL</div>
                    </div>
                </div>


                <div class="flex items-center space-x-4">
                    <div class="text-white text-sm">
                        Welcome back, <span class="font-semibold text-blue-400">{{ auth()->user()->name }}</span>
                        <div class="text-xs text-gray-400">Administrator</div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-600/80 hover:bg-red-600 text-white px-4 py-2 rounded-full font-medium transition-all duration-200 backdrop-blur-sm border border-red-500/30 hover:border-red-400 shadow-lg">
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
            <h1 class="text-5xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent mb-4 drop-shadow-lg">
                Admin Dashboard
            </h1>
            <p class="text-gray-300 text-xl max-w-2xl mx-auto">
                Control center for {{ auth()->user()->name }}. Monitor, manage, and maintain all system operations from this comprehensive admin panel.
            </p>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            
            <div class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl p-6 text-white shadow-2xl border border-blue-500/20">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="text-2xl font-bold">1,234</div>
                        <div class="text-blue-200 text-sm">Total Users</div>
                    </div>
                    <svg class="w-8 h-8 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
            </div>

            <div class="bg-gradient-to-br from-green-600 to-green-700 rounded-2xl p-6 text-white shadow-2xl border border-green-500/20">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="text-2xl font-bold">89</div>
                        <div class="text-green-200 text-sm">Active Courses</div>
                    </div>
                    <svg class="w-8 h-8 text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
            </div>

            <div class="bg-gradient-to-br from-purple-600 to-purple-700 rounded-2xl p-6 text-white shadow-2xl border border-purple-500/20">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="text-2xl font-bold">$45,678</div>
                        <div class="text-purple-200 text-sm">Revenue</div>
                    </div>
                    <svg class="w-8 h-8 text-purple-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
            </div>

            <div class="bg-gradient-to-br from-orange-600 to-red-600 rounded-2xl p-6 text-white shadow-2xl border border-orange-500/20">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="text-2xl font-bold">12</div>
                        <div class="text-orange-200 text-sm">Pending Issues</div>
                    </div>
                    <svg class="w-8 h-8 text-orange-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
            </div>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            
            <div class="bg-gray-900/80 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-gray-700 hover:border-blue-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-blue-600 rounded-full mb-6 mx-auto shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white text-center mb-4">User Management</h3>
                    <p class="text-gray-400 text-center mb-6">Manage user accounts, roles, and permissions</p>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-xl font-medium transition-all duration-200 shadow-lg">
                        Manage Users
                    </button>
                </div>
            </div>


            <div class="bg-gray-900/80 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-gray-700 hover:border-green-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-green-600 rounded-full mb-6 mx-auto shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white text-center mb-4">Content Management</h3>
                    <p class="text-gray-400 text-center mb-6">Create, edit, and manage courses and materials</p>
                    <button class="w-full bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-xl font-medium transition-all duration-200 shadow-lg">
                        Manage Content
                    </button>
                </div>
            </div>

            <div class="bg-gray-900/80 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-gray-700 hover:border-purple-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-purple-600 rounded-full mb-6 mx-auto shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white text-center mb-4">Analytics & Reports</h3>
                    <p class="text-gray-400 text-center mb-6">View detailed analytics and generate reports</p>
                    <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 px-6 rounded-xl font-medium transition-all duration-200 shadow-lg">
                        View Analytics
                    </button>
                </div>
            </div>


            <div class="bg-gray-900/80 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-gray-700 hover:border-orange-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-orange-600 rounded-full mb-6 mx-auto shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white text-center mb-4">System Settings</h3>
                    <p class="text-gray-400 text-center mb-6">Configure system-wide settings and preferences</p>
                    <button class="w-full bg-orange-600 hover:bg-orange-700 text-white py-3 px-6 rounded-xl font-medium transition-all duration-200 shadow-lg">
                        Open Settings
                    </button>
                </div>
            </div>

            <div class="bg-gray-900/80 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-gray-700 hover:border-red-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-red-600 rounded-full mb-6 mx-auto shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white text-center mb-4">Security Center</h3>
                    <p class="text-gray-400 text-center mb-6">Monitor security logs and manage access controls</p>
                    <button class="w-full bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded-xl font-medium transition-all duration-200 shadow-lg">
                        Security Center
                    </button>
                </div>
            </div>

            <div class="bg-gray-900/80 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-gray-700 hover:border-cyan-500/50 transition-all duration-300 hover:-translate-y-1">
                <div class="p-8">
                    <div class="flex items-center justify-center w-16 h-16 bg-cyan-600 rounded-full mb-6 mx-auto shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM12 17H7l5 5v-5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 3h4a2 2 0 012 2v1l-5 5-5-5V5a2 2 0 012-2h4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white text-center mb-4">Notifications</h3>
                    <p class="text-gray-400 text-center mb-6">Manage system notifications and alerts</p>
                    <button class="w-full bg-cyan-600 hover:bg-cyan-700 text-white py-3 px-6 rounded-xl font-medium transition-all duration-200 shadow-lg">
                        View Notifications
                    </button>
                </div>
            </div>

        </div>

        <div class="bg-gray-900/80 backdrop-blur-sm rounded-2xl shadow-2xl p-8 border border-gray-700">
            <h2 class="text-2xl font-bold text-white mb-8 flex items-center">
                <svg class="w-6 h-6 mr-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Recent System Activity
            </h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-800/50 rounded-xl border border-gray-700">
                    <div class="flex items-center space-x-4">
                        <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                        <div>
                            <div class="text-white font-medium">New user registration</div>
                            <div class="text-gray-400 text-sm">john.doe@example.com joined the platform</div>
                        </div>
                    </div>
                    <div class="text-gray-400 text-sm">2 minutes ago</div>
                </div>
                
                <div class="flex items-center justify-between p-4 bg-gray-800/50 rounded-xl border border-gray-700">
                    <div class="flex items-center space-x-4">
                        <div class="w-3 h-3 bg-blue-400 rounded-full"></div>
                        <div>
                            <div class="text-white font-medium">Course published</div>
                            <div class="text-gray-400 text-sm">"Advanced Web Development" is now live</div>
                        </div>
                    </div>
                    <div class="text-gray-400 text-sm">15 minutes ago</div>
                </div>
                
                <div class="flex items-center justify-between p-4 bg-gray-800/50 rounded-xl border border-gray-700">
                    <div class="flex items-center space-x-4">
                        <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                        <div>
                            <div class="text-white font-medium">System maintenance scheduled</div>
                            <div class="text-gray-400 text-sm">Server maintenance at 2:00 AM tomorrow</div>
                        </div>
                    </div>
                    <div class="text-gray-400 text-sm">1 hour ago</div>
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