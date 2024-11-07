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
                            <h3>Giriş Yap</h3>
                        </div>
                        <div class="card-body">
                        <form  action="/LoginSystem" method="POST">
@csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Adresi</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Şifre</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                   /**  <label class="form-check-label" for="remember">Beni Hatırla</label>*/
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Giriş Yap</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <a href="/register" class="text-decoration-none">Hesabınız yok mu? Kayıt Olun</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
