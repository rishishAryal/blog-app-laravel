<x-layout>

    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())
            <x-posts-grid :posts="$posts"/>

        @else
            <h1 class="text-center font-black  text-red-500 text-3xl font-mono">
                Apologies, but there is currently no
                blog post available. Please try again at a later time. </h1>
            @endif
            </div>
    </main>
</x-layout>

{{--            @foreach ($posts as $post)--}}
{{--                <article>--}}
{{--                    <h1>--}}
{{--                        <a href="/posts/{{ $post->slug }}">{{$post->title}}</a>--}}
{{--                    </h1>--}}
{{--                    <p>--}}
{{--                        By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a>  in  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>--}}
{{--                    </p>--}}
{{--                    <div>--}}
{{--                        {{$post->excerpt}}--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--        <hr>--}}
{{--            @endforeach--}}
