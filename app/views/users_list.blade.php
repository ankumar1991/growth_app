@extends('layouts.default')

@section('content')


<div class="row-fluid">
    <div class="span12"><img class="full_width" src="{{asset('wp-content/contest-banner.jpg')}}"></div>
</div>

<h3>Success is more fun when you share it with people. Read our inspiring success stories.</h3>
<hr/>


@if(!is_null($users))

@for ($i = 0; $i < count($users); $i=$i+3)

<div class="row-fluid">

    @for($j=0;$j<3;++$j)

    @if($i+$j < count($users))

    <div class="span4">

        <div class="row-fluid">

            <?php $images = $users[$i+$j]->images; ?>

            @foreach($images as $image)

            <?php $status = $image->status; ?>
            @if(isset($status) && $status=="old")

            <?php $old_image_path = $image->path; ?>
            <div class="span6">

                <img src="http://placehold.it/517X580" class="full_width">
<!--                 <img src="{{URL::to($old_image_path)}}" class="full_width">-->

            </div>

            @else

            <?php $current_image_path = $image->path; ?>
            <div class="span6">
                <img src="http://placehold.it/517X580" class="full_width">
<!--                 <img src="{{URL::to($current_image_path)}}" class="full_width">-->
            </div>

            @endif

            @endforeach


            <div class="row-fluid">
                <div class="span12">
                    <h2 class="bilt-color">{{$users[$i+$j]->name}}</h2>

                    <p>{{substr($users[$i+$j]->story,0,100)}}...</p>
                </div>
                <a class="btn btn-danger padding-5 pull-right" href="{{URL::to('contest/user-detail/'.$users[$i+$j]->id)}}"
                   style="">Read More > </a>
            </div>


        </div>


    </div>
    @endif

    @endfor
</div>


@endfor
@endif



@stop