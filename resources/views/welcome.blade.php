@extends('layouts.app')

@section('content')
 <section id="main-content">
          <section class="wrapper" style="margin-top: 0;"> 
<div class="container">
    <div class="row">
  <br>
      <div class="col-md-10">
        <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li class="active">Data Transaksi</li>
        </ul>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Data Transaksi</h2>
          </div>

          <div class="panel-body">
            <p> 
                <a class="btn btn-primary" href="{{ url('/admin/transaksi/create') }}">Tambah</a>
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
      </section>
      </section>

 
@endsection
