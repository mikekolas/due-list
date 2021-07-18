<div class="col-3 bg-sidebar">
    <h1 id="app-name">Due List</h1>
    <div>
        <nav class="nav flex-column pt-3 pb-3 border-top">
            <!-- Guest menu links -->
            @guest
                @if (Route::has('login'))
                    <a class="nav-link {{ Route::is('login') ? 'active' : ''}}" href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-in-right pr-3"></i>{{ __('Login') }}
                    </a>
                @endif
                @if (Route::has('register'))
                    <a class="nav-link {{ Route::is('register') ? 'active' : ''}}" href="{{ route('register') }}">
                        <i class="bi bi-person-plus-fill pr-3"></i>{{ __('Register') }}
                    </a>
                @endif
            @else
            {{-- connected user --}}
                <a class="nav-link {{ Route::is('home') ? 'active' : ''}}" href="#">Active</a>
                <a class="nav-link d-flex align-items-baseline" href="#">
                    <i class="bi bi-clipboard pr-3"></i>List name
                    <i class="bi bi-pencil-fill ml-auto crud-sm"></i>
                    <i class="bi bi-trash ml-2 text-danger crud-sm"></i>
                </a>
                <a class="nav-link {{ Route::is('lists.create') ? 'active' : ''}}" href="{{ route('lists.create') }}">
                    <i class="bi bi-clipboard-plus pr-3"></i>New list
                </a>
            @endguest
        </nav>
        @auth
            <nav class="nav flex-column pt-3 border-top">
                <a class="nav-link {{ Route::is('profile') ? 'active' : ''}}" href="#">
                    <i class="bi bi-person-circle pr-3"></i>Profile
                </a>
                <a class="nav-link" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-left pr-3"></i>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </nav>
        @endauth
    </div>
</div>