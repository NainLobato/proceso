<?php

namespace App\Http\Controllers;

use App\DataTables\ImputadoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateImputadoRequest;
use App\Http\Requests\UpdateImputadoRequest;
use App\Repositories\ImputadoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Persona;
use App\Models\Proceso;
use App\Models\Direccion;
use DB;

class ImputadoController extends AppBaseController
{
    /** @var  ImputadoRepository */
    private $imputadoRepository;

    public function __construct(ImputadoRepository $imputadoRepo)
    {
        $this->imputadoRepository = $imputadoRepo;
    }

    /**
     * Display a listing of the Imputado.
     *
     * @param ImputadoDataTable $imputadoDataTable
     * @return Response
     */
    public function index(ImputadoDataTable $imputadoDataTable)
    {
        return $imputadoDataTable->render('imputados.index');
    }

    /**
     * Show the form for creating a new Imputado.
     *
     * @return Response
     */
    public function create()
    {
        
        $personas=Persona::orderBy('nombreCompleto')->select(DB::raw('CONCAT(nombre," ", paterno," ",materno) as nombreCompleto'),'id')->pluck('nombreCompleto','id');
        $procesos=Proceso::pluck('numeroProceso','id');
        $direcciones = Direccion::pluck('calle','id');
        return view('imputados.create',array('personas'=>$personas,'procesos'=>$procesos,'direcciones'=>$direcciones));
    }

    /**
     * Store a newly created Imputado in storage.
     *
     * @param CreateImputadoRequest $request
     *
     * @return Response
     */
    public function store(CreateImputadoRequest $request)
    {
        $input = $request->all();

        $imputado = $this->imputadoRepository->create($input);

        Flash::success('Imputado saved successfully.');

        return redirect(route('imputados.index'));
    }

    /**
     * Display the specified Imputado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $imputado = $this->imputadoRepository->findWithoutFail($id);

        if (empty($imputado)) {
            Flash::error('Imputado not found');

            return redirect(route('imputados.index'));
        }

        return view('imputados.show')->with('imputado', $imputado);
    }

    /**
     * Show the form for editing the specified Imputado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personas=Persona::orderBy('nombreCompleto')->select(DB::raw('CONCAT(nombre," ", paterno," ",materno) as nombreCompleto'),'id')->pluck('nombreCompleto','id');
        $procesos=Proceso::pluck('numeroProceso','id');
        $direcciones = Direccion::pluck('calle','id');
     
        $imputado = $this->imputadoRepository->findWithoutFail($id);

        if (empty($imputado)) {
            Flash::error('Imputado not found');

            return redirect(route('imputados.index'));
        }

        return view('imputados.edit',array('personas'=>$personas,'procesos'=>$procesos,'direcciones'=>$direcciones))->with('imputado', $imputado);
    }

    /**
     * Update the specified Imputado in storage.
     *
     * @param  int              $id
     * @param UpdateImputadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateImputadoRequest $request)
    {
        $imputado = $this->imputadoRepository->findWithoutFail($id);

        if (empty($imputado)) {
            Flash::error('Imputado not found');

            return redirect(route('imputados.index'));
        }

        $imputado = $this->imputadoRepository->update($request->all(), $id);

        Flash::success('Imputado updated successfully.');

        return redirect(route('imputados.index'));
    }

    /**
     * Remove the specified Imputado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $imputado = $this->imputadoRepository->findWithoutFail($id);

        if (empty($imputado)) {
            Flash::error('Imputado not found');

            return redirect(route('imputados.index'));
        }

        $this->imputadoRepository->delete($id);

        Flash::success('Imputado deleted successfully.');

        return redirect(route('imputados.index'));
    }
}
