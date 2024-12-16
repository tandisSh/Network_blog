<!DOCTYPE html>
<html lang="en">

@include('Admin.layouts.Head-tag')

<body>
    @include('Admin.layouts.Sidebar')
    <div class="content">
        @yield('content')
    </div>
</body>

</html>
