<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactPage;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $record = ContactPage::first();
        return view('front.contact', compact('record'));
    }
    public function contact_us(Request $request)
    {
        try{
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);
            $data = $request->all();
            Contacts::create($data);
            return redirect()->back()->with(['msg'=>1, 'alert_data'=>'Your message has been sent successfully.']);
        }
        catch(\Exception $e){
            return redirect()->back()->with(['msg'=>2, 'alert_data'=>$e->getMessage()]);
        }
    }
}
