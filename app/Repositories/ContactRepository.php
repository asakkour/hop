<?php  

namespace App\Repositories;

use App\Contact;

class ContactRepository extends ResourceRepository
{

    public function __construct(Contact $contact)
	{
		$this->model = $contact;
	}

}