<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContctRequestUpdate;
use App\Repositories\ContactRepository;
use App\Http\Requests\ContctRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	protected $gestion_contact;

	public function __construct(ContactRepository $gestion_contact)
	{
		$this->gestion_contact = $gestion_contact;
	}

	// function retun all contacts
    public function index()
    {
    	$contacts = $this->gestion_contact->getAll();

    	return view('contact.liste', compact('contacts'));
    }

    // function for return html form for add a new contact
    public function create_contact()
    {
    	return view('contact.create');
    }

	// function for save contect in data base
    public function store_contact(ContctRequest $request)
    {	
    	$this->gestion_contact->store($request->all());

        return redirect()
        		->route('contacts')
        		->withOk("Contact ".$request->nom.' '.$request->prenom ." a été créé avec succès.");
    }

    // function for display contact info
    public function show_contact($id)
    {
        $contact         = $this->gestion_contact->getByID($id);
        $display_contact = true;

        return view('contact.edit', compact('contact', 'display_contact'));
    }

    // function for return html form for edit a new contact
    public function edit_contact($id)
    {
        $contact = $this->gestion_contact->getByID($id);
        
        return view('contact.edit', compact('contact'));
    }

    // function for update contact details in data base
    public function update_contact($id, ContctRequestUpdate $request)
    {
        $this->gestion_contact->update($id, $request->all());

        return redirect()
                ->route('contacts')
                ->withOk("Contact ".$request->nom.' '.$request->prenom ." a été modifié avec succès.");
    }    

    // function for delete contact from data base
    public function destroy_contact($id)
    {
        $this->gestion_contact->destroy($id);

        return redirect()
                ->route('contacts')
                ->withOk("Contact supprimé avec succès.");
    }   

}
