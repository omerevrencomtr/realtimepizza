@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pizza Siparişi</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>

                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="{{ route('user.orders.store') }}" class="form-horizontal">
                                {{ csrf_field() }}

                                <div class="form-group"><label class="col-sm-2 control-label">Adres</label>
                                    <div class="col-sm-10"><input type="text" name="address" placeholder="Adresiniz" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Boyut</label>

                                    <div class="col-sm-10">
                                        <div><label> <input type="radio" checked="" value="medium" id="medium" name="size"> Küçük </label></div>
                                        <div><label> <input type="radio" value="large" id="large" name="size"> Büyük </label></div>
                                        <div><label> <input type="radio" value="extra-large" id="extra-large" name="size"> Extra Büyük </label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Malzemeler</label>
                                    <div class="col-sm-10">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="biber" id="pepperoni"> Biber
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="extra-peynir" id="extra-cheese"> Extra Peynir
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="mantar" id="mushrooms"> Mantar
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="kıyma" id="ground-beef"> Kıyma
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="ananas" id="inlineCheckbox3"> Ananas
                                        </label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Notlar</label>

                                    <div class="col-sm-10"><input type="text" name="instructions" placeholder="Notlar" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-success" type="submit">Sipariş Ver</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
