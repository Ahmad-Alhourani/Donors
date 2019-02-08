<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateOrphanSponsorshipAPIRequest;
use App\Http\Requests\API\UpdateOrphanSponsorshipAPIRequest;
use App\Models\OrphanSponsorship;
use App\Repositories\Backend\OrphanSponsorshipRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\Donor;
use App\Models\Orphan;

/**
 * Class OrphanSponsorshipAPIController
 * @package App\Http\Controllers\API
 */
class OrphanSponsorshipAPIController extends Controller
{
    /** @var  OrphanSponsorshipRepository */
    private $orphansponsorshipRepository;
    /** @var  OrphanSponsorshipModel */
    private $orphansponsorshipModel;

    public function __construct(
        OrphanSponsorshipRepository $orphansponsorshipRepo,
        OrphanSponsorship $orphansponsorship
    ) {
        $this->orphansponsorshipRepository = $orphansponsorshipRepo->skipCache(
            true
        );
        $this->orphansponsorshipModel = $orphansponsorship;
    }

    /**
     * Display a listing of the OrphanSponsorship.
     * GET|HEAD /orphan_sponsorships
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $orphan_sponsorships = $this->orphansponsorshipRepository->all();
        return response()->json([
            'data' => $orphan_sponsorships,
            'OrphanSponsorships retrieved successfully'
        ]);
    }

    /**
     * Store a newly created OrphanSponsorship in storage.
     * POST /orphan_sponsorships
     *
     * @param CreateOrphanSponsorshipAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateOrphanSponsorshipAPIRequest $request)
    {
        $input = $request->all();
        $this->orphansponsorshipRepository->create($input);
        return response()->json(['OrphanSponsorship saved successfully']);
    }

    /**
     * Display the specified OrphanSponsorship.
     * GET|HEAD /orphan_sponsorships/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var OrphanSponsorship $orphansponsorship */
        //   $orphansponsorship = $this->orphansponsorshipRepository->findByField('id',$id);
        $orphansponsorship = $this->orphansponsorshipModel->find($id);
        return response()->json([
            'data' => $orphansponsorship,
            'OrphanSponsorship retrieved successfully'
        ]);
    }

    /**
     * Update the specified OrphanSponsorship in storage.
     * PUT/PATCH /orphan_sponsorships/{id}
     *
     * @param  int $id
     * @param UpdateOrphanSponsorshipAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateOrphanSponsorshipAPIRequest $request)
    {
        $input = $request->all();
        /** @var OrphanSponsorship $orphansponsorship */
        $orphansponsorship = $this->orphansponsorshipModel->find($id);
        $orphansponsorship = $this->orphansponsorshipRepository->update(
            $orphansponsorship,
            $input
        );
        return response()->json(['OrphanSponsorship updated successfully']);
    }

    /**
     * Remove the specified OrphanSponsorship from storage.
     * DELETE /orphan_sponsorships/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var OrphanSponsorship $orphansponsorship */
        $orphansponsorship = $this->orphansponsorshipModel->find($id);
        $orphansponsorship->delete();

        return response()->json('OrphanSponsorship deleted successfully');
    }
}
