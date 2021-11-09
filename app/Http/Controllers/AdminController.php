<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Notification;
use App\Notifications\Notificacion;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function addview(){
        if(Auth::id() && Auth::user()->usertype==1){
            return view('admin.add_doctor');
        }else if(Auth::id() && Auth::user()->usertype!=1){
            return redirect()->back();
        }else{
            return redirect('login');
        }
    }

    public function upload(Request $request){
        $doctor = new Doctor;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        
        $request->file->move("doctorimage", $imagename);

        $doctor->image=$imagename;

        $doctor->name=$request->name;

        $doctor->phone=$request->number;

        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;

        $doctor->save();

        return redirect()->back()->with('message','Doctor agregado satisfactoriamente');

    }

    public function showappointment(){

        if(Auth::id() && Auth::user()->usertype==1){
            $appoint = Appointment::all();
            return view('admin.showappointment', compact('appoint'));
        }else if(Auth::id() && Auth::user()->usertype!=1){
            return redirect()->back();
        }else{
            return redirect('login');
        }
    }

    public function approve_appointment($id){
        $appoint = Appointment::find($id);
        $appoint->status = 'Aprobada';
        $appoint->save();

        return redirect()->back();
    }


    public function showdoctor(){
        $doctors = Doctor::all();
        return view('admin.showdoctor', compact('doctors'));
    }

    public function delete_doctor($id){
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect()->back();
    }

    public function update_doctor($id){
        $doctor = Doctor::find($id);
        return view('admin.update_doctor', compact('doctor'));
    }

    public function edit_doctor(Request $request, $id){
        $doctor = Doctor::find($id);
        
        $image = $request->file;

        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            
            $request->file->move("doctorimage", $imagename);

            $doctor->image=$imagename;
        }
        $doctor->name=$request->name;

        $doctor->phone=$request->number;

        $doctor->room=$request->room;

        if($request->speciality){
            $doctor->speciality=$request->speciality;
        }

        $doctor->save();

        return redirect()->back()->with('message','Información actualizada correctamente');
    }

    public function emailview($id){
        $data = Appointment::find($id);
        return view('admin.email_view', compact('data'));
    }
    public function sendemail($id, Request $request){
        $data = Appointment::find($id);

        $details=[
            'saludo' => $request->saludo,
            'cuerpo' => $request->cuerpo,
            'textodeaccion' => $request->textodeaccion,
            'urldeaccion' => $request->urldeaccion,
            'pie' => $request->pie
        ];

        Notification::send($data, new Notificacion($details));


        return redirect()->back()->with('message', 'Email enviado satisfactoriamente.');
    }
}
