@extends('back.sources.template')

@section('form-open')
    <form method="post" action="{{ route('sources.update', [$source->id]) }}">
    {{ method_field('PUT') }}
@endsection