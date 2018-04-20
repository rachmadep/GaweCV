@extends('layouts.app')

@section('content')
<h4 style="display: inline-block">Curriculum vitae</h4>

<div class="row">
  <div class="col-md-12">
    <div class="col-md-3 col-xs-12">
      <img src="/img/foto/{{ $biodata->foto }}" class="foto-profil" alt="">
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Nama</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        {{ $biodata->nama }}
      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Tempat Lahir</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        {{ $biodata->tempat_lahir }}
      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Tanggal Lahir</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        {{ $biodata->tanggal_lahir }}
      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">No. Telepon</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        {{ $biodata->telepon }}
      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Website</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        {{ $biodata->website }}
      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Alamat</label>
    </div>
    <div class="col-md-9 col-print-9">
      <p class="data">
        {{ $biodata->alamat }}
      </p>
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Pendidikan</label>
    </div>
    <div class="col-md-9 col-print-9">
      @foreach ($pendidikan as $value)
        <p class="data">
          [{{ $value->tahun }}] {{ $value->keterangan }}
        </p>
      @endforeach
    </div>
  </div>

  <div class="col-md-12">
    <div class="col-md-3 col-print-3 col-xs-12">
      <label for="data" class="control-label">Pengalaman</label>
    </div>
    <div class="col-md-9 col-print-9">
      @foreach ($pengalaman as $value)
        <p class="data">
          [{{ $value->tahun }}] {{ $value->keterangan }}
        </p>
      @endforeach
    </div>
  </div>

</div>

@endsection

@section('button')
  <a href="#" class="btn btn-info" style="float: right;" onclick="window.print()">Cetak</a>

@endsection

@section('script')

@endsection
