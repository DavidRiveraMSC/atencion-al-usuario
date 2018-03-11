@extends('home')
@section('title','Listado de Clientes')
@section('contenido')
<!-- Hover Rows -->
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		@if(Session::has('message'))
		<div class="alert bg-green alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{{Session::get('message')}}
		</div>

		@endif
		
		<div class="card">
			<div class="header bg-indigo">
				<div class="row">
					<div class="col-lg-10">
						<h2>
							Listado de Categorias					
						</h2>						
					</div>

					<div class="col-lg-2">
						

						<button type="button" class="btn bg-light-green btn-circle-lg waves-effect waves-circle waves-float">
							<i class="material-icons">add</i>
						</button>
					</div>
				</div>								
			</div>
			<div class="body table-responsive">
				<table class="table table-bordered table-hover js-categoria">
					<thead>
						<tr>
							<th>ID</th>
							<th>Num expd.</th>							
							<th>Nombre</th>
							<th>Apellido 1</th>
							<th>Apellido 2</th>
							<th>Direccion.</th>							
							<th>Tel</th>
							<th>Cel</th>
							<th>Correo</th>
							<th>Departamento</th>							
							<th>Municipio</th>
							<th>Tipo cliente</th>
							<th>Sucursales</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($clientes as $cli)
						<tr>
							<td>{{$cli->id}}</td>
							<td>{{$cli->num_expediente}}</td>
							<td>{{$cli->nombre}}</td>
							<td>{{$cli->primer_apellido}}</td>
							<td>{{$cli->segundo_apellido}}</td>
							<td>{{$cli->direccion}}</td>
							<td>{{$cli->tel_conv}}</td>
							<td>{{$cli->tel_cel}}</td>
							<td>{{$cli->correo}}</td>
							<td>{{$cli->departamento}}</td>
							<td>{{$cli->municipio}}</td>
							<td>{{$cli->tipo_cliente}}</td>
							<td>{{$cli->sucursales}}</td>
							<td class="js-sweetalert">
								<button type="button" class="btn btn-primary waves-effect">
									<i class="material-icons">mode_edit</i>
								</button>

								<a id="delete-btn" class="btn btn-danger waves-effect buttonDelete" href="{{route('categorias.destroy', $cli->id)}}"
									role="button"><i class="material-icons">delete</i></a>
								</td>
							</tr>
							@endforeach						
						</tbody>
					</table>				
				</div>
			</div>
		</div>
	</div>


	<!-- #END# Hover Rows -->
	@stop
	@section('scriptDatatable')
	<script src="../../admin/js/pages/tables/jquery-datatable.js"></script>
	<script type="text/javascript">



	</script>
	@stop



