{{--<x-guest-layout>--}}

{{--    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" media="all" />--}}
{{--    <!-- Scripts -->--}}
{{--    <script src="{{asset('js/app.js')}}"></script>--}}

{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="name" value="{{ __('Name') }}" />--}}
{{--                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="terms">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <x-jet-checkbox name="terms" id="terms"/>--}}

{{--                            <div class="ml-2">--}}
{{--                                {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',--}}
{{--                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',--}}
{{--                                ]) !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </x-jet-label>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
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
                        Sign up with Facebook</a> <a href="#" class="btn btn-block red text-white"><i
                            class="fa fa-google-plus pull-left"></i> Sign up with Google+</a></div>
                <div class="m-y text-sm">OR</div>
                <form method="POST" name="form" action="{{ route('register') }}">

                    @csrf


                    <div class="form-group">
                        <input id="name" name="name" type="text" class="form-control" placeholder="Username" required>
                    </div>

                    <div class="form-group">
                        <input id="email" name="email" type="email" class="form-control" placeholder="Email" required autofocus autocomplete="email">
                    </div>

                    <div class="form-group">
                        <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required>
                    </div>

                    <div class="m-b-md text-sm"><span class="text-muted">By clicking Sign Up, I agree to the</span> <a
                            href="#">Terms of service</a> <span class="text-muted">and</span> <a href="#">Policy
                            Privacy.</a></div>
                    <x-jet-authentication-card>
                    <x-jet-button class="ml-4 btn btn-lg black p-x-lg"> <span>
                        {{ __('Register') }} </span>
                    </x-jet-button>
                    </x-jet-authentication-card>
{{--                    <button type="submit" class="btn btn-lg black p-x-lg">Sign Up</button>--}}
                </form>
                <div class="p-y-lg text-center">
                    <div>Already have an account? <a href="{{url('singin')}}" class="text-primary _600">Sign in</a></div>
                </div>
            </div>
        </div>
    </div>

@endsection
