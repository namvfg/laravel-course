@php
$title = "Login";
$bodyClass="page-login";
$formAction = "";
$formerLastText = "Do not have an account? -";
$urlLastText = "/signup";
$latterLastText = " Click here to create one";
$formButtonText = "Login";
$formInputs = [
"email" => [
"type" => "email",
"placeholder" => "Your Email"
],
"password" => [
"type" => "password",
"placeholder" => "Your password"
],
]
@endphp

<x-guest-layout :$title :$bodyClass :$formAction :$formerLastText 
:$urlLastText :$latterLastText :$formButtonText :$formInputs>

</x-guest-layout>