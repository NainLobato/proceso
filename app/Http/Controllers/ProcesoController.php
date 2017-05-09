<?php

namespace App\Http\Controllers;

use App\DataTables\ProcesoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateProcesoRequest;
use App\Http\Requests\UpdateProcesoRequest;
use App\Repositories\ProcesoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Unidad;
use App\Models\CatFiscal;
use App\Models\CatJuez;
use App\Models\CatJuzgado;

class ProcesoController extends AppBaseController
{
    /** @var  ProcesoRepository */
    private $procesoRepository;

    public function __construct(ProcesoRepository $procesoRepo)
    {
        $this->procesoRepository = $procesoRepo;
    }

    /**
     * Display a listing of the Proceso.
     *
     * @param ProcesoDataTable $procesoDataTable
     * @return Response
     */
    public function index(ProcesoDataTable $procesoDataTable)
    {
        return $procesoDataTable->render('procesos.index');
    }

    /**
     * Show the form for creating a new Proceso.
     *
     * @return Response
     */
    public function create()
    {
        
        $unidades=Unidad::pluck('nombre','id');
        $fiscales= CatFiscal::pluck('name','id');
        $jueces= CatJuez::pluck('juez','id');
        $juzgados= CatJuzgado::pluck('juzgado','id');
        return view('procesos.create',array('unidades'=>$unidades,'fiscales'=>$fiscales, 'jueces'=>$jueces, 'juzgados'=>$juzgados));
    }

    /**
     * Store a newly created Proceso in storage.
     *
     * @param CreateProcesoRequest $request
     *
     * @return Response
     */
    public function store(CreateProcesoRequest $request)
    {
        $input = $request->all();

        $proceso = $this->procesoRepository->create($input);

        Flash::success('Proceso saved successfully.');

        return redirect(route('procesos.index'));
    }

    /**
     * Display the specified Proceso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $proceso = $this->procesoRepository->findWithoutFail($id);

        if (empty($proceso)) {
            Flash::error('Proceso not found');

            return redirect(route('procesos.index'));
        }

        return view('procesos.show')->with('proceso', $proceso);
    }

    /**
     * Show the form for editing the specified Proceso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $unidades=Unidad::pluck('nombre','id');
        $fiscales= CatFiscal::pluck('name','id');
        $jueces= CatJuez::pluck('juez','id');
        $juzgados= CatJuzgado::pluck('juzgado','id');
   

   
        $proceso = $this->procesoRepository->findWithoutFail($id);

        if (empty($proceso)) {
            Flash::error('Proceso not found');

            return redirect(route('procesos.index'));
        }

        return view('procesos.edit',array('unidades'=>$unidades,'fiscales'=>$fiscales, 'jueces'=>$jueces, 'juzgados'=>$juzgados))->with('proceso', $proceso);
    }

    /**
     * Update the specified Proceso in storage.
     *
     * @param  int              $id
     * @param UpdateProcesoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProcesoRequest $request)
    {
        $proceso = $this->procesoRepository->findWithoutFail($id);

        if (empty($proceso)) {
            Flash::error('Proceso not found');

            return redirect(route('procesos.index'));
        }

        $proceso = $this->procesoRepository->update($request->all(), $id);

        Flash::success('Proceso updated successfully.');

        return redirect(route('procesos.index'));
    }

    /**
     * Remove the specified Proceso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $proceso = $this->procesoRepository->findWithoutFail($id);

        if (empty($proceso)) {
            Flash::error('Proceso not found');

            return redirect(route('procesos.index'));
        }

        $this->procesoRepository->delete($id);

        Flash::success('Proceso deleted successfully.');

        return redirect(route('procesos.index'));
    }

        /**
     * @param $date
     * @return string
     */
    public function formatDate($date)
    {
        if (stripos($date, "/")) {
            $format = explode("/", $date);
            // Special format date because daterangepicker format is MM/DD/YYYY
            return $format[2] . '-' . $format[1] . '-' . $format[0];
        }
        return $date;
    }

    /**
     * @param $date
     * @return string
     */
    public function showDate($date)
    {
        if (stripos($date, "-")) {
            $format = explode("-", $date);
            // Special format date because daterangepicker format is MM/DD/YYYY
            return $format[2] . '/' . $format[1] . '/' . $format[0];
        }
        return $date;
    }
}
