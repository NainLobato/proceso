<?php

namespace App\Http\Controllers;

use App\DataTables\VictimaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateVictimaRequest;
use App\Http\Requests\UpdateVictimaRequest;
use App\Repositories\VictimaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Persona;
use App\Models\Proceso;
use App\Models\Direccion;
use DB;
class VictimaController extends AppBaseController
{
    /** @var  VictimaRepository */
    private $victimaRepository;

    public function __construct(VictimaRepository $victimaRepo)
    {
        $this->victimaRepository = $victimaRepo;
    }

    /**
     * Display a listing of the Victima.
     *
     * @param VictimaDataTable $victimaDataTable
     * @return Response
     */
    public function index(VictimaDataTable $victimaDataTable)
    {
        return $victimaDataTable->render('victimas.index');
    }

    /**
     * Show the form for creating a new Victima.
     *
     * @return Response
     */
    public function create()
    {
        $personas=Persona::orderBy('nombreCompleto')->select(DB::raw('CONCAT(nombre," ", paterno," ",materno) as nombreCompleto'),'id')->pluck('nombreCompleto','id');
        $procesos=Proceso::pluck('numeroProceso','id');
        $direcciones = Direccion::pluck('calle','id');
        return view('victimas.create',array('personas'=>$personas,'procesos'=>$procesos,'direcciones'=>$direcciones));
    }

    /**
     * Store a newly created Victima in storage.
     *
     * @param CreateVictimaRequest $request
     *
     * @return Response
     */
    public function store(CreateVictimaRequest $request)
    {
        $input = $request->all();

        $victima = $this->victimaRepository->create($input);

        Flash::success('Victima saved successfully.');

        return redirect(route('victimas.index'));
    }

    /**
     * Display the specified Victima.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $victima = $this->victimaRepository->findWithoutFail($id);

        if (empty($victima)) {
            Flash::error('Victima not found');

            return redirect(route('victimas.index'));
        }

        return view('victimas.show')->with('victima', $victima);
    }

    /**
     * Show the form for editing the specified Victima.
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
      
        $victima = $this->victimaRepository->findWithoutFail($id);

        if (empty($victima)) {
            Flash::error('Victima not found');

            return redirect(route('victimas.index'));
        }

        return view('victimas.edit',array('personas'=>$personas,'procesos'=>$procesos,'direcciones'=>$direcciones))->with('victima', $victima);
    }

    /**
     * Update the specified Victima in storage.
     *
     * @param  int              $id
     * @param UpdateVictimaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVictimaRequest $request)
    {
        $victima = $this->victimaRepository->findWithoutFail($id);

        if (empty($victima)) {
            Flash::error('Victima not found');

            return redirect(route('victimas.index'));
        }

        $victima = $this->victimaRepository->update($request->all(), $id);

        Flash::success('Victima updated successfully.');

        return redirect(route('victimas.index'));
    }

    /**
     * Remove the specified Victima from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $victima = $this->victimaRepository->findWithoutFail($id);

        if (empty($victima)) {
            Flash::error('Victima not found');

            return redirect(route('victimas.index'));
        }

        $this->victimaRepository->delete($id);

        Flash::success('Victima deleted successfully.');

        return redirect(route('victimas.index'));
    }
}
