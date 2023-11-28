@extends('admin.app', ['title' => 'Admin | Testimonial'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Daftar Testimonial</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Testimonial
                        </li>
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
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.testimonial.create') }}" class="btn btn-success">Tambah Testimonial</a>
                    </div>
                    <div class="table-reponsive">
                        <table class="datatables table table-bordered table-striped table-hover" id="testimonial">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Quote</th>
                                    <th>Nama</th>
                                    <th>Pekerjaan</th>
                                    <th>Gambar</th>
                                    <th width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $index => $key )
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $key->quote }}</td>
                                        <td>{{ $key->name }}</td>
                                        <td>{{ $key->job }}</td>
                                        <td>
                                            @if ($key->images)
                                            <img src="{{ asset('/storage/' . $key->images) }}" alt="Testimonial Image" style="max-width: 100px;">
                                            @else
                                            No Image
                                            @endif
                                        </td>
                                        
                                        <td>
                                            <!-- Tombol aksi untuk edit -->
                                            <a href="{{ route('admin.testimonial.edit', ['id' => $key->id]) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            
                                            <!-- Formulir untuk tombol aksi menghapus -->
                                            <form action="{{ route('admin.testimonial.destroy', ['id' => $key->id]) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i> Remove
                                                </button>
                                            </form>
                                        </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Basic table -->
</div>

@endsection
