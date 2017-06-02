<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatTipoMandoRequest;
use App\Http\Requests\UpdateCatTipoMandoRequest;
use App\Repositories\CatTipoMandoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatTipoMandoController extends AppBaseController
{
    /** @var  CatTipoMandoRepository */
    private $catTipoMandoRepository;

    public function __construct(CatTipoMandoRepository $catTipoMandoRepo)
    {
        $this->catTipoMandoRepository = $catTipoMandoRepo;
    }

    /**
     * Display a listing of the CatTipoMando.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catTipoMandoRepository->pushCriteria(new RequestCriteria($request));
        $catTipoMandos = $this->catTipoMandoRepository->all();

        return view('cat_tipo_mandos.index')
            ->with('catTipoMandos', $catTipoMandos);
    }

    /**
     * Show the form for creating a new CatTipoMando.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_tipo_mandos.create');
    }

    /**
     * Store a newly created CatTipoMando in storage.
     *
     * @param CreateCatTipoMandoRequest $request
     *
     * @return Response
     */
    public function store(CreateCatTipoMandoRequest $request)
    {
        $input = $request->all();

        $catTipoMando = $this->catTipoMandoRepository->create($input);

        Flash::success('Cat Tipo Mando guardado exitosamente.');

        return redirect(route('catTipoMandos.index'));
    }

    /**
     * Display the specified CatTipoMando.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catTipoMando = $this->catTipoMandoRepository->findWithoutFail($id);

        if (empty($catTipoMando)) {
            Flash::error('Cat Tipo Mando not found');

            return redirect(route('catTipoMandos.index'));
        }

        return view('cat_tipo_mandos.show')->with('catTipoMando', $catTipoMando);
    }

    /**
     * Show the form for editing the specified CatTipoMando.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catTipoMando = $this->catTipoMandoRepository->findWithoutFail($id);

        if (empty($catTipoMando)) {
            Flash::error('Cat Tipo Mando not found');

            return redirect(route('catTipoMandos.index'));
        }

        return view('cat_tipo_mandos.edit')->with('catTipoMando', $catTipoMando);
    }

    /**
     * Update the specified CatTipoMando in storage.
     *
     * @param  int              $id
     * @param UpdateCatTipoMandoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatTipoMandoRequest $request)
    {
        $catTipoMando = $this->catTipoMandoRepository->findWithoutFail($id);

        if (empty($catTipoMando)) {
            Flash::error('Cat Tipo Mando not found');

            return redirect(route('catTipoMandos.index'));
        }

        $catTipoMando = $this->catTipoMandoRepository->update($request->all(), $id);

        Flash::success('Cat Tipo Mando updated successfully.');

        return redirect(route('catTipoMandos.index'));
    }

    /**
     * Remove the specified CatTipoMando from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catTipoMando = $this->catTipoMandoRepository->findWithoutFail($id);

        if (empty($catTipoMando)) {
            Flash::error('Cat Tipo Mando not found');

            return redirect(route('catTipoMandos.index'));
        }

        $this->catTipoMandoRepository->delete($id);

        Flash::success('Cat Tipo Mando deleted successfully.');

        return redirect(route('catTipoMandos.index'));
    }
}
