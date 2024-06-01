@extends('template.main')

@section('content')
    @include('sweetalert::alert')
    <h4 class="my-auto"><strong>Penilaian Masyarakat</strong></h4>
    <div class="col-md-12 mt-3">
        <div class="card card-plain">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table datatable">
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Keterangan</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if (count($comment) > 0)
                                    @foreach ($comment as $key => $comment)
                                        <th style="text-align: center;">{{ $key + 1 }}</th>
                                        <td style="text-align: center;">{{ $comment->comment }}</td>
                                        <td style="text-align: center;">
                                            <form action="{{ route('Comment.destroy', [$comment->id_comment]) }}"
                                                method='POST'>
                                                @csrf
                                                {{ method_field('DELETE') }}
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
