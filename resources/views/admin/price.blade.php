@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Панель администратора - Прайс</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="/home">Главная</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <a class="nav-link" href="/price">Прайс</a>
                                        <a class="nav-link" href="/editprice"></a>
                                        <a class="nav-link" href="#">Pricing</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                            <div class="col-lg-10">
                                <form class="row g-3" method="post" action="/price" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="price_category" class="form-label">Категория услуг</label>
                                        <select class="form-select" name="price_category">
                                            <option value="Терапия">Терапия</option>
                                            <option value="Детская стоматология">Детская стоматология</option>
                                            <option value="Хирургия">Хирургия</option>
                                            <option value="Ортопедия">Ортопедия</option>
                                            <option value="Ортодонтия">Ортодонтия</option>
                                            <option value="Имплантология">Имплантология</option>
                                            <option value="Физио-лечение">Физио-лечение</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="service_name" class="form-label">Название услуги</label>
                                        <input type="text" class="form-control" name="service_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Цена</label>
                                        <input type="text" class="form-control" name="price">
                                    </div>
                                    <div class="mb-3">
                                        <label for="comment" class="form-label">Комментарий</label>
                                        <input type="text" class="form-control" name="comment">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3">Добавить услугу</button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">
                <table class="table table-hover">
                    <thead class="table-ps">
                    <tr>
                        <th scope="col">Категория</th>
                        <th scope="col">Название услуги</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Комментарий</th>
                        <th scope="col">Сохранить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($price as $pr)
                        <form method="post" action="/price/{{ $pr->id }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <tr>
                            <th><select class="form-select" name="price_category">
                                    <option value="{{ $pr->price_category }}" selected>{{ $pr->price_category }}</option>
                                    <option value="Терапия">Терапия</option>
                                    <option value="Детская стоматология">Детская стоматология</option>
                                    <option value="Хирургия">Хирургия</option>
                                    <option value="Ортопедия">Ортопедия</option>
                                    <option value="Ортодонтия">Ортодонтия</option>
                                    <option value="Имплантология">Имплантология</option>
                                    <option value="Физио-лечение">Физио-лечение</option>
                                </select></th>
                            <td><input type="text" class="form-control" name="service_name" value="{{ $pr->service_name }}"></td>
                            <td><input type="text" class="form-control" name="price" value="{{ $pr->price }}"></td>
                            <td><input type="text" class="form-control" name="comment" value="{{ $pr->comment }}"></td>
                            <td><button type="submit" class="btn btn-primary mb-3">Сохранить</button></td>
                        </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
