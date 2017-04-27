<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatEtniaRequest;
use App\Http\Requests\UpdateCatEtniaRequest;
use App\Repositories\CatEtniaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatEtniaController extends AppBaseController
{
    /** @var  CatEtniaRepository */
    private $catEtniaRepository;

    public function __construct(CatEtniaRepository $catEtniaRepo)
    {
        $this->catEtniaRepository = $catEtniaRepo;
    }

    /**
     * Display a listing of the CatEtnia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catEtniaRepository->pushCriteria(new RequestCriteria($request));
        $catEtnias = $this->catEtniaRepository->all();

        return view('cat_etnias.index')
            ->with('catEtnias', $catEtnias);
    }

    /**
     * Show the form for creating a new CatEtnia.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_etnias.create');
    }

    /**
     * Store a newly created CatEtnia in storage.
     *
     * @param CreateCatEtniaRequest $request
     *
     * @return Response
     */
    public function store(CreateCatEtniaRequest $request)
    {
        $input = $request->all();

        $catEtnia = $this->catEtniaRepository->create($input);

        Flash::success('Cat Etnia saved successfully.');

        return redirect(route('catEtnias.index'));
    }

    /**
     * Display the specified CatEtnia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catEtnia = $this->catEtniaRepository->findWithoutFail($id);

        if (empty($catEtnia)) {
            Flash::error('Cat Etnia not found');

            return redirect(route('catEtnias.index'));
        }

        return view('cat_etnias.show')->with('catEtnia', $catEtnia);
    }

    /**
     * Show the form for editing the specified CatEtnia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catEtnia = $this->catEtniaRepository->findWithoutFail($id);

        if (empty($catEtnia)) {
            Flash::error('Cat Etnia not found');

            return redirect(route('catEtnias.index'));
        }

        return view('cat_etnias.edit')->with('catEtnia', $catEtnia);
    }

    /**
     * Update the specified CatEtnia in storage.
     *
     * @param  int              $id
     * @param UpdateCatEtniaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatEtniaRequest $request)
    {
        $catEtnia = $this->catEtniaRepository->findWithoutFail($id);

        if (empty($catEtnia)) {
            Flash::error('Cat Etnia not found');

            return redirect(route('catEtnias.index'));
        }

        $catEtnia = $this->catEtniaRepository->update($request->all(), $id);

        Flash::success('Cat Etnia updated successfully.');

        return redirect(route('catEtnias.index'));
    }

    /**
     * Remove the specified CatEtnia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catEtnia = $this->catEtniaRepository->findWithoutFail($id);

        if (empty($catEtnia)) {
            Flash::error('Cat Etnia not found');

            return redirect(route('catEtnias.index'));
        }

        $this->catEtniaRepository->delete($id);

        Flash::success('Cat Etnia deleted successfully.');

        return redirect(route('catEtnias.index'));
    }
}
