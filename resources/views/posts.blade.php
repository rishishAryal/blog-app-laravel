<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<body>
         @foreach ($posts as $post)
<article>

    <h1>  <a href="/posts/{{ $post->slug }}">{{ $post->title }} </a>   </h1>



    <p>
        {{ $post->excerpt }}
    </p>
</article>

 @endforeach
</body>
