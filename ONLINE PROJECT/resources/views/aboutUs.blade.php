@extends('menu.menu')

<div class="content">
    <div class="container">
     

        <div class="provider-list mt-4">
            <h3>Tüm Hizmet Sağlayıcılarımız</h3>
            <div class="row">
                @foreach($providers as $provider)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $provider->name }}</h5>
                                <p class="card-text">{{ $provider->description }}</p>
                                <p class="card-text"><small class="text-muted">Uzmanlık: </small></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.card {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 15px;
}

.mt-4 {
    margin-top: 2rem;
}

.mb-3 {
    margin-bottom: 1rem;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin: -15px;
}

.col-md-4 {
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
    padding: 15px;
}
</style>


@extends('menu.footer')

