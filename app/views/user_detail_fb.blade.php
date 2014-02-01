@extends('layouts.default_fb')


@section('meta')

@if(!is_null($user))
<meta property="og:title" content="Growth Story of {{$user->name}}"/>
<meta property="og:type" content="profile"/>
<meta property="og:image" content="{{URL::to($current_image->path)}}"/>
<meta property="og:description" content="{{$user->story}}"/>
@endif

@stop


@section('content')

<style type="text/css">
    #user_name {
        margin-bottom: 0;
    }

    .story {
        padding: inherit;
        font-family: inherit;
        background: inherit;
        border: none;
        font-size: inherit;
        line-height: inherit;
    }

</style>

@if(!is_null($user))

<div class="row-fluid">
    <div class="span12">
        <div class="span7">
            <div class="row-fluid ">


                @if(!is_null($old_image))
                <div class="span6">
                    <?php $old_image_path = $old_image->path; ?>
                    <img src="http://placehold.it/517X580" class="full_width">
                    <!--                    <img src="{{URL::to($old_image_path)}}" class="full_width">-->
                </div>
                @endif

                @if(!is_null($current_image))
                <div class="span6">
                    <?php $current_image_path = $current_image->path; ?>
                    <img src="http://placehold.it/517X580" class="full_width">
                    <!--                    <img src="{{URL::to($current_image_path)}}" class="full_width">-->
                </div>
                @endif

            </div>
        </div>
        <div class="span5">
            <div class="row-fluid" id="user_name">

                <h2 class="bilt-color">{{$user->name}}</h2>

            </div>
            <div class="row-fluid">
                <pre class="story">{{$user->story}}</pre>
            </div>

            <div class="row-fluid">


                <div class="span4">
                    <a class="twitter-share-button">Tweet</a>
                </div>

                <!--                fb like starts here-->

                <div class="span8">
                    <div class="fb-like"
                         data-layout="standard"
                         data-action="like" data-show-faces="false" data-share="false" data-width="300"></div>
                </div>
                <!--                fb like ends here-->


            </div>

            <!--            twitter script-->
            <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');</script>


        </div>

    </div>


</div>


<!--comments row starts here-->
<div class="row-fluid">

    <div class="fb-comments" data-href="{{URL::to('/')}}" data-numposts="5" data-width="800"
         data-colorscheme="light"></div>

</div>


@endif


@stop

