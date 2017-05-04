<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatResolucionInvestigacionRequest;
use App\Http\Requests\UpdateCatResolucionInvestigacionRequest;
use App\Repositories\CatResolucionInvestigacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatResolucionInvestigacionController extends AppBaseController
{
    /** @var  CatResolucionInvestigacionRepository */
    private $catResolucionInvestigacionRepository;

    public function __construct(CatResolucionInvestigacionRepository $catResolucionInvestigacionRepo)
    {
        $this->catResolucionInvestigacionRepository = $catResolucionInvestigacionRepo;
    }

    /**
     * Display a listing of the CatResolucionInvestigacion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catResolucionInvestigacionRepository->pushCriteria(new RequestCriteria($request));
        $catResolucionInvestigacions = $this->catResolucionInvestigacionRepository->all();

        return view('cat_resolucion_investigacions.index')
            ->with('catResolucionInvestigacions', $catResolucionInvestigacions);
    }

    /**
     * Show the form for creating a new CatResolucionInvestigacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_resolucion_investigacions.create');
    }

    /**
     * Store a newly created CatResolucionInvestigacion in storage.
     *
     * @param CreateCatResolucionInvestigacionRequest $request
     *
     * @return Response
     */
    public function store(CreateCatResolucionInvestigacionRequest $request)
    {
        $input = $request->all();

        $catResolucionInvestigacion = $this->catResolucionInvestigacionRepository->create($input);

        Flash::success('Cat Resolucion Investigacion saved successfully.');

        return redirect(route('catResolucionInvestigacions.index'));
    }

    /**
     * Display the specified CatResolucionInvestigacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catResolucionInvestigacion = $this->catResolucionInvestigacionRepository->findWithoutFail($id);

        if (empty($catResolucionInvestigacion)) {
            Flash::error('Cat Resolucion Investigacion not found');

            return redirect(route('catResolucionInvestigacions.index'));
        }

        return view('cat_resolucion_investigacions.show')->with('catResolucionInvestigacion', $catResolucionInvestigacion);
    }

    /**
     * Show the form for editing the specified CatResolucionInvestigacion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catResolucionInvestigacion = $this->catResolucionInvestigacionRepository->findWithoutFail($id);

        if (empty($catResolucionInvestigacion)) {
            Flash::error('Cat Resolucion Investigacion not found');

            return redirect(route('catResolucionInvestigacions.index'));
        }

        return view('cat_resolucion_investigacions.edit')->with('catResolucionInvestigacion', $catResolucionInvestigacion);
    }

    /**
     * Update the specified CatResolucionInvestigacion in storage.
     *
     * @param  int              $id
     * @param UpdateCatResolucionInvestigacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatResolucionInvestigacionRequest $request)
    {
        $catResolucionInvestigacion = $this->catResolucionInvestigacionRepository->findWithoutFail($id);

        if (empty($catResolucionInvestigacion)) {
            Flash::error('Cat Resolucion Investigacion not found');

            return redirect(route('catResolucionInvestigacions.index'));
        }

        $catResolucionInvestigacion = $this->catResolucionInvestigacionRepository->update($request->all(), $id);

        Flash::success('Cat Resolucion Investigacion updated successfully.');

        return redirect(route('catResolucionInvestigacions.index'));
    }

    /**
     * Remove the specified CatResolucionInvestigacion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catResolucionInvestigacion = $this->catResolucionInvestigacionRepository->findWithoutFail($id);

        if (empty($catResolucionInvestigacion)) {
            Flash::error('Cat Resolucion Investigacion not found');

            return redirect(route('catResolucionInvestigacions.index'));
        }

        $this->catResolucionInvestigacionRepository->delete($id);

        Flash::success('Cat Resolucion Investigacion deleted successfully.');

        return redirect(route('catResolucionInvestigacions.index'));
    }
}
