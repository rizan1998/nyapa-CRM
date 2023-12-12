@extends('admin.app', ['title' => 'Admin | Tambah Nama Paket'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Tambah Nama Paket</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.pricing.packet-name.index')}}">Paket</a>
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
                <form action="{{route('admin.pricing.packet-name.store')}}" id="formPrice" method="POST">
                    @csrf
                    <input type="hidden" name="price_id" id="" value="#">
                    <div class="card">
                        <div class="card-header d-block">
                            <h6><i data-feather="info"></i> Form Price</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="">Nama Paket</label>
                                        <input type="text" class="form-control" name="packet_name" autocomplete="off"
                                            placeholder="Nama Paket" id="packet_name" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Harga</label>
                                        <input type="text" class="form-control" name="price" autocomplete="off"
                                            placeholder="Harga" id="price" required />
                                    </div>
                                  <div class="row">
                                    <div class="col-12 mb-1">
                                        <label class="form-label" for="">Satuan</label>
                                    </div>
                                    <div class="col-2"></div> 
                                    <div class="col-4 mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="unit" id="jt" value="Jt" required>
                                            <label class="form-check-label" for="jt">Jt</label>
                                        </div>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="unit" id="rb" value="Rb" required>
                                            <label class="form-check-label" for="rb">Rb</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Tipe Paket</label>
                                        <input type="text" class="form-control" name="type" autocomplete="off"
                                            placeholder="Tipe Paket" id="type" required />
                                    </div>
                                </div>
                                
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <button type="button" class="btn btn-danger" id="resetItem"><i
                                    data-feather="refresh-cw"></i> Batal</button> --}}
                            <a href="{{route('admin.pricing.packet-name.index')}}" class="btn btn-outline-secondary"><i
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