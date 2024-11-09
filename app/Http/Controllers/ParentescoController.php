<?php

namespace App\Http\Controllers;

use App\Models\Parentesco;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ParentescoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ParentescoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {

        $parentescos = Parentesco::with(['alumno', 'encargado'])->get(); return view('parentescos.index', compact('parentescos'));

       // $parentescos = Parentesco::paginate();

        //return view('parentesco.index', compact('parentescos'))
        //    ->with('i', ($request->input('page', 1) - 1) * $parentescos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create(): View
    {
        $parentesco = new Parentesco();

        return view('parentesco.create', compact('parentesco'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParentescoRequest $request): RedirectResponse
    {
        Parentesco::create($request->validated());

        return Redirect::route('parentescos.index')
            ->with('success', 'Parentesco created successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $parentesco = Parentesco::find($id);

        return view('parentesco.show', compact('parentesco'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $parentesco = Parentesco::find($id);

        return view('parentesco.edit', compact('parentesco'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParentescoRequest $request, Parentesco $parentesco): RedirectResponse
    {
        $parentesco->update($request->validated());

        return Redirect::route('parentescos.index')
            ->with('success', 'Parentesco updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Parentesco::find($id)->delete();

        return Redirect::route('parentescos.index')
            ->with('success', 'Parentesco deleted successfully');
    }


}
