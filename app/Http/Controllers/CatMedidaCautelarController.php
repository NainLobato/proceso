<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatMedidaCautelarRequest;
use App\Http\Requests\UpdateCatMedidaCautelarRequest;
use App\Repositories\CatMedidaCautelarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatMedidaCautelarController extends AppBaseController
{
    /** @var  CatMedidaCautelarRepository */
    private $catMedidaCautelarRepository;

    public function __construct(CatMedidaCautelarRepository $catMedidaCautelarRepo)
    {
        $this->catMedidaCautelarRepository = $catMedidaCautelarRepo;
    }

    /**
     * Display a listing of the CatMedidaCautelar.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catMedidaCautelarRepository->pushCriteria(new RequestCriteria($request));
        $catMedidaCautelars = $this->catMedidaCautelarRepository->all();

        return view('cat_medida_cautelars.index')
            ->with('catMedidaCautelars', $catMedidaCautelars);
    }

    /**
     * Show the form for creating a new CatMedidaCautelar.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_medida_cautelars.create');
    }

    /**
     * Store a newly created CatMedidaCautelar in storage.
     *
     * @param CreateCatMedidaCautelarRequest $request
     *
     * @return Response
     */
    public function store(CreateCatMedidaCautelarRequest $request)
    {
        $input = $request->all();

        $catMedidaCautelar = $this->catMedidaCautelarRepository->create($input);

        Flash::success('Cat Medida Cautelar saved successfully.');

        return redirect(route('catMedidaCautelars.index'));
    }

    /**
     * Display the specified CatMedidaCautelar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catMedidaCautelar = $this->catMedidaCautelarRepository->findWithoutFail($id);

        if (empty($catMedidaCautelar)) {
            Flash::error('Cat Medida Cautelar not found');

            return redirect(route('catMedidaCautelars.index'));
        }

        return view('cat_medida_cautelars.show')->with('catMedidaCautelar', $catMedidaCautelar);
    }

    /**
     * Show the form for editing the specified CatMedidaCautelar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catMedidaCautelar = $this->catMedidaCautelarRepository->findWithoutFail($id);

        if (empty($catMedidaCautelar)) {
            Flash::error('Cat Medida Cautelar not found');

            return redirect(route('catMedidaCautelars.index'));
        }

        return view('cat_medida_cautelars.edit')->with('catMedidaCautelar', $catMedidaCautelar);
    }

    /**
     * Update the specified CatMedidaCautelar in storage.
     *
     * @param  int              $id
     * @param UpdateCatMedidaCautelarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatMedidaCautelarRequest $request)
    {
        $catMedidaCautelar = $this->catMedidaCautelarRepository->findWithoutFail($id);

        if (empty($catMedidaCautelar)) {
            Flash::error('Cat Medida Cautelar not found');

            return redirect(route('catMedidaCautelars.index'));
        }

        $catMedidaCautelar = $this->catMedidaCautelarRepository->update($request->all(), $id);

        Flash::success('Cat Medida Cautelar updated successfully.');

        return redirect(route('catMedidaCautelars.index'));
    }

    /**
     * Remove the specified CatMedidaCautelar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catMedidaCautelar = $this->catMedidaCautelarRepository->findWithoutFail($id);

        if (empty($catMedidaCautelar)) {
            Flash::error('Cat Medida Cautelar not found');

            return redirect(route('catMedidaCautelars.index'));
        }

        $this->catMedidaCautelarRepository->delete($id);

        Flash::success('Cat Medida Cautelar deleted successfully.');

        return redirect(route('catMedidaCautelars.index'));
    }
}
