@extends('layouts.app')

@section('content')
    <a href="{{ URL::to('biodata/create') }}" class="btn btn-info btn-sm">Biodata Baru</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($biodatas as $biodata)
                <tr>
                    <td>{{ $biodata->id }}</td>
                    <td><a href="">{{ $biodata->nama }}</a></td>
                    <td>
                        <form action="" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="" class="btn btn-info btn-sm">Lihat</a>
                            <a href="" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
