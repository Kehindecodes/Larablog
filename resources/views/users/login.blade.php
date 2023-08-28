<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">

    <!-- Login Form -->
    <div class="bg-gray-800 p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Login</h1>
        <form>
            <label class="block mb-4">
                <span class="text-gray-400">Email</span>
                <input type="email" class="bg-gray-700 text-gray-200 rounded-full px-3 py-2 w-full mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email...">
            </label>
            <label class="block mb-4">
                <span class="text-gray-400">Password</span>
                <input type="password" class="bg-gray-700 text-gray-200 rounded-full px-3 py-2 w-full mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password...">
            </label>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full w-full">Login</button>
        </form>
        <p class="mt-4 text-gray-400">Don't have an account? <a href="/register" class="text-blue-400">Sign up</a></p>
    </div>

</body>
</html>
