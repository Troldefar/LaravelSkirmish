@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div>
                <h1 class="text-2xl font-medium mb-1">
                    {{ $user->name }}
                </h1>
                <p class="mb-2">
                    Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }}
                </p>
                <p class="mb-2">
                    Received {{ $user->receivedLikes->count() }} likes
                </p>
                <hr class="mb-2">
            </div>
            @if ($posts->count() > 0)
                @foreach($posts as $post)
                    <x-post :post="$post" />
                @endforeach
                {{ $posts->links() }}
            @else
                <p>
                    {{ $user->name }} does not have any posts
                </p>
            @endif
        </div>
    </div>
@endsection