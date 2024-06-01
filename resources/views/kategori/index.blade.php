@extends('template.main')

@section('content')
    @include('sweetalert::alert')
    <h4 class="my-auto"><strong>Kategori</strong></h4>
    <div class="row h-50">
        <div class="col-md-12 h-100 d-table">
            <!-- create -->
            <div class="card card-user d-table-cell align-middle">
                <div class="card-body">
                    <form action="{{ route('Kategori.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-9 pl-3 mt-4">
                                <div class="form-group pr-1">
                                    <label>Kategori</label>
                                    <input type="text" class="form-control" name="ket_kategori"
                                        placeholder="Masukkan Kategori" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Tambah Kategori</button>
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
                                    <th style="text-align: center;">Kategori</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @if (count($kategori) > 0)
                                        @foreach ($kategori as $key => $kategori)
                                            <th style="text-align: center;">{{ $key + 1 }}</th>
                                            <td style="text-align: center;">{{ $kategori->ket_kategori }}</td>
                                            <td style="text-align: center;">
                                                <form action="{{ route('Kategori.destroy', [$kategori->id_kategori]) }}"
                                                    method='POST'>
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <a href="{{ route('Kategori.edit', [$kategori->id_kategori]) }}"
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
