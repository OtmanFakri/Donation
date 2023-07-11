@extends('layouts.master')

@section('content')
    @if (session('status'))
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <!--
              Background backdrop, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <!--
                      Modal panel, show/hide based on modal state.

                      Entering: "ease-out duration-300"
                        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        To: "opacity-100 translate-y-0 sm:scale-100"
                      Leaving: "ease-in duration-200"
                        From: "opacity-100 translate-y-0 sm:scale-100"
                        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    -->
                    <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                        <div>
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                                <!-- Heroicon name: outline/check -->
                                <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Successful</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">{{ session('status') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6">
                            <a href="{{route('login')}}">
                            <button  type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:text-sm">Go back </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div
        class="h-screen flex flex-col items-center justify-center  p-4 space-y-4 antialiased text-gray-900 bg-gray-100">
        <div class="w-full px-8 max-w-lg space-y-6 bg-white rounded-md py-16">
            <h1 class=" mb-6 text-3xl font-bold text-center">
                Don't worry
            </h1>
            <p class="text-center mx-12">We are here to help you to recover your password. Enter the email address you
                used
                when you joined and we'll send you instructions to reset your password.</p>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input
                            id="email"
                            type="email"
                            class="form-control @error('email') is-invalid @enderror focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full p-2 border border-gray-300 rounded-md"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                        >

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                        class="w-full px-4 py-2 font-medium text-center text-white bg-indigo-600 transition-colors duration-200 rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-1">
                    Send
                </button>
        </div>
        </form>
        <div class="text-sm text-gray-600 items-center flex justify-between">
            <a href="{{route('login')}}">
                <p class="text-gray-800 cursor-pointer hover:text-blue-500 inline-flex items-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                    Back
                </p>
            </a>
        </div>
    </div>
    </div>

@endsection
