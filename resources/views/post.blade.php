<x-layout>
    <h1>
        {!!$post ->title!!}
    </h1>
    <p>
        By <a href="/authors/{{$post->author->username}}">{{$post->author->name}} </a> in
        <a
            href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    </p>
    <div>
        {!!$post->body!!}
    </div>

    <div>
        <a href="/">go back</a>
    </div>
</x-layout>
