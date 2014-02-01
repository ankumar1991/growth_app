@extends('layouts.default_fb')

@section('meta')


<meta property="og:title" content="A decade of growing together"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="{{asset('img/contest.png')}}"/>
<meta property="og:description"
      content="A decade is certainly a milestone worth celebrating. In honor of completing a decade of our premium notebooks, we invite you to join our 10 years of success. Celebrate with BILT Matrix , share your journey of 10 years of success with us by participating in 'A decade of growing together' Contest. The most inspiring story will be honored with a gift hamper worth upto Rs. 10,000 and our top 11 success stories will be rewarded with small gift vouchers from BILT Matrix."/>


@stop


@section('content')

<script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>
{{HTML::style('css/jquery.fancybox.css')}}
{{HTML::script('js/jquery.fancybox.js')}}
{{HTML::script('js/bootstrap.file-input.js')}}


<style type="text/css">

    .file-input-wrapper.btn {
        padding: 10px !important;
        font-weight: normal;
        font-size: 13px;
    }

    /*participate now button*/
    .wpcf7-form-control.wpcf7-submit.met_bgcolor.met_color2.margin-top-10 {
        padding: 18px;
        font-size: 18px;
    }

    /*terms*/
    .terms {
        font-size: 14px;
        padding-top: 5px;
    }

    /*cancel*/
    #cancel {
        margin-left: 20px;
        padding: 6px;
        background: #CACACA !important;
    }

    /*Participating form*/
    #form .file-input-wrapper .btn {
        overflow: hidden;
        position: relative;
        display: inline-block;
        background: #d2202b !important;
        border: none;
        padding: 10px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    .terms_p .error {
        display: inline-block;
    }


</style>


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

        $('input[type=file]').bootstrapFileInput();


    });
</script>


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
                    <form action="{{URL::to('contest/participate-fb')}}" method="post" class="wpcf7-form"
                          novalidate="novalidate" id="form" enctype="multipart/form-data">


                        <p> <span class="wpcf7-form-control-wrap ">
                  <input type="text" name="name" size="40"
                         class="wpcf7-form-control required wpcf7-select wpcf7-validates-as-required wpcf7-validates-as-email"
                         placeholder="* Name" value="{{Input::old('name')}}">
                                {{$errors->first('name')}}
                  </span><br>

                  <span class="wpcf7-form-control-wrap ">
                  <input type="text" name="email" size="40"
                         class="wpcf7-form-control required wpcf7-text wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-email"
                         placeholder="* Email" value="{{Input::old('email')}}">
                      {{$errors->first('email')}}
                  </span><br>

                  <span class="wpcf7-form-control-wrap ">
                  <input type="text" name="phone" size="40"
                         class="wpcf7-form-control required wpcf7-text wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-email"
                         placeholder="* Phone" value="{{Input::old('phone')}}">
                      {{$errors->first('phone')}}
                  </span>
                            <br/>
                  <span class="wpcf7-form-control-wrap ">
                  <textarea name="story" style="height: 160px"
                            class="wpcf7-form-control required wpcf7-text wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-email textarea-height"
                            placeholder="* Story">{{Input::old('story')}}</textarea>
                      {{$errors->first('story')}}
                  </span><br>
                        </p>


                        <p>
                            <input type="file" name="old_image" id="old_image" title="File upload past"
                                   class="required"/>
                            {{$errors->first('old_image')}}
                        </p>

                        <p>
                            <input type="file" name="current_image" id="current_image" title="File Upload present"
                                   class="required"/>
                            {{$errors->first('current_image')}}
                        </p>

                        <p class="terms_p">
                            <label class="checkbox terms">
                                <input type="checkbox" name="terms" class="required"/> I agree to the
                                <a href="{{URL::to('contest/terms-fb')}}" target="_blank"
                                   style="color: #ffffff;text-decoration: underline">terms and conditions</a> of the
                                contest.
                            </label>
                        </p>

                        <p >
                            <input style="float:left;" type="submit" value="Submit Entry"
                                   class="wpcf7-form-control wpcf7-submit met_bgcolor met_color2 margin-top-10">

                            <br/>
                            <a href="{{URL::to('/')}}" class="btn" id="cancel">Cancel</a>

                        </p>

                        <br/><br/>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop