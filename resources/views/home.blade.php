@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($items as $item)
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-header bg-white">
                    <img src="{{ asset('/asset/images/fanta.jpg') }}" alt="" width="100%">
                    <img src="{{ asset('/asset/images/1.jpg') }}" alt="" width="100%">
                </div>
                <div class="card-body">
                    <a href="">{{ $item['name'] }}</a>
                    <p>
                        ¥{{ number_format($item['price']) }}
                    </p>
                    <p class="row justify-content-center">
                        <a href="" class="btn btn-outline-info">{{ __('Add Cart') }}</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection