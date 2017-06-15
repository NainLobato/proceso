<?php

namespace App\Http\Controllers;

use App\DataTables\CatAgrupacionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCatAgrupacionRequest;
use App\Http\Requests\UpdateCatAgrupacionRequest;
use App\Repositories\CatAgrupacionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CatAgrupacionController extends AppBaseController
{
    /** @var  CatAgrupacionRepository */
    private $catAgrupacionRepository;

    public function __construct(CatAgrupacionRepository $catAgrupacionRepo)
    {
        $this->catAgrupacionRepository = $catAgrupacionRepo;
    }

    /**
     * Display a listing of the CatAgrupacion.
     *
     * @param CatAgrupacionDataTable $catAgrupacionDataTable
     * @return Response
     */
    public function index(CatAgrupacionDataTable $catAgrupacionDataTable)
    {
        return $catAgrupacionDataTable->render('cat_agrupacions.index');
    }

    /**
     * Show the form for creating a new CatAgrupacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_agrupacions.create');
    }

    /**
     * Store a newly created CatAgrupacion in storage.
     *
     * @param CreateCatAgrupacionRequest $request
     *
     * @return Response
     */
    public function store(CreateCatAgrupacionRequest $request)
    {
        $input = $request->all();

        $catAgrupacion = $this->catAgrupacionRepository->create($input);

        Flash::success('Cat Agrupacion saved successfully.');

        return redirect(route('catAgrupacions.index'));
    }

    /**
     * Display the specified CatAgrupacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catAgrupacion = $this->catAgrupacionRepository->findWithoutFail($id);

        if (empty($catAgrupacion)) {
            Flash::error('Cat Agrupacion not found');

            return redirect(route('catAgrupacions.index'));
        }

        return view('cat_agrupacions.show')->with('catAgrupacion', $catAgrupacion);
    }

    /**
     * Show the form for editing the specified CatAgrupacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catAgrupacion = $this->catAgrupacionRepository->findWithoutFail($id);

        if (empty($catAgrupacion)) {
            Flash::error('Cat Agrupacion not found');

            return redirect(route('catAgrupacions.index'));
        }

        return view('cat_agrupacions.edit')->with('catAgrupacion', $catAgrupacion);
    }

    /**
     * Update the specified CatAgrupacion in storage.
     *
     * @param  int              $id
     * @param UpdateCatAgrupacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatAgrupacionRequest $request)
    {
        $catAgrupacion = $this->catAgrupacionRepository->findWithoutFail($id);

        if (empty($catAgrupacion)) {
            Flash::error('Cat Agrupacion not found');

            return redirect(route('catAgrupacions.index'));
        }

        $catAgrupacion = $this->catAgrupacionRepository->update($request->all(), $id);

        Flash::success('Cat Agrupacion updated successfully.');

        return redirect(route('catAgrupacions.index'));
    }

    /**
     * Remove the specified CatAgrupacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catAgrupacion = $this->catAgrupacionRepository->findWithoutFail($id);

        if (empty($catAgrupacion)) {
            Flash::error('Cat Agrupacion not found');

            return redirect(route('catAgrupacions.index'));
        }

        $this->catAgrupacionRepository->delete($id);

        Flash::success('Cat Agrupacion deleted successfully.');

        return redirect(route('catAgrupacions.index'));
    }
}
