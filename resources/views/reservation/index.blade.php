@extends('main')
@section('content')


    
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
	
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
    *****************************
            Chat box End
        ***********************************-->


		
		
        <!--**********************************
            Header start
        ***********************************-->
      
                    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                 
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <a href="{{ route('reservation.create') }}" class="btn btn-primary">+ Add new</a>
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="checkAll" required="">
														<label class="form-check-label" for="checkAll"></label>
													</div>
                                                    <th>quarto_id</th>
                                                <th>convidados_id</th>
                                                <th>clientes_id</th>
                                                <th>administrador_id</th>
                                                <th>check_in_date</th>
                                                <th>check_out_date</th>
                                            </tr>
                                        </thead>
                                       
                                        </thead>
                                        <tbody>
                      @if($reservation->count() > 0)
                          @foreach($reservations as $rs)

                        <tr>
                          <td>{{ $rs->room_id }}</td>
                          <td>{{ $rs-> guest_id}}</td>
                          <td>{{ $rs->customer_id  }}</td>
                          <td>{{ $rs->admin_id }}</td>
                          <td>{{ $rs->check_in_date }}</td>
                          <td>{{ $rs->check_out_date }}</td>
                          
                          
						  <!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
						  <td>
							<a class="btn btn-sm btn-info " href="{{route('reservation.edit', $rs->id)}}"> Editar </a> -
                              <form action="{{ route('reservation.destroy', $rs->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger m-0" type="submit" btn btn-danger>Delete</button>
                              </form>

                          </td>


                        </tr>
                          @endforeach
                      @endif

                   </tbody>
                    </table>
                  </div>
                </div>
              </div>

</div>

@endsection
