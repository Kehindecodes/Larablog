<x-layout>
    @include('partials._hero')

    <section class="container mx-auto py-8">
    <h2 class="text-2xl font-semibold mb-4">Latest Blog Posts</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        {{-- @if(count($posts)== 0)
            <p>No posts found</p>
        @endif --}}
        @foreach($posts as $post)
            <x-post-card :post="$post" />
        @endforeach
      

    </div>
    </section>


  
</x-layout>
