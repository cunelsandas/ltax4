<?php

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

Route::get('/paytaxland/{id}', 'Paytaxlands@index');
Route::post('uploadfileland','Paytaxlands@upload');
Route::post('confirmland','Paytaxlands@confirmland');

Route::get('/paytaxcondo/{id}', 'Paytaxcondos@index');
Route::post('uploadfilecondo','Paytaxcondos@upload');
Route::post('confirmcondo','Paytaxcondos@confirmcondo');


Route::get('/paytaxbuild/{id}', 'Paytaxbuilds@index');
Route::post('uploadfilebuild','Paytaxbuilds@upload');
Route::post('confirmbuild','Paytaxbuilds@confirmbuild');

Route::get('/paytaxsign/{id}', 'Paytaxsigns@index');
Route::post('uploadfilesign','Paytaxsigns@upload');
Route::post('confirmsign','Paytaxsigns@confirmsign');

Route::get('/cancel', function () {           return view('cancel'); });

Route::group(['middleware' => ['get.menu']], function () {
    Route::get('/homepage', function () {           return view('dashboard.homepage'); });

    Route::group(['middleware' => ['role:user']], function () {
        Route::get('/colors', function () {     return view('dashboard.colors'); });
        Route::get('/typography', function () { return view('dashboard.typography'); });
        Route::get('/charts', function () {     return view('dashboard.charts'); });
        Route::get('/widgets', function () {    return view('dashboard.widgets'); });
        Route::get('/404', function () {        return view('dashboard.404'); });
        Route::get('/500', function () {        return view('dashboard.500'); });
        Route::prefix('base')->group(function () {
            Route::get('/breadcrumb', function(){   return view('dashboard.base.breadcrumb'); });
            Route::get('/cards', function(){        return view('dashboard.base.cards'); });
            Route::get('/carousel', function(){     return view('dashboard.base.carousel'); });
            Route::get('/collapse', function(){     return view('dashboard.base.collapse'); });

            Route::get('/forms', function(){        return view('dashboard.base.forms'); });
            Route::get('/jumbotron', function(){    return view('dashboard.base.jumbotron'); });
            Route::get('/list-group', function(){   return view('dashboard.base.list-group'); });
            Route::get('/navs', function(){         return view('dashboard.base.navs'); });

            Route::get('/pagination', function(){   return view('dashboard.base.pagination'); });
            Route::get('/popovers', function(){     return view('dashboard.base.popovers'); });
            Route::get('/progress', function(){     return view('dashboard.base.progress'); });
            Route::get('/scrollspy', function(){    return view('dashboard.base.scrollspy'); });

            Route::get('/switches', function(){     return view('dashboard.base.switches'); });
            Route::get('/tables', function () {     return view('dashboard.base.tables'); });
            Route::get('/tabs', function () {       return view('dashboard.base.tabs'); });
            Route::get('/tooltips', function () {   return view('dashboard.base.tooltips'); });
        });
        Route::prefix('buttons')->group(function () {
            Route::get('/buttons', function(){          return view('dashboard.buttons.buttons'); });
            Route::get('/button-group', function(){     return view('dashboard.buttons.button-group'); });
            Route::get('/dropdowns', function(){        return view('dashboard.buttons.dropdowns'); });
            Route::get('/brand-buttons', function(){    return view('dashboard.buttons.brand-buttons'); });
        });
        Route::prefix('icon')->group(function () {  // word: "icons" - not working as part of adress
            Route::get('/coreui-icons', function(){         return view('dashboard.icons.coreui-icons'); });
            Route::get('/flags', function(){                return view('dashboard.icons.flags'); });
            Route::get('/brands', function(){               return view('dashboard.icons.brands'); });
        });
        Route::prefix('notifications')->group(function () {
            Route::get('/alerts', function(){   return view('dashboard.notifications.alerts'); });
            Route::get('/badge', function(){    return view('dashboard.notifications.badge'); });
            Route::get('/modals', function(){   return view('dashboard.notifications.modals'); });
        });
        Route::resource('notes', 'NotesController');
        Route::resource('dashboards', 'DashboardsController');

        Route::resource('paytaxs', 'PaytaxsController');
        Route::post('confirmbackland','PaytaxsController@confirmbackland');
        Route::post('confirmbackbuild','PaytaxsController@confirmbackbuild');
        Route::post('confirmbacksign','PaytaxsController@confirmbacksign');


        Route::resource('landtaxs', 'LandtaxsController');
        Route::resource('buildtaxs', 'BuildtaxsController');
        Route::resource('signtaxs', 'SigntaxsController');
        Route::resource('searchinfo', 'SearchinfoController');
        Route::resource('bankaccount', 'BankaccountsController');
        Route::post('uploadbankaccount','BankaccountsController@upload');

        Route::resource('requesteditinfo', 'RequesteditinfoController');

        Route::get('reports/{id}/pds1', 'ReportsController@print_pds1');
        Route::get('reports/pds1', 'ReportsController@index1');

        Route::get('reports/{id}/pds2', function(){          return view('dashboard.reports.print_pds2'); });
        Route::get('reports/pds2', 'ReportsController@index2');

        Route::get('reports/{id}/pds3', 'ReportsController@print_pds3');
        Route::get('reports/pds3', 'ReportsController@index3');

        Route::get('reports/{id}/pds3in', 'ReportsController@print_inpds3');

        Route::get('reports/{id}/pds4', 'ReportsController@print_pds4');
        Route::get('reports/pds4', 'ReportsController@index4');

        Route::get('reports/{id}/pds4in', 'ReportsController@print_inpds4');

        Route::get('reports/{id}/pds6', 'ReportsController@print_pds6');
        Route::get('reports/pds6', 'ReportsController@index6');

        Route::get('reports/{id}/pds7', 'ReportsController@print_pds7');
        Route::get('reports/pds7', 'ReportsController@index7');

        Route::get('reports/{id}/pds8', 'ReportsController@print_pds8');
        Route::get('reports/pds8', 'ReportsController@index8');


        Route::get('reports/{id}/pp1', 'ReportsController@print_pp1');
        Route::get('reports/pp1', 'ReportsController@indexpp1');

        Route::get('reports/{id}/pp3', 'ReportsController@print_pp3');
        Route::get('reports/pp3', 'ReportsController@indexpp3');

        Route::get('reports/{id}/namepayland', 'ReportsController@print_namepayland');
        Route::get('reports/namepayland', 'ReportsController@namepayland');

        Route::get('reports/{id}/namepaybuild', 'ReportsController@print_namepaybuild');
        Route::get('reports/namepaybuild', 'ReportsController@namepaybuild');

        Route::get('reports/{id}/namepaysign', 'ReportsController@print_namepaysign');
        Route::get('reports/namepaysign', 'ReportsController@namepaysign');

        Route::get('reports/{id}/letter', 'ReportsController@print_letter');
        Route::get('reports/letter', 'ReportsController@letter');


    });
    Auth::routes();

    Route::resource('resource/{table}/resource', 'ResourceController')->names([
        'index'     => 'resource.index',
        'create'    => 'resource.create',
        'store'     => 'resource.store',
        'show'      => 'resource.show',
        'edit'      => 'resource.edit',
        'update'    => 'resource.update',
        'destroy'   => 'resource.destroy'
    ]);

    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('bread',  'BreadController');   //create BREAD (resource)
        Route::resource('users',        'UsersController')->except( ['create', 'store'] );
        Route::resource('roles',        'RolesController');
        Route::resource('mail',        'MailController');
        Route::get('prepareSend/{id}',        'MailController@prepareSend')->name('prepareSend');
        Route::post('mailSend/{id}',        'MailController@send')->name('mailSend');
        Route::get('/roles/move/move-up',      'RolesController@moveUp')->name('roles.up');
        Route::get('/roles/move/move-down',    'RolesController@moveDown')->name('roles.down');
        Route::prefix('menu/element')->group(function () {
            Route::get('/',             'MenuElementController@index')->name('menu.index');
            Route::get('/move-up',      'MenuElementController@moveUp')->name('menu.up');
            Route::get('/move-down',    'MenuElementController@moveDown')->name('menu.down');
            Route::get('/create',       'MenuElementController@create')->name('menu.create');
            Route::post('/store',       'MenuElementController@store')->name('menu.store');
            Route::get('/get-parents',  'MenuElementController@getParents');
            Route::get('/edit',         'MenuElementController@edit')->name('menu.edit');
            Route::post('/update',      'MenuElementController@update')->name('menu.update');
            Route::get('/show',         'MenuElementController@show')->name('menu.show');
            Route::get('/delete',       'MenuElementController@delete')->name('menu.delete');
        });
        Route::prefix('menu/menu')->group(function () {
            Route::get('/',         'MenuController@index')->name('menu.menu.index');
            Route::get('/create',   'MenuController@create')->name('menu.menu.create');
            Route::post('/store',   'MenuController@store')->name('menu.menu.store');
            Route::get('/edit',     'MenuController@edit')->name('menu.menu.edit');
            Route::post('/update',  'MenuController@update')->name('menu.menu.update');
            Route::get('/delete',   'MenuController@delete')->name('menu.menu.delete');
        });
        Route::prefix('media')->group(function () {
            Route::get('/',                 'MediaController@index')->name('media.folder.index');
            Route::get('/folder/store',     'MediaController@folderAdd')->name('media.folder.add');
            Route::post('/folder/update',   'MediaController@folderUpdate')->name('media.folder.update');
            Route::get('/folder',           'MediaController@folder')->name('media.folder');
            Route::post('/folder/move',     'MediaController@folderMove')->name('media.folder.move');
            Route::post('/folder/delete',   'MediaController@folderDelete')->name('media.folder.delete');;

            Route::post('/file/store',      'MediaController@fileAdd')->name('media.file.add');
            Route::get('/file',             'MediaController@file');
            Route::post('/file/delete',     'MediaController@fileDelete')->name('media.file.delete');
            Route::post('/file/update',     'MediaController@fileUpdate')->name('media.file.update');
            Route::post('/file/move',       'MediaController@fileMove')->name('media.file.move');
            Route::post('/file/cropp',      'MediaController@cropp');
            Route::get('/file/copy',        'MediaController@fileCopy')->name('media.file.copy');
        });
    });
});
Route::get('/checktax', function () {
    \Illuminate\Support\Facades\Auth::guard('lands')->logout();
    \Illuminate\Support\Facades\Auth::guard('bus')->logout();
    \Illuminate\Support\Facades\Auth::guard('signs')->logout();
    \Illuminate\Support\Facades\Auth::guard('condo')->logout();
    return view('checktax');
});

