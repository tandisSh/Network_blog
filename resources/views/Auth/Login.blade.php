<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('AdminAssets/assets/css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('AdminAssets/assets/css/font-awesome.min.css') }}">
    <title>login</title>
</head>

<body dir="rtl">

    <div class="main">
        <form id="form-sign" name="login" method="POST">

            <div>
                <h1>ورود</h1>
            </div>
            <div id="email">
                <label for="emaill">ایمیل</label><br />
                <input type="text" id="emailuser" name="email" placeholder="NegarKakavan@gmail.com" required />
                <span class="error-message"></span>
            </div>
            <div id="password">
                <label for="passwordd">رمز عبور</label>
                <input type="password" id="pass" name="password" placeholder="********" required />
                <span class="error-message"></span>
            </div>
            <button type="submit" name="submit" id="open">ورود</button>
            <div class="accont">
                <a id="forget" href="#">کلمه عبور خود را فراموش کرده اید؟</a>
                <p id="sabt">
                    حساب کاربری ندارید؟<a href="./register.html" id="sabtnam"> ثبت نام</a>
                </p>
            </div>
        </form>
    </div>

</body>
<script src="{{ asset('AdminAssets/assets/js/signUp.js') }}"></script>

</html>
