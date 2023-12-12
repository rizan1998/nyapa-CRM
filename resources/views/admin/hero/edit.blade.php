@extends('admin.app', ['title' => 'Admin | Edit Hero'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Edit Data Hero</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.hero.index')}}">hero</a>
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
                <form action="{{ route('admin.hero.update', ['id' => $hero->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                <div class="mb-1">
                    <label class="form-label" for="header">Header</label>
                    <input type="text" class="form-control" name="header" id="packet_name" value="{{ $hero->header }}"/>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="details">Detail</label>
                    <textarea id="details" name="details" class="form-control">{{ $hero->details }}</textarea>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="images">Gambar 1</label>
                    <input type="file" class="form-control" name="image1" id="image1" />
                    @if($hero->image1)
                    <img src="{{ asset('storage/' . $hero->image1) }}" alt="Current Image"
                        style="max-width: 100px; margin-top: 10px;">
                    @endif
                </div>
                <div class="mb-1">
                    <label class="form-label" for="images">Gambar 2</label>
                    <input type="file" class="form-control" name="image2" id="image2" />
                    @if($hero->image2)
                    <img src="{{ asset('storage/' . $hero->image2) }}" alt="Current Image"
                        style="max-width: 100px; margin-top: 10px;">
                    @endif
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
@section('scripts')
<script>
    tinymce.init({
            selector: 'textarea#details',
            height: 350,
        });
</script>
@endsection