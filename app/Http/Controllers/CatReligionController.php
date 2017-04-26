<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatReligionRequest;
use App\Http\Requests\UpdateCatReligionRequest;
use App\Repositories\CatReligionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatReligionController extends AppBaseController
{
    /** @var  CatReligionRepository */
    private $catReligionRepository;

    public function __construct(CatReligionRepository $catReligionRepo)
    {
        $this->catReligionRepository = $catReligionRepo;
    }

    /**
     * Display a listing of the CatReligion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catReligionRepository->pushCriteria(new RequestCriteria($request));
        $catReligions = $this->catReligionRepository->all();

        return view('cat_religions.index')
            ->with('catReligions', $catReligions);
    }

    /**
     * Show the form for creating a new CatReligion.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_religions.create');
    }

    /**
     * Store a newly created CatReligion in storage.
     *
     * @param CreateCatReligionRequest $request
     *
     * @return Response
     */
    public function store(CreateCatReligionRequest $request)
    {
        $input = $request->all();

        $catReligion = $this->catReligionRepository->create($input);

        Flash::success('Cat Religion saved successfully.');

        return redirect(route('catReligions.index'));
    }

    /**
     * Display the specified CatReligion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catReligion = $this->catReligionRepository->findWithoutFail($id);

        if (empty($catReligion)) {
            Flash::error('Cat Religion not found');

            return redirect(route('catReligions.index'));
        }

        return view('cat_religions.show')->with('catReligion', $catReligion);
    }

    /**
     * Show the form for editing the specified CatReligion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catReligion = $this->catReligionRepository->findWithoutFail($id);

        if (empty($catReligion)) {
            Flash::error('Cat Religion not found');

            return redirect(route('catReligions.index'));
        }

        return view('cat_religions.edit')->with('catReligion', $catReligion);
    }

    /**
     * Update the specified CatReligion in storage.
     *
     * @param  int              $id
     * @param UpdateCatReligionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatReligionRequest $request)
    {
        $catReligion = $this->catReligionRepository->findWithoutFail($id);

        if (empty($catReligion)) {
            Flash::error('Cat Religion not found');

            return redirect(route('catReligions.index'));
        }

        $catReligion = $this->catReligionRepository->update($request->all(), $id);

        Flash::success('Cat Religion updated successfully.');

        return redirect(route('catReligions.index'));
    }

    /**
     * Remove the specified CatReligion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catReligion = $this->catReligionRepository->findWithoutFail($id);

        if (empty($catReligion)) {
            Flash::error('Cat Religion not found');

            return redirect(route('catReligions.index'));
        }

        $this->catReligionRepository->delete($id);

        Flash::success('Cat Religion deleted successfully.');

        return redirect(route('catReligions.index'));
    }
}
