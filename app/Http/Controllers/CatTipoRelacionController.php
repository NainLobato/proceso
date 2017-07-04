<?php

namespace App\Http\Controllers;

use App\DataTables\CatTipoRelacionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCatTipoRelacionRequest;
use App\Http\Requests\UpdateCatTipoRelacionRequest;
use App\Repositories\CatTipoRelacionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CatTipoRelacionController extends AppBaseController
{
    /** @var  CatTipoRelacionRepository */
    private $catTipoRelacionRepository;

    public function __construct(CatTipoRelacionRepository $catTipoRelacionRepo)
    {
        $this->catTipoRelacionRepository = $catTipoRelacionRepo;
    }

    /**
     * Display a listing of the CatTipoRelacion.
     *
     * @param CatTipoRelacionDataTable $catTipoRelacionDataTable
     * @return Response
     */
    public function index(CatTipoRelacionDataTable $catTipoRelacionDataTable)
    {
        return $catTipoRelacionDataTable->render('cat_tipo_relacions.index');
    }

    /**
     * Show the form for creating a new CatTipoRelacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_tipo_relacions.create');
    }

    /**
     * Store a newly created CatTipoRelacion in storage.
     *
     * @param CreateCatTipoRelacionRequest $request
     *
     * @return Response
     */
    public function store(CreateCatTipoRelacionRequest $request)
    {
        $input = $request->all();

        $catTipoRelacion = $this->catTipoRelacionRepository->create($input);

        Flash::success('Relación guardada exitosamente.');

        return redirect(route('catTipoRelacions.index'));
    }

    /**
     * Display the specified CatTipoRelacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catTipoRelacion = $this->catTipoRelacionRepository->findWithoutFail($id);

        if (empty($catTipoRelacion)) {
            Flash::error('Cat Tipo Relacion not found');

            return redirect(route('catTipoRelacions.index'));
        }

        return view('cat_tipo_relacions.show')->with('catTipoRelacion', $catTipoRelacion);
    }

    /**
     * Show the form for editing the specified CatTipoRelacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catTipoRelacion = $this->catTipoRelacionRepository->findWithoutFail($id);

        if (empty($catTipoRelacion)) {
            Flash::error('Cat Tipo Relacion not found');

            return redirect(route('catTipoRelacions.index'));
        }

        return view('cat_tipo_relacions.edit')->with('catTipoRelacion', $catTipoRelacion);
    }

    /**
     * Update the specified CatTipoRelacion in storage.
     *
     * @param  int              $id
     * @param UpdateCatTipoRelacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatTipoRelacionRequest $request)
    {
        $catTipoRelacion = $this->catTipoRelacionRepository->findWithoutFail($id);

        if (empty($catTipoRelacion)) {
            Flash::error('Cat Tipo Relacion not found');

            return redirect(route('catTipoRelacions.index'));
        }

        $catTipoRelacion = $this->catTipoRelacionRepository->update($request->all(), $id);

        Flash::success('Cat Tipo Relacion updated successfully.');

        return redirect(route('catTipoRelacions.index'));
    }

    /**
     * Remove the specified CatTipoRelacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catTipoRelacion = $this->catTipoRelacionRepository->findWithoutFail($id);

        if (empty($catTipoRelacion)) {
            Flash::error('Cat Tipo Relacion not found');

            return redirect(route('catTipoRelacions.index'));
        }

        $this->catTipoRelacionRepository->delete($id);

        Flash::success('Cat Tipo Relacion deleted successfully.');

        return redirect(route('catTipoRelacions.index'));
    }
}
