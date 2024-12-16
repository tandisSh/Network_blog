<!DOCTYPE html>
<html lang="en">

@include('Admin.layouts.Head-tag')

<body>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    @include('Admin.layouts.Sidebar')
    <div class="content">
        @yield('content')
    </div>
</body>

</html>
