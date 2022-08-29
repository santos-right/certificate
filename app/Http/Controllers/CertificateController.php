<?php

namespace App\Http\Controllers;

use App\models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        $certificates = Certificate::latest()->filter(request(['search']))->get();
        return view('certificate', [
            'certificates' => $certificates,
        ]);
    }

    public function store(Request $request)
    {
        $certificateFields = $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            // 'email' => ['required|max:255', Rule::unique('certificates', 'email')],
            'email' => 'required|max:255',
            'course' => 'required|max:255',
            'date' => 'required|max:255',
            'image' => 'required:jpg.jpeg.png',
        ]);
        

        $certificateFields['certificate_no'] = random_int(1000000, 999999999999999);

        if($request->hasFile('image')) {
            $certificateFields['image'] = $request->file('image')->store('certificates', 'public');
        }

        Certificate::create($certificateFields);

        
        
        return redirect('home')->with('message', 'Certificate created successfully');
    }

    public function edit(Certificate $certificate)
    {
        // $certificate = Certificate::find($certificate_id);
        return view('edit-certificate', [
            'certificate' => $certificate,
        ]);
    }

    public function update(Request $request, Certificate $certificate)
    {
        $certificateFields = $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            // 'email' => ['required|max:255', Rule::unique('certificates', 'email')],
            'email' => 'required|max:255',
            'course' => 'required|max:255',
            'date' => 'required|max:255',
            'image' => 'required:jpg.jpeg.png',
        ]);
        

        $certificateFields['certificate_no'] = random_int(1000000, 999999999999999);

        if($request->hasFile('image')) {
            $certificateFields['image'] = $request->file('image')->store('certificates', 'public');
        }

        $certificate->update($certificateFields);
        
        return redirect('home')->with('message', 'Certificate Updated Successfully');
    }

    public function destroy(Certificate $certificate)
    {
        $certificate->delete();

        return redirect('home')->with('message', 'Certificate Deleted Successfully');
    }
    
    // $randomNumber = random_int(100000, 999999)
    // dd($randomNumber)

    // for the image size
    // composer require intervention/image
    
}
