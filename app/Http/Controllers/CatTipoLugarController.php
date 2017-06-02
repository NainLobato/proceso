<?php

namespace App\Http\Controllers;

use App\DataTables\CatTipoLugarDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCatTipoLugarRequest;
use App\Http\Requests\UpdateCatTipoLugarRequest;
use App\Repositories\CatTipoLugarRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CatTipoLugarController extends AppBaseController
{
    /** @var  CatTipoLugarRepository */
    private $catTipoLugarRepository;

    public function __construct(CatTipoLugarRepository $catTipoLugarRepo)
    {
        $this->catTipoLugarRepository = $catTipoLugarRepo;
    }

    /**
     * Display a listing of the CatTipoLugar.
     *
     * @param CatTipoLugarDataTable $catTipoLugarDataTable
     * @return Response
     */
    public function index(CatTipoLugarDataTable $catTipoLugarDataTable)
    {
        return $catTipoLugarDataTable->render('cat_tipo_lugars.index');
    }

    /**
     * Show the form for creating a new CatTipoLugar.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_tipo_lugars.create');
    }

    /**
     * Store a newly created CatTipoLugar in storage.
     *
     * @param CreateCatTipoLugarRequest $request
     *
     * @return Response
     */
    public function store(CreateCatTipoLugarRequest $request)
    {
        $input = $request->all();

        $catTipoLugar = $this->catTipoLugarRepository->create($input);

        Flash::success('Cat Tipo Lugar guardado exitosamente.');

        return redirect(route('catTipoLugars.index'));
    }

    /**
     * Display the specified CatTipoLugar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catTipoLugar = $this->catTipoLugarRepository->findWithoutFail($id);

        if (empty($catTipoLugar)) {
            Flash::error('Cat Tipo Lugar not found');

            return redirect(route('catTipoLugars.index'));
        }

        return view('cat_tipo_lugars.show')->with('catTipoLugar', $catTipoLugar);
    }

    /**
     * Show the form for editing the specified CatTipoLugar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catTipoLugar = $this->catTipoLugarRepository->findWithoutFail($id);

        if (empty($catTipoLugar)) {
            Flash::error('Cat Tipo Lugar not found');

            return redirect(route('catTipoLugars.index'));
        }

        return view('cat_tipo_lugars.edit')->with('catTipoLugar', $catTipoLugar);
    }

    /**
     * Update the specified CatTipoLugar in storage.
     *
     * @param  int              $id
     * @param UpdateCatTipoLugarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatTipoLugarRequest $request)
    {
        $catTipoLugar = $this->catTipoLugarRepository->findWithoutFail($id);

        if (empty($catTipoLugar)) {
            Flash::error('Cat Tipo Lugar not found');

            return redirect(route('catTipoLugars.index'));
        }

        $catTipoLugar = $this->catTipoLugarRepository->update($request->all(), $id);

        Flash::success('Cat Tipo Lugar updated successfully.');

        return redirect(route('catTipoLugars.index'));
    }

    /**
     * Remove the specified CatTipoLugar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catTipoLugar = $this->catTipoLugarRepository->findWithoutFail($id);

        if (empty($catTipoLugar)) {
            Flash::error('Cat Tipo Lugar not found');

            return redirect(route('catTipoLugars.index'));
        }

        $this->catTipoLugarRepository->delete($id);

        Flash::success('Cat Tipo Lugar deleted successfully.');

        return redirect(route('catTipoLugars.index'));
    }
}
