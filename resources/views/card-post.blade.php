<div class="card">
    <div class="card-header">
        <a href="/posts/{{ $post->id }}">
            <strong>
                {{ $post->title }}
            </strong>
        </a>
    </div>

    <div class="card-body">
        <p>
            <small>
                <a href="/users/{{ $post->user->id }}/posts">{{ $post->user->name }}</a> @ {{ $post->updated_at }}
            </small>
        </p>
        <p>{{ substr($post->content, 0, 150) . '...' }}</p>
    </div>
</div>
