@extends('layout.template')

@section('kontenadmin')
<div class="card">
<div class="card-body">
<h4 class="card-title mb-4">Edit Data</h4>
<form class="outer-repeater" action='{{ url ('guru/'.$guruk->nama) }}' method='post'>
@csrf
@method('PUT')
<a href="{{ url('guru') }}" class="btn btn-secondary"><< kembali</a>
                            <div class="form-group row mb-4">
                                <label for="nama" class="col-form-label col-lg-2">Nama</label>
                                <div class="col-lg-10">
                                    <input id="nama" name="nama" type="text" value="{{ $guruk->nama }}" class="form-control" placeholder="masukan nama">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="nama_mapel" class="col-form-label col-lg-2">Mata Pelajaran</label>
                                <div class="col-lg-10">
                                    <input id="nama_mapel" name="nama_mapel" type="text" value="{{ $guruk->nama_mapel}}" class="form-control" placeholder="masukan mata pelajaran">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="kelas_id" class="col-form-label col-lg-2">Kelas</label>
                                <div class="col-lg-10">
                                    <input id="kelas_id" name="kelas_id" type="text" value="{{ $guruk->kelas_id }}" class="form-control" placeholder="masukan kelas">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="email" class="col-form-label col-lg-2">Email</label>
                                <div class="col-lg-10">
                                    <input id="email" name="email" type="email" value="{{ $guruk->email }}" class="form-control" placeholder="masukan email">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="username" class="col-form-label col-lg-2">Username</label>
                                <div class="col-lg-10">
                                    <input id="username" name="username" type="name" value="{{ $guruk->username }}" class="form-control" placeholder="masukan username">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="password" class="col-form-label col-lg-2">Password</label>
                                <div class="col-lg-10">
                                    <input id="password" name="password" type="password" value="{{ $guruk->password }}" class="form-control" placeholder="masukan password">
                                </div>
                            </div>
                <div class="row justify-content-end">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
</div>
</div>
           
@endsection