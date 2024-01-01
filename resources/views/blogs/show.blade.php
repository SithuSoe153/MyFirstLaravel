<x-layout>

    <div class="container">

        <h2>{{$blog->title}}</h2>
        <p>{!!$blog->body!!}</p>
        <p>{{$blog->created_at}}</p>

    </div>

</x-layout>
