<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatMedidaRequest;
use App\Http\Requests\UpdateCatMedidaRequest;
use App\Repositories\CatMedidaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatMedidaController extends AppBaseController
{
    /** @var  CatMedidaRepository */
    private $catMedidaRepository;

    public function __construct(CatMedidaRepository $catMedidaRepo)
    {
        $this->catMedidaRepository = $catMedidaRepo;
    }

    /**
     * Display a listing of the CatMedida.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catMedidaRepository->pushCriteria(new RequestCriteria($request));
        $catMedidas = $this->catMedidaRepository->all();

        return view('cat_medidas.index')
            ->with('catMedidas', $catMedidas);
    }

    /**
     * Show the form for creating a new CatMedida.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_medidas.create');
    }

    /**
     * Store a newly created CatMedida in storage.
     *
     * @param CreateCatMedidaRequest $request
     *
     * @return Response
     */
    public function store(CreateCatMedidaRequest $request)
    {
        $input = $request->all();

        $catMedida = $this->catMedidaRepository->create($input);

        Flash::success('Cat Medida guardado exitosamente.');

        return redirect(route('catMedidas.index'));
    }

    /**
     * Display the specified CatMedida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catMedida = $this->catMedidaRepository->findWithoutFail($id);

        if (empty($catMedida)) {
            Flash::error('Cat Medida not found');

            return redirect(route('catMedidas.index'));
        }

        return view('cat_medidas.show')->with('catMedida', $catMedida);
    }

    /**
     * Show the form for editing the specified CatMedida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catMedida = $this->catMedidaRepository->findWithoutFail($id);

        if (empty($catMedida)) {
            Flash::error('Cat Medida not found');

            return redirect(route('catMedidas.index'));
        }

        return view('cat_medidas.edit')->with('catMedida', $catMedida);
    }

    /**
     * Update the specified CatMedida in storage.
     *
     * @param  int              $id
     * @param UpdateCatMedidaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatMedidaRequest $request)
    {
        $catMedida = $this->catMedidaRepository->findWithoutFail($id);

        if (empty($catMedida)) {
            Flash::error('Cat Medida not found');

            return redirect(route('catMedidas.index'));
        }

        $catMedida = $this->catMedidaRepository->update($request->all(), $id);

        Flash::success('Cat Medida updated successfully.');

        return redirect(route('catMedidas.index'));
    }

    /**
     * Remove the specified CatMedida from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catMedida = $this->catMedidaRepository->findWithoutFail($id);

        if (empty($catMedida)) {
            Flash::error('Cat Medida not found');

            return redirect(route('catMedidas.index'));
        }

        $this->catMedidaRepository->delete($id);

        Flash::success('Cat Medida deleted successfully.');

        return redirect(route('catMedidas.index'));
    }
}
