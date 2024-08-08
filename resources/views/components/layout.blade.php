<!DOCTYPE html>
<html lang="en" data-bs-theme="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Presto.it</title>
</head>
<body class="custom-margin-body min-vh-100 overflow-x-hidden">
    <x-navbar />

    <div class="custom-min-vh">
        {{$slot}} 
    </div>

    <x-footer />


    <button id="toggleTheme" class="btn btn-dark rounded-circle custom-circle position-fixed bottom-0 end-0 m-4 d-flex justify-content-center align-items-center"></button>
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</body>

</html>