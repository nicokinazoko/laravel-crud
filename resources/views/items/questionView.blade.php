@extends('/adminlte/master')

@section('content')
    <div class="ml-3 mt-3">
        <a href="/pertanyaan/create" class="btn btn-primary">Pertanyaan Baru</a>
    </div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul Pertanyaan</th>
        <th scope="col">Isi Pertanyaan</th>
        <th scope="col">Tanggal Dibuat Pertanyaan</th>
        <th scope="col">ID Penanya</th>
        <th scope="col">Action</th>
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
            <td>
            <a href="/pertanyaan/{{$questions->id_pertanyaan}}" class="btn btn-primary">Detail</a>
            <a href="/pertanyaan/{{$questions->id_pertanyaan}}/edit" class="btn btn-primary">Update</a>
            <form action="/pertanyaan/{{$questions->id_pertanyaan}}" method="post" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm-danger">
                    <i class="fas fa-trash"></i>
                </button>
            </td>
            </form>
        </tr>
        @endforeach


    </tbody>
  </table>

@endsection
