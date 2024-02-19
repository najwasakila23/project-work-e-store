@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <h4 class="text-start">Edit Product</h4>
                    <a href="{{ route('product.index') }}" class="btn btn-secondary btn-sm float-right font-weight-bolder mr-1"><i class="ni ni-bold-left"></i>Back</a>
                </div>
            </div><br>
            <div class="card">
                <form method="POST" action="{{ route('product.update', $data->id) }}" role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="mb-1">
                                <label class="form-label">Nama Product</label>
                                <input type="text" class="form-control" placeholder="Nama Toko" name="productName" value="{{ $data->productName }}">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" placeholder="Email" name="description" value="{{ $data->description }}">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Foto</label>
                                <input type="bigInteger" class="form-control" placeholder="08387773707" name="image" value="{{ $data->image }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="mb-1">
                                <label class="form-label">Harga</label>
                                <input type="text" class="form-control" placeholder="20.000" name="price" value="{{ $data->price }}">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Kuantitas</label>
                                <input type="text" class="form-control" placeholder="150" name="qty" value="{{ $data->qty }}">
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
