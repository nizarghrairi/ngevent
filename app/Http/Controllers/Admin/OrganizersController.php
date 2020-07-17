<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganisorRequest;
use App\Models\MainCategory;
use App\Models\Organisor;
use App\Notifications\OrganisorCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class OrganizersController extends Controller
{
    public function index()
    {
        $organisors = Organisor::selection()->paginate(PAGINATION_COUNT) ;

        return view('admin.organizers.index',compact('organisors'));
    }

    public function create()
    {
        $categories = MainCategory::where('translation_of',0)->active()->get();
        return view('admin.organizers.create', compact('categories'));
    }

    public function store(OrganisorRequest $request)
    {
        try{
            //make validation in file vendorsRequest

            //insert to DB
            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            // save image
            $filePath ="";
            if ($request->has('logo')) {
                $filePath = uploadImage('organisors', $request->logo);

            }

            $organisor = Organisor:: create([
                'name'=>$request->name,
                'mobile'=>$request->mobile,
                'email'=>$request->email,
                'password'=>$request->password,
                'active'=>$request->active,
                'address'=>$request->address,
                'logo'=>$filePath,
                'category_id'=>$request->category_id
            ]);

            Notification::send($organisor,new OrganisorCreated($organisor));


            //redirect Message
            return redirect()->route('admin.organisor')->with(['success' => 'Saved successfully']);

        }catch (\Exception $ex)
        {
            return redirect()->route('admin.organisor')->with(['error' => 'Something went wrong, please try again later']);
        }
    }
}
