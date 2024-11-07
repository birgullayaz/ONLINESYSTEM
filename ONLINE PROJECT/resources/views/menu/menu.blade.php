<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Randevu</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            body {
                margin: 0;
                font-family: Figtree, sans-serif;
            }
            
            .navbar {
                background-color: #333;
                overflow: hidden;
                position: fixed;
                top: 0;
                width: 100%;
            }

            .navbar a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            .navbar a:hover {
                background-color: #ddd;
                color: black;
            }

            .navbar a.active {
                background-color: #04AA6D;
                color: white;
            }

            .navbar-right {
                float: right;
            }

            .content {
                margin-top: 60px;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="navbar">
            <a class="active" href="#home">Ana Sayfa</a>
            <a href="/takeAppointment">Randevu Al</a>
            <a href="/aboutUs">Hakkımızda</a>
        
            
            <div class="navbar-right">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Panel</a>
                    @else
                        <a href="{{ route('exit') }}">Çıkış Yap</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Kayıt Ol</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>

      

