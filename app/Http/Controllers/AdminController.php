<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
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
        $appoint = Appointment::all();
        return view('admin.showappointment', compact('appoint'));
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
}
