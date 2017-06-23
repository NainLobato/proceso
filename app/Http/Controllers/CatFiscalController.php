<?php

namespace App\Http\Controllers;

use App\DataTables\CatFiscalDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCatFiscalRequest;
use App\Http\Requests\UpdateCatFiscalRequest;
use App\Repositories\CatFiscalRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\unidad;

class CatFiscalController extends AppBaseController
{
    /** @var  CatFiscalRepository */
    private $catFiscalRepository;

    public function __construct(CatFiscalRepository $catFiscalRepo)
    {
        $this->catFiscalRepository = $catFiscalRepo;
    }

    /**
     * Display a listing of the CatFiscal.
     *
     * @param CatFiscalDataTable $catFiscalDataTable
     * @return Response
     */
    public function index(CatFiscalDataTable $catFiscalDataTable)
    {
        return $catFiscalDataTable->render('cat_fiscals.index');
    }

    /**
     * Show the form for creating a new CatFiscal.
     *
     * @return Response
     */
    public function create()
    {

        $unidad = unidad::orderBy('nombre','asc')->pluck('nombre','id');
        return view('cat_fiscals.create',array("unidad"=>$unidad));
    }

    /**
     * Store a newly created CatFiscal in storage.
     *
     * @param CreateCatFiscalRequest $request
     *
     * @return Response
     */
    public function store(CreateCatFiscalRequest $request)
    {
        $input = $request->all();

        $catFiscal = $this->catFiscalRepository->create($input);

        Flash::success('Cat Fiscal guardado exitosamente.');

        return redirect(route('catFiscals.index'));
    }

    /**
     * Display the specified CatFiscal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catFiscal = $this->catFiscalRepository->findWithoutFail($id);

        if (empty($catFiscal)) {
            Flash::error('Cat Fiscal not found');

            return redirect(route('catFiscals.index'));
        }


        return view('cat_fiscals.show')->with('catFiscal', $catFiscal);
    }

    /**
     * Show the form for editing the specified CatFiscal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catFiscal = $this->catFiscalRepository->findWithoutFail($id);

        if (empty($catFiscal)) {
            Flash::error('Cat Fiscal not found');

            return redirect(route('catFiscals.index'));
        }

        
        $unidad=unidad::pluck('nombre','id');
        return view('cat_fiscals.edit',array("unidad"=>$unidad))->with('catFiscal', $catFiscal);
    }

    /**
     * Update the specified CatFiscal in storage.
     *
     * @param  int              $id
     * @param UpdateCatFiscalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatFiscalRequest $request)
    {
        $catFiscal = $this->catFiscalRepository->findWithoutFail($id);

        if (empty($catFiscal)) {
            Flash::error('Cat Fiscal not found');

            return redirect(route('catFiscals.index'));
        }

        $catFiscal = $this->catFiscalRepository->update($request->all(), $id);

        Flash::success('Cat Fiscal updated successfully.');

        return redirect(route('catFiscals.index'));
    }

    /**
     * Remove the specified CatFiscal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catFiscal = $this->catFiscalRepository->findWithoutFail($id);

        if (empty($catFiscal)) {
            Flash::error('Cat Fiscal not found');

            return redirect(route('catFiscals.index'));
        }

        $this->catFiscalRepository->delete($id);

        Flash::success('Cat Fiscal deleted successfully.');

        return redirect(route('catFiscals.index'));
    }
}
