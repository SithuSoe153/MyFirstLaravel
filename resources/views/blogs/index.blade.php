<x-layout>

    <div class="container">

        <form>

            <label for="query">Search: </label>
            <input value="{{ request('query') }}" name="query" type="text">
            <button type="submit">Search Now</button>

        </form>

        <x-category/>

        @forelse ($blogs as $blog)
            <x-blog-card :blog='$blog' />
        @empty
            <p> no search result found </p>
        @endforelse

    </div>

</x-layout>
