@extends('admin.app', ['title' => 'Admin | Tambah Data Banner'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Tambah Data Banner</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.banner.index')}}">Banner</a>
                        </li>
                        <li class="breadcrumb-item">Tambah Banner</li>
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
                <form action="{{route('admin.banner.store')}}" id="formBanner" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="banner_id" id="" value="#">
                    <div class="card">
                        <div class="card-header d-block">
                            <h6><i data-feather="info"></i> Form banner</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="">Header</label>
                                        <input type="text" class="form-control" name="header" autocomplete="off"
                                            placeholder="Header" id="header" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Title</label>
                                        <input type="text" class="form-control" name="title" autocomplete="off"
                                            placeholder="Title" id="title" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Detail</label>
                                        <input type="text" class="form-control" name="details" autocomplete="off"
                                            placeholder="Detail" id="details" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Gambar</label>
                                        <input type="file" class="form-control" name="images" id="images" required />
                                    </div>
                                </div>
                                
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <button type="button" class="btn btn-danger" id="resetItem"><i
                                    data-feather="refresh-cw"></i> Batal</button> --}}
                            <a href="{{route('admin.banner.index')}}" class="btn btn-outline-secondary"><i
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