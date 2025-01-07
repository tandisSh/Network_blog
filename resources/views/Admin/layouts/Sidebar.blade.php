<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
</head>

<body>
    <div class="sidebar">
        <a href="{{ route('Home') }}">
            صفحه اصلی
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M6 19h3.692v-5.077q0-.343.233-.575q.232-.233.575-.233h3q.343 0 .576.233q.232.232.232.575V19H18v-8.692q0-.154-.067-.28t-.183-.22L12.366 5.75q-.154-.134-.366-.134t-.365.134L6.25 9.808q-.115.096-.183.22t-.067.28zm-1 0v-8.692q0-.384.172-.727t.474-.565l5.385-4.078q.423-.323.966-.323t.972.323l5.385 4.077q.303.222.474.566q.172.343.172.727V19q0 .402-.299.701T18 20h-3.884q-.344 0-.576-.232q-.232-.233-.232-.576v-5.076h-2.616v5.076q0 .344-.232.576T9.885 20H6q-.402 0-.701-.299T5 19m7-6.711" />
            </svg>
        </a>
        <a href="{{ route('profile.show') }}">
            پروفایل
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linejoin="round"
                        d="M4 18a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2Z" />
                    <circle cx="12" cy="7" r="3" />
                </g>
            </svg>
        </a>

        @if (Auth::check() && Auth::user()->user_role == 1)
            <div class="has-submenu">
                <a onclick="toggleMenu(this)">
                    دسته بندی
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M27 22.141V18a2 2 0 0 0-2-2h-8v-4h2a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2v4H7a2 2 0 0 0-2 2v4.142a4 4 0 1 0 2 0V18h8v4.142a4 4 0 1 0 2 0V18h8v4.141a4 4 0 1 0 2 0M13 4h6l.001 6H13ZM8 26a2 2 0 1 1-2-2a2 2 0 0 1 2 2m10 0a2 2 0 1 1-2-2a2.003 2.003 0 0 1 2 2m8 2a2 2 0 1 1 2-2a2 2 0 0 1-2 2" />
                    </svg>
                </a>
                <div class="submenu">
                    <a href="{{ route('Panel.Category.Create') }}">افزودن دسته بندی</a>
                    <a href="{{ route('Panel.Category.Categories') }}">لیست دسته بندی ها</a>
                </div>
            </div>

            <div class="has-submenu">
                <a onclick="toggleMenu(this)">
                    مقالات
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h12.769q.69 0 1.153.463T20 5.616v12.769q0 .69-.462 1.153T18.384 20zM5 5v14zm3 11.5h5q.214 0 .357-.143T13.5 16t-.143-.357T13 15.5H8q-.213 0-.357.143T7.5 16t.143.357T8 16.5" />
                    </svg>
                </a>
                <div class="submenu">
                    <a href="{{ route('Panel.Article.Create') }}">افزودن مقاله</a>
                    <a href="{{ route('Panel.Article.Articles') }}">لیست مقاله ها</a>
                </div>
            </div>
        @endif

        <a href="{{ route('Logout') }}">
            خروج
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M4 12a1 1 0 0 0 1 1h7.59l-2.3 2.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l4-4a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76a1 1 0 0 0-.21-.33l-4-4a1 1 0 1 0-1.42 1.42l2.3 2.29H5a1 1 0 0 0-1 1M17 2H7a3 3 0 0 0-3 3v3a1 1 0 0 0 2 0V5a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-3a1 1 0 0 0-2 0v3a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3" />
            </svg>
        </a>
    </div>
    <script>
        function toggleMenu(element) {
            const parent = element.parentElement; // دریافت عنصر والد
            parent.classList.toggle('open'); // اضافه/حذف کلاس "open"
        }
    </script>
