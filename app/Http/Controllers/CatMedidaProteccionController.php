<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatMedidaProteccionRequest;
use App\Http\Requests\UpdateCatMedidaProteccionRequest;
use App\Repositories\CatMedidaProteccionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatMedidaProteccionController extends AppBaseController
{
    /** @var  CatMedidaProteccionRepository */
    private $catMedidaProteccionRepository;

    public function __construct(CatMedidaProteccionRepository $catMedidaProteccionRepo)
    {
        $this->catMedidaProteccionRepository = $catMedidaProteccionRepo;
    }

    /**
     * Display a listing of the CatMedidaProteccion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catMedidaProteccionRepository->pushCriteria(new RequestCriteria($request));
        $catMedidaProteccions = $this->catMedidaProteccionRepository->all();

        return view('cat_medida_proteccions.index')
            ->with('catMedidaProteccions', $catMedidaProteccions);
    }

    /**
     * Show the form for creating a new CatMedidaProteccion.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_medida_proteccions.create');
    }

    /**
     * Store a newly created CatMedidaProteccion in storage.
     *
     * @param CreateCatMedidaProteccionRequest $request
     *
     * @return Response
     */
    public function store(CreateCatMedidaProteccionRequest $request)
    {
        $input = $request->all();

        $catMedidaProteccion = $this->catMedidaProteccionRepository->create($input);

        Flash::success('Cat Medida Proteccion saved successfully.');

        return redirect(route('catMedidaProteccions.index'));
    }

    /**
     * Display the specified CatMedidaProteccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catMedidaProteccion = $this->catMedidaProteccionRepository->findWithoutFail($id);

        if (empty($catMedidaProteccion)) {
            Flash::error('Cat Medida Proteccion not found');

            return redirect(route('catMedidaProteccions.index'));
        }

        return view('cat_medida_proteccions.show')->with('catMedidaProteccion', $catMedidaProteccion);
    }

    /**
     * Show the form for editing the specified CatMedidaProteccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catMedidaProteccion = $this->catMedidaProteccionRepository->findWithoutFail($id);

        if (empty($catMedidaProteccion)) {
            Flash::error('Cat Medida Proteccion not found');

            return redirect(route('catMedidaProteccions.index'));
        }

        return view('cat_medida_proteccions.edit')->with('catMedidaProteccion', $catMedidaProteccion);
    }

    /**
     * Update the specified CatMedidaProteccion in storage.
     *
     * @param  int              $id
     * @param UpdateCatMedidaProteccionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatMedidaProteccionRequest $request)
    {
        $catMedidaProteccion = $this->catMedidaProteccionRepository->findWithoutFail($id);

        if (empty($catMedidaProteccion)) {
            Flash::error('Cat Medida Proteccion not found');

            return redirect(route('catMedidaProteccions.index'));
        }

        $catMedidaProteccion = $this->catMedidaProteccionRepository->update($request->all(), $id);

        Flash::success('Cat Medida Proteccion updated successfully.');

        return redirect(route('catMedidaProteccions.index'));
    }

    /**
     * Remove the specified CatMedidaProteccion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catMedidaProteccion = $this->catMedidaProteccionRepository->findWithoutFail($id);

        if (empty($catMedidaProteccion)) {
            Flash::error('Cat Medida Proteccion not found');

            return redirect(route('catMedidaProteccions.index'));
        }

        $this->catMedidaProteccionRepository->delete($id);

        Flash::success('Cat Medida Proteccion deleted successfully.');

        return redirect(route('catMedidaProteccions.index'));
    }
}
