<x-layout>
    <h1>
        {{$post ->title}}
    </h1>

    <div>
        {!!$post->body!!}
    </div>

    <div>
        <a href="/">go back</a>
    </div>
</x-layout>
