<x-admin-layout>
    <form action="/admin/blogs/store" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Blog Title</label>
            <input name="title" class="form-control" id="exampleInputEmail1">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>



        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Blog Slug</label>
            <input name="slug" class="form-control" id="exampleInputEmail1">
            @error('slug')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Blog Body</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <select name="category_id" id="" class="form-control">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>



        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Blog Photo</label>
            <input name="photo" class="form-control-file" id="exampleInputEmail1" type="file"
                value="{{ old('photo') }}" accept="image/*">
            @error('photo')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</x-admin-layout>
