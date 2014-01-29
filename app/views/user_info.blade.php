@extends('layouts.default')


@section('content')

<body>

<form action="{{URL::to('home/user-info')}}" method="post" enctype="multipart/form-data">



    Name: <input type="text" name="name"/> <br/>
    Email: <input type="text" name="email"/> <br/>
    Phone: <input type="text" name="phone"/> <br/>
    story: <input type="text" name="story"/> <br/>
    Old Image: <input type="file" name="current_image"/> <br/>
    Current Image: <input type="file" name="old_image"/> <br/>
    <input type="submit" value="submit"/>


</form>

</body>


@stop