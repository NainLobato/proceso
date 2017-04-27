<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatJuzgadoFedRequest;
use App\Http\Requests\UpdateCatJuzgadoFedRequest;
use App\Repositories\CatJuzgadoFedRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatJuzgadoFedController extends AppBaseController
{
    /** @var  CatJuzgadoFedRepository */
    private $catJuzgadoFedRepository;

    public function __construct(CatJuzgadoFedRepository $catJuzgadoFedRepo)
    {
        $this->catJuzgadoFedRepository = $catJuzgadoFedRepo;
    }

    /**
     * Display a listing of the CatJuzgadoFed.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catJuzgadoFedRepository->pushCriteria(new RequestCriteria($request));
        $catJuzgadoFeds = $this->catJuzgadoFedRepository->all();

        return view('cat_juzgado_feds.index')
            ->with('catJuzgadoFeds', $catJuzgadoFeds);
    }

    /**
     * Show the form for creating a new CatJuzgadoFed.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_juzgado_feds.create');
    }

    /**
     * Store a newly created CatJuzgadoFed in storage.
     *
     * @param CreateCatJuzgadoFedRequest $request
     *
     * @return Response
     */
    public function store(CreateCatJuzgadoFedRequest $request)
    {
        $input = $request->all();

        $catJuzgadoFed = $this->catJuzgadoFedRepository->create($input);

        Flash::success('Cat Juzgado Fed saved successfully.');

        return redirect(route('catJuzgadoFeds.index'));
    }

    /**
     * Display the specified CatJuzgadoFed.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catJuzgadoFed = $this->catJuzgadoFedRepository->findWithoutFail($id);

        if (empty($catJuzgadoFed)) {
            Flash::error('Cat Juzgado Fed not found');

            return redirect(route('catJuzgadoFeds.index'));
        }

        return view('cat_juzgado_feds.show')->with('catJuzgadoFed', $catJuzgadoFed);
    }

    /**
     * Show the form for editing the specified CatJuzgadoFed.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catJuzgadoFed = $this->catJuzgadoFedRepository->findWithoutFail($id);

        if (empty($catJuzgadoFed)) {
            Flash::error('Cat Juzgado Fed not found');

            return redirect(route('catJuzgadoFeds.index'));
        }

        return view('cat_juzgado_feds.edit')->with('catJuzgadoFed', $catJuzgadoFed);
    }

    /**
     * Update the specified CatJuzgadoFed in storage.
     *
     * @param  int              $id
     * @param UpdateCatJuzgadoFedRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatJuzgadoFedRequest $request)
    {
        $catJuzgadoFed = $this->catJuzgadoFedRepository->findWithoutFail($id);

        if (empty($catJuzgadoFed)) {
            Flash::error('Cat Juzgado Fed not found');

            return redirect(route('catJuzgadoFeds.index'));
        }

        $catJuzgadoFed = $this->catJuzgadoFedRepository->update($request->all(), $id);

        Flash::success('Cat Juzgado Fed updated successfully.');

        return redirect(route('catJuzgadoFeds.index'));
    }

    /**
     * Remove the specified CatJuzgadoFed from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catJuzgadoFed = $this->catJuzgadoFedRepository->findWithoutFail($id);

        if (empty($catJuzgadoFed)) {
            Flash::error('Cat Juzgado Fed not found');

            return redirect(route('catJuzgadoFeds.index'));
        }

        $this->catJuzgadoFedRepository->delete($id);

        Flash::success('Cat Juzgado Fed deleted successfully.');

        return redirect(route('catJuzgadoFeds.index'));
    }
}
