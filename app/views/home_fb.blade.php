@extends('layouts.default_fb')

@section('meta')


<meta property="og:title" content="A decade of growing together"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="{{asset('img/contest.png')}}"/>
<meta property="og:description"
      content="A decade is certainly a milestone worth celebrating. In honor of completing a decade of our premium notebooks, we invite you to join our 10 years of success. Celebrate with BILT Matrix , share your journey of 10 years of success with us by participating in 'A decade of growing together' Contest. The most inspiring story will be honored with a gift hamper worth upto Rs. 10,000 and our top 11 success stories will be rewarded with small gift vouchers from BILT Matrix."/>


@stop



@section('content')


<div class="row-fluid">
    <div class="span12 text-center">
        <h3 class=""><p>A decade is certainly a milestone worth celebrating. In honor of completing a decade of our
                premium notebooks, we invite you to join our 10 years of success.
                Celebrate with BILT Matrix , share your journey of 10 years of success with us by participating in
                "A decade of growing together" Contest.
                The most inspiring story will be honored with a gift hamper worth upto Rs. 10,000 and our top 11
                success stories will be rewarded with small gift vouchers from BILT Matrix.</p>
        </h3>
        <a class="btn btn-danger bttn-padding margin-top-20" href="{{URL::to('contest/participate-fb')}}" style="">
            Participate Now</a>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">


        @if(!is_null($users))


        @foreach($users as $user)

        <div class="span6 bottom-events padding-10">
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

                    <p>{{substr($user->story,0,200)}}...</p>
                </div>
                <a class="btn btn-danger padding-5 pull-right" href="{{URL::to('contest/user-detail-fb/'.$user->id)}}"
                   style=""> > </a>
            </div>
        </div>

        @endforeach


        @endif


    </div>
</div>
<div class="clearfix"></div>
@if(!is_null($users))
<div class="row-fluid">
    <div class="span12 text-center">
        <a class="btn btn-danger bttn-padding margin-top-20" href="{{URL::to('contest/users-list-fb')}}" style=""> View
            All</a></div>
    @endif


</div>


@stop