{{-- old code --}}
{{-- <div class="card d-flex p-3 my-3 shadow-sm">
    <div class="d-flex">
        <div>
            <img src="https://i.pravatar.cc/300" width="50" height="50" class="rounded-circle" alt="">
        </div>
        <div class="ms-3">
            <h6>{{ $comment->user->name }}</h6>
            <p class="text-secondary">{{ $comment->created_at->diffForHumans() }}</p>
        </div>
    </div>
    <p class="mt-1">
        {{ $comment->body }}
    </p> --}}

{{-- old code end --}}


<div class="card d-flex p-3 my-3 shadow-sm">
    <div class="d-flex">
        <div>
            <img src="https://i.pravatar.cc/300" width="50" height="50" class="rounded-circle" alt="">
        </div>
        <div class="ms-3">
            <h6>{{ $comment->user->name }}</h6>
            <p class="text-secondary">{{ $comment->created_at->diffForHumans() }}</p>
        </div>
    </div>

    <div id="comment-display-{{ $comment->id }}">
        <p class="mt-1">
            {{ $comment->body }}

        </p>
    </div>

    <form action="/comments/update/{{ $comment->id }}" method="POST" style="display: inline-block;">
        <div id="comment-edit-{{ $comment->id }}" style="display: none;">
            <textarea id="comment-text-{{ $comment->id }}" class="form-control" rows="3" name="body"
                placeholder="Edit your comment here...">
            {{ $comment->body }}
        </textarea>
            <div class="mt-1">
                @csrf @method('PUT')
                <button onclick="saveComment({{ $comment->id }})" type="submit" class="btn btn-danger">Save</button>

                <a onclick="cancelEdit({{ $comment->id }})" class="btn btn-warning">Cancel</a>
            </div>
        </div>
    </form>

    @can('edit', $comment)
        <div id="comment-display-button-{{ $comment->id }}">

            <button onclick="editComment({{ $comment->id }})" class="btn btn-warning">Edit</button>
            <form action="/comments/delete/{{ $comment->id }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endcan





</div>

<script>
    function editComment(commentId) {
        // Show the edit box
        document.getElementById('comment-edit-' + commentId).style.display = 'block';

        // Hide the display box
        document.getElementById('comment-display-' + commentId).style.display = 'none';
        // Hide the display box
        document.getElementById('comment-display-button-' + commentId).style.display = 'none';
    }

    function saveComment(commentId) {
        var updatedComment = document.getElementById('comment-text-' + commentId).value;

        // Perform an AJAX request to save the updated comment
        // ...

        // Update the display and hide the edit box
        document.getElementById('comment-display-' + commentId).querySelector('p').innerText = updatedComment;
        cancelEdit(commentId);
    }

    function cancelEdit(commentId) {
        // Hide the edit box
        document.getElementById('comment-edit-' + commentId).style.display = 'none';

        // Show the display box
        document.getElementById('comment-display-' + commentId).style.display = 'block';
        // Show the display buttons
        document.getElementById('comment-display-button-' + commentId).style.display = 'block';
    }
</script>
