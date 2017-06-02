<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatDelitoRequest;
use App\Http\Requests\UpdateCatDelitoRequest;
use App\Repositories\CatDelitoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatDelitoController extends AppBaseController
{
    /** @var  CatDelitoRepository */
    private $catDelitoRepository;

    public function __construct(CatDelitoRepository $catDelitoRepo)
    {
        $this->catDelitoRepository = $catDelitoRepo;
    }

    /**
     * Display a listing of the CatDelito.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catDelitoRepository->pushCriteria(new RequestCriteria($request));
        $catDelitos = $this->catDelitoRepository->all();

        return view('cat_delitos.index')
            ->with('catDelitos', $catDelitos);
    }

    /**
     * Show the form for creating a new CatDelito.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_delitos.create');
    }

    /**
     * Store a newly created CatDelito in storage.
     *
     * @param CreateCatDelitoRequest $request
     *
     * @return Response
     */
    public function store(CreateCatDelitoRequest $request)
    {
        $input = $request->all();

        $catDelito = $this->catDelitoRepository->create($input);

        Flash::success('Cat Delito guardado exitosamente.');

        return redirect(route('catDelitos.index'));
    }

    /**
     * Display the specified CatDelito.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catDelito = $this->catDelitoRepository->findWithoutFail($id);

        if (empty($catDelito)) {
            Flash::error('Cat Delito not found');

            return redirect(route('catDelitos.index'));
        }

        return view('cat_delitos.show')->with('catDelito', $catDelito);
    }

    /**
     * Show the form for editing the specified CatDelito.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catDelito = $this->catDelitoRepository->findWithoutFail($id);

        if (empty($catDelito)) {
            Flash::error('Cat Delito not found');

            return redirect(route('catDelitos.index'));
        }

        return view('cat_delitos.edit')->with('catDelito', $catDelito);
    }

    /**
     * Update the specified CatDelito in storage.
     *
     * @param  int              $id
     * @param UpdateCatDelitoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatDelitoRequest $request)
    {
        $catDelito = $this->catDelitoRepository->findWithoutFail($id);

        if (empty($catDelito)) {
            Flash::error('Cat Delito not found');

            return redirect(route('catDelitos.index'));
        }

        $catDelito = $this->catDelitoRepository->update($request->all(), $id);

        Flash::success('Cat Delito updated successfully.');

        return redirect(route('catDelitos.index'));
    }

    /**
     * Remove the specified CatDelito from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catDelito = $this->catDelitoRepository->findWithoutFail($id);

        if (empty($catDelito)) {
            Flash::error('Cat Delito not found');

            return redirect(route('catDelitos.index'));
        }

        $this->catDelitoRepository->delete($id);

        Flash::success('Cat Delito deleted successfully.');

        return redirect(route('catDelitos.index'));
    }
}
