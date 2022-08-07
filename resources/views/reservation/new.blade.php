@extends('layout')
@section('content')
    <div class="bootstrap-iso">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <form action="/reservas/crear/paso2" class="form-horizontal" method="post">
                    @csrf <!-- {{ csrf_field() }} -->
                        <div class="form-group ">
                            <label class="control-label col-sm-3 requiredField" for="date_in">
                                Fecha Entrada
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar">
                                        </i>
                                    </div>
                                    <input class="form-control" id="date_in" name="date_in" placeholder="MM/DD/YYYY"
                                        type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-sm-3 requiredField" for="date_out">
                                Fecha Salida
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar">
                                        </i>
                                    </div>
                                    <input class="form-control" id="date_out" name="date_out" placeholder="MM/DD/YYYY"
                                        type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-sm-3 requiredField" for="guest_num">
                                Num huéspedes
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input class="form-control" id="guest_num" name="guest_num" type="number" value="1" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input name="_honey" style="display:none" type="text">
                                <button class="btn btn-primary " name="submit" type="submit">
                                    Buscar disponibilidad
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
