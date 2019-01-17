@extends('layouts.app')

@section('content')
<section id="main-content">
    <section class="wrapper" style="margin-top: 0;">
        <div class="container">
            <div class="row">
                <br>
                @if ($message = Session::get('message'))
                <div class="alert alert-success martop-sm">
                    <p>{{ $message }}</p>
                </div>
                @endif
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
                                <a class="btn btn-primary" href="{{url('/transaksi/create')}}">Tambah</a>
                            </p>
                            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                            aria-describedby="example2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>
                                                        <center> Nama Item </center>
                                                    </th>
                                                    <th>
                                                        <center> Price </center>
                                                    </th>
                                                    <th>
                                                        <center> Paid </center>
                                                    </th>
                                                    <th>
                                                        <center> created_at </center>
                                                    </th>
                                                    <th>
                                                        <center> updated_at </center>
                                                    </th>
                                                    <th>
                                                        <center> Action </center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                  foreach ($transaksi as $trans) {
                                                ?>
                                                <tr role="row" class="odd">
                                                    <td class="hidden-xs">{{ $trans->item}}</td>
                                                    <td class="hidden-xs">{{ $trans->price }}</td>
                                                    <td class="hidden-xs">{{ $trans->paid }}</td>
                                                    <td class="hidden-xs">{{ $trans->created_at }}</td>
                                                    <td class="hidden-xs">{{ $trans->updated_at }}</td>
                                                    <td>
                                                        <center>
                                                            <form action="{{action('TransaksiController@destroy', $trans->id)}}"
                                                                method="post">
                                                                <a href="{{ route ('transaksi.edit',['id' => $trans->id]) }}"
                                                                    class="btn btn-warning">Edit</a>
                                                                {{csrf_field()}}
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                            </form>
                                                        </center>
                                                    </td>
                                                </tr>
                                                <?php
                                                } 
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection