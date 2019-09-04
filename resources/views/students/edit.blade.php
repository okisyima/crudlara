@extends('layout.main')

@section('title','edit students')

@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-4">Hello, edit students</h1>

            <form method="post" action="/students/{{ $student->id }}">
                @method('patch')
                @csrf
                    <div class="form-group">
                      <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ $student->nama }}" placeholder="Masukkan Nama">
                      @error('nama')
                        <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" value="{{ $student->nim }}" placeholder="Nomor Induk Mahasiswa">
                            @error('nim')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{ $student->email }}" placeholder="Masukan Email">
                    </div>

                    <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="jurusan" class="form-control" name="jurusan" id="jurusan" value="{{ $student->jurusan }}" placeholder="Masukan Jurusan">
                    </div>

                    <button type="submit" class="btn btn-primary">Edit</button>
            </form>

        </div>
    </div>
</div>

@endsection