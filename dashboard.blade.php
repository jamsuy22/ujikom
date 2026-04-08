<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin - AutoCare Garage</title>
</head>
<body>

<h1>Dashboard Admin</h1>
<p>Selamat datang di sistem AutoCare Garage</p>

<ul>
    <li><a href="{{ route('bengkel.index') }}">Data Bengkel</a></li>
    <li><a href="{{ route('layanan.index') }}">Data Layanan</a></li>
</ul>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

</body>
</html>
