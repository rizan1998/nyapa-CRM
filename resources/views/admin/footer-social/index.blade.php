@extends('admin.app', ['title' => 'Admin | Social Link'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h3 class="content-header-title float-start mb-0">Social Link</h3>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Social
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
                        <a href="{{ route('admin.social.create') }}" class="btn btn-success">Tambah Social Link</a>
                    </div>
                    <div class="table-reponsive">
                        <table class="datatables table table-bordered table-striped table-hover" id="price">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Icon</th>
                                    <th>Social</th>
                                    <th>Link</th>
                                    <th width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($social as $index => $key )
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $key->icon->icon_code }}</td>
                                        <td>{{ $key->social }}</td>
                                        <td>{{ $key->link }}</td>
                                        <td>
                                            <!-- Tombol aksi untuk edit -->
                                            <a href="{{ route('admin.social.edit', ['id' => $key->id]) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            
                                            <!-- Formulir untuk tombol aksi menghapus -->
                                            <form action="{{ route('admin.social.destroy', ['id' => $key->id]) }}" method="POST" class="d-inline">
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
