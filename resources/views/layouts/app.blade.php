<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - CampusInfo</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f9; color: #222; }
        nav { background: #1e3a8a; padding: 14px 24px; display: flex; gap: 20px; align-items: center; }
        nav .brand { color: #fff; font-weight: bold; font-size: 20px; margin-right: auto; }
        nav a { color: #cbd5e1; text-decoration: none; }
        nav a:hover, nav a.active { color: #fff; font-weight: bold; }
        main { max-width: 900px; margin: 30px auto; padding: 0 20px; }
        .card { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,.1); margin-bottom: 16px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 16px; }
        footer { text-align: center; padding: 20px; color: #666; }
    </style>
</head>
<body>
    <nav>
        <span class="brand">CampusInfo</span>
        <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
        <a href="{{ route('prodi') }}" class="{{ request()->routeIs('prodi') ? 'active' : '' }}">Program Studi</a>
        <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>&copy; {{ date('Y') }} CampusInfo</footer>
</body>
</html>