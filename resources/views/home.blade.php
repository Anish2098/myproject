
 @extends('layouts.app')

<?php
use Carbon\Carbon;
?>
@section('content')

  <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                	@if(auth()->user()->id==1)
                  <div class="x_title">

                    <h2>Audit Logs</h2>
                    
                  </div>
                  <div class="x_content">

                    <table id="datatable" class=" dataTable table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Authenticable Type</th>
                          <th>Authenticable Id</th>
                          <th>IP address</th>
                          <th>User Agent </th>
                          <th>Url</th>
                          <th>Logout at</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                       <tbody>
                       
                        @foreach($audits as $data)

                        

                                <tr >
                               
                        <td class="font-weight-bold text-justify text-dark">{{$data->user_type}}</td>
                        <td class="font-weight-bold text-justify text-dark">{{$data->user_id}}</td>
                        <td class="font-weight-bold text-justify text-dark">{{$data->ip_address}}</td>
                        <td class="font-weight-bold text-justify text-dark">{{$data->user_agent}}</td>
                        <td class="font-weight-bold text-justify text-dark">{{$data->url}}</td>
                        <td class="font-weight-bold text-justify text-dark">{{$data->created_at}}</td>
                        <td class="font-weight-bold text-justify text-dark "><button class="btn btn-primary">View Only</button></td>
                       
                                    
                                </tr>
                                
                                @endforeach
                      </tbody>
                    </table>

                  </div>


                  @else
                     <h2>User Dashboard</h2>
                 </br>
                    
                    <h3>“Welcome,You are logged in at {{ Carbon::now() }} ”.</h3>

                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
       

           
@stop
