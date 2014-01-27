<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript"
            src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    {{HTML::style('css/jquery.fancybox.css')}}
    {{HTML::script('js/jquery.fancybox.js')}}

    <style type="text/css">
        .background {
            background-color: white !important;
        }
    </style>
</head>
<body>

</body>
</html>


<script type="text/javascript">
    $(document).ready(function () {

        $('.attachment').fancybox();
        $('#form').validate();
    });
</script>

<div class="container">

    <div class="row well" style="margin-top: 50px">
        <div class="col-lg-4">
            <h3>Edit</h3>
        </div>
        <div class="col-lg-2 col-lg-offset-3">
            <h3><a href="{{URL::to('dashboard')}}" class="btn btn-primary">Back</a></h3>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-8">

            <form action="{{URL::to('dashboard/edit/'.$user->id)}}" role="form" id="form" method="post"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" class="form-control required" id="name" placeholder="" name="name"
                           value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="text" class="form-control required email" id="" placeholder="" name="email"
                           value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control digits" id="" placeholder="" name="phone"
                           value="{{$user->phone}}">
                </div>

                <div class="form-group">
                    <label for="story" class="col-lg-3 col-sm-3 control-label required">Story*</label>

                    <textarea name="story" id="story" style="height: 200px"
                              class="form-control required">{{$user->story}}</textarea>

                </div>
                <div class="form-group">
                    <label for="image" class="col-lg-3 col-sm-3 control-label">Current Image</label>

                    <div class="col-lg-9 col-sm-9">
                        <input name="current_image" type="file" class="form-control " id="image"
                               accept="jpg|jpeg|png">
                    </div>
                </div>

                <div class="form-group">
                    <label for="image" class="col-lg-3 col-sm-3 control-label">Old Image</label>

                    <div class="col-lg-9 col-sm-9">
                        <input name="old_image" type="file" class="form-control " id="image"
                               accept="jpg|jpeg|png">
                    </div>
                </div>

            </form>
        </div>

        <div class="col-lg-4">

            <h4>Attachments</h4>
            <table class="table table-condensed table-stripped table-hover table-bordered">

                <tbody>

                <tr>
                    @if(!is_null($current_image))
                    <td>Current Image</td>
                    <td><a href="{{asset($current_image->path)}}" class="attachment">View</a></td>
                    <td>
                        <a href="{{URL::to('dashboard/delete-image/'.$user->id.'/'.$current_image->id)}}"
                           class="btn btn-danger btn-xs"><i class="fa fa-trash-o icon-trash">
                    </td>
                    @endif
                </tr>

                <tr>
                    @if(!is_null($old_image))
                    <td>Old Image</td>
                    <td><a href="{{asset($old_image->path)}}" class="attachment">View</a></td>
                    <td>
                        <a href="{{URL::to('dashboard/delete-image/'.$user->id.'/'.$old_image->id)}}"
                           class="btn btn-danger btn-xs"><i class="fa fa-trash-o icon-trash">
                    </td>
                    @endif
                </tr>


                </tbody>
            </table>


        </div>

    </div>

    <br/><br/>
    <!--    submit button-->
    <div class="row">
        <div class="col-lg-12">
            <div style="text-align: center">
                <button type="submit" class="btn btn-primary" form="form">Save</button>
            </div>
        </div>
    </div>


</div>

