@extends('adminMaster')
@section('adminContent')
  <div class="row">

  			<div class="panel panel-default">
  				<div class="panel-heading"><center><b>Player Detail</b></center></div>

              <div class="panel-body">
              <div class="block-content collapse in">
                  <div class="span12">
                     <div class="table-toolbar">
                        <div class="btn-group">
                           <a href="{{url('player/create')}}"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
                        </div>
                        <div class="btn-group pull-right">
                           <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                           <ul class="dropdown-menu">
                              <li><a href="#">Print</a></li>
                              <li><a href="#">Save as PDF</a></li>
                              <li><a href="#">Export to Excel</a></li>
                           </ul>
                        </div>
                     </div>

                      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="data_table">
                          <thead>
                              <tr>
                                  <th width="10">ID</th>
                                  <th >Player Name</th>
                                  <th >DOB</th>
                                  <th >P. Address</th>
                                  <th >T. Address</th>
                                  <th width="100">Blood Group</th>
                                  <th width="10">Height</th>
                                  <th width="10">Weight</th>
                                  <th width="40">Complexion</th>
                                  <th width="10">Edit</th>
                                  <th width="10">Delete</th>
                              </tr>
                          </thead>
                          <tbody>

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
          </div>
          <!-- /block -->
      </div>

   </div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop
@section('js_code')

    <script src="{{asset('/js/jquery.min.js')}}"></script>
   {{-- <script src="{{asset('/datatables/js/support-file.js')}}"></script>--}}


     {{--<script src="{{asset('/datatables/js/jquery.js')}}"></script>--}}{{--<script src="{{asset('/datatables/js/jquery.js')}}"></script>--}}
     <script src="{{asset('/datatables/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('/datatables/js/DataTables.js')}}"></script>
      <script src="{{asset('/datatables/js/support-file.js')}}"></script>
       <script src="{{asset('/js/player.js')}}"></script>
@stop

