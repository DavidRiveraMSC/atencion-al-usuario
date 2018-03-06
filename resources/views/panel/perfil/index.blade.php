@extends('home')
@section('title','Listado de categorias')
@section('css')
<link href="/css/style.css" rel="stylesheet">
@stop
@section('contenido')
<div class="page">
	<div class="demo">
		<div class="main-container">
			<article class="profile">
				<header class="profile__header">
					<img src="/images/perfil/{{Auth::user()->image}}" class="profile__avatar" alt="avatar of Stas Melnikov">
					<h3 class="profile__name">{{ Auth::user()->name }}</h3>
					<span class="profile__post">{{ Auth::user()->email }}</span>
					<button type="button" class="btn btn-primary waves-effect"  data-toggle="modal" data-target="#defaultModal">
						Editar Foto De Perfil
					</button>
				</header>
				<div class="profile__body">
					<div class="profile__row">
						<div class="profile__group">
							<span class="profile__value">85%</span>
							<span class="profile__param">HTML</span>
						</div>
						<div class="profile__group">
							<span class="profile__value">90%</span>
							<span class="profile__param">CSS</span>
						</div>          
						<div class="profile__group">
							<span class="profile__value">85%</span>
							<span class="profile__param">Web-Design</span>
						</div>          
						<div class="profile__group">
							<span class="profile__value">98%</span>
							<span class="profile__param">Animation</span>
						</div>        
						<div class="profile__group">
							<span class="profile__value">52%</span>
							<span class="profile__param">Javascript</span>
						</div>        
						<div class="profile__group">
							<span class="profile__value">10%</span>
							<span class="profile__param">PHP</span>
						</div>                      
					</div>
				</div>
				<footer class="profile__footer profile__socials">
					<a href="#0" class="cssui-social profile__social">
						<i class="cssui-icon profile__twitter"></i>
						<span class="cssui-social__name">Twitter</span>
					</a>
					<a href="#0" class="cssui-social profile__social">
						<i class="cssui-icon profile__linkedin"></i>
						<span class="cssui-social__name">Linkedin</span>
					</a>            
					<a href="#0" class="cssui-social profile__social">
						<i class="cssui-icon profile__codepen"></i>
						<span class="cssui-social__name">Codepen</span>
					</a>                        
				</footer>

			</article>
		</div>
	</div>	
</div>
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-indigo">
				<h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				<form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
				<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
		</div>
	</div>
</div>	
@stop