<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BookRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BookCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BookCrudController extends CrudController
{
	use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

	public function setup()
	{
		CRUD::setModel(\App\Models\Book::class);
		CRUD::setRoute(config('backpack.base.route_prefix') . '/book');
		CRUD::setEntityNameStrings('book', 'books');
	}

	protected function setupListOperation()
	{
		CRUD::setColumns(['name', 'description', 'filename_print', 'filename_download', 'created_at']);
	}

	protected function setupCreateOperation()
	{
		CRUD::setValidation(BookRequest::class);

		CRUD::field('name')->type('text');
		CRUD::field('description')->type('text');
		CRUD::addField(['name' => 'filename_print','label' => 'Print PDF','type' => 'upload','upload' => true]);
		CRUD::addField(['name' => 'filename_download','label' => 'Download PDF','type' => 'upload','upload' => true]);
		CRUD::addField(['name' => 'image','label' => 'Image','type' => 'upload','upload' => true]);

	}

	protected function setupUpdateOperation()
	{
		$this->setupCreateOperation();
	}

}
