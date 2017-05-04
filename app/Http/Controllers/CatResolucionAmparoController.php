<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatResolucionAmparoRequest;
use App\Http\Requests\UpdateCatResolucionAmparoRequest;
use App\Repositories\CatResolucionAmparoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatResolucionAmparoController extends AppBaseController
{
    /** @var  CatResolucionAmparoRepository */
    private $catResolucionAmparoRepository;

    public function __construct(CatResolucionAmparoRepository $catResolucionAmparoRepo)
    {
        $this->catResolucionAmparoRepository = $catResolucionAmparoRepo;
    }

    /**
     * Display a listing of the CatResolucionAmparo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catResolucionAmparoRepository->pushCriteria(new RequestCriteria($request));
        $catResolucionAmparos = $this->catResolucionAmparoRepository->all();

        return view('cat_resolucion_amparos.index')
            ->with('catResolucionAmparos', $catResolucionAmparos);
    }

    /**
     * Show the form for creating a new CatResolucionAmparo.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_resolucion_amparos.create');
    }

    /**
     * Store a newly created CatResolucionAmparo in storage.
     *
     * @param CreateCatResolucionAmparoRequest $request
     *
     * @return Response
     */
    public function store(CreateCatResolucionAmparoRequest $request)
    {
        $input = $request->all();

        $catResolucionAmparo = $this->catResolucionAmparoRepository->create($input);

        Flash::success('Cat Resolucion Amparo saved successfully.');

        return redirect(route('catResolucionAmparos.index'));
    }

    /**
     * Display the specified CatResolucionAmparo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catResolucionAmparo = $this->catResolucionAmparoRepository->findWithoutFail($id);

        if (empty($catResolucionAmparo)) {
            Flash::error('Cat Resolucion Amparo not found');

            return redirect(route('catResolucionAmparos.index'));
        }

        return view('cat_resolucion_amparos.show')->with('catResolucionAmparo', $catResolucionAmparo);
    }

    /**
     * Show the form for editing the specified CatResolucionAmparo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catResolucionAmparo = $this->catResolucionAmparoRepository->findWithoutFail($id);

        if (empty($catResolucionAmparo)) {
            Flash::error('Cat Resolucion Amparo not found');

            return redirect(route('catResolucionAmparos.index'));
        }

        return view('cat_resolucion_amparos.edit')->with('catResolucionAmparo', $catResolucionAmparo);
    }

    /**
     * Update the specified CatResolucionAmparo in storage.
     *
     * @param  int              $id
     * @param UpdateCatResolucionAmparoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatResolucionAmparoRequest $request)
    {
        $catResolucionAmparo = $this->catResolucionAmparoRepository->findWithoutFail($id);

        if (empty($catResolucionAmparo)) {
            Flash::error('Cat Resolucion Amparo not found');

            return redirect(route('catResolucionAmparos.index'));
        }

        $catResolucionAmparo = $this->catResolucionAmparoRepository->update($request->all(), $id);

        Flash::success('Cat Resolucion Amparo updated successfully.');

        return redirect(route('catResolucionAmparos.index'));
    }

    /**
     * Remove the specified CatResolucionAmparo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catResolucionAmparo = $this->catResolucionAmparoRepository->findWithoutFail($id);

        if (empty($catResolucionAmparo)) {
            Flash::error('Cat Resolucion Amparo not found');

            return redirect(route('catResolucionAmparos.index'));
        }

        $this->catResolucionAmparoRepository->delete($id);

        Flash::success('Cat Resolucion Amparo deleted successfully.');

        return redirect(route('catResolucionAmparos.index'));
    }
}
