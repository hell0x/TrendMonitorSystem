@extends('back.adm_users.template')

@section('form-open')
    <form method="post" action="{{ route('adm_users.update', [$admUser->id]) }}">
    {{ method_field('PUT') }}
@endsection