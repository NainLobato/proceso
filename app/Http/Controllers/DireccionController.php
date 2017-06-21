<?php

namespace App\Http\Controllers;

use App\DataTables\DireccionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDireccionRequest;
use App\Http\Requests\UpdateDireccionRequest;
use App\Repositories\DireccionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\cp;
use App\Models\CatTipoLugar;


class DireccionController extends AppBaseController
{
    /** @var  DireccionRepository */
    private $direccionRepository;

    public function __construct(DireccionRepository $direccionRepo)
    {
        $this->direccionRepository = $direccionRepo;
    }

    /**
     * Display a listing of the Direccion.
     *
     * @param DireccionDataTable $direccionDataTable
     * @return Response
     */
    public function index(DireccionDataTable $direccionDataTable)
    {
        return $direccionDataTable->render('direccions.index');
    }

    /**
     * Show the form for creating a new Direccion.
     *
     * @return Response
     */
    public function create()
    {
        $catTipoLugar = catTipoLugar::orderBy('tipoLugar','asc')->pluck('tipoLugar','id');
        $cp = cp::orderBy('d_codigo','asc')->pluck('d_codigo','idCodigo');
         return view('direccions.create',array("cp"=>$cp, "CatTipoLugar"=>$catTipoLugar));
        /*$cp = cp::orderBy('cp','asc')->pluck('cp','idCodigo');
        return view('direccions.create',array("cp"=>$cp, "CatTipoLugar"=>$catTipoLugar));*/
       
    }

    /**
     * Store a newly created Direccion in storage.
     *
     * @param CreateDireccionRequest $request
     *
     * @return Response
     */
    public function store(CreateDireccionRequest $request)
    {
        $input = $request->all();

        $direccion = $this->direccionRepository->create($input);

        Flash::success('Direccion guardado exitosamente.');

        return redirect(route('direccions.index'));
    }

    /**
     * Display the specified Direccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $direccion = $this->direccionRepository->findWithoutFail($id);

        if (empty($direccion)) {
            Flash::error('Direccion not found');

            return redirect(route('direccions.index'));
        }

        return view('direccions.show')->with('direccion', $direccion);
    }

    /**
     * Show the form for editing the specified Direccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $direccion = $this->direccionRepository->findWithoutFail($id);

        if (empty($direccion)) {
            Flash::error('Direccion not found');

            return redirect(route('direccions.index'));
        }

        $catTipoLugar = catTipoLugar::pluck('tipoLugar','id');
        $cp = cp::pluck('d_codigo','idCodigo');
        return view('direccions.edit',array("cp"=>$cp, "CatTipoLugar"=>$catTipoLugar))->with('direccion', $direccion);
    }

    /**
     * Update the specified Direccion in storage.
     *
     * @param  int              $id
     * @param UpdateDireccionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDireccionRequest $request)
    {
        $direccion = $this->direccionRepository->findWithoutFail($id);

        if (empty($direccion)) {
            Flash::error('Direccion not found');

            return redirect(route('direccions.index'));
        }

        $direccion = $this->direccionRepository->update($request->all(), $id);

        Flash::success('Direccion updated successfully.');

        return redirect(route('direccions.index'));
    }

    /**
     * Remove the specified Direccion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $direccion = $this->direccionRepository->findWithoutFail($id);

        if (empty($direccion)) {
            Flash::error('Direccion not found');

            return redirect(route('direccions.index'));
        }

        $this->direccionRepository->delete($id);

        Flash::success('Direccion deleted successfully.');

        return redirect(route('direccions.index'));
    }
}
