@extends('template.main')

@section('content')
    @include('sweetalert::alert')
    <h4 class=" my-auto"><strong>Edit Aspirasi</strong></h4>
    <div class="row h-50">
        <div class="col-md-12 h-100 d-table">
            <!-- create -->
            <div class="card card-user d-table-cell align-middle">
                <div class="card-body">
                    <form action="{{ route('Aspirasi.update', [$aspirasi->id_aspirasi]) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="pelaporan">Pilih NIK Pelapor</label>
                            <select name="pelaporan" class="form-control @error('id_kategori') is-invalid @enderror mb-4"
                                value="{{ $aspirasi->pelaporan }}">
                                <option value="">Pilih NIK Pelapor</option>
                                @foreach (App\Models\Input::all() as $input)
                                    <option value="{{ $input->id_pelaporan }}">
                                        {{ $input->nik }}
                                    </option>
                                @endforeach
                            </select>
                            @error('pelaporans')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror"
                                value="{{ $aspirasi->status }}">
                                <option value="">Silahkan Pilih</option>
                                <option value="menunggu">Menunggu</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Feedback</label>
                            <input type="text" name="feedback" class="form-control"
                                placeholder="Silahkan Masukkan Feedback" value="{{ $aspirasi->feedback }}">
                        </div>
                        <div class="row mt-2">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-success btn-round">Update Aspirasi</button>
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
