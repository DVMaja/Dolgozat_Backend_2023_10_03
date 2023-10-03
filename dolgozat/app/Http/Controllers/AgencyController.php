<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\User;
use Illuminate\Http\Request;

class AgencyController extends Controller
{

    public function index()
    {
        return Agency::all();
    }
    public function show($id)
    {
        return Agency::find($id);
    }
    public function destroy($id)
    {
        Agency::find($id)->delete();

        return redirect('/agency/list');
    }
    public function update(Request $request, $id)
    {
        $agency = Agency::find($id);
        $agency->name = $request->name;
        $agency->country = $request->country;
        $agency->type = $request->type;
        $agency->save();
        return redirect('/agency/list');
    }
    public function store(Request $request)
    {
        $agency = new Agency();
        $agency->name = $request->name;
        $agency->country = $request->country;
        $agency->type = $request->type;
        $agency->save();
        return redirect('/agency/list');
    }

    public function newView()
    {
        $users = User::all();
        return view('agency.new', ['users' => $users]);
    }
    public function editView($id)
    {
        $users = User::all();
        $agency = Agency::find($id);
        return view('agency.edit', ['users' => $users, 'agency' => $agency]);
    }
    public function listView()
    {
        $agencies = Agency::all();
        return view('agency.list', ['agencies' => $agencies]);
    }
}
