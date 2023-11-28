@extends('admin.app', ['title' => 'Admin | Edit Data Paket'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Tambah Data Paket</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Paket</a>
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
               <form action="{{ route('admin.price.update', ['id' => $price->id]) }}" method="POST">
                @csrf
                @method('PUT')
            
                <div class="mb-1">
                    <label class="form-label" for="packet_name">Nama Paket</label>
                    <input type="text" class="form-control" name="packet_name" id="packet_name" value="{{ $price->packet_name }}"
                        required />
                </div>
            
                <div class="mb-1">
                    <label class="form-label" for="price">Harga</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{ $price->price }}" required />
                </div>
                <div class="mb-1">
                    <label class="form-label" for="">Satuan</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="unit" id="jt" value="Jt" {{ $price->unit === 'Jt' ?
                        'checked' : '' }} required>
                        <label class="form-check-label" for="jt">
                            Jt
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="unit" id="rb" value="Rb" {{ $price->unit === 'Rb' ?
                        'checked' : '' }} required>
                        <label class="form-check-label" for="rb">
                            Rb
                        </label>
                    </div>
                </div>
            
                <div class="mb-1">
                    <label class="form-label" for="type">Tipe Paket</label>
                    <input type="text" class="form-control" name="type" id="type" value="{{ $price->type }}" required />
                </div>
            
                <div class="mb-1">
                    <label class="form-label" for="feature">Fitur Tersedia</label>
                    <textarea class="form-control" name="feature" id="feature" required>{{ $price->feature }}</textarea>
                </div>
            
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.price.index') }}" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>
                        Kembali</a>
                    <button type="submit" class="btn btn-outline-success"><i class="fa fa-chevron-right"></i> Selesai</button>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>
@endsection