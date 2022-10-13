@extends('layouts.app')


@section('content')
    {{-- slider inicial ----- --}}
    @include('partials.carousel')

    {{-- lista de celulares ----- --}}
    <div class="container">
        <h1 class="text-center text-dark" style="margin: 50px auto 15px auto">Últimos ingresos</h1>
    </div>

    <div class="container d-flex justify-content-center" style="margin-bottom: 100px">

        <div class="row">
            @foreach ($phones as $phone)
                <x-phones-list-item-component :phone=$phone />
            @endforeach
        </div>
    </div>
@endsection

@section('js')
    <script type="module">
        $(document).ready(function() {
            //
        });
    </script>
@endsection
