<!-- Navbar -->
<nav class="header-navbar navbar-expand-lg navbar navbar-fixed shadow-sm" id="targetElement">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="../assets/images/logo/logo.png" alt="Logo" style="width: 130px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/"><i class="bi bi-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('show-all-room')}}"><i class="bi bi-buildings"></i> Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/help"><i class="bi bi-question-circle"></i> Bantuan</a>
                </li>
                <li class="nav-item">
                    <!-- Notification Dropdown -->
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="bi bi-bookmark-check"></i> Disimpan
                            <span class="badge badge-pill badge-primary badge-up">
                                @auth
                                {{ Auth::user()->simpanKamars != null ? Auth::user()->simpanKamars->count() : 0 }}
                                @else
                                0
                                @endauth
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header m-0 p-2">
                                    <h3 class="white">
                                        @auth
                                        {{ Auth::user()->simpanKamars != null ? Auth::user()->simpanKamars->count() : 0 }}
                                        @else
                                        0
                                        @endauth
                                    </h3>
                                    <span class="notification-title">Tersimpan</span>
                                </div>
                            </li>
                            @auth
                            <li class="scrollable-container media-list">
                                @foreach (Auth::user()->simpanKamars as $key => $favorite)
                                <a class="d-flex justify-content-between" href="{{ url('room', $favorite->kamar['slug']) }}">
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left">{{$key+1}}</div>
                                        <div class="media-body">
                                            <h6 class="primary media-heading">{{$favorite->kamar['nama_kamar']}}</h6>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">{{$favorite->kamar['created_at']}}</time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </li>
                            <li class="dropdown-menu-footer {{ Auth::user()->simpanKamar != null ? Auth::user()->simpanKamar->count() <= 1 ? 'hidden' : '' : '' }}">
                                @if (Auth::user()->simpanKamar != null)
                                <a class="dropdown-item p-1 text-center" href="{{ url('show-all-room?cari=' . Auth::id()) }}">Lihat Semua</a>
                                @else
                                <a class="dropdown-item p-1 text-center" href="{{ url('show-all-room') }}">Belum ada</a>
                                @endif
                            </li>
                            @else
                            <li class="dropdown-menu-footer">
                                <a class="dropdown-item p-1 text-center" href="{{ url('show-all-room') }}">Belum ada</a>
                            </li>
                            @endauth
                        </ul>
                    </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header m-0 p-2">
                                <h3 class="white">0</h3>
                                <span class="notification-title">Notifications</span>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer">
                            <a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
            <ul class="nav navbar-nav float-right">

            <!-- User Dropdown -->
            @auth
            <li class="dropdown dropdown-user nav-item">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                    <span>
                        @if (Auth::user()->foto == NULL)
                        <img class="rounded-circle" src="{{ asset('assets/images/profile/profile.jpg') }}" alt="avatar" height="40" width="40">
                        @else
                        <img class="rounded-circle" src="{{ asset('storage/images/foto_profile/' . Auth::user()->foto) }}" alt="avatar" height="40" width="40">
                        @endif
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    
                    <div class="dropdown-item">
                        <p class="user-name text-bold-600"> {{ explode(' ', Auth::user()->name)[0] }} | {{ Auth::user()->role }}</p>
                    </div>
                    <a class="dropdown-item" href="{{ url('profile') }}">
                        <i class="feather icon-user"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <i class="feather icon-power"></i> Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </div>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link nav-link-label" href="{{ route('login') }}">
                    <i class="feather icon-log-in"></i> <span class="mr-2">Masuk</span>
                </a>
            </li>
            @endauth
        </ul>

        </div>
    </div>
  </nav>
  <!-- end Navbar -->
