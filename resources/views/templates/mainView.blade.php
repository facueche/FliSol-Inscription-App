{{--
/*
 * Copyright (c) 2017 Daniel Echenique <facueche@gmail.com>.
 *
 * This file is part of FliSol Inscription App.
 *
 * FliSol Inscription App is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * FliSol Inscription App is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with FliSol Inscription App.  If not, see <http://www.gnu.org/licenses/>.
 */
 --}}

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>@yield('Title')</title>

        {{-- Bootstrap --}}
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            html, body {
                background-image: url("/images/background.png"); 
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: space-around;
            }

            .flex-column-center {
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: stretch;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-column-center full-height">
            <div></div>
            <div class="flex-center position-ref">
                <h1>Inscripción al FliSol</h1>
            </div>
            <div class="flex-center position-ref">
                @yield('Body')
            </div>
            <div></div>
        </div>

        <script src="plugins/sweetalert/sweetalert.min.js"></script>
        @include('sweet::alert')
    </body>
</html>
