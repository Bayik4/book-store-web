<h1>loggedin</h1>

<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>
@section('js')
    <script>
        alert('oe')
    </script>
@endsection
