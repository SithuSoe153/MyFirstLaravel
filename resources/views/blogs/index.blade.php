<x-layout>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <div class="container">

        <form>

            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif

            <label for="search">Search: </label>
            <input value="{{ request('search') }}" name="search" type="text">
            <button type="submit">Search Now</button>

        </form>

        <x-category />

        @forelse ($blogs as $blog)
            <x-blog-card :blog='$blog' />
        @empty
            <p> no search result found </p>
        @endforelse
        {{ $blogs->links() }}

    </div>

</x-layout>
