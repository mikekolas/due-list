<div class="col-3 bg-sidebar">
    <h1 id="app-name">
        <a href="{{ route('home') }}">Due List</a>
        </h1>
    <div>
        <nav class="nav flex-column pt-3 pb-3 border-top">
            <!-- Guest menu links -->
            @guest
                @if (Route::has('login'))
                <div class="nav-link row d-flex align-items-baseline {{ Route::is('login') ? 'active' : ''}}">
                    <a class="flex-grow-1" href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-in-right pr-3"></i>{{ __('Login') }}
                    </a>
                </div> 
                @endif
                @if (Route::has('register'))
                <div class="nav-link row d-flex align-items-baseline {{ Route::is('register') ? 'active' : ''}}">
                    <a class="flex-grow-1" href="{{ route('register') }}">
                        <i class="bi bi-person-plus-fill pr-3"></i>{{ __('Register') }}
                    </a>
                </div>   
                @endif
            @else
            {{-- connected user --}}
                <div class="nav-link row d-flex {{ Route::is('home') ? 'active' : ''}}">
                    <a class="flex-grow-1" href="{{ route('home') }}">
                        <i class="bi bi-house pr-3"></i>Home
                    </a>
                </div>
                <x-modal title="test" id="2"/>
                @foreach ($lists as $list )
                    <div class="nav-link row d-flex align-items-baseline flex-nowrap {{ Request::is('lists/' . $list->id) ? 'active' : ''}}">
                        <a class="flex-grow-1" href="{{ route('lists.show', $list->id) }}">
                            <i class="bi bi-clipboard pr-3"></i>{{ $list->title }}
                        </a>
                        <a class="ml-auto t-crd-edit" href="{{ route('lists.edit', $list->id) }}">
                            <i class="bi bi-pencil-square p-1 mx-1"></i>
                        </a>
                        <a class="ml-auto t-crd-delete" data-toggle="modal" data-target="#deleteModal" data-title="{{ $list->title }}" data-id="{{ $list->id }}" href="">
                            <i class="bi bi-x-square-fill p-1 mx-1"></i>
                        </a>
                    </div>
                @endforeach
                <div class="nav-link row d-flex {{ Route::is('lists.create') ? 'active' : ''}}">
                    <a class="flex-grow-1" href="{{ route('lists.create') }}">
                        <i class="bi bi-clipboard-plus pr-3"></i>New list
                    </a>
                </div>
            @endguest
        </nav>
        @auth
            <nav class="nav flex-column pt-3 border-top">
                {{-- <div class="nav-link row d-flex {{ Route::is('profile') ? 'active' : ''}}">
                    <a class="flex-grow-1" href="#">
                        <i class="bi bi-person-circle pr-3"></i>Profile
                    </a>
                </div> --}}
                <div class="nav-link row d-flex">
                    <a class="flex-grow-1" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-left pr-3"></i>{{ __('Logout') }}
                    </a>
                </div>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </nav>
        @endauth
    </div>
</div>