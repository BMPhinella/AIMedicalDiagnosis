<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/get-all-patient','ApiController@getAllPatients');
Route::get('/get-all-visits','visitsController@getAllVisits');
Route::get('/get-all-appointments','appointmentsController@getAllAppointments');
Route::get('/get-all-diseases','diseasesController@getAllDiseases');
Route::get('/get-all-clinicFindings','clinicFindingsController@getAllClinicFindings');
Route::get('/get-all-medicalPractitioners','medicalPractitionersController@getAllMedicalPractitioners');
Route::get('/get-permissions','permissionsController@getPermissions');
Route::get('/get-roles','rolesController@getRoles');
Route::get('/get-all-ageGroup','ageGroupController@getAllAgeGroup');
Route::get('/get-all-treatment','treatmentController@getAllTreatment');
Route::get('/get-all-ageGroupTreatment','ageGroupTreatmentController@getAllAgeGroupTreatment');
Route::get('/get-all-diseasesManagement','diseasesManagementController@getDiseasesManagement');
Route::get('/get-all-diseasesClinicFindings','diseasesClinicFindingsController@getAllDiseasesClinicFindings');
Route::get('/get-all-diseasesTreatment','diseasesTreatmentController@getAllDiseasesTreatment');
Route::get('/get-all-patientsDiseases','patientsDiseasesController@getPatientsDiseases');
Route::get('/get-all-patientsClinicFindings','patientsClinicFindingsController@getAllPatientsClinicFindings');
Route::get('/get-all-management','managementController@getAllManagement');
Route::get('/get-clinical-findings/{patient_id}','patientsClinicFindingsController@getClinicalFindings');

