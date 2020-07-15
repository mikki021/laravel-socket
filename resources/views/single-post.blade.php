@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($post)
                <div class="card">
                    <div class="card-header">
                        <strong>
                            {{ $post->title }}
                        </strong>
                    </div>

                    <div class="card-body">
                        <p>
                            <small>
                                <a href="/users/{{ $post->user->id }}/posts">{{ $post->user->name }}</a> @ {{ $post->updated_at }}
                            </small>
                        </p>
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
