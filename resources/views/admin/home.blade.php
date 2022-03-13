@extends('layouts.app')
@section('title', 'Fiqri | Dashboard')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>X</td>
                                <td>X</td>
                                <td>X</td>
                                <td>
                                    <button class="item" data-placement="top" title="" data-original-title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                   
                                </td>
                            </tr>
                   
                </table>



            </div>
        </div>
    </div>
@endsection
