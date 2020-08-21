<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BooktypeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Str;

class BooktypeCrudController extends CrudController
{
	use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


	public function setup()
	{
		CRUD::setModel(\App\Models\Booktype::class);
		CRUD::setRoute(config('backpack.base.route_prefix') . '/booktype');
		CRUD::setEntityNameStrings('Book Type', 'Book Types');
	}

	protected function setupListOperation()
	{
		CRUD::addColumns(['name']);
	}

	protected function setupCreateOperation()
	{
		CRUD::setValidation(BooktypeRequest::class);

		CRUD::field('name')->type('text');
		CRUD::addField([
			'name'  => 'guid',
			'type'  => 'hidden',
			'label' => 'guid',
			'default' => Str::uuid()->toString(),
		]);
	}

	protected function setupUpdateOperation()
	{
		$this->setupCreateOperation();
	}
}
