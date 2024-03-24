<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Customer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //$event = Event::all();
       // dd($event);
        if ($request->ajax()) {
            $event = Event::select(sprintf('%s.*', (new Event)->getTable()));
           // $event = Event::all();

            return DataTables::of($event)
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
              /*  ->editColumn('address_street', function ($row) {
                    return $row->address;
                })
                ->editColumn('address_place', function ($row) {
                    return $row->place;
                })
                ->filterColumn('customer_last_name', function ($query, $keyword) {
                    $sql = "CONCAT(customers.customer_last_name, ' ', customers.customer_first_name) like ?";
                    $query->whereRaw($sql, ["%{$keyword}%"]);
                })
                ->filterColumn('address_street', function ($query, $keyword) {
                    $sql = "CONCAT(customers.address_street, ' ', customers.address_number) like ?";
                    $query->whereRaw($sql, ["%{$keyword}%"]);
                })
                ->filterColumn('address_place', function ($query, $keyword) {
                    $sql = "CONCAT(customers.address_postal_code, ' ', customers.address_place) like ?";
                    $query->whereRaw($sql, ["%{$keyword}%"]);
                })
                */
                ->toJson();
        }

        return view('event.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$countries = Country::select('iso2', 'name_en')->orderBy('name_en', 'asc')->get();

        return view('event.create');
        //return view('event.create')->with(compact('countries'));
    }

    public function store(Request $request)
    {
        $event = Event::create($request->all());

        $notification = [
            'type' => 'success',
            'title' => 'Add ...',
            'message' => 'Item added.',
        ];

        return redirect()->route('event.index')->with('notification', $notification);
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
        Event::whereIn('id', $request->ids)->delete();

        return response()->noContent();
    }
}
