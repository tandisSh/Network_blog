<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register</title>
    <link rel="stylesheet" href="{{ asset('AdminAssets/assets/css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/assets/css/font-awesome.min.css') }}">

</head>

<body dir="rtl">


    <div class="main">
        <form id="form-register" name="register" method="post" action="{{ route('Register')}}">
            @csrf
            <div>
                <h1>ثبت نام</h1>
            </div>

            <div id="fullnames">
                <label for="fullname">نام کاربری</label><br />
                <input type="text" id="fullname" name="name" placeholder="NegarKakavan" title="فقط حروف مجاز است" />
                <span class="error-message"></span>
            </div>

            <div id="email">
                <label for="emailuser">ایمیل</label><br />
                <input type="text" id="emailuser" name="email" placeholder="NegarKakavan@gmail.com"
                    title="لطفا ایمیل معتبر وارد کنید"  />
                <span class="error-message"></span>
            </div>

            <div id="password">
                <label for="pass">رمز عبور</label>
                <input type="password" id="pass" name="password" placeholder="********"
                    title="لطفا یک رمز عبور معتبر وارد کنید." />
                <span class="error-message"></span>
            </div>

            <button name="button" id="sabtnam" type="submit">ثبت نام</button>

            <p id="sabt">
                قبلا ثبت نام کرده اید؟<a href="{{ route('LoginForm')}}" id="vorodhesab"> ورود به حساب</a>
            </p>
        </form>
    </div>

</body>
<script src="{{ asset('AdminAssets/assets/js/signUp.js') }}">

</script>
</html>
