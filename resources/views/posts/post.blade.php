<x-layout>
   <!-- Blog Post Content -->
   <section class="container mx-auto mt-8 p-8">
    <article class="bg-gray-800 p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-semibold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-400 mb-4">{{ $post->updated_at }}</p>
        <p class="mb-4">{{ $post->content }}</p>
        <p class="mb-4">{{ $post->content }}</p>
        <p>Sed gravida justo et ante feugiat, id suscipit enim blandit. Duis fermentum consequat dui, quis mollis neque. Nulla facilisi. Fusce sed lorem nec lectus feugiat hendrerit non ut nulla.</p>
    </article>
</section>
</x-layout>