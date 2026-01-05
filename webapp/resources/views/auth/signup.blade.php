@php
$title = "Sign up";
$bodyClass="page-signup";
$formAction = "";
$formerLastText = "Already have an account? -";
$urlLastText = "/signup";
$latterLastText = " Click here to login";
$formButtonText = "Register";
$formInputs = [
"email" => [
"type" => "email",
"placeholder" => "Your Email"
],
"password" => [
"type" => "password",
"placeholder" => "Your password"
],
"passwordConfirmation" => [
"type" => "password",
"placeholder" => "Repeat Password"
],
"firstName" => [
"type" => "text",
"placeholder" => "First Name"
],
"lastName" => [
"type" => "text",
"placeholder" => "Last Name"
],
"phone" => [
"type" => "text",
"placeholder" => "Phone"
]
];
@endphp

<x-guest-layout :$title :$bodyClass :$formAction 
:$formerLastText :$urlLastText :$latterLastText :$formButtonText
:$formInputs>
</x-guest-layout>