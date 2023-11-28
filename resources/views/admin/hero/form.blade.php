@extends('admin.app', ['title' => 'Admin | Tambah Data Hero'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Tambah Data hero</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.banner.index')}}">hero</a>
                        </li>
                        <li class="breadcrumb-item">Tambah hero</li>
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
                <form action="{{route('admin.hero.store')}}" id="formhero" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="hero_id" id="" value="#">
                    <div class="card">
                        <div class="card-header d-block">
                            <h6><i data-feather="info"></i> Form hero</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="">Header</label>
                                        <input type="text" class="form-control" name="header" autocomplete="off"
                                            placeholder="Header" id="header" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Detail</label>
                                        <input type="text" class="form-control" name="details" autocomplete="off"
                                            placeholder="Detail" id="details" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Gambar 1</label>
                                        <input type="file" class="form-control" name="image1" id="image1"required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Gambar 2</label>
                                        <input type="file" class="form-control" name="image2" id="image2"/>
                                    </div>
                                </div>
                                
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <button type="button" class="btn btn-danger" id="resetItem"><i
                                    data-feather="refresh-cw"></i> Batal</button> --}}
                            <a href="{{route('admin.hero.index')}}" class="btn btn-outline-secondary"><i
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