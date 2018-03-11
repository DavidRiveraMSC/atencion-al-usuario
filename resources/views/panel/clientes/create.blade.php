@extends('home')
@section('title','Registrar Categorias')
@section('contenido')
<!-- Input -->
<div class="row clearfix">
	<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header bg-indigo">
				<h2>
					Categoria
					<small>
						Registra una nueva categoria
					</small>
				</h2>				
			</div>
			<div class="body">
				<!--<h2 class="card-inside-title">
					Basic Examples
				</h2>-->
				<div class="row clearfix">
					<div class="col-sm-12">
						{!! Form::open(['route' => 'categorias.store', 'method' => 'POST']) !!}
						<div class="form-group">
							<div class="form-line">								
								{!! Form::text('categoria',null,['class' =>'form-control', 'placeholder' =>'Nombre de la categoría','required'])!!}
							</div>
						</div>
						<div class="form-group">
							<div class="form-line">
								{!! Form::textarea('descripcion',null,['class' =>'form-control', 'placeholder' =>'Descripcion de la categoría'])!!}
							</div>
						</div>
						{!! Form::button('<i class="material-icons">save</i> REGISTRAR',
						['type' => 'submit', 'class' => 'btn btn-block btn-lg bg-indigo waves-effect'] )!!}
						{!! Form::close() !!}										
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- #END# Input -->
@stop