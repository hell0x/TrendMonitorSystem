@extends('back.permissions.template')

@section('form-open')
    <form method="post" action="{{ route('permissions.update', [$permission->id]) }}">
@endsection