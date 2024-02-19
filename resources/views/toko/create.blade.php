@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <h4 class="text-start">Tambahkan Toko</h4>
                    <a href="{{ route('toko.index') }}" class="btn btn-secondary btn-sm float-right font-weight-bolder mr-1"><i class="ni ni-bold-left"></i>Back</a>
                </div>
            </div><br>
            <div class="card">
                <form method="POST" action="{{ route('toko.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="mb-1">
                                <label class="form-label">Nama Toko</label>
                                <input type="text" class="form-control" placeholder="Nama Toko" name="name">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">No.Telepon</label>
                                <input type="bigInteger" class="form-control" placeholder="08387773707" name="noTelp">
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="mb-1">
                                <label class="form-label">Image</label>
                                <input type="text" class="form-control" placeholder="Image" name="image">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" placeholder="Deskripsi" name="description">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" placeholder="rt02/03 15B" name="address">
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="card-footer">
                        <div class="col-12">
                            <button type="submit"
                                class="btn btn-primary me-1 waves-effect waves-float waves-light btn-sm font-small-2">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
