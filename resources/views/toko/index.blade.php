@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <h4 class="text-start">list product</h4>
                    <a href="{{ route('toko.create') }}" class="btn btn-primary btn-sm float-right font-weight-bolder mr-1"><i class="ni ni-fat-add"></i>Tambah Data</a>
                </div>
            </div>
        </div>    
            </div><br>
            <div class="card">
                <div class="card-body">
                    <table id="DataTable" class="table table-hover table-border"
                        style="width:100%; background-color: #fafaff ;">
                        <thead class="thead">
                            <tr>
                                <th width="1%">No</th>
                                <th width="30%">Nama</th>
                                <th width="30%">Email</th>
                                <th width="30%">No.Telepon</th>
                                <th width="30%">Foto</th>
                                <th width="30%">Deskripsi</th>
                                <th width="30%">Alamat</th>
                                <th width="1%" class="text-center">Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->noTelp}}</td>
                                <td>{{$data->image}}</td>
                                <td>{{$data->description}}</td>
                                <td>{{$data->address}}</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <span class="" data-bs-toggle="dropdown">
                                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"
                                                data-feathers='settings'></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item font-small-1"
                                                href="{{ route('toko.index', $data->nama) }}"><i data-feathers='eye'
                                                    class="font-small-1 mr-1"></i>Show</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            {{-- foreach data --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- @include('components.btn-sweet') --}}
    <script>
        $(document).ready(function() {
            $('#DataTable').DataTable({
                "columnDefs": [{
                    "orderable": false,
                    "targets": -1,
                }]
            });
        });
    </script>
@endsection
