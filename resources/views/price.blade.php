@extends('layouts/app')

@section('content')
    <!-- PRELOADER -->
    <div class="loader">
        <div class="loader-icon">
            <img src="{{ asset('images/loading.png') }}" alt="image">
        </div>
    </div>
    <!-- Header area start -->
    @include('layouts.header')
    <!-- Header area End -->
    <!-- services area start -->
    <section class="services-area" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 heading">
                    <span>Всё лучшее для Вас</span>
                    <h2>Перечень услуг</h2>
                    <p>Консультация проводится бесплатно!</p>
                </div>
            </div>
            <div class="row mynav">
                <h3>Терапия</h3>
                <table class="table table-hover">
                    <thead class="table-ps">
                    <tr>
                        <th scope="col">Название услуги</th>
                        <th scope="col">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($priceThera as $prThera)
                        <tr>
                            <td>{{ $prThera->service_name }} {{ $prThera->comment }}</td>
                            <td>{{ $prThera->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h3>Детская стоматология</h3>
                <table class="table table-hover">
                    <thead class="table-ps">
                    <tr>
                        <th scope="col">Название услуги</th>
                        <th scope="col">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($priceChild as $prChild)
                        <tr>
                            <td>{{ $prChild->service_name }} {{ $prChild->comment }}</td>
                            <td>{{ $prChild->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h3>Хирургия</h3>
                <table class="table table-hover">
                    <thead class="table-ps">
                    <tr>
                        <th scope="col">Название услуги</th>
                        <th scope="col">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($priceSurg as $prSurg)
                        <tr>
                            <td>{{ $prSurg->service_name }} {{ $prSurg->comment }}</td>
                            <td>{{ $prSurg->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h3>Ортопедия</h3>
                <table class="table table-hover">
                    <thead class="table-ps">
                    <tr>
                        <th scope="col">Название услуги</th>
                        <th scope="col">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($priceOrthoP as $prOrthoP)
                        <tr>
                            <td>{{ $prOrthoP->service_name }} {{ $prOrthoP->comment }}</td>
                            <td>{{ $prOrthoP->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h3>Ортодонтия</h3>
                <table class="table table-hover">
                    <thead class="table-ps">
                    <tr>
                        <th scope="col">Название услуги</th>
                        <th scope="col">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($priceOrtho as $prOrtho)
                        <tr>
                            <td>{{ $prOrtho->service_name }} {{ $prOrtho->comment }}</td>
                            <td>{{ $prOrtho->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h3>Имплантология</h3>
                <table class="table table-hover">
                    <thead class="table-ps">
                    <tr>
                        <th scope="col">Название услуги</th>
                        <th scope="col">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($priceImplant as $prImplant)
                        <tr>
                            <td>{{ $prImplant->service_name }} {{ $prImplant->comment }}</td>
                            <td>{{ $prImplant->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h3>Физио-лечения</h3>
                <table class="table table-hover">
                    <thead class="table-ps">
                    <tr>
                        <th scope="col">Название услуги</th>
                        <th scope="col">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pricePhiz as $prPhiz)
                        <tr>
                            <td>{{ $prPhiz->service_name }} {{ $prPhiz->comment }}</td>
                            <td>{{ $prPhiz->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </section>
    <span class="target"></span>
    <!-- service area End -->

    <!-- contact area start -->
    @include('layouts.contacts')
    <!-- contact area End -->

    <!-- Footer area start -->
    @include('layouts.footer')
    <!-- Footer area End -->
@endsection