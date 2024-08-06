<!DOCTYPE html>
<html lang="en" data-bs-theme="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Presto.it</title>
</head>
<body class="custom-margin-body">
    <x-navbar />

    <div class="custom-min-vh">
        {{$slot}} 
    </div>

    <x-footer />


    <button id="toggleTheme" class="btn btn-dark rounded-circle custom-circle position-fixed bottom-0 end-0 m-4"></button>
</body>

</html>