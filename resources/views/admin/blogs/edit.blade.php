<x-admin-layout>
    <form action="/admin/blogs/{{$blog->slug}}/update" method="POST">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blog Title</label>
            <input name="title" value="{{ old('title', $blog->title) }}" class="form-control" id="exampleInputEmail1">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blog Slug</label>
            <input name="slug" value="{{ old('slug', $blog->slug) }}" class="form-control" id="exampleInputEmail1">
            @error('slug')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blog Body</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control">
                {{ old('body', $blog->body) }}
            </textarea>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <select name="category_id" id="" class="form-control">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option {{ $category->id == old('category_id', $blog->category_id) ? 'selected' : '' }}
                        value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


</x-admin-layout>
