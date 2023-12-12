@extends('admin.app', ['title' => 'Admin | Edit Button Link'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Edit Button Link</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.button-link.index')}}">Button Link</a>
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
               <form action="{{ route('admin.button-link.update', ['id' => $buttonlink->id]) }}" method="POST">
                @csrf
                @method('PUT')
            
                <div class="mb-1">
                    <label class="form-label" for="link">Link</label>
                    <input type="text" class="form-control" name="link" id="link" value="{{ $buttonlink->link }}"
                        required />
                </div>            
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.button-link.index') }}" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>
                        Kembali</a>
                    <button type="submit" class="btn btn-outline-success"><i class="fa fa-chevron-right"></i> Selesai</button>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>
@endsection