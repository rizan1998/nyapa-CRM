@extends('admin.app', ['title' => 'Admin | Edit Nama Paket'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Edit Nama Paket</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.pricing.packet-name.index')}}">Paket</a>
                        </li>
                        <li class="breadcrumb-item">Edit</li>
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
               <form action="{{ route('admin.pricing.packet-name.update', ['id' => $packetName->id]) }}" method="POST">
                @csrf
                @method('PUT')
            
                <div class="mb-1">
                    <label class="form-label" for="packet_name">Nama Paket</label>
                    <input type="text" class="form-control" name="packet_name" id="packet_name" value="{{ $packetName->packet_name }}"
                        required />
                </div>
            
                <div class="mb-1">
                    <label class="form-label" for="price">Harga</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{ $packetName->price }}" required />
                </div>
                <div class="mb-1">
                    <label class="form-label" for="">Satuan</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="unit" id="jt" value="Jt" {{ $packetName->unit === 'Jt' ?
                        'checked' : '' }} required>
                        <label class="form-check-label" for="jt">
                            Jt
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="unit" id="rb" value="Rb" {{ $packetName->unit === 'Rb' ?
                        'checked' : '' }} required>
                        <label class="form-check-label" for="rb">
                            Rb
                        </label>
                    </div>
                </div>
            
                <div class="mb-1">
                    <label class="form-label" for="type">Tipe Paket</label>
                    <input type="text" class="form-control" name="type" id="type" value="{{ $packetName->type }}" required />
                </div>
            
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.pricing.packet-name.index') }}" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>
                        Kembali</a>
                    <button type="submit" class="btn btn-outline-success"><i class="fa fa-chevron-right"></i> Selesai</button>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>
@endsection