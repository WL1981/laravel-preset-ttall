@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="w-full max-w-sm mx-auto">
            <div class="bg-white border border-2 rounded shadow-sm">

                <div class="px-6 py-3 mb-0 font-semibold text-gray-700 bg-gray-200">
                    {{ __('Confirm Password') }}
                </div>

                <form class="w-full p-6" method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <p class="leading-normal">
                        {{ __('Please confirm your password before continuing.') }}
                    </p>

                    <div class="flex flex-wrap my-6">
                        <label for="password" class="block mb-2 text-sm font-bold text-gray-700">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password" class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <p class="mt-4 text-xs italic text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap items-center">
                        <button type="submit" class="px-4 py-2 font-bold text-gray-100 bg-indigo-500 rounded shadow-sm hover:bg-indigo-400 focus:outline-none focus:shadow-outline">
                            {{ __('Confirm Password') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="flex-1 text-sm text-right text-indigo-500 no-underline whitespace-no-wrap hover:text-indigo-400" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
