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
    <script src="/site_photo/js1/baloon_html.js" type="text/javascript"></script>
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

    <div class="container mx-auto">
        <h1 class="text-2xl my-10">добавить кружку</h1>

        <div style="max-height: 100px; overflow: auto;">
            <pre>
            {{ print_r($warn ?? []) }}
            {{ print_r($warn1 ?? []) }}
            </pre>
        </div>

        {{-- <form method="POST" action="{{ route('add_cut_form') }}" accept-charset="UTF-8"> --}}
        <form method="POST" action="/addcu" accept-charset="UTF-8" enctype="multipart/form-data">

            @csrf

            <label class="block mb-3">
                что за место
                <br />
                <input type="text" name="name"
                    class="border-2 border-gray-400 xoutline-none xoutline-slate-400 px-3 py-1 focus:border-green-300" />
            </label>
            <label class="block mb-3">
                метка ( лан лон )
                <br />
                <input type="text" name="metka"
                    class="w-full border-2 border-gray-400 xoutline-none xoutline-slate-400 px-3 py-1 focus:border-green-300" />
            </label>
            <label class="block-inline mb-3">
                долгота (лон)
                <input type="text" name="lon"
                    class="border-2 border-gray-400 xoutline-none xoutline-slate-400 px-3 py-1 focus:border-green-300" />
            </label>
            <label class="block-inline mb-3">
                широта (лат)
                <input type="text" name="lat"
                    class="border-2 border-gray-400 xoutline-none xoutline-slate-400 px-3 py-1 focus:border-green-300" />
            </label>

            <label class="block mb-3">
                фотки
                <br />
                @for ($t = 1; $t < 10; $t++)
                    <input type="file" xmultiple xname="photos{{ $t }}" name="photos[]"
                        class="border-2 border-gray-400 xoutline-none xoutline-slate-400 px-3 py-1 focus:border-green-300" />
                @endfor
            </label>

            <label class="block mb-3">
                <button type="submit"
                    class="bg-green-400 px-3 py-1 hover:border-green-500 rounded-sm overflow-hidden block-inline">Добавить</button>
            </label>

            <br />
            <br />

        </form>
    </div>

</body>

{{-- <script src="{{ asset('site_photo/js/app.js') }}?{{ rand(1, 999999) }}"></script> --}}
<script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>

</html>
