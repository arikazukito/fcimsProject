@extends('adminMaster')


@section('adminContent')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><center><b>Add Player</b></center></div>

                    <div class="panel-body">
                         {{--<form action="{{route('player.store')}}" method="POST">--}}
                        {!! Form::open(['route'=>'player.store'])!!}
                            <fieldset>
                                <div class="form-group">
                                     <label><b>PLAYER ID</b></label>
                                     {{--<input name="player_Id" class="form-control" id="player_Id" placeholder="Enter player id" type="text">--}}
                                     {!! Form::text('player_Id',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>PLAYER NAME</b></label>
                                     {!! Form::text('player_Name',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>DOB</b></label>
                                     {!! Form::text('DOB',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>PERMANENT ADDRESS</b></label>
                                     {!! Form::text('permanent_Address',null,array('class'=>'form-control')) !!}

                                 </div>
                                 <div class="form-group">
                                      <label><b>TEMPORARY ADDRESS</b></label>
                                      {!! Form::text('temporary_Address',null,array('class'=>'form-control')) !!}

                                 </div>

                                <div class="form-group">
                                     <label><b>BLOOD GROUP</b></label>
                                     {!! Form::text('blood_Group',null,array('class'=>'form-control')) !!}

                                </div>
                               <div class="form-group">
                                    <label><b>HEIGHT</b></label>
                                    {!! Form::text('height',null,array('class'=>'form-control'))!!}
                                </div>
                                <div class="form-group">
                                    <label><b>WEIGHT</b></label>
                                    {!! Form::text('weight',null,array('class'=>'form-control'))!!}
                                </div>
                                <div class="form-group">
                                    <label><b>Complexion</b></label>
                                    {!! Form::text('complexion',null,array('class'=>'form-control'))!!}
                                </div><br><br>
                                <center>{!! form::submit('Add Player',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}
                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

