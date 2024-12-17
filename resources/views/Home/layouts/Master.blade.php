<!DOCTYPE html>
<html lang="en">
@include('Home.layouts.Head-tag')

<body>

    @include('Home.layouts.Header')
    @hasSection('Home-section')
        @yield('Home-section')
    @endif
    <section id="blog">
        <div class="container">
            @yield('content')
        </div>
    </section>
    @include('Home.layouts.Footer')
    @include('Home.layouts.js')

</body>

</html>
