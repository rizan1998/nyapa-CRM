@extends('admin.app', ['title' => 'Admin | Edit Testimonial'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Edit Testimonial</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.testimonial.index')}}">Testimonial</a>
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
               <form action="{{ route('admin.testimonial.update', ['id' => $testimonials->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                <div class="mb-1">
                    <label class="form-label" for="rating">Rating</label>
                    <input type="number" class="form-control" name="rating" id="rating" value="{{ $testimonials->rating }}"
                        required />
                </div>
                <div class="mb-1">
                    <label class="form-label" for="quote">Detail</label>
                    <textarea id="quote" name="quote" class="form-control">{{ $testimonials->quote }}</textarea>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $testimonials->name }}" required />
                </div>
            
                <div class="mb-1">
                    <label class="form-label" for="type">Pekerjaan</label>
                    <input type="text" class="form-control" name="job" id="job" value="{{ $testimonials->job }}" required />
                </div>
            
                <div class="mb-1">
                    <label class="form-label" for="images">Gambar</label>
                    <input type="file" class="form-control" name="images" id="images" />
                    @if($testimonials->images)
                    <img src="{{ asset('storage/' . $testimonials->images) }}" alt="Current Image"
                        style="max-width: 100px; margin-top: 10px;">
                    @endif
                </div>
            
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.testimonial.index') }}" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>
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
            selector: 'textarea#quote',
            height: 350,
        });
</script>
@endsection