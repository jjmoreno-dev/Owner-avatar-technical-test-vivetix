<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Customer;
use App\Models\Event;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProfileImageRequest;
use App\Traits\Upload;
use Illuminate\Http\UploadedFile;



class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use Upload;
    public function index(Request $request)
    {      
       if ($request->ajax()) {
           $sales = Sales::select(sprintf('%s.*', (new Sales)->getTable()))->with(['customer','event']);
            return DataTables::of($sales)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->addColumn('full_name_customer', function ($row) {
                    return $row->customer->customer_first_name.' '.$row->customer->customer_last_name;
                })
                ->addColumn('name_event', function ($row) {
                    return $row->event->name;
                })
                ->toJson();
        }
        return view('sales.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::select('iso2', 'name_en')->orderBy('name_en', 'asc')->get();
        $event = Event::select('id', 'name')->orderBy('name', 'asc')->get();

        return view('sales.create')->with(compact('countries','event'));
    }

    public function store(Request $request)
    {      
        $customer = Customer::create($request->all());      
        $request->request->add(['customer_id' => $customer->id]);
        $uniqueNameFile=Str::uuid()->toString();
        $extencionFile=$request->file('image_paid_support')->getClientOriginalExtension();

        $this->UploadFile($request->file('image_paid_support'), 'paid_support','public', $uniqueNameFile);
        $request->request->add(['paid_support' =>  $uniqueNameFile.'.'.$extencionFile]);
        $sales = Sales::create($request->all());
       
       

        $notification = [
            'type' => 'success',
            'title' => 'Add ...',
            'message' => 'Item added.',
        ];

        return redirect()->route('sales.index')->with('notification', $notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
       
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
      

        return view('event.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $event->update($request->all());

        $notification = [
            'type' => 'success',
            'title' => 'Edit ...',
            'message' => 'Item updated.',
        ];

        return redirect()->route('event.index')->with('notification', $notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function massDestroy(Request $request)
    {
        Sales::whereIn('id', $request->ids)->delete();

        return response()->noContent();
    }
}
