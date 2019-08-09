<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Index</title>
</head>
<body>
    @foreach ($posts as $post)
        <div>
            <a href="{{ url($post->slug) }}">{{ $post->title }}</a>
            <p>{{ $post->excerpt }}</p>
        </div>
    @endforeach
</body>
</html>
