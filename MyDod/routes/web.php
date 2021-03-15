<?php

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



route::get('/login',function(){
    return view('auth.login');
});

route:: get('/',[App\Http\Controllers\CompteController::class, 'con']);

Route::get('/ConsulatationEB', function () {
    return view('EB.cons_home.home_eb_consultation');
});



Route:: get('/c_incident',function()
{
    return view ('Create_incident');
},['middleware' => 'auth']);


Route:: get('/deconnexion',[App\Http\Controllers\CompteController::class, 'dec']);

//Route pour incident
Route::get('/liste_incident',[App\Http\Controllers\incidentController::class, 'index'],['middleware' => 'auth']);
Route:: get('/create',[App\Http\Controllers\incidentController::class, 'create'],['middleware' => 'auth']);
Route::post('/liste_incident',[App\Http\Controllers\incidentController::class, 'store'],['middleware' => 'auth']);
Route::get('/liste_incident/{id}/editer_incident',[App\Http\Controllers\incidentController::class, 'edit'],['middleware' => 'auth']);
Route::put('/liste_incident/{id}',[App\Http\Controllers\incidentController::class, 'update'],['middleware' => 'auth']);
Route::delete('/liste_incident/{id}',[App\Http\Controllers\incidentController::class, 'destroy'],['middleware' => 'auth']);

Route::get('/liste_incident/{id}/details_incident',[App\Http\Controllers\incidentController::class, 'details'],['middleware' => 'auth']);







// les Routes pour EB
 

        // liste pagination des EB

route::get('/home_eb',function()
{
    return view('EB.home_eb');
});


//partie sharepoint demande_droit partie admin et user
//Demande droit
Route::get('/l_d_droit',[App\Http\Controllers\SharepointController::class, 'index'],['middleware' => 'auth']);
Route::post('/l_d_droit',[App\Http\Controllers\SharepointController::class, 'store'],['middleware' => 'auth']);
Route::delete('/l_d_droit/{id}',[App\Http\Controllers\SharepointController::class, 'destroy'],['middleware' => 'auth']);
route::get('/d_droit',function(){
    return view ('EB.sharepoint.d_droit');
},['middleware' => 'auth']);


//creation liste demande droit
Route::get('/ll_d_droit',[App\Http\Controllers\SharepointController::class, 'c_index'],['middleware' => 'auth']);
//Route:: get('/create',[App\Http\Controllers\SharepointController::class, 'c_create'],['middleware' => 'auth']);
Route::post('/ll_d_droit',[App\Http\Controllers\SharepointController::class, 'c_store'],['middleware' => 'auth']);
//Route::get('/ll_d_droit/{id}/editer_incident',[App\Http\Controllers\SharepointController::class, 'c_edit'],['middleware' => 'auth']);
//Route::put('/ll_d_droit/{id}',[App\Http\Controllers\SharepointController::class, 'c_update'],['middleware' => 'auth']);
Route::delete('/ll_d_droit/{id}',[App\Http\Controllers\SharepointController::class, 'c_destroy'],['middleware' => 'auth']);

route::get('/dd_droit',function(){
    return view ('EB.sharepoint.dd_droit');
},['middleware' => 'auth']);

        //-BI
            //* Buisinnes Intelligence

route::get('/home_bi',function()
{
    return view ('EB.BI.bisiness_in.home_bi');
},['middleware' => 'auth']);

route::get('/nv_rap',function()
{
    return view ('EB.BI.bisiness_in.nv_rap');
},['middleware' => 'auth']);

route::get('/ano_maj',function()
{
    return view ('EB.BI.bisiness_in.ano_maj');
},['middleware' => 'auth']);

Route::get('/ConsulatationEB-list-bi-rapport', function () {
    return view('EB.BI.bisiness_in.liste_bi_rapports');
});

                     //-*rapport
//Route::get('/nv_rap',[App\Http\Controllers\biController::class, 'bi_index'],['middleware' => 'auth']);
Route::post('/nv_rap',[App\Http\Controllers\biController::class, 'bi_store'],['middleware' => 'auth']);
//Route::get('/nv_rap/{id}/editer_incident',[App\Http\Controllers\biController::class, 'bi_edit'],['middleware' => 'auth']);
//Route::put('/nv_rap/{id}',[App\Http\Controllers\biController::class, 'bi_update'],['middleware' => 'auth']);
//Route::delete('/nv_rap/{id}',[App\Http\Controllers\biController::class, 'bi_destroy'],['middleware' => 'auth']);

route::get('/d',[App\Http\Controllers\biController::class, 'dw'],['middleware' => 'auth'])->name('dw');


                               
                     //-* anomalie & mis a jour
//Route::get('/ano_maj',[App\Http\Controllers\biController::class, 'bi_m_index'],['middleware' => 'auth']);
Route::post('/ano_maj',[App\Http\Controllers\biController::class, 'bi_m_store'],['middleware' => 'auth']);
//Route::get('/ano_maj/{id}/editer_incident',[App\Http\Controllers\biController::class, 'bi_m_edit'],['middleware' => 'auth']);
//Route::put('/ano_maj/{id}',[App\Http\Controllers\biController::class, 'bi_m_update'],['middleware' => 'auth']);
//Route::delete('/ano_maj/{id}',[App\Http\Controllers\biController::class, 'bi_m_destroy'],['middleware' => 'auth']);


            //* BO
route :: get('/bo_home',function(){
    return view ('EB.BI.BO.bo_home');
},['middleware' => 'auth']);

Route::get('/bo_r',function(){
    
    return view ('EB.BI.BO.bo_rap');
},['middleware' => 'auth']);

