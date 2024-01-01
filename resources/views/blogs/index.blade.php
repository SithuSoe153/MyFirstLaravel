<x-layout>

    <div class="container">

        <form>

            <label for="query">Search: </label>
            <input value="{{ request('query') }}" name="query" type="text">
            <button type="submit">Search Now</button>

        </form>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>

        </div>

        @forelse ($blogs as $blog)
            <x-blog-card :blog='$blog' />
        @empty
            <p> no search result found </p>
        @endforelse

    </div>

</x-layout>
