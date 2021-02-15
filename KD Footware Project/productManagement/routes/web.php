<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ProductManagement', 'pagescontroller@ProductManagement'); 

Route::get('/prmodels', function () {
    $data=App\productModel::all();
    return view('prmodels')->with('prmodels', $data);
});

Route::get('/prmodelAdd', function () {
    return view('newM');
});
Route::get('/productModel/edit/{id}', 'productscontroller@editdata');

Route::post('prmodels/update/{id}', 'productscontroller@update')->name('update');

Route::post('/saveModel', 'productscontroller@store');




Route::get('/orders', function () {
    $data=App\Orders::all();
    return view('orders')->with('orders', $data);
});

Route::get('/supplierOrder', function () {
    return view('supplierOrder');
});


Route::get('/Orders/process/{id}', 'processcontroller@processdata');

Route::get('/markascompleted/{id}', 'ordercontroller@updateAsCompleted');
Route::get('/markasnotcompleted/{id}', 'ordercontroller@updateAsNotCompleted');

Route::post('/saveSupplierOrder', 'suppliercontroller@addOrder');
   




Route::get('/machines', function () {
    $data=App\machine::all();
    return view('machines')->with('machines', $data);
});

Route::get('/machine/edit/{id}', 'umalicontroller@editdata');

Route::post('machine/update/{id}', 'umalicontroller@update')->name('update');

Route::post('/saveMachine', 'umalicontroller@store');




Route::get('/raw_materials', function () {
    $data=App\RawMaterial::all();
    return view('raw_materials')->with('raw_materials', $data);
});

Route::get('/RawMaterial/edit/{id}', 'shakyacontroller@editdata');

//Route::post('/machRawMaterialine/update/{id}', 'shakyacontroller@updatedata');

Route::post('/update/{id}', 'shakyacontroller@update')->name('update');

Route::post('/saveRawmaterial', 'shakyacontroller@storeRawmaterials');




Route::get('/process', 'processcontroller@processdata');
    //$pr = DB::all();
    //return view('process')->with('prmodels', $pr);

