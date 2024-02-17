<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 pt-5">
        <h1 class="mb-5">Show</h1>

        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>

        <h3>Comments</h3>
        <p>Comment Count {{ $post->comments->count() }}</p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($post->comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->title }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No comments found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <form action="{{ route('add-comment') }}" method="POST">

            @csrf

            <input type="text" name="title" class="form-control mb-3" placeholder="Title">
            <input type="hidden" name="post_id" value="{{ $post->id }}" class="form-control mb-3" placeholder="Title">
            <input type="submit" value="Add Comment" class="btn btn-primary">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
