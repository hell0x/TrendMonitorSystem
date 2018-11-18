@extends('back.sources.template')

@section('form-open')
    <form method="post" action="{{ route('sources.store') }}">
@endsection