@extends('adminlte.master')

@section('content')
<div class="container pt-3">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Pertanyaan {{$pertanyaan->id}}</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="InputJudul">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ old('judul', $pertanyaan->judul) }}" id="InputJudul" placeholder="Judul">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="InputPertanyaan">Pertanyaan</label>
                    <textarea class="form-control" name="pertanyaan" id="InputPertanyaan" cols="30" rows="10"><?php echo old('pertanyaan', $pertanyaan->isi);?></textarea>
                    @error('pertanyaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection