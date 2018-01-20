@extends('template')

@section('content')

<div class="row content">
	<fieldset>
		@if(session()->has('ok'))
			<div class="alert alert-success">
				<i class="fa fa-check-circle-o"></i> {{session('ok')}}
			</div>
		@endif

		<div class="col-sm-12">
			<h1>Liste des contacts</h1>
			<hr>
		</div>
		
		<div class="col-lg-12">
			<a href="{{route('create_contact')}}" class="btn btn-add btn-sm">
				<i class="fa fa-plus"></i> Ajouter un contact
			</a>
		</div>

		<div class="col-lg-12">
			<table class="table table-bordered table-striped datatable">
	            <thead>
		            <tr>
						<th>Civilité</th>
						<th>Prénom</th>
						<th>Nom</th>
						<th>Téléphone</th>
						<th>E-mail</th>
						<th>Sociètè</th>
						<th>Ville</th>
						<th>
						<i class="fa fa-align-justify"></i>
						</th>
		            </tr>
	            </thead>
	            <tbody>
	                @foreach($contacts as $contact)
						<tr>
							<td>
								@if($contact->civilite == "F")
									<i class="fa fa-female" aria-hidden="true"></i>
								@elseif($contact->civilite == "M")
									<i class="fa fa-male" aria-hidden="true"></i>
								@endif
							</td>
							<td>{{ $contact->prenom }}</td>
							<td>{{ $contact->nom }}</td>
							<td>{{ $contact->telephone_mobile }}</td>
							<td>{{ $contact->email }}</td>
							<td>{{ $contact->nom_societe }}</td>
							<td>{{ $contact->ville_societe }}</td>
							<td class="hop-btn-wrap">

							 	<a href="{{route('edit_contact',['id' => $contact->contact_ids])}}" class=" btn-hop">
							 		<i class="fa fa-pencil"></i>
								</a>
								<a href="{{URL::route('show_contact', $contact->contact_ids)}}" class="btn-hop">
									<i class="fa fa-eye"></i>
								</a>
								{!! Form::open(['method' => 'get', 'route' => ['destroy_contact', $contact->contact_ids]]) !!}
										<button type="subbmit" class="" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce contact ?')">
											<i class="fa fa-trash"></i> 
										</button>
								{!! Form::close() !!}
							</td>
						</tr>
	                @endforeach
	            </tbody>    
			</table>
		</div>
	</fieldset>
</div>

@stop