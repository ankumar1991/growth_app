@extends('layouts.default')

@section('content')


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
            <div class="row-fluid">
                <h2 class="bilt-color">{{$user->name}}</h2>
            </div>
            <div class="row-fluid">
                <p>{{$user->story}}</p>
            </div>

            <div class="row-fluid">


                <!--                fb like starts here-->

                <div class="span8">
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/"
                         data-layout="standard"
                         data-action="like" data-show-faces="false" data-share="false" data-width="300"></div>
                </div>
                <!--                fb like ends here-->

                <div class="span4">
                    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                </div>



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

    <div class="fb-comments" data-href="http://example.com/comments" data-numposts="5" data-width="1170"
         data-colorscheme="light"></div>

</div>


@endif


@stop

