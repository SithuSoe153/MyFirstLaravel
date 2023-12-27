@props(['blog'])

<div>

    <h1><a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h1>

    <p>Author - <a href="/author/{{$blog->author->username}}">{{$blog->author->name}}</a> </p>
    <p>Category - <a href="/categories/{{$blog->category->slug}}">{{$blog->category->name}}</a> </p>

    <p>{!! $blog->body !!}</p>
    <p>{{ $blog->created_at }}</p>

</div>
