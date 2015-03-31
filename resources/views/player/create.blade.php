@extends('adminMaster')


@section('adminContent')
<div class="col-lg-10 main-chart">
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">

            <h4 class="mb"><i></i>Add Player</h4>
                <div class="panel-body">
                     {{--<form action="{{route('player.create')}}" method="POST">--}}
                    {!! Form::open(['route'=>'player.create'])!!}
                        <fieldset>
                            <div class="form-group">
                                 <label>PLAYER ID</label>
                                 {{--<input name="player_Id" class="form-control" id="player_Id" placeholder="Enter player id" type="text">--}}
                                 {{ Form::text('player_Id',null,array('class'=>'form-control')) }}
                             </div>
                             <div class="form-group">
                                 <label>PLAYER NAME</label>
                                 {{ Form::text('player_Name',null,array('class'=>'form-control')) }}
                             </div>
                             <div class="form-group">
                                 <label>DOB</label>
                                 {{ Form::text('DOB',null,array('class'=>'form-control')) }}
                             </div>
                             <div class="form-group">
                                 <label>PERMANENT ADDRESS</label>
                                 {{ Form::text('permanent_Address',null,array('class'=>'form-control')) }}

                             </div>
                             <div class="form-group">
                                  <label>PERMANENT ADDRESS</label>
                                  {{ Form::text('permanent_Address',null,array('class'=>'form-control')) }}

                             </div>
                             <div class="form-group">
                               <label>TEMPORARY ADDRESS</label>
                               {{ Form::text('temporary_Address',null,array('class'=>'form-control')) }}

                          </div><div class="form-group">
                              <label>PERMANENT ADDRESS</label>
                              {{ Form::text('permanent_Address',null,array('class'=>'form-control')) }}

                            </div>
                            <div class="form-group">
                                 <label>BLOOD GROUP</label>
                                 {{ Form::text('blood_Group',null,array('class'=>'form-control')) }}

                            </div>
                           <div class="form-group">
                                <label>HEIGHT</label>
                                {{ Form::text('height',null,array('class'=>'form-control'))}}
                            </div>
                            <div class="form-group">
                                <label>WEIGHT</label>
                                {{ Form::text('weight',null,array('class'=>'form-control'))}}
                            </div>
                            <div class="form-group">
                                <label>HEIGHT</label>
                                {{ Form::text('complexion',null,array('class'=>'form-control'))}}
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </fieldset>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

