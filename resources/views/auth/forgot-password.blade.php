{{--<x-guest-layout>--}}

{{--    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" media="all" />--}}
{{--    <!-- Scripts -->--}}
{{--    <script src="{{asset('js/app.js')}}"></script>--}}

{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <div class="mb-4 text-sm text-gray-600">--}}
{{--            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--        </div>--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('password.email') }}">--}}
{{--            @csrf--}}

{{--            <div class="block">--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <x-jet-button>--}}
{{--                    {{ __('Email Password Reset Link') }}--}}
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
                <div><h4>Forgot your password?</h4>
                    <p class="text-muted m-y">Enter your email below and we will send you instructions on how to change
                        your password.</p></div>
                <form method="POST" action="{{ route('password.email') }}">

                    @csrf

                    <div class="form-group">
                        <input id="email" name="email" type="email" placeholder="Email" class="form-control" required>
                    </div>
                    <button type="submit" class="btn black btn-block p-x-md">Send</button>
                </form>
                <div class="p-y-lg">Return to <a href="{{url('login')}}" class="text-primary _600">Sign in</a></div>
            </div>
        </div>
    </div>

@endsection
