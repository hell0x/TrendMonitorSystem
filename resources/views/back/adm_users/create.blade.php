@extends('back.adm_users.template')

@section('form-open')
    <form method="post" action="{{ route('adm_users.store') }}">
@endsection