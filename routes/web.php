<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BoardOfDirectorController;
use App\Http\Controllers\BranchResposiblesController;
use App\Http\Controllers\DepartmentResponsiblesController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MissionVisionController;
use App\Http\Controllers\PrincipalMessageController;
use App\Http\Controllers\VicePrincipalMessageController;
use App\Http\Middleware\AdminMiddleWare;
use App\Models\Institute;
use App\Models\Job;
use App\Models\jobs;
use App\Models\MissionVision;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Termwind\Components\Dd;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/practice', function () {
    return view('practice');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/delete-popup',function(){
    return view('delete-popup');
});
// Route::view('/','home');
// Route::view('/practice','practice');
// Route::view('/about','about');
// Route::view('/contact','contact');
// Route::view('/job','job');
//Controller a group data index, create, show, store, edit, update, destroy
Route::controller(JobController::class)->group(function(){
//index
Route::get('/job', 'index');
//create
Route::get('jobs/create', 'create');
//show
Route::get('/jobs/{jobs}', 'show');   
//store
Route::post('/jobs','store');
//edit
Route::get('/jobs/{jobs}/edit', 'edit');
//update
Route::patch('/jobs/{jobs}','update');
//destroy
Route::delete('/jobs/{jobs}', 'destroy');
});

//resource data index, create, show, store, edit, update, destroy
// Route::resource('jobs', JobController::class);
Route::get('admin/address/country/create', function () {
    return view('admin/address/country.create');
});
Route::post('admin/address/country', function () {
    dd(request()->all());
});

