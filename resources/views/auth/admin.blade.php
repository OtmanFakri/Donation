@extends('layouts.master')

@section('content')

    @error('email')
    <h1 class="text-black">{{ $message }}</h1>
    @enderror
    <div class="flex min-h-full flex-col justify-center py-[8%] sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-12 w-auto" src="{{asset('assets/images/ugive-logo.png')}}"
                 alt="Your Company">
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form class="space-y-6" action="{{ url('login/admin') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1">
                            <input id="email" name="email"  type="email" value="{{ old('email') }}" autocomplete="email" required
                            class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2
                            placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none
                            focus:ring-indigo-500 sm:text-sm">
                        </div>

                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                   required
                                   class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                        </div>

                    </div>

                    <div>
                        <button type="submit"
                                class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Sign in
                        </button>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection