<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $post->title }}</title>
    {{-- <link rel="stylesheet"href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.14.1/build/styles/github.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/dracula.min.css" />
</head>
<body>
    <h2>{{ $post->title }}</h2>
    {!! $post->body!!}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>

    <script>
        (function(){
            hljs.initHighlightingOnLoad();

            let targets = document.querySelectorAll('pre')

            targets.forEach(target => {
              hljs.highlightBlock(target)
            })
        })();
    </script>
</body>
</html>
