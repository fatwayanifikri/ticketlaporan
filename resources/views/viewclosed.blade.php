<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trouble Ticket</title>
	<!-- BOOTSTRAP STYLES-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
     <!-- FONTAWESOME STYLES-->
	 <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css') }}">
     <!-- MORRIS CHART STYLES-->
	 <link rel="stylesheet" type="text/css" href="{{ asset('/js/morris/morris-0.4.3.min.css') }}">
	 
        <!-- CUSTOM STYLES-->
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">
    
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Ticket Report</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : <?php date_default_timezone_set('Asia/Jakarta');echo date('d-m-Y H:i:s');?> &nbsp; <a href="#" type="submit" class="btn btn-danger square-btn-adjust"><i class="fa fa-sign-out"></i> Logout</a></div>

        </nav>   
		 <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src= "../img/find_user.png" class="user-image img-responsive"/>
					</li>
				
                     <li>
                        <a  href="http://localhost/ticket_laporan/public/ticket"><i class="fa fa-desktop fa-3x"></i> Home</a>
                    </li>
					<li  >
                        <a  href="http://localhost/ticket_laporan/public/ticket"><i class="fa fa-user fa-3x"></i> Employee </a>
                    </li>			
					     <li  >
                        <a  href="http://localhost/ticket_laporan/public/ticket/report"><i class="fa fa-edit fa-3x"></i> Report</a>
                    </li>   					
                    <li>
                        <a href="#"><i class="fa fa-table fa-3x"></i> Check Ticket<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="http://localhost/ticket_laporan/public/ticket/viewactive">Active Ticket</a>
                            </li>
                            <li>
                                <a href="http://localhost/ticket_laporan/public/ticket/viewclosed">Closed Ticket</a>
                            </li>
                            
                            </li>
                        </ul>
                      </li>  	
					
					<li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> About Us</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
		<!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <div class="panel panel-default">
  <div class="panel-heading">
    Closed Ticket                   
  </div>
  <div class="panel-body">
  <div class="table-responsive" style="overflow-x: auto">
  <table class="table table-striped table-bordered table-hover" >
  
 <thead>        
<tr>
                  
                  <th>Ticket Number</th>
				  <th>Severity</th>
				  <th>Open Ticket Date	</th>
                  <th>Site Name</th>
				  <th>Ticket Status</th>
				  <th>Alarm</th>
				  <th>Suspect</th>
				  <th>Location	</th>
				  <th>Close Ticket Date</th>
				  <th>Work Status</th>
				  <th>Work Date</th>
				  <th>Engineer</th>
				  <th>Action On Site</th>
				  <th>Remarks</th>
				 
                  </tr>
				  
		@foreach($ticket as $t)
		<tr>
			<td>{{ $t->ticket_number }}</td>
			<td>{{ $t->severity }}</td>
			<td>{{ $t->tgl_input_ticket }}</td>
			<td>{{ $t->nama_site }}</td>
			<td>{{ $t->status_ticket }}</td>
			<td>{{ $t->alarm }}</td>
			<td>{{ $t->suspect }}</td>
			<td>{{ $t->location }}</td>
			<td>{{ $t->tgl_close_ticket }}</td>
			<td>{{ $t->status_kerja }}</td>
			<td>{{ $t->tgl_kerja }}</td>
			<td>{{ $t->teknisi }}</td>
			<td>{{ $t->action }}</td>
			<td>{{ $t->remark }}</td>
			<td>
			
			</td>
		</tr>
		@endforeach
	</table>
	
				
				</div>
		</div>
	</div>				

				
                
<!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->	
	<script src="{{ asset('js/jquery-1.10.2.js') }}" defer></script>

      <!-- BOOTSTRAP SCRIPTS -->
	  <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <!-- METISMENU SCRIPTS -->
	  <script src="{{ asset('js/jquery.metisMenu.js') }}" defer></script>
  
     <!-- MORRIS CHART SCRIPTS -->
	 <script src="{{ asset('js/morris/raphael-2.1.0.min.js') }}" defer></script>
	<script src="{{ asset('js/morris/morris.js') }}" defer></script>
    
      <!-- CUSTOM SCRIPTS -->
	  <script src="{{ asset('js/custom.js') }}" defer></script>
	
    
    
   
</body>
</html>