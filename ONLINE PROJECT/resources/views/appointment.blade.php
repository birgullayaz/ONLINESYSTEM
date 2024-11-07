@extends('menu.menu')

<div class="content">
    <div class="container">
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

        <div class="provider-list mt-4">
            <div class="card shadow p-4">
                <h2 class="text-center mb-4">Hizmet Sağlayıcılarımız</h2>
                
                <form method="post" action="/saveAppointment">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="provider">Hizmet Sağlayıcı Seçin:</label>
                        <select class="form-control" id="provider" name="provider">
                            <option value="">Seçiniz...</option>
                            @foreach($providers as $provider)
                                <option value="{{ $provider->id }}">{{ $provider->name }} {{ $provider->providers }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="provider">Saat seçin</label>
                        <select class="form-control" name="time">
                            <option>11:00</option>
                            <option>12:00</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="dater">Tarih seçin</label>
                        <select name="date" class="form-control">
                            <option>6/10/2024</option>
                            <option>6/11/2024</option>
                            <option>6/12/2024</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="name">İsim</label>
                        <input type="name" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" value="KAYDET" class="btn btn-primary"> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@extends('menu.footer')
