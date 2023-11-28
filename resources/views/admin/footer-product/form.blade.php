@extends('admin.app', ['title' => 'Admin | Tambah Product'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Tambah Product</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.product.index')}}">Product</a>
                        </li>
                        <li class="breadcrumb-item">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- Basic table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.product.store')}}" id="formProduct" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" id="" value="#">
                    <div class="card">
                        <div class="card-header d-block">
                            <h6><i data-feather="info"></i> Form Product</h6>
                            <div class="row">
                                    <div class="mb-1">
                                        <label class="form-label" for="product_name">Nama Product</label>
                                        <input type="text" class="form-control" name="product_name" autocomplete="off"
                                            placeholder="Nama Product" id="product_name" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="link">Tautan</label>
                                        <input type="text" class="form-control" name="link" autocomplete="off"
                                            placeholder="Tautan Produk" id="link" required />
                                    </div>
                                </div>
                                
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <button type="button" class="btn btn-danger" id="resetItem"><i
                                    data-feather="refresh-cw"></i> Batal</button> --}}
                            <a href="{{route('admin.product.index')}}" class="btn btn-outline-secondary"><i
                                    class="fa fa-chevron-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-outline-success"><i class="fa fa-chevron-right"></i>
                                Selesai</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection