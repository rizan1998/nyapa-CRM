@extends('admin.app', ['title' => 'Admin | Tambah Service Card'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Tambah Service Card</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.service-card.index')}}">Service Card</a>
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
                <form action="{{route('admin.service-card.store')}}" id="formservice-card" method="POST">
                    @csrf
                    <input type="hidden" name="service-card_id" id="" value="#">
                    <div class="card">
                        <div class="card-header d-block">
                            <h6><i data-feather="info"></i> Form Service Card</h6>
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
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" class="form-control" name="title" autocomplete="off"
                                            placeholder="Title" id="title" required />
                                    </div>
                                </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="detail">Detail</label>
                                        <input type="text" class="form-control" name="detail" autocomplete="off"
                                            placeholder="Detail" id="detail" required />
                                    </div>
                                </div>
                                
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <button type="button" class="btn btn-danger" id="resetItem"><i
                                    data-feather="refresh-cw"></i> Batal</button> --}}
                            <a href="{{route('admin.service-card.index')}}" class="btn btn-outline-secondary"><i
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