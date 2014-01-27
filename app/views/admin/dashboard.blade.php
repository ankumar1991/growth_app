<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
{{HTML::style('css/jquery-ui.css')}}

{{HTML::style('css/bootstrap.min.css')}}
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"/>

<style type="text/css">
    input[type="text"] {
        height: 30px;
        width: 150px;
    }

    body {
        font-family: "OPEN SANS", serif;

    }

    h3 {
        font-family: "open sans", serif;
        font-weight: 400;
    }

</style>


<script>


    $(document).ready(function () {

        $('.delete').click(function (e) {

            var user = $(this);
            if (confirm("Are you sure you want to delete these entries?")) {

                window.location.href = user.attribute("href");

            } else {
                e.preventDefault();
                return;
            }

        });

//        $(function () {
//
//            $(".datepicker").datepicker({
//
//                //defaultDate: "+1w",
//                changeMonth: true,
//                changeYear: true,
//                numberOfMonths: 1,
//                dateFormat: 'yy-mm-dd'
//            });
//        });

//        $('#delete').click(function (e) {
//            $checked_items = $('#delete_checkbox:checked').length;
//
//            if ($checked_items != 0) {
//                if (confirm("Are you sure you want to delete these entries?")) {
//
//                    $('delete_entry_form').submit();
//                } else {
//                    e.preventDefault();
//                    return;
//                }
//            } else {
//                e.preventDefault();
//            }
//
//        });


    });

</script>


<div class="row well" style="margin-top: 50px">
    <div class="span4 offset3">
        <span style="font-size: 25px">Dashboard</span>
    </div>
    <div class="span5 offset5">

        <a href="{{URL::to('dashboard/download-csv')}}" class="btn btn-success">Download Data</a>
        <a href="<?php echo URL::to('admin/log-out'); ?>" class="btn btn-primary">Log Out</a>
    </div>
</div>
<div class="container">

    <!--    <div class="row">-->
    <!--        <form action="--><?php //echo URL::to('dashboard/filter-data'); ?><!--" method="post">-->
    <!--            <div class="span6">-->
    <!--                From: <input type="text" name="from_date" class="datepicker"-->
    <!--                             value="--><?php //if (!empty($from_date)) echo $from_date ?><!--"/>-->
    <!--                To: <input type="text" name="to_date" class="datepicker"-->
    <!--                           value="--><?php //if (!empty($to_date)) echo $to_date ?><!--"/>-->
    <!--                <input type="submit" class="btn btn-success" style="margin-bottom: 11px" name="get_data"-->
    <!--                       value="Get Data">-->
    <!--            </div>-->
    <!--            <div class="span5">-->
    <!---->
    <!---->
    <!--                <input type="submit" class="btn btn-primary" name="download_data" value="Download Data">&nbsp;&nbsp;&nbsp;-->
    <!--                <input type="submit" class="btn btn" name="download_junk_data" value="Download Junk Data">&nbsp;&nbsp;&nbsp;-->
    <!--                <input type="submit" class="btn btn-danger" name="delete" value="Delete" id="delete"-->
    <!--                       form="delete_entry_form">-->
    <!--            </div>-->
    <!--        </form>-->


    <br><br>


    <form action="<?php echo URL::to('dashboard/delete') ?>" name="delete_entry_form" method="post"
          id="delete_entry_form">

        <div class="row">
            <div class="span12">


                <table class="table table-hover">
                    <thead>

                    <!--                    <th></th>-->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Story</th>
                    <th>Created At</th>
                    <th>Active</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>

                    <tbody>

                    @if(!empty($users))

                    @foreach($users as $row)

                    <tr>
                        <!--                        <th><input id="delete_checkbox" type="checkbox" name="delete_entries[]"-->
                        <!--                                   value="--><?php //echo $row->id ?><!--"/></th>-->
                        <td>
                            @if(!empty($row->name))
                            {{$row->name}}
                            @else
                            -
                            @endif
                        </td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->phone}}</td>
                        <td>
                            @if(!empty($row->story))
                            <?php
                            $story = $row->story;
                            $story = substr($story, 0, 100);
                            echo $story . ".....";
                            ?>

                            @else
                            -
                            @endif
                        </td>

                        <td>
                            <?php $created_at = $row->created_at;
                            echo date("d M Y", strtotime($created_at));
                            ?>
                        </td>
                        <td>
                            @if($row->is_active)
                            <a href="{{URL::to('dashboard/state/disable/'.$row->id)}}"><i class="fa fa-check" style="color: green"></i></a>
                            @else
                            <a href="{{URL::to('dashboard/state/enable/'.$row->id)}}"><i class="fa fa-times" style="color: red"></i></a>
                            @endif
                        </td>
                        <td>
                            <a href="<?php echo URL::to('dashboard/edit/' . $row->id) ?>">Edit</a>
                        </td>

                        <td><a href="{{URL::to('dashboard/delete-user/'.$row->id)}}"
                               class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o icon-trash"></i></a>
                        </td>

                    </tr>

                    @endforeach

                    @endif
                    </tbody>


                </table>


            </div>
        </div>


</div>