Route::middleware(['auth'])->group(function () {
    Route::middleware([AdminMiddleWare::class])->prefix('admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'view'])->name('dashboard');
        Route::get('institutes', [InstituteController::class, 'index'])->name('institutes');
        Route::get('institutes/create', [InstituteController::class, 'create'])->name('institutes.create');
        Route::post('institutes', [InstituteController::class, 'store'])->name('institutes.store');
        // Route::get('institutes/{institute}', [InstituteController::class, 'show'])->name('institutes.show');
        Route::get('institutes/{institute}/edit', [InstituteController::class, 'edit'])->name('institutes.edit');
        Route::put('institutes/{institute}', [InstituteController::class, 'update'])->name('institutes.update');
        Route::post('institutes/delete', [InstituteController::class, 'destroy'])->name('institutes.destroy');
        // Mission Vision 
        Route::get('mission_vision', [MissionVisionController::class, 'index'])->name('mission_vision');
        Route::get('about/mission_vision/create', [MissionVisionController::class, 'create'])->name('mission_vision.create');
        Route::post('mission_vision', [MissionVisionController::class, 'store'])->name('mission_vision.store');
        Route::get('mission_vision/{mission_vision}/edit', [MissionVisionController::class, 'edit'])->name('mission_vision.edit');
        Route::put('mission_vision/{mission_vision}', [MissionVisionController::class, 'update'])->name('mission_vision.update');
        Route::delete('mission_vision/{mission_vision}', [MissionVisionController::class, 'destroy'])->name('mission_vision.destroy');
        // Route::resource('mission_vision','MissionVisionController');
        // Principal Messages
        Route::get('principal_message', [PrincipalMessageController::class, 'index'])->name('principal_message');
        Route::get('about/principal_message/create', [PrincipalMessageController::class, 'create'])->name('principal_message.create');
        Route::post('principal_message', [PrincipalMessageController::class, 'store'])->name('principal_message.store');
        Route::get('principal_message/{principal_message}/edit', [PrincipalMessageController::class, 'edit'])->name('principal_message.edit');
        Route::put('principal_message/{principal_message}', [PrincipalMessageController::class, 'update'])->name('principal_message.update');
        Route::delete('principal_message/{principal_message}', [PrincipalMessageController::class, 'destroy'])->name('principal_message.destroy');
        // Vice Principal Messages
        Route::get('vice_principal_message', [VicePrincipalMessageController::class, 'index'])->name('vice_principal_message');
        Route::get('about/vice_principal_message/create', [VicePrincipalMessageController::class, 'create'])->name('vice_principal_message.create');
        Route::post('vice_principal_message', [VicePrincipalMessageController::class, 'store'])->name('vice_principal_message.store');
        Route::get('vice_principal_message/{vice_principal_message}/edit', [VicePrincipalMessageController::class, 'edit'])->name('vice_principal_message.edit');
        Route::put('vice_principal_message/{vice_principal_message}', [VicePrincipalMessageController::class, 'update'])->name('vice_principal_message.update');
        Route::delete('vice_principal_message/{vice_principal_message}', [VicePrincipalMessageController::class, 'destroy'])->name('vice_principal_message.destroy');
        // Founder Messages
        Route::get('founder', [FounderController::class, 'index'])->name('founder');
        Route::get('about/founder/create', [FounderController::class, 'create'])->name('founder.create');
        Route::post('founder', [FounderController::class, 'store'])->name('founder.store');
        Route::get('founder/{founder}/edit', [FounderController::class, 'edit'])->name('founder.edit');
        Route::put('founder/{founder}', [FounderController::class, 'update'])->name('founder.update');
        Route::delete('founder/{founder}', [FounderController::class, 'destroy'])->name('founder.destroy');
        // Founder Messages
        Route::get('founder', [FounderController::class, 'index'])->name('founder');
        Route::get('about/founder/create', [FounderController::class, 'create'])->name('founder.create');
        Route::post('founder', [FounderController::class, 'store'])->name('founder.store');
        Route::get('founder/{founder}/edit', [FounderController::class, 'edit'])->name('founder.edit');
        Route::put('founder/{founder}', [FounderController::class, 'update'])->name('founder.update');
        Route::delete('founder/{founder}', [FounderController::class, 'destroy'])->name('founder.destroy');
        // Board of Director Messages
        Route::get('board_of_director', [BoardOfDirectorController::class, 'index'])->name('board_of_director');
        Route::get('about/board_of_director/create', [BoardOfDirectorController::class, 'create'])->name('board_of_director.create');
        Route::post('board_of_director', [BoardOfDirectorController::class, 'store'])->name('board_of_director.store');
        Route::get('board_of_director/{board_of_director}/edit', [BoardOfDirectorController::class, 'edit'])->name('board_of_director.edit');
        Route::put('board_of_director/{board_of_director}', [BoardOfDirectorController::class, 'update'])->name('board_of_director.update');
        Route::delete('board_of_director/{board_of_director}', [BoardOfDirectorController::class, 'destroy'])->name('board_of_director.destroy');
        // Branch Responsibles
        Route::get('branch_responsibles', [BranchResposiblesController::class, 'index'])->name('branch_responsibles');
        Route::get('about/branch_responsibles/create', [BranchResposiblesController::class, 'create'])->name('branch_responsibles.create');
        Route::post('branch_responsibles', [BranchResposiblesController::class, 'store'])->name('branch_responsibles.store');
        Route::get('branch_responsibles/{branch_responsibles}/edit', [BranchResposiblesController::class, 'edit'])->name('branch_responsibles.edit');
        Route::put('branch_responsibles/{branch_responsibles}', [BranchResposiblesController::class, 'update'])->name('branch_responsibles.update');
        Route::delete('branch_responsibles/{branch_responsibles}', [BranchResposiblesController::class, 'destroy'])->name('branch_responsibles.destroy');
        // Branch Responsibles
        Route::get('department_responsibles', [DepartmentResponsiblesController::class, 'index'])->name('department_responsibles');
        Route::get('about/department_responsibles/create', [DepartmentResponsiblesController::class, 'create'])->name('department_responsibles.create');
        Route::post('department_responsibles', [DepartmentResponsiblesController::class, 'store'])->name('department_responsibles.store');
        Route::get('department_responsibles/{department_responsibles}/edit', [DepartmentResponsiblesController::class, 'edit'])->name('department_responsibles.edit');
        Route::put('department_responsibles/{department_responsibles}', [DepartmentResponsiblesController::class, 'update'])->name('department_responsibles.update');
        Route::delete('department_responsibles/{department_responsibles}', [DepartmentResponsiblesController::class, 'destroy'])->name('department_responsibles.destroy');
    });

    Route::get('/apply', function () {
        return view('apply_form');
    })->name('apply');

    // Store institute application data
    Route::post('/institute-apply', [InstituteController::class, 'apply'])
        ->name('institute-apply');

    // Route::resource('institutes', InstituteController::class);
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});


require __DIR__ . '/auth.php';
