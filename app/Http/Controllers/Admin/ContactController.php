<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $records = Contacts::orderBy('id','desc')->paginate(10);
        return view('admin.contact.index',compact('records'));
    }
    public function deleteLeads($id){
        try {
            Contacts::find($id)->delete();
            return redirect()->route('admin.contact.index')->with([
                'msg' => 1,
                'alert_data' => 'Lead deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->route('admin.contact.index')->with([
                'msg' => 2,
                'alert_data' => 'Error deleting lead!'
            ]);
        }
    }
}
