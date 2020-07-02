@extends('adminlte/master');

@section('content')

<form action="/pertanyaan" method="POST">
    @csrf

    <div class="form-group">
      <label for="judul_pertanyaan">Judul Pertanyaan:</label>
      <input type="text" class="form-control" id="judul_pertanyaan" name="judul_pertanyaan">
    </div>

    <div class="form-group">
        <label for="isi_pertanyaan">Isi Pertanyaan:</label>
        <input type="text" class="form-control" id="isi" name="isi_pertanyaan">
      </div>

    <div class="form-group">
        <label for="tanggal_pertanyaan">Tanggal Pertanyaan:</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal_dibuat_pertanyaan">
    </div>

    <div class="form-group">
        <label for="id_penanya">ID Penanya:</label>
        <input type="text" class="form-control" id="id" name="id_penanya">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection
