@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <h4 class="text-start">Tambahkan produk</h4>
                    <a href="#" class="btn btn-secondary btn-sm float-right font-weight-bolder mr-1"><i class="ni ni-bold-left"></i>Back</a>
                </div>
            </div><br>
            <div class="card">
                <form method="POST" action="{{ route('product.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="mb-1">
                                <label class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" placeholder="Waroeng Djaya Indonesia" name="productName">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" placeholder="Warung serba ada serba murah" name="description">
                            </div>
                        <div class="col-md-6 col-6">
                            <div class="mb-1">
                                <label class="form-label">Image</label>
                                <input type="text" class="form-control" placeholder="warungku.png" name="image">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Harga</label>
                                <input type="text" class="form-control" placeholder="12.000/per pcs" name="price">
                            </div>
                            <div class="mb-1">
                                <label class="form-label">Kuantitas</label>
                                <input type="text" class="form-control" placeholder="120/per kg" name="qty">
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
