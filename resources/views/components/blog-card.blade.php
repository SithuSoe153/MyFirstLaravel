@props(['blog'])

<div>

    {{-- <img src="/storage/{{ $blog->photo }}" class="card-img-top m-4" alt=""> --}}
    <img src="{{ asset('/storage/' . $blog->photo) }}" class="card-img-top m-4" alt="">

    <h2><a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h2>

    <p>Author - <a
            href="/?author={{ $blog->author->username }}
        {{ request('search')
            ? "
                                                                                                                                                                                &search=" .
                request('search')
            : '' }}{{ request('author')
            ? "
                                                                                                                                                                                &author=" .
                request('author')
            : '' }} "">{{ $blog->author->name }}</a>
    </p>
    <p>Category - <a href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a> </p>

    <p>{!! $blog->body !!}</p>
    <p>{{ $blog->created_at }}</p>

</div>
