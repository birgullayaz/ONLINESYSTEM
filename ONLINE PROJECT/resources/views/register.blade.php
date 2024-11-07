@extends('menu.menu')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Giriş Yap</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white text-center">
                            <h3>Yeni Kayıt</h3>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="/BeRegister">
                            @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">İsim</label>
                                    <input type="name" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Adresi</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Şifre</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <div class="mb-3">
                                <label for="role" class="form-label">Rolünüz</label> 
                                <select name="provider">
                                    <option name="Musteri">Musteri</option>
                                    <option name="Doktor">Doktor</option>
                                    <option name="Danısman">Danisman</option>
                                    <option name="Ogretmen">Ogretmen</option>
                                </select>
                                </div>
                               
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Kayıt Olun</button>
                                </div>
                            </form>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        @extends('menu.footer')

