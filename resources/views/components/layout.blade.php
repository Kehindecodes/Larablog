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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const userDropdown = document.querySelector(".user-dropdown");
            const userMenu = document.querySelector(".user-menu");
            
            userDropdown.addEventListener("click", function (event) {
                event.stopPropagation();
                userMenu.classList.toggle("hidden");
            });
            
            document.addEventListener("click", function (event) {
                if (!userDropdown.contains(event.target)) {
                    userMenu.classList.add("hidden");
                }
            });
        });
    </script>
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
                @auth 
                <div class="relative inline-block text-left">
                    <div class="user-dropdown">
                        <button type="button" class="flex items-center focus:outline-none">
                            <i class="fa-solid fa-user ml-2"></i>
                            <span class="ml-2 text-gray-300">{{ Auth::user()->name }}</span>
                            <i class="fa-solid fa-angle-down ml-2"></i>
                        </button>
                    </div>
                    <div class="user-menu origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-gray-700 ring-1 ring-black ring-opacity-5">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-600" role="menuitem">Logout</a>
                        </div>
                    </div>
                </div>
                @else
                <a href="/login" class="text-white">Login</a>
                <a href="/register" class="text-white">Register</a>
                @endauth
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
