@extends('layout')
@section('content')
    
    <div class="container">
        <div class="row">
            <h1>Reservas</h1>
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 1%;" class="text-start">Id</th>
                            <th style="">Fecha entrada</th>
                            <th style="">Fecha salida</th>
                            <th style="">Tipo habitación</th>
                            <th style="">Nº huéspedes </th>
                            <th style="">Datos contacto</th>
                            <th style="">Precio Total</th>
                            <th style="">Localizador</th>
                            <th style="">Nº Habitación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <p></p>
                            <tr>
                                <th scope="row" class="text-start">{{ $reservation->id }}</th>
                                <td>{{ \Carbon\Carbon::parse($reservation->date_in)->formatLocalized('%A %d de %B de %Y') }}
                                </td>
                                <td>{{ \Carbon\Carbon::parse($reservation->date_out)->formatLocalized('%A %d de %B de %Y') }}
                                </td>
                                <td>{{ $reservation->room->roomType->type_name }}</td>

                                <td>{{ $reservation->guest_num }}</td>
                                <td>
                                    {{ $reservation->name }} <br />
                                    {{ $reservation->email }} <br />
                                    {{ $reservation->phone }}
                                </td>
                                <td>{{ $reservation->total_price }}</td>
                                <td>{{ $reservation->uuid }}</td>
                                <td>{{ $reservation->room->room_num }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-primary btn-lg" type="button" href="/reservas/crear">Crear reserva nueva</a>
            </div>
        </div>
    </div>

@endsection

