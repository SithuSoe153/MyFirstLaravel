<x-layout>

    <div class="container my-3">

        <div class="row">

            <div class="col-md-4">

                <label for="exampleInputEmail1" class="form-label">Nav Bar</label>

                <ul class="list-group">
                    <li class="list-group-item"><a href="/admin">Dashboard</a></li>
                    <li class="list-group-item"><a href="/admin/blogs/create">Blog Create</a></li>
                </ul>

            </div>

            {{$slot}}

        </div>
    </div>

</x-layout>
