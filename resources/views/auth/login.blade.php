@extends('layouts.master')

@section('content')
<div class="flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="p-6 sm:p-8 bg-blue-600 text-white text-center">
                <h2 class="text-3xl font-bold mb-1 font-cairo">{{ config('app.name', 'Laravel') }}</h2>
                <p class="text-blue-100">تسجيل الدخول إلى النظام</p>
            </div>
            
            <form method="POST" action="{{ route('login') }}" class="p-6 sm:p-8">
                @csrf
                
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700 font-cairo">البريد الإلكتروني</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus 
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-700 font-cairo">كلمة المرور</label>
                    <input id="password" type="password" name="password" required 
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="mr-2 text-sm text-gray-600 font-cairo">تذكرني</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline font-cairo">نسيت كلمة المرور؟</a>
                </div>
                
                <div class="mb-6">
                    <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200 font-cairo">
                        تسجيل الدخول
                    </button>
                </div>
                
                <div class="text-center text-gray-600 text-sm font-cairo">
                    ليس لديك حساب؟ <a href="{{ route('register') }}" class="text-blue-600 hover:underline">إنشاء حساب جديد</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