route :: get('/bo_m_r',function(){
    
    return view ('EB.BI.BO.bo_m_r');
},['middleware' => 'auth']);

            //* nv rapport

//Route::get('/bo_r',[App\Http\Controllers\biController::class, 'bo_r_index'],['middleware' => 'auth']);
Route::post('/bo_r',[App\Http\Controllers\biController::class, 'bo_r_store'],['middleware' => 'auth']);
//Route::get('/bo_r/{id}/editer_incident',[App\Http\Controllers\biController::class, 'bo_r_edit'],['middleware' => 'auth']);
//Route::put('/bo_r/{id}',[App\Http\Controllers\biController::class, 'bo_r_update'],['middleware' => 'auth']);
//Route::delete('/bo_r/{id}',[App\Http\Controllers\biController::class, 'bo_r_destroy'],['middleware' => 'auth']);

            //*modification

//Route::get('/bo_m_r',[App\Http\Controllers\biController::class, 'bo_mp_index'],['middleware' => 'auth']);
Route::post('/bo_m_r',[App\Http\Controllers\biController::class, 'bo_mp_store'],['middleware' => 'auth']);
//Route::get('/bo_m_r/{id}/editer_incident',[App\Http\Controllers\biController::class, 'bo_mp_edit'],['middleware' => 'auth']);
//Route::put('/bo_m_r/{id}',[App\Http\Controllers\biController::class, 'bo_mp_update'],['middleware' => 'auth']);
//Route::delete('/bo_m_r/{id}',[App\Http\Controllers\biController::class, 'bo_mp_destroy'],['middleware' => 'auth']);     





            //*Analyse & extraction

route :: get('/an_home',function(){
    return view ('EB.BI.An_ext.an_home');
},['middleware' => 'auth']);
route :: get('/analyse',function(){
    return view ('EB.BI.An_ext.analyse');
},['middleware' => 'auth']);
route :: get('/extraction',function(){
    return view ('EB.BI.An_ext.extraction');
},['middleware' => 'auth']);
                 //*-analyse

//Route::get('/analyse',[App\Http\Controllers\biController::class, 'analyse_index'],['middleware' => 'auth']);
Route::post('/analyse',[App\Http\Controllers\biController::class, 'analyse_store'],['middleware' => 'auth']);
//Route::get('/analyse/{id}/editer_incident',[App\Http\Controllers\biController::class, 'analyse_edit'],['middleware' => 'auth']);
//Route::put('/analyse/{id}',[App\Http\Controllers\biController::class, 'analyse_update'],['middleware' => 'auth']);
//Route::delete('/analyse/{id}',[App\Http\Controllers\biController::class, 'analyse_destroy'],['middleware' => 'auth']);

                    //*- extraction
//Route::get('/ano_maj',[App\Http\Controllers\biController::class, 'extr_index'],['middleware' => 'auth']);
Route::post('/extraction',[App\Http\Controllers\biController::class, 'extr_store'],['middleware' => 'auth']);
//Route::get('/ano_maj/{id}/editer_incident',[App\Http\Controllers\biController::class, 'extr_edit'],['middleware' => 'auth']);
//Route::put('/ano_maj/{id}',[App\Http\Controllers\biController::class, 'extr_update']);
//Route::delete('/ano_maj/{id}',[App\Http\Controllers\biController::class, 'extr_destroy'],['middleware' => 'auth']);






    //automatisation
           
        
    
route :: get('/au_home',function(){
    return view ('EB.Automatisation.au_home');
},['middleware' => 'auth']);
route :: get('/au_ano_maj',function(){
    return view ('EB.Automatisation.au_ano_maj');
},['middleware' => 'auth']);
route :: get('/process_rpa',function(){
    return view ('EB.Automatisation.process_rpa');
},['middleware' => 'auth']);


        //* RPA
//Route::get('/process_rpa',[App\Http\Controllers\automatisationController::class, 'rpa_index'],['middleware' => 'auth']);
Route::post('/process_rpa',[App\Http\Controllers\automatisationController::class, 'rpa_store'],['middleware' => 'auth']);
//Route::get('/process_rpa/{id}/editer_incident',[App\Http\Controllers\automatisationController::class, 'rpa_edit'],['middleware' => 'auth']);
//Route::put('/process_rpa/{id}',[App\Http\Controllers\automatisationController::class, 'rpa_update'],['middleware' => 'auth']);
//Route::delete('/process_rpa/{id}',[App\Http\Controllers\automatisationController::class, 'rpa_destroy'],['middleware' => 'auth']);

        //* anomalie & MAJ RPA

//Route::get('/au_ano_maj',[App\Http\Controllers\automatisationController::class, 'rpa_am_index'],['middleware' => 'auth']);
Route::post('/au_ano_maj',[App\Http\Controllers\automatisationController::class, 'rpa_am_store'],['middleware' => 'auth']);
//Route::get('/au_ano_maj/{id}/editer_incident',[App\Http\Controllers\automatisationController::class, 'rpa_am_edit'],['middleware' => 'auth']);
//Route::put('/au_ano_maj/{id}',[App\Http\Controllers\automatisationController::class, 'rpa_am_update'],['middleware' => 'auth']);
//Route::delete('/au_ano_maj/{id}',[App\Http\Controllers\automatisationController::class, 'rpa_am_destroy'],['middleware' => 'auth']);









// partie Admin












// file download

    

//route pour login et registre
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'],['middleware' => 'auth']);


// blade t && index et redirect to /t is for testing
//Route::get('/t',[App\Http\Controllers\incidentController::class, 'in'],['middleware' => 'auth']);
route::get('/t',function(){
    return view ('t');
},['middleware' => 'auth']);

route::get('/i',function(){
    return view ('index');
},['middleware' => 'auth']);
