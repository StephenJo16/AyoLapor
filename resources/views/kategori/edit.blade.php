@extends('template.main')

@section('content')
    @include('sweetalert::alert')
    <h4 class=" my-auto"><strong>Edit Kategori</strong></h4>
    <div class="row h-50">
        <div class="col-md-12 h-100 d-table">
            <!-- create -->
            <div class="card card-user d-table-cell align-middle">
                <div class="card-body">
                    <form action="{{ route('Kategori.update', [$kategori->id_kategori]) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-9 pl-3 mt-4">
                                <div class="form-group pr-1">
                                    <label>Kategori</label>
                                    <input type="text" class="form-control" name="ket_kategori"
                                        value="{{ $kategori->ket_kategori }}" placeholder="Masukkan Kategori ">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-success btn-round">Update Kategori</button>
                            </div>
                        </div>
                    </form>
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
