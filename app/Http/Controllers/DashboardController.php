<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function show(){
        $dashboard = Dashboard::get(); 
        return view('dashboard.show', compact('dashboard'));
    }

    function add(){
        return view('dashboard.add');
    }

    function submit(Request $request){
        $dashboard = new Dashboard();
        $dashboard->name = $request->name;
        $dashboard->category = $request->category;
        $dashboard->stock = $request->stock;
        $dashboard->save();

        return redirect()->route('dashboard.show');
    }

    function edit ($id){
        $dashboard = dashboard::find($id);
        return view('dashboard.edit', compact('dashboard'));
    }

    function update(Request $request, $id){
        $dashboard = Dashboard::find($id);
        $dashboard->name = $request->name;
        $dashboard->category = $request->category;
        $dashboard->stock = $request->stock;
        $dashboard->update();

        return redirect()->route('dashboard.show');
    }

    function delete($id) {
        $dashboard = Dashboard::find($id);
        $dashboard->delete();
        return redirect()->route('dashboard.show');
    }
}