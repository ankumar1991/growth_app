@extends('layouts.default')

@section('content')


@if(!is_null($users))


@foreach($users as $user)

Name: {{$user->name}} <br/>

@endforeach


@endif


@stop