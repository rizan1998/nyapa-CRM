@extends('admin.app', ['title' => 'Admin | Edit Fitur'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Edit Fitur</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.pricing.feature.index')}}">Feature</a>
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
                <form action="{{ route('admin.pricing.feature.update', ['id' => $feature->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-1">
                    <label class="form-label" for="packet_name_id">Pilih Id Paket</label>
                    <select name="packet_name_id" id="packet_name_id" class="form-control select2" required disabled>
                        @foreach($packetNames as $packetName)
                        <option value="{{ $packetName->id }}" {{ $feature->packet_name_id == $packetName->id ? 'selected' : '' }}>
                            {{ $packetName->packet_name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div id="features-container">
                    <div class="mb-1 feature-input">
                        <label class="form-label" for="feature">Nama Fitur</label>
                        <input type="text" class="form-control" name="name" value="{{ $feature->name }}" required />
                        <label class="form-label" for="icon">Icon</label>
                        <select name="icon" class="select2">
                            @foreach($icons as $id => $icon)
                            <option value="{{ $icon }}" {{ $feature->icon == $icon ? 'selected' : '' }}>{{ $icon }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- <div id="features-container">
                    @foreach($feature as $detail)
                    <div class="mb-1 feature-input">
                        <label class="form-label" for="feature">Nama Fitur</label>
                        <input type="text" class="form-control" name="name[]" value="{{ $detail->name }}" required />
                
                        <label class="form-label" for="icon">Icon</label>
                        <select name="icon[]" class="select2">
                            @foreach($icons as $id => $icon)
                            <option value="{{ $icon }}" {{ $detail->icon == $icon ? 'selected' : '' }}>{{ $icon }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endforeach
                </div> --}}

                {{-- <button type="button" class="btn btn-success" id="addFeature">Tambah Fitur</button>
                <button type="button" class="btn btn-danger" id="removeFeature">Hapus Fitur</button> --}}
            
                {{-- <div class="mb-1">
                    <label class="form-label" for="header">Header</label>
                    <input type="text" class="form-control" name="header" id="header" value="{{ $started->header }}"
                        required />
                </div>
            
                <div class="mb-1">
                    <label class="form-label" for="details">Detail</label>
                    <textarea id="details" name="details" class="form-control">{{ $started->details }}</textarea>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="text">Text</label>
                    <input type="text" class="form-control" name="text" id="text" value="{{ $started->text }}" required />
                </div> --}}
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.started.index') }}" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>
                        Kembali</a>
                    <button type="submit" class="btn btn-outline-success"><i class="fa fa-chevron-right"></i> Selesai</button>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
            // Inisialisasi Select2
            $('.select2').select2();
        });
</script>
@endsection