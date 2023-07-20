<?php

namespace App\Http\Controllers;

use App\Models\Tableactivo;
use Illuminate\Http\Request;

/**
 * Class TableactivoController
 * @package App\Http\Controllers
 */
class TableactivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tableactivos = Tableactivo::paginate();

        return view('tableactivo.index', compact('tableactivos'))
            ->with('i', (request()->input('page', 1) - 1) * $tableactivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tableactivo = new Tableactivo();
        return view('tableactivo.create', compact('tableactivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tableactivo::$rules);

        $tableactivo = Tableactivo::create($request->all());

        return redirect()->route('tableactivos.index')
            ->with('success', 'Tableactivo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tableactivo = Tableactivo::find($id);

        return view('tableactivo.show', compact('tableactivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tableactivo = Tableactivo::find($id);

        return view('tableactivo.edit', compact('tableactivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tableactivo $tableactivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tableactivo $tableactivo)
    {
        request()->validate(Tableactivo::$rules);

        $tableactivo->update($request->all());

        return redirect()->route('tableactivos.index')
            ->with('success', 'Tableactivo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tableactivo = Tableactivo::find($id)->delete();

        return redirect()->route('tableactivos.index')
            ->with('success', 'Tableactivo deleted successfully');
    }
}
