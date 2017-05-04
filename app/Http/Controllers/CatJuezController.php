<?php

namespace App\Http\Controllers;

use App\DataTables\CatJuezDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCatJuezRequest;
use App\Http\Requests\UpdateCatJuezRequest;
use App\Repositories\CatJuezRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CatJuezController extends AppBaseController
{
    /** @var  CatJuezRepository */
    private $catJuezRepository;

    public function __construct(CatJuezRepository $catJuezRepo)
    {
        $this->catJuezRepository = $catJuezRepo;
    }

    /**
     * Display a listing of the CatJuez.
     *
     * @param CatJuezDataTable $catJuezDataTable
     * @return Response
     */
    public function index(CatJuezDataTable $catJuezDataTable)
    {
        return $catJuezDataTable->render('cat_juezs.index');
    }

    /**
     * Show the form for creating a new CatJuez.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_juezs.create');
    }

    /**
     * Store a newly created CatJuez in storage.
     *
     * @param CreateCatJuezRequest $request
     *
     * @return Response
     */
    public function store(CreateCatJuezRequest $request)
    {
        $input = $request->all();

        $catJuez = $this->catJuezRepository->create($input);

        Flash::success('Cat Juez saved successfully.');

        return redirect(route('catJuezs.index'));
    }

    /**
     * Display the specified CatJuez.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catJuez = $this->catJuezRepository->findWithoutFail($id);

        if (empty($catJuez)) {
            Flash::error('Cat Juez not found');

            return redirect(route('catJuezs.index'));
        }

        return view('cat_juezs.show')->with('catJuez', $catJuez);
    }

    /**
     * Show the form for editing the specified CatJuez.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catJuez = $this->catJuezRepository->findWithoutFail($id);

        if (empty($catJuez)) {
            Flash::error('Cat Juez not found');

            return redirect(route('catJuezs.index'));
        }

        return view('cat_juezs.edit')->with('catJuez', $catJuez);
    }

    /**
     * Update the specified CatJuez in storage.
     *
     * @param  int              $id
     * @param UpdateCatJuezRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatJuezRequest $request)
    {
        $catJuez = $this->catJuezRepository->findWithoutFail($id);

        if (empty($catJuez)) {
            Flash::error('Cat Juez not found');

            return redirect(route('catJuezs.index'));
        }

        $catJuez = $this->catJuezRepository->update($request->all(), $id);

        Flash::success('Cat Juez updated successfully.');

        return redirect(route('catJuezs.index'));
    }

    /**
     * Remove the specified CatJuez from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catJuez = $this->catJuezRepository->findWithoutFail($id);

        if (empty($catJuez)) {
            Flash::error('Cat Juez not found');

            return redirect(route('catJuezs.index'));
        }

        $this->catJuezRepository->delete($id);

        Flash::success('Cat Juez deleted successfully.');

        return redirect(route('catJuezs.index'));
    }
}
