@extends('layouts.default')

@section('content')

@if(!is_null($users))

@foreach($users as $user)

Name: {{$user->name}} <br/>
<?php $story = $user->story; ?>
Story: {{substr($story,0,3)}}.... <br/>

@endforeach

@endif


@stop