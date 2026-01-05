@php
$loginMethods = [
"Google" => "/img/google.png",
"Facebook" => "/img/facebook.png"
];
@endphp

@props(["title" => "", "bodyClass" => "", "formAction" => "",
"formAction" => "", "formerLastText" => "", "urlLastText" => "",
"latterLastText" => "", "formButtonText" => "", "formInputs" => ""])

<x-base-layout :$title :$bodyClass>
    <main>
        <div class="container-small page-login">
            <div class="flex" style="gap: 5rem">
                <div class="auth-page-form">

                    <x-logo />

                    <h1 class="auth-page-title">{{ $title }}</h1>

                    <form action="{{ $formAction }}" method="post">

                        @foreach ($formInputs as $inputKey => $inputConfigs)
                        <div class="form-group">
                            <input type="{{ $inputConfigs["type"] }}" placeholder="{{ $inputConfigs["placeholder"] }}" />
                        </div>
                        @endforeach

                        <button class="btn btn-primary btn-login w-full">{{ $formButtonText }}</button>

                        <div class="grid grid-cols-2 gap-1 social-auth-buttons">

                            @foreach ($loginMethods as $key => $value)
                            <x-third-party-login-button imgSrc="{{ $value }}">
                                {{ $key }}
                            </x-third-party-login-button>
                            @endforeach

                        </div>
                        <div class="login-text-dont-have-account">
                            {{ $formerLastText }}
                            <a href="{{ $urlLastText }}"> {{ $latterLastText }}</a>
                        </div>
                    </form>
                </div>
                <div class="auth-page-image">
                    <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </main>
</x-base-layout>