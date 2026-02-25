<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>نظام إدارة الموظفين</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ms-3" href="{{ route('employees.index') }}">إدارة الموظفين</a>
    </nav>
     <div class="container mt-4">
        {{-- هنا نضيف الرسالة --}}
        @if(session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
