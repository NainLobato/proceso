<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatAudienciaRequest;
use App\Http\Requests\UpdateCatAudienciaRequest;
use App\Repositories\CatAudienciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatAudienciaController extends AppBaseController
{
    /** @var  CatAudienciaRepository */
    private $catAudienciaRepository;

    public function __construct(CatAudienciaRepository $catAudienciaRepo)
    {
        $this->catAudienciaRepository = $catAudienciaRepo;
    }

    /**
     * Display a listing of the CatAudiencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catAudienciaRepository->pushCriteria(new RequestCriteria($request));
        $catAudiencias = $this->catAudienciaRepository->all();

        return view('cat_audiencias.index')
            ->with('catAudiencias', $catAudiencias);
    }

    /**
     * Show the form for creating a new CatAudiencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_audiencias.create');
    }

    /**
     * Store a newly created CatAudiencia in storage.
     *
     * @param CreateCatAudienciaRequest $request
     *
     * @return Response
     */
    public function store(CreateCatAudienciaRequest $request)
    {
        $input = $request->all();

        $catAudiencia = $this->catAudienciaRepository->create($input);

        Flash::success('Cat Audiencia saved successfully.');

        return redirect(route('catAudiencias.index'));
    }

    /**
     * Display the specified CatAudiencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catAudiencia = $this->catAudienciaRepository->findWithoutFail($id);

        if (empty($catAudiencia)) {
            Flash::error('Cat Audiencia not found');

            return redirect(route('catAudiencias.index'));
        }

        return view('cat_audiencias.show')->with('catAudiencia', $catAudiencia);
    }

    /**
     * Show the form for editing the specified CatAudiencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catAudiencia = $this->catAudienciaRepository->findWithoutFail($id);

        if (empty($catAudiencia)) {
            Flash::error('Cat Audiencia not found');

            return redirect(route('catAudiencias.index'));
        }

        return view('cat_audiencias.edit')->with('catAudiencia', $catAudiencia);
    }

    /**
     * Update the specified CatAudiencia in storage.
     *
     * @param  int              $id
     * @param UpdateCatAudienciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatAudienciaRequest $request)
    {
        $catAudiencia = $this->catAudienciaRepository->findWithoutFail($id);

        if (empty($catAudiencia)) {
            Flash::error('Cat Audiencia not found');

            return redirect(route('catAudiencias.index'));
        }

        $catAudiencia = $this->catAudienciaRepository->update($request->all(), $id);

        Flash::success('Cat Audiencia updated successfully.');

        return redirect(route('catAudiencias.index'));
    }

    /**
     * Remove the specified CatAudiencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catAudiencia = $this->catAudienciaRepository->findWithoutFail($id);

        if (empty($catAudiencia)) {
            Flash::error('Cat Audiencia not found');

            return redirect(route('catAudiencias.index'));
        }

        $this->catAudienciaRepository->delete($id);

        Flash::success('Cat Audiencia deleted successfully.');

        return redirect(route('catAudiencias.index'));
    }
}
