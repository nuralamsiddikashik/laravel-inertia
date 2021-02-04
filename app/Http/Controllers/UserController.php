<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller {

    public function index() {
        $leads = Lead::all();

        return Inertia::render( 'Leads/Index', [
            'leads' => $leads,
        ] );
    }

    public function create() {
        return Inertia::render( 'Leads/Create' );
    }

    public function store( Request $request, Lead $lead ) {
        $request->validate( [
            'name' => 'required',
            'desc' => 'required',
        ] );

        $lead->create( [
            'name' => $request->name,
            'desc' => $request->desc,
        ] );

        return redirect()->route( 'leads.index' )->with( 'successMessage', 'User Was Create' );
    }

    public function edit( Lead $lead ) {
        return Inertia::render( 'Leads/Edit', [
            'lead' => $lead,
        ] );
    }

    public function update( Request $request, Lead $lead ) {
        $request->validate( [
            'name' => 'required',
            'desc' => 'required',
        ] );

        $lead->update( [
            'name' => $request->name,
            'desc' => $request->desc,
        ] );

        return redirect()->route( 'leads.index' );

    }

    public function destroy( Lead $lead ) {

        $lead->delete();
        return redirect()->route( 'leads.index' );
    }
}
