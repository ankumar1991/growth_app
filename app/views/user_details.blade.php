@extends('layouts.default')

@section('content')

@if(!is_null($user))

Name: {{$user->name}}


@if($user->images->count()!=0)

<?php $images = $user->images; ?>
@foreach($images as $image)
<img src="{{asset($image->path)}}" alt="" width="500"/>
@endforeach

@endif

@endif

@stop

