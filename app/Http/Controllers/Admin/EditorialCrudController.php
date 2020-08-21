<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditorialRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Str;

class EditorialCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Editorial::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/editorial');
        CRUD::setEntityNameStrings('editorial', 'editorials');
    }

    protected function setupListOperation()
    {
        CRUD::addColumns(['name']);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(EditorialRequest::class);

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
