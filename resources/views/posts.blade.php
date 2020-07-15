@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($posts && count($posts))
                @foreach ($posts as $post)
                    @include('card-post')
                @endforeach
            @else
            <div class="card">
                <div class="card-header">
                    <p>
                        <strong>No posts</strong>
                    </p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
