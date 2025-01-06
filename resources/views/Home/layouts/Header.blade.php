<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header" style="float: right;">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="{{ route('Home') }}" class="navbar-brand" style="color: #000080;">Network Studio</a>
        </div>

        <div class="collapse navbar-collapse" style="float: left;">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('admin.panel')}}">پنل کاربری</a></li>

                @if (Auth::check())
                    <li><a href="{{ route('profile.show')}}">{{ Auth::user()->name }}</a></li>
                @else
                    <li><a href="{{ route('LoginForm') }}">ورود/ثبت نام</a></li>
                @endif

                <li class="active"><a href="{{ route('Home') }}">صفحه اصلی</a></li>
            </ul>
        </div>

    </div>
</div>
