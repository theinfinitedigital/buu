<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('index_user');
Route::get('/add-user', [App\Http\Controllers\UserController::class, 'add_user'])->name('add_user');
Route::post('/create/user', [App\Http\Controllers\UserController::class, 'create'])->name('create_user');
Route::get('/edit/user/{id}&{uid}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit_user');
Route::post('/update/user', [App\Http\Controllers\UserController::class, 'update'])->name('update_user');
Route::get('/del-user/user/{id}', [App\Http\Controllers\UserController::class, 'del'])->name('del_user');

Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])->name('index_role');
Route::get('/add-role', [App\Http\Controllers\RoleController::class, 'add'])->name('add_role');
Route::post('/create/role', [App\Http\Controllers\RoleController::class, 'create'])->name('create_role');
Route::get('/edit/role/{id}&{uid}', [App\Http\Controllers\RoleController::class, 'edit'])->name('edit_role');
Route::post('/update/role', [App\Http\Controllers\RoleController::class, 'update'])->name('update_role');
Route::get('/del-role/role/{id}', [App\Http\Controllers\RoleController::class, 'del'])->name('del_role');

Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('index_categories');
Route::get('/add-categories', [App\Http\Controllers\CategoriesController::class, 'add'])->name('add_categories');
Route::post('/create/categories', [App\Http\Controllers\CategoriesController::class, 'create'])->name('create_categories');
Route::get('/edit/categories/{id}&{uid}', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('edit_categories');
Route::post('/update/categories', [App\Http\Controllers\CategoriesController::class, 'update'])->name('update_categories');
Route::get('/del-categories/categories/{id}', [App\Http\Controllers\CategoriesController::class, 'del'])->name('del_categories');

Route::get('/sub-categories', [App\Http\Controllers\SubCategoriesController::class, 'index'])->name('index_sub_categories');
Route::get('/add-sub-categories', [App\Http\Controllers\SubCategoriesController::class, 'add'])->name('add_sub_categories');
Route::post('/create/sub-categories', [App\Http\Controllers\SubCategoriesController::class, 'create'])->name('create_sub_categories');
Route::get('/edit/sub-categories/{id}&{uid}', [App\Http\Controllers\SubCategoriesController::class, 'edit'])->name('edit_sub_categories');
Route::post('/update/sub-categories', [App\Http\Controllers\SubCategoriesController::class, 'update'])->name('update_sub_categories');
Route::get('/del-sub-categories/sub-categories/{id}', [App\Http\Controllers\SubCategoriesController::class, 'del'])->name('del_sub_categories');

Route::get('/general', [App\Http\Controllers\GeneralController::class, 'index'])->name('index_general');
Route::post('/update/general', [App\Http\Controllers\GeneralController::class, 'update'])->name('update_general');

Route::get('/workgroup', [App\Http\Controllers\WorkgroupController::class, 'index'])->name('index_workgroup');
Route::get('/add-workgroup', [App\Http\Controllers\WorkgroupController::class, 'add'])->name('add_workgroup');
Route::post('/create/workgroup', [App\Http\Controllers\WorkgroupController::class, 'create'])->name('create_workgroup');
Route::get('/edit/workgroup/{id}&{uid}', [App\Http\Controllers\WorkgroupController::class, 'edit'])->name('edit_workgroup');
Route::post('/update/workgroup', [App\Http\Controllers\WorkgroupController::class, 'update'])->name('update_workgroup');
Route::get('/del-workgroup/workgroup/{id}', [App\Http\Controllers\WorkgroupController::class, 'del'])->name('del_workgroup');

Route::get('/department', [App\Http\Controllers\DepartmentController::class, 'index'])->name('index_department');
Route::get('/add-department', [App\Http\Controllers\DepartmentController::class, 'add'])->name('add_department');
Route::post('/create/department', [App\Http\Controllers\DepartmentController::class, 'create'])->name('create_department');
Route::get('/edit/department/{id}&{uid}', [App\Http\Controllers\DepartmentController::class, 'edit'])->name('edit_department');
Route::post('/update/department', [App\Http\Controllers\DepartmentController::class, 'update'])->name('update_department');
Route::get('/del-department/department/{id}', [App\Http\Controllers\DepartmentController::class, 'del'])->name('del_department');

Route::get('/personnel', [App\Http\Controllers\PersonnelController::class, 'index'])->name('index_personnel');
Route::get('/add-personnel', [App\Http\Controllers\PersonnelController::class, 'add'])->name('add_personnel');
Route::post('/create/personnel', [App\Http\Controllers\PersonnelController::class, 'create'])->name('create_personnel');
Route::get('/edit/personnel/{id}&{uid}', [App\Http\Controllers\PersonnelController::class, 'edit'])->name('edit_personnel');
Route::post('/update/personnel', [App\Http\Controllers\PersonnelController::class, 'update'])->name('update_personnel');
Route::get('/del-personnel/personnel/{id}', [App\Http\Controllers\PersonnelController::class, 'del'])->name('del_personnel');

Route::get('/index-banner', [App\Http\Controllers\IndexBannerController::class, 'index'])->name('index_banner');
Route::get('/add-index_banner', [App\Http\Controllers\IndexBannerController::class, 'add'])->name('add_index_banner');
Route::post('/create/index_banner', [App\Http\Controllers\IndexBannerController::class, 'create'])->name('create_index_banner');
Route::get('/edit/index_banner/{id}&{uid}', [App\Http\Controllers\IndexBannerController::class, 'edit'])->name('edit_index_banner');
Route::post('/update/index_banner', [App\Http\Controllers\IndexBannerController::class, 'update'])->name('update_index_banner');
Route::get('/del-index_banner/index_banner/{id}', [App\Http\Controllers\IndexBannerController::class, 'del'])->name('del_index_banner');


Route::get('/research', [App\Http\Controllers\ResearchController::class, 'index'])->name('index_research');
Route::get('/add-research', [App\Http\Controllers\ResearchController::class, 'add'])->name('add_research');
Route::post('/create/research', [App\Http\Controllers\ResearchController::class, 'create'])->name('create_research');
Route::get('/edit/research/{id}&{uid}', [App\Http\Controllers\ResearchController::class, 'edit'])->name('edit_research');
Route::post('/update/research', [App\Http\Controllers\ResearchController::class, 'update'])->name('update_research');
Route::get('/del-research/research/{id}', [App\Http\Controllers\ResearchController::class, 'del'])->name('del_research');

