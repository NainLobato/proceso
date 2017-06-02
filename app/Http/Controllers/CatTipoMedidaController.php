<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatTipoMedidaRequest;
use App\Http\Requests\UpdateCatTipoMedidaRequest;
use App\Repositories\CatTipoMedidaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatTipoMedidaController extends AppBaseController
{
    /** @var  CatTipoMedidaRepository */
    private $catTipoMedidaRepository;

    public function __construct(CatTipoMedidaRepository $catTipoMedidaRepo)
    {
        $this->catTipoMedidaRepository = $catTipoMedidaRepo;
    }

    /**
     * Display a listing of the CatTipoMedida.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catTipoMedidaRepository->pushCriteria(new RequestCriteria($request));
        $catTipoMedidas = $this->catTipoMedidaRepository->all();

        return view('cat_tipo_medidas.index')
            ->with('catTipoMedidas', $catTipoMedidas);
    }

    /**
     * Show the form for creating a new CatTipoMedida.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_tipo_medidas.create');
    }

    /**
     * Store a newly created CatTipoMedida in storage.
     *
     * @param CreateCatTipoMedidaRequest $request
     *
     * @return Response
     */
    public function store(CreateCatTipoMedidaRequest $request)
    {
        $input = $request->all();

        $catTipoMedida = $this->catTipoMedidaRepository->create($input);

        Flash::success('Cat Tipo Medida guardado exitosamente.');

        return redirect(route('catTipoMedidas.index'));
    }

    /**
     * Display the specified CatTipoMedida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catTipoMedida = $this->catTipoMedidaRepository->findWithoutFail($id);

        if (empty($catTipoMedida)) {
            Flash::error('Cat Tipo Medida not found');

            return redirect(route('catTipoMedidas.index'));
        }

        return view('cat_tipo_medidas.show')->with('catTipoMedida', $catTipoMedida);
    }

    /**
     * Show the form for editing the specified CatTipoMedida.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catTipoMedida = $this->catTipoMedidaRepository->findWithoutFail($id);

        if (empty($catTipoMedida)) {
            Flash::error('Cat Tipo Medida not found');

            return redirect(route('catTipoMedidas.index'));
        }

        return view('cat_tipo_medidas.edit')->with('catTipoMedida', $catTipoMedida);
    }

    /**
     * Update the specified CatTipoMedida in storage.
     *
     * @param  int              $id
     * @param UpdateCatTipoMedidaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatTipoMedidaRequest $request)
    {
        $catTipoMedida = $this->catTipoMedidaRepository->findWithoutFail($id);

        if (empty($catTipoMedida)) {
            Flash::error('Cat Tipo Medida not found');

            return redirect(route('catTipoMedidas.index'));
        }

        $catTipoMedida = $this->catTipoMedidaRepository->update($request->all(), $id);

        Flash::success('Cat Tipo Medida updated successfully.');

        return redirect(route('catTipoMedidas.index'));
    }

    /**
     * Remove the specified CatTipoMedida from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catTipoMedida = $this->catTipoMedidaRepository->findWithoutFail($id);

        if (empty($catTipoMedida)) {
            Flash::error('Cat Tipo Medida not found');

            return redirect(route('catTipoMedidas.index'));
        }

        $this->catTipoMedidaRepository->delete($id);

        Flash::success('Cat Tipo Medida deleted successfully.');

        return redirect(route('catTipoMedidas.index'));
    }
}
