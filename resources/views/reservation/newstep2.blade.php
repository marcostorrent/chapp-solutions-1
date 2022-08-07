@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ $num_total }} Habitaciones libres entre {{ $date_in }} y {{ $date_out }} </h2>
        </div>

    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

            @foreach ($rooms as $room)
                <form action="/reservas/crear/paso3" method="POST">
                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <input type="hidden" name="date_in" value="{{ $date_in }}" />
                    <input type="hidden" name="date_out" value="{{ $date_out }}" />
                    <input type="hidden" name="guest_num" value="{{ $guest_num }}" />
                    <input type="hidden" name="room_num" value="{{ $room->room_num }}" />

                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">{{ $room->room_name }}</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">{{ $room->current_price }}€<small
                                        class="text-muted fw-light">/día</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Máximo {{ $room->guest_max }} huéspedes</li>
                                    <li>Número de habitación: {{ $room->room_num }} </li>

                                    <li>{{ $room->description }} </li>
                                </ul>
                                <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Reservar</button>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach

        </div>
    </div>
@endsection
