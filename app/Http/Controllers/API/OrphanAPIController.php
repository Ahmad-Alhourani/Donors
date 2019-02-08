<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateOrphanAPIRequest;
use App\Http\Requests\API\UpdateOrphanAPIRequest;
use App\Models\Orphan;
use App\Repositories\Backend\OrphanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class OrphanAPIController
 * @package App\Http\Controllers\API
 */
class OrphanAPIController extends Controller
{
    /** @var  OrphanRepository */
    private $orphanRepository;
    /** @var  OrphanModel */
    private $orphanModel;

    public function __construct(OrphanRepository $orphanRepo, Orphan $orphan)
    {
        $this->orphanRepository = $orphanRepo->skipCache(true);
        $this->orphanModel = $orphan;
    }

    /**
     * Display a listing of the Orphan.
     * GET|HEAD /orphans
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $orphans = $this->orphanRepository->all();
        return response()->json([
            'data' => $orphans,
            'Orphans retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Orphan in storage.
     * POST /orphans
     *
     * @param CreateOrphanAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateOrphanAPIRequest $request)
    {
        $input = $request->all();
        $this->orphanRepository->create($input);
        return response()->json(['Orphan saved successfully']);
    }

    /**
     * Display the specified Orphan.
     * GET|HEAD /orphans/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Orphan $orphan */
        //   $orphan = $this->orphanRepository->findByField('id',$id);
        $orphan = $this->orphanModel->find($id);
        return response()->json([
            'data' => $orphan,
            'Orphan retrieved successfully'
        ]);
    }

    /**
     * Update the specified Orphan in storage.
     * PUT/PATCH /orphans/{id}
     *
     * @param  int $id
     * @param UpdateOrphanAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateOrphanAPIRequest $request)
    {
        $input = $request->all();
        /** @var Orphan $orphan */
        $orphan = $this->orphanModel->find($id);
        $orphan = $this->orphanRepository->update($orphan, $input);
        return response()->json(['Orphan updated successfully']);
    }

    /**
     * Remove the specified Orphan from storage.
     * DELETE /orphans/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Orphan $orphan */
        $orphan = $this->orphanModel->find($id);
        $orphan->delete();

        return response()->json('Orphan deleted successfully');
    }
}
