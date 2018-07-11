@extends('layouts.app')

@section('content')
<div class="page-header header-filter" style="background-image: url('{{asset('img/bg3.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Estas logeado
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
