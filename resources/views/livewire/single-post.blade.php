<div>
    <div class="row">
        <div class="col-md-6">
            <h1>{{ $post->title }}</h1>
        </div>

        <div class="d-flex">
            <input type="text" class="form-control" wire:model='comment'>
            <button class="btn btn-primary mt-2" wire:click='addComment'>Add Comment</button>
        </div>

        <h3>Comments</h3>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($post->comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->comment }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">No posts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
