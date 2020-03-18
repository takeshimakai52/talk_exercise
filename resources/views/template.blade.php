<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- CSRF トークン --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ env('APP_NAME') }}</title>

  {{-- CSS --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top"style="background-color:#F9AA8F;">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" 
      style="border-color: #ffffff;">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        {{-- Navbarの左側 --}}
        <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{ url('posts') }}">{{ __('Posts') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('users') }}">{{ __('Users') }}</a>
            </li> -->
            @if (Route::has('login'))
              @auth
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/home') }}">{{ __('home') }}</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();
                      alert('ログアウトしました')">
                        {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>
              @else
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">login</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">register</a>
                      </li>
                  @endif
              @endauth
            @endif
        </ul>

          {{-- Navbarの右側 --}}
        <!-- <ul class="navbar-nav ml-auto">
          {{-- 投稿ボタン --}}
          <li class="nav-item">
            <a href="{{ url('posts/create') }}" id="new-post" class="btn btn-success">
              {{ __('New Post') }}
            </a>
          </li> 
        </ul> -->
      </div>
    </div>
  </nav>
  <main class="main">
    @yield('content')
  </main>
</div>


<!-- <footer class="footer">
  <div class="container">
    <p class="text-muted" style="margin-top: 0!important;margin-bottom: 0rem!important;">
    Place sticky footer content here.</p>
  </div>
</footer> -->
{{-- JavaScript --}}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>