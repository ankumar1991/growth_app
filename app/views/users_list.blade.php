@extends('layouts.default')

@section('meta')


<meta property="og:title" content="A decade of growing together"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="{{asset('img/contest.png')}}"/>
<meta property="og:description"
      content="A decade is certainly a milestone worth celebrating. In honor of completing a decade of our premium notebooks, we invite you to join our 10 years of success. Celebrate with BILT Matrix , share your journey of 10 years of success with us by participating in 'A decade of growing together' Contest. The most inspiring story will be honored with a gift hamper worth upto Rs. 10,000 and our top 11 success stories will be rewarded with small gift vouchers from BILT Matrix."/>


@stop


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

            <?php $images = $users[$i + $j]->images; ?>

            @foreach($images as $image)

            <?php $status = $image->status; ?>
            @if(isset($status) && $status=="old")

            <?php $old_image_path = $image->path; ?>
            <div class="span6 old">
                <!--                                        <img src="http://placehold.it/500X500">-->
                <img src="{{URL::to($old_image_path)}}" class="full_width">
            </div>

            @else

            <?php $current_image_path = $image->path; ?>
            <div class="span6 current">
                <!--                                        <img src="http://placehold.it/500X500">-->
                <img src="{{URL::to($current_image_path)}}" class="full_width">
            </div>

            @endif

            @endforeach


            <div class="row-fluid">
                <div class="span12">
                    <h2 class="bilt-color">{{$users[$i+$j]->name}}</h2>

                    <p>{{substr($users[$i+$j]->story,0,97)}}...</p>
                </div>
                <a class="btn btn-danger padding-5 pull-right"
                   href="{{URL::to('contest/user-detail/'.$users[$i+$j]->id)}}"
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