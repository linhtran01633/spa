<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KOKORO - SPA</title>
    <link href="css/contract.css" rel="stylesheet">
    <style>
        .container {
            margin: 0 auto;
            max-width: 1200px;
        }
        .mx-auto {
            margin: 0 auto;
        }
        .w-full {
            width: 100%;
        }
        .h-full {
            height: 100%;
        }

        .img0 {
            aspect-ratio: 6 / 4;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="mx-auto">
            @for ($i = 0 ; $i < 10 ; $i++)
                <div>
                    <img class="w-full h-full @if($i == 0) img0 @endif" src="/images/top/img{{$i}}.webp" alt="img">
                </div>
            @endfor
        </div>
    </div>

    <div id="button-contact-vr" class="">
        <div id="gom-all-in-one">
            <!-- v3 -->
            <!-- contact form -->
            <!-- end contact form -->

            <!-- showroom -->
            <!-- end showroom -->

            <!-- facebook -->
            <div id="facebook-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://m.me/368692956589414">
                            <img src="/images/icon/facebook_icon.png">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end facebook -->

            <!-- line -->
            <div id="line-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        {{-- https://lin.ee/dDg4eMg --}}
                        {{-- target="_blank" --}}
                        <a href="#">
                            <img src="/images/icon/line_icon.png">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end line -->

            <!-- viber -->
            <!-- end viber -->

            <!-- zalo -->
            <div id="zalo-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://zalo.me/0865008868" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                            <img width="100" height="95" src="/images/icon/zalo_icon.png" class="lazyloaded" data-ll-status="loaded"><noscript>
                            <img width="100" height="95"src="https://chilux.vn/wp-content/plugins/button-contact-vr/img/zalo.png" /></noscript>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end zalo -->

            <!-- whatsapp -->
            <!-- end whatsapp -->

            <!-- Phone -->
            <div id="phone-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a href="tel:84865008868" data-wpel-link="internal">
                            <img width="50" height="50" src="/images/icon/phone_icon.png" class="lazyloaded" data-ll-status="loaded">
                        </a>
                    </div>
                </div>
            </div>
            <div class="phone-bar phone-bar-n">
                <a href="tel:84865008868" data-wpel-link="internal">
                    <span class="text-phone">086 500 8868</span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>