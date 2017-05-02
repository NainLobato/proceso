<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatEtapaRequest;
use App\Http\Requests\UpdateCatEtapaRequest;
use App\Repositories\CatEtapaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatEtapaController extends AppBaseController
{
    /** @var  CatEtapaRepository */
    private $catEtapaRepository;

    public function __construct(CatEtapaRepository $catEtapaRepo)
    {
        $this->catEtapaRepository = $catEtapaRepo;
    }

    /**
     * Display a listing of the CatEtapa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catEtapaRepository->pushCriteria(new RequestCriteria($request));
        $catEtapas = $this->catEtapaRepository->all();

        return view('cat_etapas.index')
            ->with('catEtapas', $catEtapas);
    }

    /**
     * Show the form for creating a new CatEtapa.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_etapas.create');
    }

    /**
     * Store a newly created CatEtapa in storage.
     *
     * @param CreateCatEtapaRequest $request
     *
     * @return Response
     */
    public function store(CreateCatEtapaRequest $request)
    {
        $input = $request->all();

        $catEtapa = $this->catEtapaRepository->create($input);

        Flash::success('Cat Etapa saved successfully.');

        return redirect(route('catEtapas.index'));
    }

    /**
     * Display the specified CatEtapa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catEtapa = $this->catEtapaRepository->findWithoutFail($id);

        if (empty($catEtapa)) {
            Flash::error('Cat Etapa not found');

            return redirect(route('catEtapas.index'));
        }

        return view('cat_etapas.show')->with('catEtapa', $catEtapa);
    }

    /**
     * Show the form for editing the specified CatEtapa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catEtapa = $this->catEtapaRepository->findWithoutFail($id);

        if (empty($catEtapa)) {
            Flash::error('Cat Etapa not found');

            return redirect(route('catEtapas.index'));
        }

        return view('cat_etapas.edit')->with('catEtapa', $catEtapa);
    }

    /**
     * Update the specified CatEtapa in storage.
     *
     * @param  int              $id
     * @param UpdateCatEtapaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatEtapaRequest $request)
    {
        $catEtapa = $this->catEtapaRepository->findWithoutFail($id);

        if (empty($catEtapa)) {
            Flash::error('Cat Etapa not found');

            return redirect(route('catEtapas.index'));
        }

        $catEtapa = $this->catEtapaRepository->update($request->all(), $id);

        Flash::success('Cat Etapa updated successfully.');

        return redirect(route('catEtapas.index'));
    }

    /**
     * Remove the specified CatEtapa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catEtapa = $this->catEtapaRepository->findWithoutFail($id);

        if (empty($catEtapa)) {
            Flash::error('Cat Etapa not found');

            return redirect(route('catEtapas.index'));
        }

        $this->catEtapaRepository->delete($id);

        Flash::success('Cat Etapa deleted successfully.');

        return redirect(route('catEtapas.index'));
    }
}
