@extends('layouts.main')

@section('first-content')
<div class="card mt-2">
    <div class="card-header">
       Data Person
    </div>
    <div class="card-body">
       <p>Nama Anda {{$person->name}} </p>
       <p>Email Anda {{$person->email}} </p>
    </div>
    </div>
    @endsection
