<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="{{ route('frontend.index') }}">index</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="{{ route('frontend.index') }}">Logo</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        @if(Auth::check())
        <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Login</a>
        @else
        <a class="btn btn-sm btn-outline-secondary" href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">{{ trans('global.logout') }}</a>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        @endif
      </div>
    </div>
  </header>