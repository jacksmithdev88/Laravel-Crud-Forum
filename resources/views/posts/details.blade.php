<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <main class="app-container">
        <div class="post-container">
        <p class="post-title">{{$post->title}}</p>
            <p class="post-content">{{$post->content}}</p>

            <p class="post-user">Posted by: {{App\Models\User::find($post->postedBy)->name}}</p>
        </div>    
        <h1 class="title">Comments</h1>
            @foreach ($comments as $index => $comment )
                <div class="comments-container">
                    <h1>{{$users[$index][0]->name}}</h1>        
                    <p>{{$comment->comment}}</p>
                    <p class="comment-likes">Likes: {{$comment->likes}}</p>
                </div>
            @endforeach

        @auth
        <div class="add-comment-container">
            <form action="/add-comment" method="POST">
                @csrf
                <input type="hidden" name="post-id" value="{{$post->id}}"> 
                <label for="comment">Comment:</label>
                <input type="text" name="comment">
                <button>Submit commen</button>
            </form>
        </div>    
        @endauth
        
        @guest
            <p>You must be logged in to post a comment</p>
        @endguest

        <div class="buttons-container">
            <form action="/">
                <button>Back</button>
            </form>
        </div>
    </main>
    
</body>
</html>