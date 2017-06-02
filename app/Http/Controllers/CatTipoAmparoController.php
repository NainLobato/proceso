<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatTipoAmparoRequest;
use App\Http\Requests\UpdateCatTipoAmparoRequest;
use App\Repositories\CatTipoAmparoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatTipoAmparoController extends AppBaseController
{
    /** @var  CatTipoAmparoRepository */
    private $catTipoAmparoRepository;

    public function __construct(CatTipoAmparoRepository $catTipoAmparoRepo)
    {
        $this->catTipoAmparoRepository = $catTipoAmparoRepo;
    }

    /**
     * Display a listing of the CatTipoAmparo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catTipoAmparoRepository->pushCriteria(new RequestCriteria($request));
        $catTipoAmparos = $this->catTipoAmparoRepository->all();

        return view('cat_tipo_amparos.index')
            ->with('catTipoAmparos', $catTipoAmparos);
    }

    /**
     * Show the form for creating a new CatTipoAmparo.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_tipo_amparos.create');
    }

    /**
     * Store a newly created CatTipoAmparo in storage.
     *
     * @param CreateCatTipoAmparoRequest $request
     *
     * @return Response
     */
    public function store(CreateCatTipoAmparoRequest $request)
    {
        $input = $request->all();

        $catTipoAmparo = $this->catTipoAmparoRepository->create($input);

        Flash::success('Cat Tipo Amparo guardado exitosamente.');

        return redirect(route('catTipoAmparos.index'));
    }

    /**
     * Display the specified CatTipoAmparo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catTipoAmparo = $this->catTipoAmparoRepository->findWithoutFail($id);

        if (empty($catTipoAmparo)) {
            Flash::error('Cat Tipo Amparo not found');

            return redirect(route('catTipoAmparos.index'));
        }

        return view('cat_tipo_amparos.show')->with('catTipoAmparo', $catTipoAmparo);
    }

    /**
     * Show the form for editing the specified CatTipoAmparo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catTipoAmparo = $this->catTipoAmparoRepository->findWithoutFail($id);

        if (empty($catTipoAmparo)) {
            Flash::error('Cat Tipo Amparo not found');

            return redirect(route('catTipoAmparos.index'));
        }

        return view('cat_tipo_amparos.edit')->with('catTipoAmparo', $catTipoAmparo);
    }

    /**
     * Update the specified CatTipoAmparo in storage.
     *
     * @param  int              $id
     * @param UpdateCatTipoAmparoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatTipoAmparoRequest $request)
    {
        $catTipoAmparo = $this->catTipoAmparoRepository->findWithoutFail($id);

        if (empty($catTipoAmparo)) {
            Flash::error('Cat Tipo Amparo not found');

            return redirect(route('catTipoAmparos.index'));
        }

        $catTipoAmparo = $this->catTipoAmparoRepository->update($request->all(), $id);

        Flash::success('Cat Tipo Amparo updated successfully.');

        return redirect(route('catTipoAmparos.index'));
    }

    /**
     * Remove the specified CatTipoAmparo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catTipoAmparo = $this->catTipoAmparoRepository->findWithoutFail($id);

        if (empty($catTipoAmparo)) {
            Flash::error('Cat Tipo Amparo not found');

            return redirect(route('catTipoAmparos.index'));
        }

        $this->catTipoAmparoRepository->delete($id);

        Flash::success('Cat Tipo Amparo deleted successfully.');

        return redirect(route('catTipoAmparos.index'));
    }
}
