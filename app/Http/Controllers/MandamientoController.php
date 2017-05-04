<?php

namespace App\Http\Controllers;

use App\DataTables\MandamientoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMandamientoRequest;
use App\Http\Requests\UpdateMandamientoRequest;
use App\Repositories\MandamientoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\CatEtnia;

class MandamientoController extends AppBaseController
{
    /** @var  MandamientoRepository */
    private $mandamientoRepository;

    public function __construct(MandamientoRepository $mandamientoRepo)
    {
        $this->mandamientoRepository = $mandamientoRepo;
    }

    /**
     * Display a listing of the Mandamiento.
     *
     * @param MandamientoDataTable $mandamientoDataTable
     * @return Response
     */
    public function index(MandamientoDataTable $mandamientoDataTable)
    {
        return $mandamientoDataTable->render('mandamientos.index');
    }

    /**
     * Show the form for creating a new Mandamiento.
     *
     * @return Response
     */
    public function create()
    {
        $catTipoMandamiento=CatEtnia::pluck('etnia','id');
        $audiencias=CatEtnia::pluck('etnia','id');
        return view('mandamientos.create',array('catTipoMandamiento'=>$catTipoMandamiento, 'audiencias'=>$audiencias));
    }

    /**
     * Store a newly created Mandamiento in storage.
     *
     * @param CreateMandamientoRequest $request
     *
     * @return Response
     */
    public function store(CreateMandamientoRequest $request)
    {
        $input = $request->all();

        $mandamiento = $this->mandamientoRepository->create($input);

        Flash::success('Mandamiento saved successfully.');

        return redirect(route('mandamientos.index'));
    }

    /**
     * Display the specified Mandamiento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mandamiento = $this->mandamientoRepository->findWithoutFail($id);

        if (empty($mandamiento)) {
            Flash::error('Mandamiento not found');

            return redirect(route('mandamientos.index'));
        }

        return view('mandamientos.show')->with('mandamiento', $mandamiento);
    }

    /**
     * Show the form for editing the specified Mandamiento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mandamiento = $this->mandamientoRepository->findWithoutFail($id);

        if (empty($mandamiento)) {
            Flash::error('Mandamiento not found');

            return redirect(route('mandamientos.index'));
        }

        return view('mandamientos.edit')->with('mandamiento', $mandamiento);
    }

    /**
     * Update the specified Mandamiento in storage.
     *
     * @param  int              $id
     * @param UpdateMandamientoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMandamientoRequest $request)
    {
        $mandamiento = $this->mandamientoRepository->findWithoutFail($id);

        if (empty($mandamiento)) {
            Flash::error('Mandamiento not found');

            return redirect(route('mandamientos.index'));
        }

        $mandamiento = $this->mandamientoRepository->update($request->all(), $id);

        Flash::success('Mandamiento updated successfully.');

        return redirect(route('mandamientos.index'));
    }

    /**
     * Remove the specified Mandamiento from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mandamiento = $this->mandamientoRepository->findWithoutFail($id);

        if (empty($mandamiento)) {
            Flash::error('Mandamiento not found');

            return redirect(route('mandamientos.index'));
        }

        $this->mandamientoRepository->delete($id);

        Flash::success('Mandamiento deleted successfully.');

        return redirect(route('mandamientos.index'));
    }
}
