@extends('layouts.main')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/uploadify/uploadify.css') }}">
<script src="{{ URL::asset('/uploadify/jquery.uploadify.min.js') }}" type="text/javascript"></script>

<script type="text/javascript" src="{{ URL::asset('/uploadify/moment.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/uploadify/bootstrap-datetimepicker.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('/uploadify/bootstrap-datetimepicker.min.css') }}" />
<script type="text/javascript">
<?php $timestamp = time();?>
$(function() {
    $('#file_upload').uploadify({
        'swf': "{{asset('/uploadify/uploadify.swf')}}",
        'uploader': "{{url('/myActivity/uploadFile')}}",
        'formData': {
            '_token': '{{csrf_token()}}'
        },
        'onUploadError': function(file, errorCode, errorMsg, errorString) {
            $('#picshow').attr('src', '').hide();
            $('#file_upload').val('');
            console.log('failed' + errorCode + errorMsg + errorString);
            alert('failed in upload');
        },
        'onUploadSuccess': function(file, data, response) {
            $("#picshow").val(data);
            $('#picshow').attr('src', data).show();
            console.log('success' + response);
            alert('Successfuly upload it');
        }

    });
});
</script>

<script type="text/javascript">
$(function() {
    $('#datetimepicker6').datetimepicker();
    $('#datetimepicker7').datetimepicker({
        useCurrent: false //Important! See issue #1075
    });
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
});
</script>
<div class="container">
    <div class="row">

        @if($code==1)
        <form action="{{ URL::to('/myActivity/update') }}" method="POST" role="form">
            <input type="hidden" name="id" class="form-control" value="{{$id}}" required="required">
            @else
            <form action="{{ URL::to('/myActivity/add') }}" method="POST" role="form">
                @endif
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title:</label>
                    <div class="col-sm-10">
                        <input type="string" name="title" class="form-control" value="{{$title}}" required="required">
                    </div>
                </div>
                @if($code==0)
                <div class="form-group">
                    <label for="photo" class="col-sm-2 control-label">Upload Picture:</label>
                    <div class="col-sm-10">
                        <input id="file_upload" name="file_upload" type="file">
                        <div class="img-wrap">
                            <img id='picshow' src="">
                        </div>
                        <input type="hidden" name="pictures" id="pictures" class="form-control">
                    </div>
                </div>
                @else
                @endif

                @csrf

				<div class="form-group">
                    <label for="location" class="col-sm-2 control-label">Location:</label>
                    <div class="col-sm-10">
                        <input type="string" name="location" id="location" class="form-control" value="{{$location}}"
                            required="required">
                    </div>
                </div>
                <div class="form-group" style="margin:5px;border:0;padding:0;">
                    <label for="start_time" class="col-sm-2 control-label">Start time:</label>
                    <div class="col-sm-10">
                        <div class='input-group date' id='datetimepicker6'>
                            <input type='text' class="form-control" id="start_time" name="start_time" value="{{$start_time}}" />
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="form-group" style="margin:5px;border:0;padding:0;">
                    <label for="end_time" class="col-sm-2 control-label">End Time:</label>
                    <div class="col-sm-10">
                        <div class='input-group date' id='datetimepicker7'>
                            <input type='text' class="form-control" id="end_time" name="end_time" value="{{$end_time}}" />
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group" style="margin:5px;border:0;padding:0;">
                    <label for="description" class="col-sm-2 control-label">Description:</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="5" id="description" name="description" >{{$description}}</textarea>
                    </div>
                </div>
                <br><br><br>
                
                <center>
                    <button type="submit" class="btn btn-default" style="left:50%">Confirm</button>
                </center>

            </form>
    </div>
</div>





@stop