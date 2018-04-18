@extends('layouts.app')

@section('content')
<h4>Biodata Baru</h4>
<form action="{{ URL::to('biodata/store') }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
      <label for="nama" class="col-md-3 control-label">Nama</label>
      <div class="col-md-6 input-group">
        <input type="text" class="form-control" name="nama" placeholder="Nama">
        @if ($errors->has('nama'))
            <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
      </div>
    </div>
    <div class="form-group {{ $errors->has('telepon') ? 'has-error' : '' }}">
      <label for="telepon" class="col-md-3 control-label">No. Telepon</label>
      <div class="col-md-6 input-group">
        <input type="text" class="form-control" name="telepon" placeholder="No. Telepon">
        @if ($errors->has('telepon'))
            <span class="help-block">{{ $errors->first('telepon') }}</span>
        @endif
      </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection
