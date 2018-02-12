@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div align="center"><a href="<?php echo url('/') ?>/home">Home</a> | <a href="<?php echo url('/') ?>/dairy/create">Add Dairy</a> | <a href="<?php echo url('/') ?>/dairy">Manage Dairy</a></div>
            <div class="card card-default">
                <div class="card-header">Dairy</div>

                <div class="card-body">
                   @if(session()->has('message.level'))
                        <div class="alert alert-{{ session('message.level') }}"> 
                        {!! session('message.content') !!}
                        </div>
                    @endif
                    @yield('dairy')
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
