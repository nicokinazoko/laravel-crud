@extends('/adminlte/master')

@section('content')
    <div class="ml-3 mt-3">
        <a href="/pertanyaan/" class="btn btn-primary">Home</a>
    </div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul Pertanyaan</th>
        <th scope="col">Isi Pertanyaan</th>
        <th scope="col">Tanggal Dibuat Pertanyaan</th>
        <th scope="col">ID Penanya</th>
        <th scope="col">ID Jawaban</th>
        <th scope="col">Isi Jawaban</th>
        <th scope="col">Tanggal Dibuat Jawaban</th>
        <th scope="col">Tanggal Diperbaharui Jawaban</th>
        {{-- <th scope="col">Action</th> --}}
      </tr>
    </thead>
    <tbody>
        @foreach ($question as $key => $questions)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$questions->judul_pertanyaan}}</td>
            <td>{{$questions->isi_pertanyaan}}</td>
            <td>{{$questions->tanggal_dibuat_pertanyaan}}</td>
            <td>{{$questions->id_penanya}}</td>
            <td>{{$questions->id_jawaban}}</td>
            <td>{{$questions->isi_jawaban}}</td>
            <td>{{$questions->tanggal_dibuat_jawaban}}</td>
            <td>{{$questions->tanggal_diperbaharui_jawaban}}</td>
            {{-- <td>
                <a href="/pertanyaan" class="btn btn-primary">Detail</a>
            </td> --}}
        </tr>
        @endforeach


    </tbody>
  </table>

@endsection

