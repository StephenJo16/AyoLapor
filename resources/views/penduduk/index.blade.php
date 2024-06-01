@extends('template.main')

@section('content')
    @include('sweetalert::alert')
    <h4 class="my-auto"><strong>Penduduk</strong></h4>
    <div class="row h-50">
        <div class="col-md-12 h-100 d-table">
            <!-- create -->
            <div class="card card-user d-table-cell align-middle">
                <div class="card-body">
                    <form action="{{ route('Penduduk.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-5 mt-3">
                                <div class="form-group pl-1">
                                    <label>NIK</label>
                                    <input type="number" class="form-control" name="nik"
                                        placeholder="Masukkan NIK Penduduk" required>
                                </div>
                            </div>
                            <div class="col-md-8 pl-3 mt-3">
                                <div class="form-group pr-1">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat"
                                        placeholder="Masukkan Alamat Penduduk" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Tambah Penduduk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- read -->
        <div class="col-md-12 mt-3">
            <div class="card card-plain">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table datatable">
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">NIK</th>
                                    <th style="text-align: center;">Alamat</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @if (count($penduduk) > 0)
                                        @foreach ($penduduk as $key => $penduduk)
                                            <th style="text-align: center;">{{ $key + 1 }}</th>
                                            <td style="text-align: center;">{{ $penduduk->nik }}</td>
                                            <td style="text-align: center;">{{ $penduduk->alamat }}</td>
                                            <td style="text-align: center;">
                                                <form action="{{ route('Penduduk.destroy', [$penduduk->nik]) }}"
                                                    method='POST'>
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <a href="{{ route('Penduduk.edit', [$penduduk->nik]) }}"
                                                        class="btn btn-outline-success">Edit</a>
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                </form>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
