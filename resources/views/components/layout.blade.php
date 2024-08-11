<!DOCTYPE html>
<html lang="en" data-bs-theme="{{ session('theme') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Google Login --}}
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Presto.it</title>
</head>
<body class="custom-margin-body min-vh-100 overflow-x-hidden">
    <x-navbar />
    @php
    @endphp
    <div class="custom-min-vh pt-3">
        {{$slot}} 
    </div>

    <x-theme-switch />
    <x-footer />

    {{-- Google Login --}}
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

</body>

</html>