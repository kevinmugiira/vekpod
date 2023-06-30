{{--<x-guest-layout>--}}

{{--    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" media="all" />--}}
{{--    <!-- Scripts -->--}}
{{--    <script src="{{asset('js/app.js')}}"></script>--}}

{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="flex items-center">--}}
{{--                    <x-jet-checkbox id="remember_me" name="remember" />--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}


@extends('auth.auth-layout')



@section('content')
    <div class="b-t">
        <div class="center-block w-xxl w-auto-xs p-y-md text-center">
            <div class="p-a-md">
                <div><a href="#" class="btn btn-block indigo text-white m-b-sm"><i class="fa fa-facebook pull-left"></i>
                        Sign in with Facebook</a> <a href="#" class="btn btn-block red text-white"><i
                            class="fa fa-google-plus pull-left"></i> Sign in with Google+</a></div>
                <div class="m-y text-sm">OR</div>
                <form method="POST" name="form" action="{{ route('login') }}">

                    @csrf

                    <div class="form-group">
                        <input id="email" name="email" type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input id="password" name="password" type="password" class="form-control" placeholder="password" required>
                    </div>
                    <div class="m-b-md"><label class="md-check"><input type="checkbox"><i class="primary"></i> Keep me
                            signed in</label></div>
                    <button type="submit" class="btn btn-lg black p-x-lg">Sign in</button>
                </form>
                <div class="m-y"><a href="{{url('forgot-password')}}" class="_600">Forgot password?</a></div>
                <div>Do not have an account? <a href="{{url('singup')}}" class="text-primary _600">Sign up</a></div>
            </div>
        </div>
    </div>
@endsection
