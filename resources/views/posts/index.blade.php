<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h2>Posts</h2>

    <a href="{{ route('posts.create') }}">Create Post</a>

    <table border="1" cellpadding="5">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>

        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>
                <a href="{{ route('posts.edit', $post) }}">Edit</a>

                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
