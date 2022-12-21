@extends('base')

@include('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container m-3">
        <h1>Dashboard</h1>
        <div class="card col-sm-7 offset-sm-5 border border-light mt-5">
            <div class="card-header" style="background-color: #bd4bb1;">
                <h1 class="text-center">Final Project</h1>
            </div>
            <div class="card-body shadow">
                <h2 class="text-center">This is my Final Project</h2>
            </div>
        </div>
    </div>

@endsection

<style>
    img {
        width: 85%;
    }
</style>
