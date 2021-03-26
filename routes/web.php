<?php

use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    // to attach the 1 object with other without using array it's ok to use the object

    // User::first()->companies()->attach(Company::first());


    // in case you need to attach muilple companies with a user you need to use array in the attach method with the id's only not 
    //the object it self

    // User::first()->companies()->attach([
    //     Company::first()->id,
    //     Company::find(3)->id,
    //     Company::find(4)->id
    // ]);


    // in case you want to delete a many to many relation you need to use detach method instead of using the attach method in many to many relation
    // User::first()->companies()->detach([
    //     Company::find(3)->id,
    //     Company::find(4)->id,
    //     Company::find(1)->id
    // ]);

    // detach all record that related with the user in the pivot table and attach the new records in the sync method parameters.
    // User::first()->companies()->sync([
    //     Company::find(3)->id,
    //     Company::find(4)->id,
    // ]);

    // $company = Company::find(6);

    // attach new record in the pivot table with out detaching the previous records , incase the record already exists dont attach that record. ( no duplicated records)
    // User::first()->companies()->sync([
    //     $company->id => [
    //         'type'  => User::LOYAL
    //     ]
    // ]);
});
