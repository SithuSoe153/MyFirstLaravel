<x-layout>

    <div class="container">

        <h1>{{$blog->title}}</h1>
        <p>{!!$blog->body!!}</p>
        <p>{{$blog->created_at}}</p>

    </div>

</x-layout>
