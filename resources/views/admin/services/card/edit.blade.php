@extends('admin.app', ['title' => 'Admin | Edit Service Card'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Edit Service Card</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.service-card.index')}}">Service Card</a>
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
                <form action="{{ route('admin.service-card.update', ['id' => $service_card->id]) }}" method="POST">
                @csrf
                @method('PUT')
            
                <div class="mb-1">
                    <label class="form-label" for="icon_id">Icon</label>
                    <select id="icon_id" name="icon_id" class="select2">
                        @foreach($icon as $id => $icon)
                        <option value="{{ $id }}" {{ $service_card->icon_id == $id ? 'selected' : '' }}>{{ $icon }}</option>
                        @endforeach
                    </select>
                </div>
            
                <div class="mb-1">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $service_card->title }}" required />
                </div>
                <div class="mb-1">
                    <label class="form-label" for="detail">Detail</label>
                    <input type="text" class="form-control" name="detail" id="detail" value="{{ $service_card->detail }}" required />
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.service-card.index') }}" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>
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
        $('.select2').select2();
    });
</script>
@endsection