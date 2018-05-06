@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sipariş Takibi</div>

                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <order-progress status="{{ $order->status->name}}" initial=" {{ $order->status->percent }}" order_id="{{ $order->id }}"></order-progress>

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>



                    <hr>

                    <div class="order-details">
                        <strong>Sipariş NO:</strong> {{ $order->id }} <br>
                        <strong>Boyut:</strong> {{ $order->size }} <br>
                        <strong>Malzemeler:</strong> {{ $order->toppings }} <br>

                        @if ($order->instructions != '')
                            <strong>Notlar:</strong> {{ $order->instructions }}
                        @endif

                    </div>

                    <a class="btn btn-primary" href="{{ route('user.orders') }}">Siparişlere Geri Dön</a>

                </div> <!-- end panel-body -->
            </div> <!-- end panel -->
        </div>
    </div>
</div>
@endsection
