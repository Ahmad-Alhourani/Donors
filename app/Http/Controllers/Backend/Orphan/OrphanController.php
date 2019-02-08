<?php

namespace App\Http\Controllers\Backend\Orphan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Orphan\CreateOrphan;
use App\Http\Requests\Backend\Orphan\UpdateOrphan;
use App\Repositories\Backend\OrphanRepository;
use App\Events\Backend\Orphan\OrphanCreated;
use App\Events\Backend\Orphan\OrphanUpdated;
use App\Events\Backend\Orphan\OrphanDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Orphan;

class OrphanController extends Controller
{
    /** @var $orphanRepository */
    private $orphanRepository;

    public function __construct(OrphanRepository $orphanRepo)
    {
        $this->orphanRepository = $orphanRepo;
    }

    /**
     * Display a listing of the Orphan.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->orphanRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->orphanRepository->getPaginatedAndSortable(10);

        return view('backend.orphans.index')->with('orphans', $data);
    }

    /**
     * Show the form for creating a new Orphan.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.orphans.create');
    }

    /**
     * Store a newly created Orphan in storage.
     *
     * @param CreateOrphan $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateOrphan $request)
    {
        $obj = $this->orphanRepository->create(
            $request->only(["name", "f_name", "m_name", "description"])
        );

        event(new OrphanCreated($obj));
        return redirect()
            ->route('admin.orphan.index')
            ->withFlashSuccess(__('alerts.frontend.orphan.saved'));
    }

    /**
     * Display the specified Orphan.
     *
     * @param Orphan $orphan
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Orphan $orphan)
    {
        return view('backend.orphans.show')->with('orphan', $orphan);
    }

    /**
     * Show the form for editing the specified Orphan.
     *
     * @param Orphan $orphan
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Orphan $orphan)
    {
        return view('backend.orphans.edit')->with('orphan', $orphan);
    }

    /**
     * Update the specified Orphan in storage.
     *
     * @param UpdateOrphan $request
     *
     * @param Orphan $orphan
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateOrphan $request, Orphan $orphan)
    {
        $obj = $this->orphanRepository->update($request->all(), $orphan);

        event(new OrphanUpdated($obj));
        return redirect()
            ->route('admin.orphan.index')
            ->withFlashSuccess(__('alerts.frontend.orphan.updated'));
    }

    /**
     * Remove the specified Orphan from storage.
     *
     * @param Orphan $orphan
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Orphan $orphan)
    {
        $obj = $this->orphanRepository->delete($orphan);
        event(new OrphanDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.orphan.deleted'));
    }
}
