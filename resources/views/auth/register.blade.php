<x-layout>

    <form action="/register" method="POST">@csrf

        <div>
            <label for="name">Name</label>
            <input value="{{old('name')}}" type="text" name="name" id="">
            @error('name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="username">User Name</label>
            <input value="{{old('username')}}" type="text" name="username" id="">
            @error('username')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input value="{{old('email')}}" type="email" name="email" id="">
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="">
            @error('password')
                <p class="text-danger">{{$message}}</p>
            @enderror

        </div>

        <div>
            <button type="submit">Register</button>
        </div>

    </form>
</x-layout>
