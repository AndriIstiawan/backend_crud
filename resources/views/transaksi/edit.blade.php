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
                        <li><a href="{{ url('/transaksi') }}">Data Transaksi</a></li>
                        <li class="active">Update Data Transaksi</li>
                    </ul>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">Data Transaksi</h2>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{action('TransaksiController@update', $transaksi->id)}}"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="PATCH">
                                <div class="form-group">
                                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                                    <label for="project" class="col-md-4 control-label">Item</label>
                                    <div class="col-md-6">
                                        <input id="project" type="text" class="form-control" name="item" value="{{$transaksi->item}}"
                                            required autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Price</label>
                                    <div class="col-md-6">
                                        <input type="number" name="price" class="form-control" id="price" value="{{$transaksi->price}}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Paid</label>
                                    <div class="col-md-6">
                                        <input type="text" name="paid" class="form-control" id="paid"
                                            value="{{$transaksi->paid}}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary pull-right">
                                            Update
                                        </button>
                                        <p>
                                            <a href="{{ url('/transaksi') }}" class="btn btn-danger pull-right">
                                                Cancel
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection