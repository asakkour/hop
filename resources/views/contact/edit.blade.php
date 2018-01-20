@extends('template')


@section('content')
	
	<div class="row content @if(isset($display_contact) and $display_contact) disabel @endif">
		<fieldset>
			<div class="col-sm-12">
				<h1>
					{{$contact->nom}} {{$contact->prenom}}
					<span>Contact</span>
				</h1>
				<hr>
			</div>
			<div class="col-sm-12 form-contact">
				{!! Form::model($contact, ['route' => ['update_contact', $contact->contact_ids], 'method' => 'post']) !!}
					<div class="row">
						<div class="col-sm-6 col-xs-12 left">
							<div class="content">
								<div class="row">
									<div class="col-lg-12">
										<h2>
											Identité du contact
										</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 form-group">
										<label>Civilité</label>
										<br>
										<button type="button" class="civilite btn btn-pink @if($contact->civilite == 'F') selected @endif " data-civilite='F'>
											<i class="fa fa-female"></i> <span>Madame</span>
										</button>
										<button type="button" class="civilite btn btn-blue @if($contact->civilite == 'M') selected @endif " data-civilite='M'>
											<i class="fa fa-male"></i> <span>Monsieur</span>
										</button>
										<div class="hidden">
											{!! Form::radio('civilite', 'F') !!}
											{!! Form::radio('civilite', 'M') !!}
										</div>
										
							  		</div>
								</div>
								<!-- /.Civilité -->
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="">Prénom</label>
										{!! Form::text('prenom', null, ['class' => 'form-control']) !!}
										<div class="has-error">
								  			{!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
								  		</div>
									</div>
									<div class="col-lg-6 form-group">
										<label for="">Nom</label>
										{!! Form::text('nom', null, ['class' => 'form-control']) !!}
										<div class="has-error">
								  			{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
								  		</div>
									</div>
								</div>
								<!-- /.nom -->
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="">Fonction</label>
										{!! Form::text('fonction', null, ['class' => 'form-control']) !!}
										
									</div>
									<div class="col-lg-6 form-group">
										<label for="">Service</label>
										{!! Form::text('service', null, ['class' => 'form-control']) !!}
										
									</div>
								</div>	
								<!-- /.service et fonction -->
								<div class="row">
									<div class="col-lg-12 form-group">
										<label for="">E-mail</label>
										{!! Form::text('email', null, ['class' => 'form-control']) !!}
								  		
										<div class="has-error">
								  			{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
								  		</div>
									</div>
								</div>
								<!-- /.email -->
								<div class="row">
									<div class="col-lg-6 form-group">
										<label for="">Téléphone mobile</label>
										{!! Form::text('telephone_mobile', null, ['class' => 'form-control']) !!}
										
									</div>
									<div class="col-lg-6 form-group">
										<label for="">Date de naissance</label>
										{!! Form::text('date_naissance', null, ['class' => 'form-control datepicker']) !!}
										
									</div>
								</div>	
								<!-- /.service et fonction -->
							</div>
						</div>
						<!-- /.Identité du contact -->
						<div class="col-sm-6 col-xs-12 right">
							<div class="content">
								<div class="row">
									<div class="col-lg-12">
										<h2>
											Sociètè
										</h2>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 form-group">
										<label for="">Nom</label>
										{!! Form::text('nom_societe', null, ['class' => 'form-control']) !!}
										
									</div>
								</div>
								<!-- /.nom Sociètè -->
								<div class="row">
									<div class="col-sm-12 form-group">
										<label for="">Adresse</label>
										{!! Form::textArea('adresse_societe', null, ['class' => 'form-control', 'rows' => 3]) !!}
										
									</div>
								</div>	
								<!-- /.Adresse Sociètè -->
								<div class="row">
									<div class="col-sm-3 col-xs-12 form-group">
										<label for="">Code Postal</label>
										{!! Form::text('code_postal_societe', null, ['class' => 'form-control']) !!}
										
									</div>
									<div class="col-sm-9 col-xs-12 form-group">
										<label for="">Ville</label>
										{!! Form::text('ville_societe', null, ['class' => 'form-control']) !!}
										
									</div>
								</div>	
								<!-- /.code postal Sociètè -->
								<div class="row">
									<div class="col-sm-3 col-xs-12 form-group">
										<label for="">Téléphone</label>
										{!! Form::text('telephone_societe', null, ['class' => 'form-control']) !!}
										
									</div>
									<div class="col-sm-9 col-xs-12 form-group">
										<label for="">Site Web</label>
										{!! Form::text('site_web_societe', null, ['class' => 'form-control']) !!}
										
									</div>
								</div>	
								<!-- /.code postal Sociètè -->
							</div>
						</div>
						<!-- /.information Sociètè -->
					</div>

					<div class="row">
						<div class="col-lg-12 form-group">
							@if(!isset($display_contact))
								<button type="submit" class="btn btn-hop-blue btn-span">
									<i class="fa fa-pencil"></i> <span>Edit</span>
								</button>
							@endif
							<a href="{{route('contacts')}}" class="btn btn-hop-gray btn-span">
								<i class="fa fa-list"></i>
								<span>Retour à la liste des contacts</span>
							</a>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</fieldset>
	</div>

@stop