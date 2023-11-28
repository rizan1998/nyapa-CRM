@extends('admin.app', ['title' => 'Admin | Edit Icon'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Edit Icon</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.icon.index')}}">Icon</a>
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
                <form action="{{ route('admin.icon.update', ['id' => $icons->id]) }}" method="POST">
                @csrf
                @method('PUT')
            
                <div class="mb-1">
                    <label class="form-label" for="icon_name">Nama Icon</label>
                    <input type="text" class="form-control" name="icon_name" id="icon_name" value="{{ $icons->icon_name }}"
                        required />
                </div>
            
                <div class="mb-1">
                    <label class="form-label" for="icon_code">Kode Icon</label>
                    <input type="text" class="form-control" name="icon_code" id="icon_code" value="{{ $icons->icon_code }}" required />
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.icon.index') }}" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>
                        Kembali</a>
                    <button type="submit" class="btn btn-outline-success"><i class="fa fa-chevron-right"></i> Selesai</button>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>
@endsection