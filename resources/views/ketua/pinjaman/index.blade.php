@extends('layouts.app')

@section('title', 'Data Jenis Simpanan')

@section('content')

<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item"><a href="#">Pinjaman</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Pinjaman</li>
        </ol>
    </nav>

</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm components-section">
            <div class="card-body">
                <div class="row">

                    <div class="table-settings mb-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col col-md-6 col-lg-3 col-xl-4">
                                <form action="">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2"><span
                                                class="fas fa-search"></span></span>
                                        <input type="text" name="q" class="form-control" id="exampleInputIconLeft"
                                            placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="col-4 col-md-2 col-xl-1 pl-md-0 text-right">
                                    <div class="btn-group">
                                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="icon icon-sm icon-gray">
                                                <span class="fas fa-cog"></span>
                                            </span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                            <span class="dropdown-item font-weight-bold text-dark">Show</span>
                                            <a class="dropdown-item d-flex font-weight-bold" href="#">10 <span class="icon icon-small ml-auto"><span class="fas fa-check"></span></span></a>
                                            <a class="dropdown-item font-weight-bold" href="#">20</a>
                                            <a class="dropdown-item font-weight-bold" href="#">30</a>
                                        </div>
                                    </div>
                                </div> --}}
                        </div>
                    </div>

                    <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Simpanan</th>
                                    <th>Minimal Simpanan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($jenis_simpanan as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        <span class="font-weight-normal">{{ $data->nama_simpanan }}</span>
                                    </td>
                                    <td><span class="font-weight-normal">{{ $data->minimal_simpan }}</span></td>
                                    <td>
                                        <div class="btn-group">
                                            <button
                                                class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon icon-sm">
                                                    <span class="fas fa-ellipsis-h icon-dark"></span>
                                                </span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('jenis-simpanan.edit', $data->id) }}"><span
                                                        class="fas fa-eye mr-2"></span>View Details</a>
                                                <a class="dropdown-item" href="#"><span
                                                        class="fas fa-edit mr-2"></span>Edit</a>
                                                <a class="dropdown-item text-danger"
                                                    href="{{ route('anggota.destroy', $data->id) }}" onclick="event.preventDefault();
            document.getElementById('delete-form').submit();"><span class="fas fa-trash-alt mr-2"></span>Remove</a>
                                                <form id="delete-form"
                                                    action="{{ route('jenis-simpanan.destroy', $data->id) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer px-3 border-0 d-flex align-items-center justify-content-between">
                            {{ $jenis_simpanan->links() }}
                        </div>
                    </div>
                    <footer class="footer section py-2">

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
