<?php

namespace App\Http\Controllers;

use App\DataTables\AudienciaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAudienciaRequest;
use App\Http\Requests\UpdateAudienciaRequest;
use App\Repositories\AudienciaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\CatFiscal;
use App\Models\CatJuez;
use App\Models\CatJuzgado;


class AudienciaController extends AppBaseController
{
    /** @var  AudienciaRepository */
    private $audienciaRepository;

    public function __construct(AudienciaRepository $audienciaRepo)
    {
        $this->audienciaRepository = $audienciaRepo;
    }

    /**
     * Display a listing of the Audiencia.
     *
     * @param AudienciaDataTable $audienciaDataTable
     * @return Response
     */
    public function index(AudienciaDataTable $audienciaDataTable)
    {
        return $audienciaDataTable->render('audiencias.index');
    }

    /**
     * Show the form for creating a new Audiencia.
     *
     * @return Response
     */
    public function create()
    {
        $catFiscal= CatFiscal::orderBy('name')->pluck('name','id');
        $catJuez= CatJuez::orderBy('juez')->pluck('juez','id');
        $catJuzgado= CatJuzgado::orderBy('juzgado')->pluck('juzgado','id');
        $juzgados= CatJuzgado::orderBy('juzgado')->pluck('juzgado','id');
        $juzgados= CatJuzgado::orderBy('juzgado')->pluck('juzgado','id');
        $juzgados= CatJuzgado::orderBy('juzgado')->pluck('juzgado','id');
        return view('audiencias.create',array('catFiscal'=>$catFiscal,'catJuez'=>$catJuez,'catJuzgado'=>$catJuzgado,'catAudiencia'=>array(),'catEtapa'=>array(),'catProceso'=>array()));
    }

    /**
     * Store a newly created Audiencia in storage.
     *
     * @param CreateAudienciaRequest $request
     *
     * @return Response
     */
    public function store(CreateAudienciaRequest $request)
    {
        $input = $request->all();

        $audiencia = $this->audienciaRepository->create($input);

        Flash::success('Audiencia guardado exitosamente.');

        return redirect(route('audiencias.index'));
    }

    /**
     * Display the specified Audiencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $audiencia = $this->audienciaRepository->findWithoutFail($id);

        if (empty($audiencia)) {
            Flash::error('Audiencia not found');

            return redirect(route('audiencias.index'));
        }

        return view('audiencias.show')->with('audiencia', $audiencia);
    }

    /**
     * Show the form for editing the specified Audiencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $audiencia = $this->audienciaRepository->findWithoutFail($id);

        if (empty($audiencia)) {
            Flash::error('Audiencia not found');

            return redirect(route('audiencias.index'));
        }

        return view('audiencias.edit')->with('audiencia', $audiencia);
    }

    /**
     * Update the specified Audiencia in storage.
     *
     * @param  int              $id
     * @param UpdateAudienciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAudienciaRequest $request)
    {
        $audiencia = $this->audienciaRepository->findWithoutFail($id);

        if (empty($audiencia)) {
            Flash::error('Audiencia not found');

            return redirect(route('audiencias.index'));
        }

        $audiencia = $this->audienciaRepository->update($request->all(), $id);

        Flash::success('Audiencia updated successfully.');

        return redirect(route('audiencias.index'));
    }

    /**
     * Remove the specified Audiencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $audiencia = $this->audienciaRepository->findWithoutFail($id);

        if (empty($audiencia)) {
            Flash::error('Audiencia not found');

            return redirect(route('audiencias.index'));
        }

        $this->audienciaRepository->delete($id);

        Flash::success('Audiencia deleted successfully.');

        return redirect(route('audiencias.index'));
    }
}
