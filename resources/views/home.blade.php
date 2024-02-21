@extends('layouts.app')

@section('content')

<div class="container-sm">
    <div class="col-xl col-">
        <div class="card bg-  mb-4 mt-3">
            <div class="card-body">Pinjam Buku</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text- stretched-link" href="/peminjaman">View Details</a>
                <div class="small "><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
</div>

<div class="container-">
    <div class="col-xl col-">
        <div class="card bg-  mb-4 mt-3">
            <div class="card-body">Lihat Buku</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text- stretched-link" href="/index">View Details</a>
                <div class="small "><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
</div>

<div class="container-">
    <div class="col-xl col-">
        <div class="card bg-  mb-4 mt-3">
            <div class="card-body">Ulas Buku</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text- stretched-link" href="/ulasan">View Details</a>
                <div class="small "><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
</div>

@endsection


