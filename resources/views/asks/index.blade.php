@extends('adminlte.master')

@section('content')
    <div class="container pt-3">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Table Pertanyaan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a class="btn btn-primary mb-2" href="/pertanyaan/create">Buat Pertanyaan</a>
                <table class="table table-bordered">
                    <tbody><tr>
                        <th style="width: 10px">#</th>
                        <th>Judul</th>
                        <th>Pertanyaan</th>
                        <th style="width: 40px ">Actions</th>
                    </tr>
                    @forelse($pertanyaan as $key => $pertanyaan)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$pertanyaan -> judul}} </td>
                            <td> {{$pertanyaan -> isi}} </td>
                            <td style="display: flex">
                                <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-info btn-sm">show</a>
                                <a style="margin-left: 10px margin-right: 10px" href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-info btn-sm">edit</a>
                                <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" align="center"> Tidak Ada Pertanyaan </td>
                        </tr>
                    @endforelse
                </tbody></table>
            </div>
            <!-- /.box-body -->
            <!-- <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div> -->
        </div>
    </div>
@endsection