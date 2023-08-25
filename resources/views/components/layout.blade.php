<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraBlog</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">

    <!-- Navigation Bar -->
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-xl font-semibold">LaraBlog</a>

            <div class="relative w-1/2">
                <input type="text" class="bg-gray-700 text-gray-200 rounded-full px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full" placeholder="Search for posts..">
                <span class="absolute left-3 top-2 text-gray-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M21 21l-4.35-4.35"></path>
                    </svg>
                </span>
            </div>
            <div class="flex items-center space-x-4">
               
                <a href="/posts/create" class="text-white">Create Post</a>
                <a href="#" class="text-white">Login</a>
                <a href="#" class="text-white">Register</a>
            </div>
        </div>
    </nav>
<main>
    {{ $slot }}
</main>
    <!-- Footer -->
    <footer class="bg-gray-800 p-4 mt-8">
        <div class="container mx-auto text-center">
            <p class="text-gray-500">&copy; 2023 My Blog. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
