<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-sky-200 via-blue-100 to-indigo-200 flex items-center justify-center p-6 relative overflow-hidden">
    
    
    <div class="absolute inset-0 pointer-events-none">
        
        <div class="absolute top-10 left-10 w-32 h-32 bg-white opacity-10 rounded-full blur-xl"></div>
        <div class="absolute top-20 right-32 w-24 h-24 bg-white opacity-8 rounded-full blur-lg"></div>
        <div class="absolute bottom-20 left-20 w-40 h-40 bg-white opacity-5 rounded-full blur-2xl"></div>
        <div class="absolute bottom-32 right-16 w-28 h-28 bg-white opacity-7 rounded-full blur-xl"></div>
        
        
        <img src="{{ asset('images/sparkle.png') }}" alt="" class="absolute top-16 right-20 w-5 h-5 opacity-70 animate-pulse">
        <img src="{{ asset('images/sparkle.png') }}" alt="" class="absolute top-32 right-16 w-3 h-3 opacity-50 animate-pulse" style="animation-delay: 0.5s;">
        <img src="{{ asset('images/sparkle.png') }}" alt="" class="absolute bottom-40 left-16 w-4 h-4 opacity-60 animate-pulse" style="animation-delay: 1s;">
        <img src="{{ asset('images/sparkle.png') }}" alt="" class="absolute bottom-20 left-12 w-3 h-3 opacity-40 animate-pulse" style="animation-delay: 1.5s;">
        <img src="{{ asset('images/sparkle.png') }}" alt="" class="absolute top-20 left-1/4 w-4 h-4 opacity-50 animate-pulse" style="animation-delay: 2s;">
    </div>

    
    <div class="relative w-full max-w-lg">
        
        
        <div class="absolute -left-20 top-1/2 transform -translate-y-1/2 z-10 hidden md:block">
            <img src="{{ asset('images/key.png') }}" alt="Key" class="w-20 h-auto filter drop-shadow-2xl">
        </div>

        
        <div class="absolute -top-12 -right-12 z-20 hidden md:block">
            <div class="relative">
                <img src="{{ asset('images/lock.png') }}" alt="Lock" class="w-16 h-auto filter drop-shadow-xl">
                
            </div>
            
        </div>

        
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        <span class="text-sm text-gray-600 flex-1">https://madrassa.com/login</span>
                    </div>
                </div>
            </div>

            <div class="px-8 py-10">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Login</h2>
                
                <form method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 @error('email') border-red-400 bg-red-50 @enderror"
                            required 
                            autofocus
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
                            placeholder="Enter your password"
                        >
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        

                        <div class="text-right mt-3">
                            <a href=# class="text-sm text-gray-500 hover:text-gray-700 transition-colors">
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center pt-2">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            name="remember"
                            class="w-4 h-4 text-blue-600 border-2 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                        >
                        <label for="remember" class="ml-3 text-sm text-gray-600">Remember me</label>
                    </div>


                    <div class="pt-4">
                        <button 
                            type="submit"
                            class="w-full bg-black text-white py-4 px-6 rounded-full font-semibold text-lg hover:bg-gray-800 active:bg-gray-900 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-gray-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
                        >
                            SIGN IN
                        </button>
                    </div>

                    <div class="text-center pt-4">
                        <a href=# class="text-gray-600 hover:text-gray-800 transition-colors font-medium">
                            Create account
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