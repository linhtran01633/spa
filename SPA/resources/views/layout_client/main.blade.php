<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KOKORO - SPA</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/contract.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('css')
</head>
<body>
    @php
        $language = 'en';
        if(__('lang') == 'jp') {
            $language = 'jp';
        } else if(__('lang') == 'vn') {
            $language = 'vn';
        }
        Log::info('Language = ' . $language);
    @endphp
    @include('layout_client.header')
    <main>
        @yield('content')
    </main>
    @include('layout_client.footer')
    @yield('scripts')
    <script>
        const navbar = document.getElementById('fixNav');
        function changeNavbarColorOnScroll() {
            if (window.scrollY > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }
        window.addEventListener('scroll', changeNavbarColorOnScroll);

        function toggleMenu() {
            console.log('Toggling menu');
            const menu = document.getElementById("menu_mobile");
            // menu.classList.toggle("hidden");
        }


        window.addEventListener('click', toggleMenu);


        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.getElementById('menu_toggle');
            const menuMobile = document.getElementById('menu_mobile');
            const iconBars = menuToggle.querySelector('.fa-bars');
            const iconXmark = menuToggle.querySelector('.fa-xmark');
            const subMenuLinks = document.querySelectorAll('.mobile-nav li > a');

            // Toggle hiển thị menu mobile
            menuToggle.addEventListener('click', function () {
                menuMobile.classList.toggle('hidden');
                iconBars.classList.toggle('hidden');
                iconXmark.classList.toggle('hidden');
            });

            // Thêm sự kiện cho các liên kết có submenu
            subMenuLinks.forEach(link => {
                link.addEventListener('click', function (event) {
                    const nextElement = link.nextElementSibling;
                    if (nextElement && nextElement.classList.contains('sub-menu-mobile')) {
                        event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết
                        nextElement.classList.toggle('open'); // Hiển thị submenu khi nhấp
                    }
                });
            });
        });
    </script>
</body>
</html>