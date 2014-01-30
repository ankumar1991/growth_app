@extends('layouts.default')

@section('content')


<script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>



<script type="text/javascript">
    $(document).ready(function () {

        $("#form").validate({
            rules: {
                current_image: {"required": true, extension: "jpeg,jpg,png" },
                old_image: {"required": true, extension: "jpeg,jpg,png" }
            },
            messages: {
                current_image: {required: "Please provide a Current Image", extension: "Please enter a file with valid extension"},
                old_image: {required: "Please provide a Old Image", extension: "Please enter a file with valid extension"}

            }

        });

    });
</script>






<div class="row-fluid">
    <div class="span12"><img class="full_width" src="{{asset('wp-content/contest-banner.jpg')}}"></div>
</div>
<div class="row-fluid">
    <h3>Participating in “A decade of growing together” Contest is quick and easy. Enter your valid details such as
        Name, Email id, Phone in the form given below. Share your short success story telling us about your journey and
        achievements in the past decade and upload your current and your 10 years old picture. Accept the terms and
        conditions to successfully enter the contest and submit. </h3>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="met_google_maps_52e8f1e7962af_met_contact_map_box met_contact_map_box met_bgcolor3 met_color2">
            <div class="met_contact_form">

                <div class="wpcf7" id="wpcf7-f4-p74-o1">
                    <form action="" method="post" class="wpcf7-form"
                          novalidate="novalidate" id="form">


                        <p> <span class="wpcf7-form-control-wrap ">
                  <input type="text" name="name" size="40"
                         class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required wpcf7-validates-as-email"
                         placeholder="* Name">
                  </span><br>

                  <span class="wpcf7-form-control-wrap ">
                  <input type="text" name="email" size="40"
                         class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-email"
                         placeholder="* Email">
                  </span><br>

                  <span class="wpcf7-form-control-wrap ">
                  <input type="text" name="phone" size="40"
                         class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-email"
                         placeholder="* Phone">
                  </span>
                            <br/>
                  <span class="wpcf7-form-control-wrap ">
                  <textarea name="story"
                            class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-email textarea-height"
                            placeholder="* Story"></textarea>
                  </span><br>
                        </p>

                        <div class="file-input-wrapper">
                            <button class="btn-file-input">File Upload 10 yrs old</button>
                            <input type="file" name="file"/>
                        </div>
                        <p>
                            <input style="float:left;" type="submit" value="Send"
                                   class="wpcf7-form-control wpcf7-submit met_bgcolor met_color2 margin-top-10">
                            <img class="ajax-loader"
                                 src="http://metcreative.com/demo/wp_shocoon/wp-content/plugins/contact-form-7/images/ajax-loader.gif"
                                 alt="Sending ..." style="visibility: hidden;"></p>

                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop