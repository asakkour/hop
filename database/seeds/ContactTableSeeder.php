<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker    = Faker::create('App\Contact');
        $civilite = ['M', 'F'];

        for ($i=0; $i < 20 ; $i++) { 
	        \DB::table('contacts')->insert([
	        	"civilite"            =>$civilite[rand(0, 1)] ,
	        	"nom"                 =>$faker->firstName ,
	        	"prenom"              =>$faker->lastname ,
	        	"fonction"            =>$faker->sentence(1)  ,
	        	"service"             =>$faker->sentence(1)  ,
	        	"email"               =>$faker->unique()->email ,
	        	"telephone_mobile"    =>$faker->phoneNumber ,
	        	"date_naissance"      =>$faker->date ,
	        	"nom_societe"         =>$faker->sentence(1)  ,
	        	"adresse_societe"     =>$faker->address ,
	        	"code_postal_societe" =>$faker->postcode ,
	        	"ville_societe"       =>$faker->city ,
	        	"telephone_societe"   =>$faker->phoneNumber ,
	        	"site_web_societe"    =>$faker->domainName ,
	        ]);
        }
    }
}
