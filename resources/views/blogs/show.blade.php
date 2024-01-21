<x-layout>

    <div class="container-fluid vh-100">
        <!-- Blog Post -->
        <div class="card shadow-sm mx-auto mt-5" style="max-width: 800px;">
            <div class="card-body">
                <h2 class="card-title">{{ $blog->title }}</h2>
                <p class="card-text">{!! $blog->body !!}</p>
                <p class="card-text"><small class="text-muted">{{ $blog->created_at->diffForHumans() }}</small></p>
                @auth

                    <form action="{{route('blogs.toggle', $blog->slug)}}" method="POST">@csrf

                        <div style="display: flex; justify-content: flex-end;">
                            @if ($blog->isSubscribed())
                                <button type="submit" class="btn btn-alert">Subscribed</button>
                            @else
                                <button type="submit" class="btn btn-danger">Subscribe</button>
                            @endif
                        </div>

                    </form>
                @endauth

            </div>
        </div>


        @auth
            <div class="container">

                <div class="col-mid-6 mx-auto">

                    <form action="/blogs/{{ $blog->slug }}/comments" method="POST">@csrf
                        <label for="">Comment Here</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button class="btn btn-primary my-3" type="submit">Comment</button>
                    </form>

                </div>

            </div>
        @endauth

        <!-- Comments Section -->
        <x-comments :comments="$blog
            ->comments()
            ->latest()
            ->get()" />
    </div>

</x-layout>
