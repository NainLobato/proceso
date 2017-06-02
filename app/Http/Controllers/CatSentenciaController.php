<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatSentenciaRequest;
use App\Http\Requests\UpdateCatSentenciaRequest;
use App\Repositories\CatSentenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatSentenciaController extends AppBaseController
{
    /** @var  CatSentenciaRepository */
    private $catSentenciaRepository;

    public function __construct(CatSentenciaRepository $catSentenciaRepo)
    {
        $this->catSentenciaRepository = $catSentenciaRepo;
    }

    /**
     * Display a listing of the CatSentencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catSentenciaRepository->pushCriteria(new RequestCriteria($request));
        $catSentencias = $this->catSentenciaRepository->all();

        return view('cat_sentencias.index')
            ->with('catSentencias', $catSentencias);
    }

    /**
     * Show the form for creating a new CatSentencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_sentencias.create');
    }

    /**
     * Store a newly created CatSentencia in storage.
     *
     * @param CreateCatSentenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateCatSentenciaRequest $request)
    {
        $input = $request->all();

        $catSentencia = $this->catSentenciaRepository->create($input);

        Flash::success('Cat Sentencia guardado exitosamente.');

        return redirect(route('catSentencias.index'));
    }

    /**
     * Display the specified CatSentencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catSentencia = $this->catSentenciaRepository->findWithoutFail($id);

        if (empty($catSentencia)) {
            Flash::error('Cat Sentencia not found');

            return redirect(route('catSentencias.index'));
        }

        return view('cat_sentencias.show')->with('catSentencia', $catSentencia);
    }

    /**
     * Show the form for editing the specified CatSentencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catSentencia = $this->catSentenciaRepository->findWithoutFail($id);

        if (empty($catSentencia)) {
            Flash::error('Cat Sentencia not found');

            return redirect(route('catSentencias.index'));
        }

        return view('cat_sentencias.edit')->with('catSentencia', $catSentencia);
    }

    /**
     * Update the specified CatSentencia in storage.
     *
     * @param  int              $id
     * @param UpdateCatSentenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatSentenciaRequest $request)
    {
        $catSentencia = $this->catSentenciaRepository->findWithoutFail($id);

        if (empty($catSentencia)) {
            Flash::error('Cat Sentencia not found');

            return redirect(route('catSentencias.index'));
        }

        $catSentencia = $this->catSentenciaRepository->update($request->all(), $id);

        Flash::success('Cat Sentencia updated successfully.');

        return redirect(route('catSentencias.index'));
    }

    /**
     * Remove the specified CatSentencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catSentencia = $this->catSentenciaRepository->findWithoutFail($id);

        if (empty($catSentencia)) {
            Flash::error('Cat Sentencia not found');

            return redirect(route('catSentencias.index'));
        }

        $this->catSentenciaRepository->delete($id);

        Flash::success('Cat Sentencia deleted successfully.');

        return redirect(route('catSentencias.index'));
    }
}
