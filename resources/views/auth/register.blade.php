<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-sky-200 via-blue-100 to-indigo-200 flex items-center justify-center p-6 relative overflow-hidden">
    
    
    <div class="absolute inset-0 pointer-events-none">
        
        <div class="absolute top-10 left-10 w-32 h-32 bg-white opacity-10 rounded-full blur-xl"></div>
        <div class="absolute top-20 right-32 w-24 h-24 bg-white opacity-8 rounded-full blur-lg"></div>
        <div class="absolute bottom-20 left-20 w-40 h-40 bg-white opacity-5 rounded-full blur-2xl"></div>
        <div class="absolute bottom-32 right-16 w-28 h-28 bg-white opacity-7 rounded-full blur-xl"></div>
    </div>

    
    <div class="relative w-full max-w-lg">
        
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden backdrop-blur-sm bg-white/95">
            
            
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
                
                <div class="flex space-x-2 mb-4">
                    <div class="w-3 h-3 bg-red-400 rounded-full shadow-sm"></div>
                    <div class="w-3 h-3 bg-yellow-400 rounded-full shadow-sm"></div>
                    <div class="w-3 h-3 bg-green-400 rounded-full shadow-sm"></div>
                </div>
                
                <div class="bg-white rounded-lg border border-gray-200 px-4 py-2 shadow-sm">
                    <div class="flex items-center space-x-3">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                        <span class="text-sm text-gray-600 flex-1">https://madrassa.com/register</span>
                    </div>
                </div>
            </div>

            <div class="px-8 py-8">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Create Account</h2>
                
                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf
                    
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Full Name</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}"
                            class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 @error('name') border-red-400 bg-red-50 @enderror"
                            required 
                            autofocus
                            placeholder="Enter your full name"
                        >
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 @error('email') border-red-400 bg-red-50 @enderror"
                            required
                            placeholder="Enter your email"
                        >
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password"
                            class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 @error('password') border-red-400 bg-red-50 @enderror"
                            required
                            placeholder="Create a password"
                        >
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Confirm Password</label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation"
                            class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50"
                            required
                            placeholder="Confirm your password"
                        >
                    </div>

                    <div>
                        <label for="role" class="block text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Role</label>
                        <div class="relative">
                            <select 
                                id="role" 
                                name="role"
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 appearance-none cursor-pointer @error('role') border-red-400 bg-red-50 @enderror"
                            >
                                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                        @error('role')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-4">
                        <button 
                            type="submit"
                            class="w-full bg-black text-white py-4 px-6 rounded-full font-semibold text-lg hover:bg-gray-800 active:bg-gray-900 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-gray-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
                        >
                            CREATE ACCOUNT
                        </button>
                    </div>

                    <div class="text-center pt-4">
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800 transition-colors font-medium">
                            Already have an account? Sign in
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

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