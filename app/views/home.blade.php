@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row-fluid">
        <div class="span12"><img class="full_width" src="{{asset('wp-content/contest-banner.jpg')}}"></div>
    </div>
    <div class="row-fluid">
        <div class="span12 text-center">
            <h3 class=""><p>A decade is certainly a milestone worth celebrating. In honor of completing a decade of our
                    premium notebooks, we invite you to join our 10 years of success.
                    Celebrate with Bilt Matrix , share your journey of 10 years of success with us by participating in
                    "A decade of growing together" Contest.
                    The most inspiring story will be honored with a gift hamper worth upto Rs. 10,000 and our top 11
                    success stories will be rewarded with small gift vouchers from Bilt Matrix.</p>
            </h3>
            <a class="btn btn-danger bttn-padding margin-top-20" href="{{URL::to('contest/user-info')}}" style="">
                Participate Now</a>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">


            @if(!is_null($users))


            @foreach($users as $user)

            <div class="span4 bottom-events padding-10">
                <div class="row-fluid ">

                    <?php $images = $user->images; ?>

                    @foreach($images as $image)

                    <?php $status = $image->status; ?>
                    @if(isset($status) && $status=="old")

                    <?php $old_image_path = $image->path; ?>
                    <div class="span6">
                        <img src="http://placehold.it/517X580">
<!--                        <img src="{{URL::to($old_image_path)}}">-->
                    </div>

                    @else

                    <?php $current_image_path = $image->path; ?>
                    <div class="span6">
                        <img src="http://placehold.it/517X580">
<!--                        <img src="{{URL::to($current_image_path)}}">-->
                    </div>

                    @endif


                    @endforeach


                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <h2 class="bilt-color">{{$user->name}}</h2>

                        <p>{{$user->story}}</p>
                    </div>
                    <a class="btn btn-danger padding-5 pull-right" href="{{URL::to('contest/user-detail/'.$user->id)}}"
                       style=""> > </a>
                </div>
            </div>

            @endforeach


            @endif


        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row-fluid">
        <div class="span12 text-center">
            <a class="btn btn-danger bttn-padding margin-top-20" href="{{URL::to('contest/users-list')}}" style=""> View
                All</a></div>
    </div>
</div>


@stop