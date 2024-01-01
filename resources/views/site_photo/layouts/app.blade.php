<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('site_photo/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <meta name="csrf-token" value="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

    {{-- photos --}}

    {{-- <title>Собственный html-контент балуна метки</title> --}}
    {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> --}}
    <!--
            Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
            Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
        -->

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=07d38e77-67fa-4fe8-9c64-2ec295d03440"
        type="text/javascript"></script>

    {{-- <script src="/site_photo/js1/baloon_html.js" type="text/javascript"></script> --}}
    <script src="/api/photo/mapJs?654654" type="text/javascript"></script>

    <style>
        html,
        body,
        #map {
            width: 100%;
            padding: 0;
            margin: 0;
        }

        html,
        body {
            height: 100%;
        }

        #map {
            height: 10%;
            min-height: 280px;
        }

        .description {
            display: block;
            color: #999;
            font-size: 10px;
            line-height: 17px;
        }

        a,
        a:visited {
            color: #04b;
            text-decoration: none !important;
        }

    </style>
</head>

<body>

    <div id="map"></div>
    <div id="app"></div>

</body>

{{--<!-- Yandex.Metrika counter -->--}}
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(96033624, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/96033624" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
{{--<!-- /Yandex.Metrika counter -->--}}

<script src="{{ asset('site_photo/js/app.js') }}?{{ rand(1, 999999) }}"></script>
<script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>

</html>
