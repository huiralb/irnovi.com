<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        footer.jumbotron{
            margin-bottom: 0;
            margin-top: 5em;
            background: #1f1f1f;
            color: #fff;
        }
    </style>
</head>
<body>
    
    <div class="jumbotron">
        <div class="container text-center">
            <h1>IRNOVI</h1>
            <p>Programming Blog Masa Kini</p>
        </div>
    </div>


    <section id="content">
        <div class="container">

            @foreach($posts as $post)
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->body }}</p>
            @endforeach

        </div>
        
        <div class="container text-center">
            {{ $posts->links() }}
        </div>

    </section>
    
    <footer class="jumbotron">
        <div class="container">
            <p class="text-center">
                @Copyright 2016
            </p>
        </div>
    </footer>
    

    <script>
        
    </script>
    
</body>
</html>