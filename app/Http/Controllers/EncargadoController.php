<?php

namespace App\Http\Controllers;

use App\Models\Encargado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EncargadoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $encargados = Encargado::paginate();

        return view('encargado.index', compact('encargados'))
            ->with('i', ($request->input('page', 1) - 1) * $encargados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $encargado = new Encargado();

        return view('encargado.create', compact('encargado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EncargadoRequest $request): RedirectResponse
    {
        Encargado::create($request->validated());

        return Redirect::route('encargados.index')
            ->with('success', 'Encargado created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $encargado = Encargado::find($id);

        return view('encargado.show', compact('encargado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $encargado = Encargado::find($id);

        return view('encargado.edit', compact('encargado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EncargadoRequest $request, Encargado $encargado): RedirectResponse
    {
        $encargado->update($request->validated());

        return Redirect::route('encargados.index')
            ->with('success', 'Encargado updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Encargado::find($id)->delete();

        return Redirect::route('encargados.index')
            ->with('success', 'Encargado deleted successfully');
    }
}
