@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Datos de la reserva </h2>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <form action="/reservas/crear/paso4" method="POST">
                @csrf
                <!-- {{ csrf_field() }} -->
                <input type="hidden" name="date_in" value="{{ $date_in }}" />
                <input type="hidden" name="date_out" value="{{ $date_out }}" />
                <input type="hidden" name="guest_num" value="{{ $guest_num }}" />
                <input type="hidden" name="room_id" value="{{ $room->id }}" />

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{ $room->room_name }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group ">
                                <div class="row ">
                                    <label class="control-label col-sm-3 requiredField" for="name">
                                        Nombre
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input class="form-control" id="name" name="name" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row ">
                                    <label class="control-label col-sm-3 requiredField" for="email">
                                        Email
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input class="form-control" id="email" name="email" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row ">
                                        <label class="control-label col-sm-3 requiredField" for="phone">
                                            Teléfono
                                        </label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input class="form-control" id="phone" name="phone" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Finalizar Reservar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
