<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - LaraBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

    <!-- Sign Up Form -->
    <body class="bg-gray-900 text-white flex items-center justify-center h-screen">

        <!-- Sign Up Form -->
        <div class="bg-gray-800 p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold mb-4">Sign Up</h1>
            <form action="/users" method="POST">
                @csrf
                <label class="block mb-4">
                    <span class="text-gray-400">Email</span>
                    <input type="email" class="bg-gray-700 text-gray-200 rounded-full px-3 py-2 w-full mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email..." name ="email" value="{{ old('email') }}">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </label>
                <label class="block mb-4">
                    <span class="text-gray-400">Name</span>
                    <input type="text" class="bg-gray-700 text-gray-200 rounded-full px-3 py-2 w-full mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name..." name ="name" value="{{ old('name') }}">
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </label>
                <label class="block mb-4">
                    <span class="text-gray-400">Password</span>
                    <input type="password" class="bg-gray-700 text-gray-200 rounded-full px-3 py-2 w-full mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password..." name ="password" value="{{ old('password') }}">
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </label>
                <label class="block mb-4">
                    <span class="text-gray-400"> Confirm Password</span>
                    <input type="password" class="bg-gray-700 text-gray-200 rounded-full px-3 py-2 w-full mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="ReEnter your password..." name ="password_confirmation" value="{{ old('password_confirmation') }}">
                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </label>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full w-full">Sign Up</button>
            </form>
            <p class="mt-4 text-gray-400">Already have an account? <a href="/login" class="text-blue-400">Log in</a></p>
        </div>
    
    </body>


</html>
