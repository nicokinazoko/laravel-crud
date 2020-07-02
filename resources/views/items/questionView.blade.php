@extends('/adminlte/master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul Pertanyaan</th>
        <th scope="col">Isi Pertanyaan</th>
        <th scope="col">Tanggal Dibuat Pertanyaan</th>
        <th scope="col">ID Penanya</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($question as $key => $questions)
        <tr>
            <td>{{$key + 1}}</td>
            <td></td>
            <td>{{$questions->judul_pertanyaan}}</td>
            <td>{{$questions->isi_pertanyaan}}</td>
            <td>{{$questions->tanggal_dibuat_pertanyaan}}</td>
            <td>{{$questions->id_penanya}}</td>
        </tr>
        @endforeach


    </tbody>
  </table>

@endsection
