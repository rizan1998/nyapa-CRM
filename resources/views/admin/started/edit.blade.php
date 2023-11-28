@extends('admin.app', ['title' => 'Admin | Edit Started'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Edit started</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.started.index')}}">Started</a>
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
                <form action="{{ route('admin.started.update', ['id' => $started->id]) }}" method="POST">
                @csrf
                @method('PUT')
            
                <div class="mb-1">
                    <label class="form-label" for="header">Header</label>
                    <input type="text" class="form-control" name="header" id="header" value="{{ $started->header }}"
                        required />
                </div>
            
                <div class="mb-1">
                    <label class="form-label" for="detail">Detail</label>
                    <input type="text" class="form-control" name="detail" id="detail" value="{{ $started->details }}" required />
                </div>
                <div class="mb-1">
                    <label class="form-label" for="text">Text</label>
                    <input type="text" class="form-control" name="text" id="text" value="{{ $started->text }}" required />
                </div>
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