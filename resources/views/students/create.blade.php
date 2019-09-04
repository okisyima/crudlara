@extends('layout.main')

@section('title','create students')

@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-4">Hello, create students</h1>

            <form method="post" action="/students">
                @csrf
                    <div class="form-group">
                      <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama">
                      @error('nama')
                        <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" value="{{ old('nim') }}" placeholder="Nomor Induk Mahasiswa">
                            @error('nim')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Masukan Email">
                    </div>

                    <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="jurusan" class="form-control" name="jurusan" id="jurusan" value="{{ old('jurusan') }}" placeholder="Masukan Jurusan">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

@endsection