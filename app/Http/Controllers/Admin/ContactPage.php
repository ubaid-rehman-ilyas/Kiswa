<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactPage as ModelsContactPage;
use Illuminate\Http\Request;

class ContactPage extends Controller
{
    public function edit()
    {
        $contactPage = ModelsContactPage::first();
        return view('admin.contactpage.edit', compact('contactPage'));
    }
    public function update(Request $request)
    {
        try {
            $contactPage = ModelsContactPage::first();
            $contactPage->update($request->all());
            return redirect()->route('admin.contactpage.edit')->with([
                'msg' => 1,
                'alert_data' => 'Content updated successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->route('admin.contactpage.edit')->with([
                'msg' => 2,
                'alert_data' => 'Failed to update Content: ' . $e->getMessage()
            ]);
        }
    }
}
