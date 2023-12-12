@extends('admin.app', ['title' => 'Admin | Tambah Fitur Paket'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Tambah Fitur Paket</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.pricing.feature.index')}}">Fitur Paket</a>
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
                <form action="{{ route('admin.pricing.feature.store') }}" id="formFeature" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header d-block">
                            <h6><i data-feather="info"></i> Form Feature</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="packet_name_id">Pilih Id Paket</label>
                                        <select name="packet_name_id" id="packet_name_id" class="form-control select2"
                                            required>
                                            @foreach($packetNames as $packetName)
                                            <option value="{{ $packetName->id }}">{{ $packetName->packet_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
    
                            <div id="features-container">
                                <div class="mb-3 feature-input">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" for="name">Nama Fitur</label>
                                            <input type="text" class="form-control" name="name[]" autocomplete="off"
                                                placeholder="Masukkan Fitur" required />
                                        </div>
    
                                        <div class="col-md-2 icon-input">
                                            <label class="form-label" for="icon">Icon</label>
                                            <select name="icon[]" class="select2">
                                                @foreach($icons as $iconCode => $iconName)
                                                <option value="{{ $iconCode }}">{{ $iconName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
    
                                        <div class="col-md-2 d-flex align-items-end">
                                            <button type="button" class="btn btn-danger removeFeature">Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <button type="button" class="btn btn-success" id="addFeature">Tambah Fitur</button>
                        </div>
                                
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <button type="button" class="btn btn-danger" id="resetItem"><i
                                    data-feather="refresh-cw"></i> Batal</button> --}}
                            <a href="{{route('admin.pricing.feature.index')}}" class="btn btn-outline-secondary"><i
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
@section('scripts')
<script>
    $(document).ready(function () {
        
        $('.select2').select2();

        $('#addFeature').on('click', function () {
            var newFeature = $('#features-container .feature-input:first').clone();

            newFeature.find('input').val('');
            newFeature.find('select').val('').trigger('change');
            newFeature.find('.icon-input select').select2();

            $('#features-container').append(newFeature);
        });

        $('#features-container').on('click', '.removeFeature', function () {
            if ($('#features-container .feature-input').length > 1) {
                $(this).closest('.feature-input').remove();
            }
        });
    });
</script>
@endsection