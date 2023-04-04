

<x-layout>



    <article>
        <h1>{{ $post->title}} </h1>

        <p>
            By <a href="#">{{$post->author->username}}</a>  in  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>

        <p>
            {!! $post->body !!}
        </p>

        <a href="/">Go Back</a>
    </article>





</x-layout>
