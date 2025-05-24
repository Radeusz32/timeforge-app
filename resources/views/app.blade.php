<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
     @inertiaHead
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    @inertia
</body>
</html>
