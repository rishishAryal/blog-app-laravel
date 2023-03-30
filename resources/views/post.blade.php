<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<body>
<article>
<h1>{{ $post->title}} </h1>
    <p>
        {!! $post->body !!}
    </p>

    <a href="/">Go Back</a>
</article>
</body>
