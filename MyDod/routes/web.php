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

route::get('/auth',function(){
    return view('auth.register');
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
route::get('/d_droit',function()
{
    return view ('EB.sharepoint.d_droit');
},['middleware' => 'auth']);
Route::get('/l_d_droit',[App\Http\Controllers\SharepointController::class, 'index'],['middleware' => 'auth']);
Route::post('/l_d_droit',[App\Http\Controllers\SharepointController::class, 'store'],['middleware' => 'auth']);
Route::get('/l_d_droit/{id}/editer_l_d_droit',[App\Http\Controllers\SharepointController::class, 'edit'],['middleware' => 'auth']);
Route::put('/l_d_droit/{id}',[App\Http\Controllers\SharepointController::class, 'update'],['middleware' => 'auth']);
Route::delete('/l_d_droit/{id}',[App\Http\Controllers\SharepointController::class, 'destroy'],['middleware' => 'auth']);
Route::get('/l_d_droit/{id}/details_l_d_droit',[App\Http\Controllers\SharepointController::class, 'details'],['middleware' => 'auth']);


//Creation liste demande droit
Route::get('/ll_d_droit',[App\Http\Controllers\SharepointController::class, 'c_index'],['middleware' => 'auth']);
Route::post('/ll_d_droit',[App\Http\Controllers\SharepointController::class, 'c_store'],['middleware' => 'auth']);
Route::get('/ll_d_droit/{id}/editer_ll_d_droit',[App\Http\Controllers\SharepointController::class, 'c_edit'],['middleware' => 'auth']);
Route::put('/ll_d_droit/{id}',[App\Http\Controllers\SharepointController::class, 'c_update'],['middleware' => 'auth']);
Route::delete('/ll_d_droit/{id}',[App\Http\Controllers\SharepointController::class, 'c_destroy'],['middleware' => 'auth']);
Route::get('/ll_d_droit/{id}/details_ll_d_droit',[App\Http\Controllers\SharepointController::class, 'c_details'],['middleware' => 'auth']);

route::get('/dd_droit',function()
{
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

Route::get('/liste_bi_rapports', function () {
    return view('EB.BI.bisiness_in.liste_bi_rapports');
});
Route::get('/liste_ano_maj', function () {
    return view('EB.BI.bisiness_in.liste_ano_maj');
});

                     //-*rapport
Route::get('/liste_bi_rapports',[App\Http\Controllers\biController::class, 'bi_index'],['middleware' => 'auth']);
Route::post('/nv_rap',[App\Http\Controllers\biController::class, 'bi_store'],['middleware' => 'auth']);
Route::get('/liste_bi_rapports/{id}/editer_bi_rapports',[App\Http\Controllers\biController::class, 'bi_edit'],['middleware' => 'auth']);
Route::put('/liste_bi_rapports/{id}',[App\Http\Controllers\biController::class, 'bi_update'],['middleware' => 'auth']);
Route::delete('/liste_bi_rapports/{id}',[App\Http\Controllers\biController::class, 'bi_destroy'],['middleware' => 'auth']);

Route::get('/liste_bi_rapports/{id}/details_bi_rapports',[App\Http\Controllers\biController::class, 'bi_details'],['middleware' => 'auth']);
             
// download file
route::get('/cahier_charge_bi',[App\Http\Controllers\biController::class, 'dw'],['middleware' => 'auth'])->name('cahier_charge_bi');


                               
                     //-* anomalie & mis a jour
Route::get('/liste_ano_maj',[App\Http\Controllers\biController::class, 'bi_am_index'],['middleware' => 'auth']);
Route::post('/ano_maj',[App\Http\Controllers\biController::class, 'bi_am_store'],['middleware' => 'auth']);
Route::get('/liste_ano_maj/{id}/editer_ano_maj',[App\Http\Controllers\biController::class, 'bi_am_edit'],['middleware' => 'auth']);
Route::put('/liste_ano_maj/{id}',[App\Http\Controllers\biController::class, 'bi_am_update'],['middleware' => 'auth']);
Route::delete('/liste_ano_maj/{id}',[App\Http\Controllers\biController::class, 'bi_am_destroy'],['middleware' => 'auth']);
Route::get('/liste_ano_maj/{id}/details_ano_maj',[App\Http\Controllers\biController::class, 'bi_am_details'],['middleware' => 'auth']);


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

            //* nv rapport BO

Route::get('/liste_bo_rap',[App\Http\Controllers\biController::class, 'bo_r_index'],['middleware' => 'auth']);
Route::post('/bo_r',[App\Http\Controllers\biController::class, 'bo_r_store'],['middleware' => 'auth']);
Route::get('/liste_bo_rap/{id}/editer_bo_rap',[App\Http\Controllers\biController::class, 'bo_r_edit'],['middleware' => 'auth']);
Route::put('/liste_bo_rap/{id}',[App\Http\Controllers\biController::class, 'bo_r_update'],['middleware' => 'auth']);
Route::delete('/liste_bo_rap/{id}',[App\Http\Controllers\biController::class, 'bo_r_destroy'],['middleware' => 'auth']);
Route::get('/liste_bo_rap/{id}/details_bo_rap',[App\Http\Controllers\biController::class, 'bo_r_details'],['middleware' => 'auth']);

            //*modification

Route::get('/liste_bo_r',[App\Http\Controllers\biController::class, 'bo_mp_index'],['middleware' => 'auth']);
Route::post('/bo_m_r',[App\Http\Controllers\biController::class, 'bo_mp_store'],['middleware' => 'auth']);
Route::get('/liste_bo_r/{id}/editer_bo_r',[App\Http\Controllers\biController::class, 'bo_mp_edit'],['middleware' => 'auth']);
Route::put('/liste_bo_r/{id}',[App\Http\Controllers\biController::class, 'bo_mp_update'],['middleware' => 'auth']);
Route::delete('/liste_bo_r/{id}',[App\Http\Controllers\biController::class, 'bo_mp_destroy'],['middleware' => 'auth']);     
Route::get('/liste_bo_r/{id}/details_bo_r',[App\Http\Controllers\biController::class, 'bo_mp_details'],['middleware' => 'auth']);




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

Route::get('/liste_analyse',[App\Http\Controllers\biController::class, 'analyse_index'],['middleware' => 'auth']);
Route::post('/analyse',[App\Http\Controllers\biController::class, 'analyse_store'],['middleware' => 'auth']);
Route::get('/liste_analyse/{id}/editer_analyse',[App\Http\Controllers\biController::class, 'analyse_edit'],['middleware' => 'auth']);
Route::put('/liste_analyse/{id}',[App\Http\Controllers\biController::class, 'analyse_update'],['middleware' => 'auth']);
Route::delete('/liste_analyse/{id}',[App\Http\Controllers\biController::class, 'analyse_destroy'],['middleware' => 'auth']);
Route::get('/liste_analyse/{id}/details_analyse',[App\Http\Controllers\biController::class, 'analyse_details'],['middleware' => 'auth']);


                    //*- extraction
Route::get('/liste_extraction',[App\Http\Controllers\biController::class, 'extr_index'],['middleware' => 'auth']);
Route::post('/extraction',[App\Http\Controllers\biController::class, 'extr_store'],['middleware' => 'auth']);
Route::get('/liste_extraction/{id}/editer_extraction',[App\Http\Controllers\biController::class, 'extr_edit'],['middleware' => 'auth']);
Route::put('/liste_extraction/{id}',[App\Http\Controllers\biController::class, 'extr_update']);
Route::delete('/liste_extraction/{id}',[App\Http\Controllers\biController::class, 'extr_destroy'],['middleware' => 'auth']);
Route::get('/liste_extraction/{id}/details_extraction',[App\Http\Controllers\biController::class, 'extr_details'],['middleware' => 'auth']);



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
Route::get('/liste_process_rpa',[App\Http\Controllers\automatisationController::class, 'rpa_index'],['middleware' => 'auth']);
Route::post('/process_rpa',[App\Http\Controllers\automatisationController::class, 'rpa_store'],['middleware' => 'auth']);
Route::get('/liste_process_rpa/{id}/editer_process_rpa',[App\Http\Controllers\automatisationController::class, 'rpa_edit'],['middleware' => 'auth']);
Route::put('/liste_process_rpa/{id}',[App\Http\Controllers\automatisationController::class, 'rpa_update'],['middleware' => 'auth']);
Route::delete('/liste_process_rpa/{id}',[App\Http\Controllers\automatisationController::class, 'rpa_destroy'],['middleware' => 'auth']);
Route::get('/liste_process_rpa/{id}/details_process_rpa',[App\Http\Controllers\automatisationController::class, 'rpa_details'],['middleware' => 'auth']);


        //* anomalie & MAJ RPA

Route::get('/liste_au_ano_maj',[App\Http\Controllers\automatisationController::class, 'rpa_am_index'],['middleware' => 'auth']);
Route::post('/au_ano_maj',[App\Http\Controllers\automatisationController::class, 'rpa_am_store'],['middleware' => 'auth']);
Route::get('/liste_au_ano_maj/{id}/editer_au_ano_maj',[App\Http\Controllers\automatisationController::class, 'rpa_am_edit'],['middleware' => 'auth']);
Route::put('/liste_au_ano_maj/{id}',[App\Http\Controllers\automatisationController::class, 'rpa_am_update'],['middleware' => 'auth']);
Route::delete('/liste_au_ano_maj/{id}',[App\Http\Controllers\automatisationController::class, 'rpa_am_destroy'],['middleware' => 'auth']);
Route::get('/liste_au_ano_maj/{id}/details_au_ano_maj',[App\Http\Controllers\automatisationController::class, 'rpa_am_details'],['middleware' => 'auth']);









// partie Admin



Route::get('/liste_total',[App\Http\Controllers\adminController::class, 'm_demande'],['middleware' => 'auth']);

Route::get('/ms_liste',[App\Http\Controllers\adminController::class, 'demande'],['middleware' => 'auth']);

// incident
Route::get('/in_list',[App\Http\Controllers\adminController::class, 'in_demande'],['middleware' => 'auth']);








    

//route pour login et registre
Auth::routes();

Route::post('/auth', [App\Http\Controllers\CompteController::class, 'auth'],['middleware' => 'auth']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'],['middleware' => 'auth']);


// blade t && index et redirect to /t is for testing
//Route::get('/t',[App\Http\Controllers\incidentController::class, 'in'],['middleware' => 'auth']);
route::get('/t',function(){
   return view ('t');
},['middleware' => 'auth']);

route::get('/i',function(){
    return view ('index');
},['middleware' => 'auth']);
