@extends('/adminlte/master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Isi Jawaban</th>
        <th scope="col">Tanggal Dibuat Jawaban</th>
        <th scope="col">Tanggal Diperbaharui Pertanyaan</th>
        <th scope="col">ID Pertanyaan</th>
        <th scope="col">ID Penjawab</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($jawaban as $key => $answer)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$answer->isi_jawaban}}</td>
            <td>{{$answer->tanggal_dibuat_jawaban}}</td>
            <td>{{$answer->tanggal_diperbaharui_jawaban}}</td>
            <td>{{$answer->is_selected}}</td>
            <td>{{$answer->id_penjawab}}</td>
        </tr>
        @endforeach


    </tbody>
  </table>


@endsection