Route::get('/', function () {
    \Illuminate\Support\Facades\Auth::guard('lands')->logout();
    \Illuminate\Support\Facades\Auth::guard('bus')->logout();
    \Illuminate\Support\Facades\Auth::guard('signs')->logout();
    \Illuminate\Support\Facades\Auth::guard('condo')->logout();
    return view('checktax');
});

Route::name('landcheck.')->prefix('landcheck')->group(function () {
    Route::get('', 'LandcheckController@LandcheckIndex')->name('login');
    Route::post('', 'LandcheckController@LandcheckLogin')->name('landchecklogin');
});

Route::name('signcheck.')->prefix('signcheck')->group(function () {
    Route::get('', 'SigncheckController@SigncheckIndex')->name('login');
    Route::post('', 'SigncheckController@SigncheckLogin')->name('signchecklogin');
});

Route::name('bucheck.')->prefix('bucheck')->group(function () {
    Route::get('', 'BucheckController@BucheckIndex')->name('login');
    Route::post('', 'BucheckController@BucheckLogin')->name('buchecklogin');
});

Route::name('condocheck.')->prefix('condocheck')->group(function () {
    Route::get('', 'CondocheckController@CondocheckIndex')->name('login');
    Route::post('', 'CondocheckController@CondocheckLogin')->name('condochecklogin');
});


Route::get('logout', 'CustomLogin\LoginController@logout')->name('logout');

Route::resource('/pull', 'PulldataController');

Route::get('/getdate', 'PulldataController@getdate');

Route::get('/land', 'LandController@index')->name('land')->middleware('lands');
Route::get('/land/{id}', 'LandController@index')->name('land.confirm')->middleware('lands');
Route::get('land/pds3/{id}', 'LandController@print_pds3')->middleware('lands');
Route::get('/land/editinfo/{id}','LandController@editland')->middleware('lands');
Route::get('land/printformeditrequest/{id}', 'LandController@print_editinfoland_request')->middleware('lands');
Route::post('/land/store', 'LandController@store')->name('land.store')->middleware('lands');;

Route::get('/condo', 'CondoController@index')->name('condo')->middleware('condo');
Route::get('condo/pds4/{id}', 'CondoController@print_pds4')->middleware('condo');

Route::get('/sign', 'SignController@index')->name('sign')->middleware('signs');

Route::get('/bu', 'BuController@index')->name('bu')->middleware('bus');
