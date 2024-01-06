        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{ isset($currentCategory) ? $currentCategory->name : 'Filter By Categories' }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item"
                            href="/?category={{ $category->slug }} {{ request('search')
                                ? "
                                                                                &search=" . request('search')
                                : '' }}{{ request('author')
                                ? "
                                                                                &author=" . request('author')
                                : '' }} ">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>

        </div>
