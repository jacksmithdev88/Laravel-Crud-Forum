<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a post</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <main class="app-container">
    <h1 class="title">Create a post</h1>
        <form action="/submit" class="edit-container" method="POST">
            @csrf   
            <div>
                <label for="title">Title: </label>
                <input type="text" name="title" placeholder="Please input a title" required>
        
                <label for="content">Content: </label>
                <input type="text" name="content" placeholder="Please input some content" required>
            </div>
            <button type="submit">Submit</button>       
        </form>
        <form action="/"><button>Back</button></form>
    </main>
</body>
</html>