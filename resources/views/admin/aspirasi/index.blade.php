@extends('template.main')

@section('content')
    @include('sweetalert::alert')
    <h4 class="my-auto"><strong>Data Aspirasi</strong></h4>
    <div class="row h-50">
        <div class="col-md-12 h-100 d-table">
            <!-- create -->
            <div class="card card-user d-table-cell align-middle">
                <div class="card-body">
                    <form action="{{ route('Aspirasi.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nik">Pilih NIK Pelapor</label>
                            <select name="nik" class="form-control @error('nik') is-invalid @enderror mb-4">
                                <option value="">Pilih NIK Pelapor</option>
                                @foreach (App\Models\Input::all() as $input)
                                    <option value="{{ $input->nik }}">
                                        {{ $input->nik }}
                                    </option>
                                @endforeach
                            </select>
                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="">Silahkan Pilih</option>
                                <option value="Menunggu">Menunggu</option>
                                <option value="Proses">Proses</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Feedback</label>
                            <input type="text" name="feedback" class="form-control"
                                placeholder="Silahkan Masukkan Feedback">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
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
                                    <th style="text-align: center;">Status</th>
                                    <th style="text-align: center;">NIK</th>
                                    <th style="text-align: center;">Lokasi</th>
                                    <th style="text-align: center;">Keterangan Kejadian</th>
                                    <th style="text-align: center;">Feedback</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @if (count($aspirasi) > 0)
                                        @foreach ($aspirasi as $key => $aspirasi)
                                            <th style="text-align: center;">{{ $key + 1 }}</th>
                                            <td style="text-align: center;">{{ $aspirasi->status }}</td>
                                            <td style="text-align: center;">{{ $aspirasi->input['nik'] }}</td>
                                            <td style="text-align: center;">{{ $aspirasi->input['lokasi'] }}</td>
                                            <td style="text-align: center;">{{ $aspirasi->input['ket'] }}</td>
                                            <td style="text-align: center;">{{ $aspirasi->feedback }}</td>
                                            <td style="text-align: center;">
                                                <form action="{{ route('Aspirasi.destroy', [$aspirasi->id_aspirasi]) }}"
                                                    method='POST'>
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <a href="{{ route('Aspirasi.edit', [$aspirasi->id_aspirasi]) }}"
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
