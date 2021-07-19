<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"></a>
        <form method="POST" action="{{ route('logout') }}" >
        @csrf
            <button type="submit" class="btn btn-primary">
                ログアウト
            </button>
        </form>
    </div>
</nav>