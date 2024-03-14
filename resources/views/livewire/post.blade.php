<div>
    <h1>Posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td><a wire:navigate href="{{ route('post.show', ['id'=>$post->id]) }}">Show</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No posts found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-5">
        {{ $posts->links() }}
    </div>
</div>
