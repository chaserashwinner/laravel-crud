<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h2>Edit Post</h2>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title</label><br>
        <input type="text" name="title" value="{{ $post->title }}"><br><br>

        <label>Description</label><br>
        <textarea name="description">{{ $post->description }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('posts.index') }}">Back</a>
</body>
</html>
