<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    {{-- Header --}}
    <header class="bg-white shadow p-4 flex justify-between">
        <div>
            <h1 class="text-xl font-bold">My Application</h1>
        </div>

        <div>
            @if($current_user)
                <span class="mr-4">User: {{ $current_user->name }}</span>
            @endif
            <span>Company: {{ $company_name }}</span>
        </div>
    </header>

    {{-- Sidebar --}}
    <aside class="w-64 bg-gray-800 text-white fixed h-full p-4">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="#">Products</a></li>
        </ul>
    </aside>

    {{-- Content --}}
    <main class="ml-64 p-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-white text-center p-4 mt-10">
        <p>© 2026 My App</p>
    </footer>

</body>
</html>