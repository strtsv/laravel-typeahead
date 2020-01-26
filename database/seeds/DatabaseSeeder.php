<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		Eloquent::unguard();

		$airplanesTable = DB::table('airplanes');

		$airplanesTable->delete();

		$airplanesTable->insert(array(
			'registration' => 'C-FNND',
			'operator' => 'Air Canada',
			'manufacturer' => 'Boeing',
			'type' => '777-200',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		));

		$airplanesTable->insert(array(
			'registration' => 'PH-BFW',
			'operator' => 'KLM Royal Dutch Airlines',
			'manufacturer' => 'Boeing',
			'type' => '747-400',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		));

		$airplanesTable->insert(array(
			'registration' => 'N124US',
			'operator' => 'US Airways',
			'manufacturer' => 'Airbus',
			'type' => 'A320-200',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		));

		$airplanesTable->insert(array(
			'registration' => 'A6-EEU',
			'operator' => 'Emirates',
			'manufacturer' => 'Airbus',
			'type' => 'A380-800',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		));

		$airplanesTable->insert(array(
			'registration' => 'VH-LQL',
			'operator' => 'Qantas',
			'manufacturer' => 'Bombardier',
			'type' => 'DHC-8-400',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		));
    }
}
