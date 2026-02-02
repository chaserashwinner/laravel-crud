<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h2>Create Post</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label>Title</label><br>
        <input type="text" name="title"><br><br>

        <label>Description</label><br>
        <textarea name="description"></textarea><br><br>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('posts.index') }}">Back</a>
</body>
</html>
