<!DOCTYPE html>
<html lang="en">
@include('Home.layouts.Head-tag')

<body>

    @include('Home.layouts.Header')
    <section id="blog">
        <div class="container">
            @yield('content')
        </div>
    </section>
    @include('Home.layouts.Footer')
    @include('Home.layouts.js')

</body>

</html>
