@extends('admin.app', ['title' => 'Admin | Tambah Testimonial'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Tambah Data Testimonial</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.testimonial.index')}}">Testimonial</a>
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
                <form action="{{route('admin.testimonial.store')}}" id="formTestimonial" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="price_id" id="" value="#">
                    <div class="card">
                        <div class="card-header d-block">
                            <h6><i data-feather="info"></i> Form Testimonial</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="">Rating</label>
                                        <input type="number" class="form-control" name="rating" autocomplete="off"
                                            placeholder="Rating 1 - 5" id="rating" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Quote</label>
                                        <textarea id="quote" name="quote" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Nama</label>
                                        <input type="text" class="form-control" name="name" autocomplete="off"
                                            placeholder="Nama" id="name" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Pekerjaan</label>
                                        <input type="text" class="form-control" name="job" autocomplete="off"
                                            placeholder="Pekerjaan" id="job" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="">Gambar</label>
                                        <input type="file" class="form-control" name="images"
                                        id="images" required />
                                    </div>
                                </div>
                                
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <button type="button" class="btn btn-danger" id="resetItem"><i
                                    data-feather="refresh-cw"></i> Batal</button> --}}
                            <a href="{{route('admin.testimonial.index')}}" class="btn btn-outline-secondary"><i
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
    tinymce.init({
            selector: 'textarea#quote',
            height: 350,
        });
</script>
@endsection