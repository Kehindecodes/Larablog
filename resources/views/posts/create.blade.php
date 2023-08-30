<x-layout>
      <!-- Create Post Form -->
      <section class="container mx-auto mt-8 p-8">
        <h1 class="text-2xl font-semibold mb-4">Create a New Blog Post</h1>
        <form action="/posts" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-md" enctype="multipart/form-data"   >
            @csrf
            <label class="block mb-4">
                <span class="text-gray-400">Title</span>
                <input type="text" class="bg-gray-700 text-gray-200 rounded-full px-3 py-2 w-full mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the title..." name="title">
            </label>
            <label class="block mb-4">
                <span class="text-gray-400">Image</span>
                <input type="file" class="bg-gray-700 text-gray-200 rounded-full px-3 py-2 w-full mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" name = "image">
            </label>
            <label class="block mb-4">
                <span class="text-gray-400">Category</span>
                <select class="bg-gray-700 text-gray-200 rounded-full px-3 py-2 w-full mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" name="category" >
                    <option value="technology">Technology</option>
                    <option value="lifestyle">Lifestyle</option>
                    <option value="sports">Sports</option>
                </select>
            </label>
            <label class="block mb-4">
                <span class="text-gray-400">Content</span>
                <textarea class="bg-gray-700 text-gray-200 rounded-lg px-3 py-2 w-full mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" rows="6" placeholder="Write your blog post content..." name="content"></textarea>
            </label>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full">Publish</button>
        </form>
    </section>

</x-layout>