<?php

namespace QOA\Http\Controllers\Catechist;

use QOA\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use QOA\Http\Requests;
use Carbon\Carbon; 
use Session;
use Auth;
use QOA\User;
use Illuminate\Contracts\Auth\Guard;


class CatechistController extends Controller
{
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    //GET HOME PAGE
    public function getHome()
    {
        return view('templates.catechist.home');
    }


    public function searchCandidate(Request $request){

        $query = $request->input('search');
        $patient = DB::table('patients')->where('identification', 'LIKE', '%' . $query . '%')
                                        ->orWhere('medId', 'LIKE', '%' . $query . '%')
                                        ->orWhere('firstName', 'LIKE', '%' . $query . '%')
                                        ->orWhere('middleName', 'LIKE', '%' . $query . '%')
                                        ->orWhere('lastName', 'LIKE', '%' . $query . '%')
                                        ->orWhere('dateOfBirth', 'LIKE', '%' . $query . '%')
                                        ->orWhere('estimatedAge', 'LIKE', '%' . $query . '%')
                                        ->orWhere('gender', 'LIKE', '%' . $query . '%')
                                        ->orWhere('patientPhone', 'LIKE', '%' . $query . '%')
                                        ->orWhere('kinPhone', 'LIKE', '%' . $query . '%')
                                        ->orWhere('email', 'LIKE', '%' . $query . '%')
                                        ->orWhere('residence', 'LIKE', '%' . $query . '%')
                                        ->orWhere('county', 'LIKE', '%' . $query . '%')
                                        ->paginate(10);
        $appointments = count(Appointment::all());
        $services = DB::table('services')->get();

        Session::flash('info', 'There were ' . count($patient) .' search results for "'. $query . '".' );

        return view('templates.reception.patient-results', compact('patient', 'query','appointments', 'services'));
    }

    public function searchAppointment(Request $request){

        $query = $request->input('search');
        $appointmentsAll = DB::table('appointments')->where('patient', 'LIKE', '%' . $query . '%')
                                        ->orWhere('serviceType', 'LIKE', '%' . $query . '%')
                                        ->orWhere('createdBy', 'LIKE', '%' . $query . '%')
                                        ->orWhere('created_at', 'LIKE', '%' . $query . '%')
                                        ->paginate(10);
        $appointments = count(Appointment::all());

        Session::flash('info-patient', 'There were ' . count($appointmentsAll) .' search results for "'. $query . '".' );

        return view('templates.reception.appointments', compact('appointmentsAll','appointments', 'query'));
    }
}
