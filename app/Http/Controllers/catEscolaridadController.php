<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecatEscolaridadRequest;
use App\Http\Requests\UpdatecatEscolaridadRequest;
use App\Repositories\catEscolaridadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class catEscolaridadController extends AppBaseController
{
    /** @var  catEscolaridadRepository */
    private $catEscolaridadRepository;

    public function __construct(catEscolaridadRepository $catEscolaridadRepo)
    {
        $this->catEscolaridadRepository = $catEscolaridadRepo;
    }

    /**
     * Display a listing of the catEscolaridad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catEscolaridadRepository->pushCriteria(new RequestCriteria($request));
        $catEscolaridads = $this->catEscolaridadRepository->all();

        return view('cat_escolaridads.index')
            ->with('catEscolaridads', $catEscolaridads);
    }

    /**
     * Show the form for creating a new catEscolaridad.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_escolaridads.create');
    }

    /**
     * Store a newly created catEscolaridad in storage.
     *
     * @param CreatecatEscolaridadRequest $request
     *
     * @return Response
     */
    public function store(CreatecatEscolaridadRequest $request)
    {
        $input = $request->all();

        $catEscolaridad = $this->catEscolaridadRepository->create($input);

        Flash::success('Cat Escolaridad guardado exitosamente.');

        return redirect(route('catEscolaridads.index'));
    }

    /**
     * Display the specified catEscolaridad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catEscolaridad = $this->catEscolaridadRepository->findWithoutFail($id);

        if (empty($catEscolaridad)) {
            Flash::error('Cat Escolaridad not found');

            return redirect(route('catEscolaridads.index'));
        }

        return view('cat_escolaridads.show')->with('catEscolaridad', $catEscolaridad);
    }

    /**
     * Show the form for editing the specified catEscolaridad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catEscolaridad = $this->catEscolaridadRepository->findWithoutFail($id);

        if (empty($catEscolaridad)) {
            Flash::error('Cat Escolaridad not found');

            return redirect(route('catEscolaridads.index'));
        }

        return view('cat_escolaridads.edit')->with('catEscolaridad', $catEscolaridad);
    }

    /**
     * Update the specified catEscolaridad in storage.
     *
     * @param  int              $id
     * @param UpdatecatEscolaridadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecatEscolaridadRequest $request)
    {
        $catEscolaridad = $this->catEscolaridadRepository->findWithoutFail($id);

        if (empty($catEscolaridad)) {
            Flash::error('Cat Escolaridad not found');

            return redirect(route('catEscolaridads.index'));
        }

        $catEscolaridad = $this->catEscolaridadRepository->update($request->all(), $id);

        Flash::success('Cat Escolaridad updated successfully.');

        return redirect(route('catEscolaridads.index'));
    }

    /**
     * Remove the specified catEscolaridad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catEscolaridad = $this->catEscolaridadRepository->findWithoutFail($id);

        if (empty($catEscolaridad)) {
            Flash::error('Cat Escolaridad not found');

            return redirect(route('catEscolaridads.index'));
        }

        $this->catEscolaridadRepository->delete($id);

        Flash::success('Cat Escolaridad deleted successfully.');

        return redirect(route('catEscolaridads.index'));
    }
}
