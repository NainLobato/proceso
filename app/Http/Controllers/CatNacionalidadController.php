<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatNacionalidadRequest;
use App\Http\Requests\UpdateCatNacionalidadRequest;
use App\Repositories\CatNacionalidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatNacionalidadController extends AppBaseController
{
    /** @var  CatNacionalidadRepository */
    private $catNacionalidadRepository;

    public function __construct(CatNacionalidadRepository $catNacionalidadRepo)
    {
        $this->catNacionalidadRepository = $catNacionalidadRepo;
    }

    /**
     * Display a listing of the CatNacionalidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catNacionalidadRepository->pushCriteria(new RequestCriteria($request));
        $catNacionalidads = $this->catNacionalidadRepository->all();

        return view('cat_nacionalidads.index')
            ->with('catNacionalidads', $catNacionalidads);
    }

    /**
     * Show the form for creating a new CatNacionalidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_nacionalidads.create');
    }

    /**
     * Store a newly created CatNacionalidad in storage.
     *
     * @param CreateCatNacionalidadRequest $request
     *
     * @return Response
     */
    public function store(CreateCatNacionalidadRequest $request)
    {
        $input = $request->all();

        $catNacionalidad = $this->catNacionalidadRepository->create($input);

        Flash::success('Cat Nacionalidad saved successfully.');

        return redirect(route('catNacionalidads.index'));
    }

    /**
     * Display the specified CatNacionalidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catNacionalidad = $this->catNacionalidadRepository->findWithoutFail($id);

        if (empty($catNacionalidad)) {
            Flash::error('Cat Nacionalidad not found');

            return redirect(route('catNacionalidads.index'));
        }

        return view('cat_nacionalidads.show')->with('catNacionalidad', $catNacionalidad);
    }

    /**
     * Show the form for editing the specified CatNacionalidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catNacionalidad = $this->catNacionalidadRepository->findWithoutFail($id);

        if (empty($catNacionalidad)) {
            Flash::error('Cat Nacionalidad not found');

            return redirect(route('catNacionalidads.index'));
        }

        return view('cat_nacionalidads.edit')->with('catNacionalidad', $catNacionalidad);
    }

    /**
     * Update the specified CatNacionalidad in storage.
     *
     * @param  int              $id
     * @param UpdateCatNacionalidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatNacionalidadRequest $request)
    {
        $catNacionalidad = $this->catNacionalidadRepository->findWithoutFail($id);

        if (empty($catNacionalidad)) {
            Flash::error('Cat Nacionalidad not found');

            return redirect(route('catNacionalidads.index'));
        }

        $catNacionalidad = $this->catNacionalidadRepository->update($request->all(), $id);

        Flash::success('Cat Nacionalidad updated successfully.');

        return redirect(route('catNacionalidads.index'));
    }

    /**
     * Remove the specified CatNacionalidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catNacionalidad = $this->catNacionalidadRepository->findWithoutFail($id);

        if (empty($catNacionalidad)) {
            Flash::error('Cat Nacionalidad not found');

            return redirect(route('catNacionalidads.index'));
        }

        $this->catNacionalidadRepository->delete($id);

        Flash::success('Cat Nacionalidad deleted successfully.');

        return redirect(route('catNacionalidads.index'));
    }
}
