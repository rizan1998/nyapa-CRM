@extends('admin.app', ['title' => 'Admin | Tambah Data Paket'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Tambah Social</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.social.index')}}">Social</a>
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
                <form action="{{route('admin.social.store')}}" id="formSocial" method="POST">
                    @csrf
                    <input type="hidden" name="social_id" id="" value="#">
                    <div class="card">
                        <div class="card-header d-block">
                            <h6><i data-feather="info"></i> Form Social</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="icon">Icon</label>
                                        <select id="icon_id" name="icon_id" class="select2">
                                           @foreach($icons as $id => $icon)
                                            <option value="{{ $id }}">{{ $icon }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="social">Nama Social</label>
                                        <input type="text" class="form-control" name="social" autocomplete="off"
                                            placeholder="Nama" id="social" required />
                                    </div>
                                </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="link">Tautan</label>
                                        <input type="text" class="form-control" name="link" autocomplete="off"
                                            placeholder="Tautan" id="link" required />
                                    </div>
                                </div>
                                
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <button type="button" class="btn btn-danger" id="resetItem"><i
                                    data-feather="refresh-cw"></i> Batal</button> --}}
                            <a href="{{route('admin.social.index')}}" class="btn btn-outline-secondary"><i
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
    });
</script>
@endsection