<x-layout>

    <div class="container mt-5">
        <form action="/login" method="POST">
            @csrf


            <div class="form-group">
                <label for="email">Email</label>
                <input value="{{ old('email') }}" type="email" name="email" class="form-control">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>

</x-layout>
