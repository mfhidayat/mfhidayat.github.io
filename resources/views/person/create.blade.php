@extends('layouts.main')

@section('first-content')
    {{--menampilkan error inputan --}}
    @if (count($errors) > 0)
        <div class= "alert alert -danger" >
            <ul>
                @foreach ($errors->all() as$error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card my-3">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('person.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" placeholder="Masukkan Nama Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="nama@mail.com">

                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </br>
            </form>
        </div>
    </div>
@endsection
