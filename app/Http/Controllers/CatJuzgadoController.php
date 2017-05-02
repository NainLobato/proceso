<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatJuzgadoRequest;
use App\Http\Requests\UpdateCatJuzgadoRequest;
use App\Repositories\CatJuzgadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatJuzgadoController extends AppBaseController
{
    /** @var  CatJuzgadoRepository */
    private $catJuzgadoRepository;

    public function __construct(CatJuzgadoRepository $catJuzgadoRepo)
    {
        $this->catJuzgadoRepository = $catJuzgadoRepo;
    }

    /**
     * Display a listing of the CatJuzgado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catJuzgadoRepository->pushCriteria(new RequestCriteria($request));
        $catJuzgados = $this->catJuzgadoRepository->all();

        return view('cat_juzgados.index')
            ->with('catJuzgados', $catJuzgados);
    }

    /**
     * Show the form for creating a new CatJuzgado.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_juzgados.create');
    }

    /**
     * Store a newly created CatJuzgado in storage.
     *
     * @param CreateCatJuzgadoRequest $request
     *
     * @return Response
     */
    public function store(CreateCatJuzgadoRequest $request)
    {
        $input = $request->all();

        $catJuzgado = $this->catJuzgadoRepository->create($input);

        Flash::success('Cat Juzgado saved successfully.');

        return redirect(route('catJuzgados.index'));
    }

    /**
     * Display the specified CatJuzgado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catJuzgado = $this->catJuzgadoRepository->findWithoutFail($id);

        if (empty($catJuzgado)) {
            Flash::error('Cat Juzgado not found');

            return redirect(route('catJuzgados.index'));
        }

        return view('cat_juzgados.show')->with('catJuzgado', $catJuzgado);
    }

    /**
     * Show the form for editing the specified CatJuzgado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catJuzgado = $this->catJuzgadoRepository->findWithoutFail($id);

        if (empty($catJuzgado)) {
            Flash::error('Cat Juzgado not found');

            return redirect(route('catJuzgados.index'));
        }

        return view('cat_juzgados.edit')->with('catJuzgado', $catJuzgado);
    }

    /**
     * Update the specified CatJuzgado in storage.
     *
     * @param  int              $id
     * @param UpdateCatJuzgadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatJuzgadoRequest $request)
    {
        $catJuzgado = $this->catJuzgadoRepository->findWithoutFail($id);

        if (empty($catJuzgado)) {
            Flash::error('Cat Juzgado not found');

            return redirect(route('catJuzgados.index'));
        }

        $catJuzgado = $this->catJuzgadoRepository->update($request->all(), $id);

        Flash::success('Cat Juzgado updated successfully.');

        return redirect(route('catJuzgados.index'));
    }

    /**
     * Remove the specified CatJuzgado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catJuzgado = $this->catJuzgadoRepository->findWithoutFail($id);

        if (empty($catJuzgado)) {
            Flash::error('Cat Juzgado not found');

            return redirect(route('catJuzgados.index'));
        }

        $this->catJuzgadoRepository->delete($id);

        Flash::success('Cat Juzgado deleted successfully.');

        return redirect(route('catJuzgados.index'));
    }
}
