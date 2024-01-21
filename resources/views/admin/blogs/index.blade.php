<x-admin-layout>

    <div class="col-md-8">

        {{-- <div class="table-responsive"> --}}


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($blogs as $blog)
                    <tr>
                        <th scope="row">{{ $blog->id }}</th>
                        <td> {{ Str::limit($blog->title, 20) }}</td>
                        <td>
                            {{ Str::limit($blog->body, 30) }}
                        </td>
                        <td><a class="btn btn-warning" href="/admin/blogs/{{ $blog->slug }}/edit">Edit</a></button>
                        </td>
                        <form action="/admin/blogs/{{ $blog->slug }}/destroy" method="post">
                            @csrf
                            @method('delete')
                            <td><button class="btn btn-danger">Delete</button></td>
                        </form>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $blogs->links() }}

        {{-- </div> --}}


    </div>

</x-admin-layout>
