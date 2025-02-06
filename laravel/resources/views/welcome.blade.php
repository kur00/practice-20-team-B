<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <header class="bg-blue-500 text-white p-4">
        <h1 class="text-4xl font-bold">Welcome to My Website</h1>
    </header>

    <main class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <h2 class="text-3xl mb-4">We're glad you're here!</h2>
            <p class="text-lg">This is the new homepage of your Laravel application.</p>
        </div>
    </main>

</body>
</html>
