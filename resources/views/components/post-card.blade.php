@props(['post'])
            <div class="bg-gray-800 rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
                <p class="text-gray-400 mb-4">{{ $post->excerpt }}</p>
                <a href="{{ route('posts.show', $post->slug) }}" class="text-blue-500 hover:underline">Read more...</a>
            </div>

          
      
    