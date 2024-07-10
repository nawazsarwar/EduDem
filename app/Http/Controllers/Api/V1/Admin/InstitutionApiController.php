<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInstitutionRequest;
use App\Http\Requests\UpdateInstitutionRequest;
use App\Http\Resources\Admin\InstitutionResource;
use App\Models\Institution;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InstitutionApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('institution_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InstitutionResource(Institution::with(['district'])->get());
    }

    public function store(StoreInstitutionRequest $request)
    {
        $institution = Institution::create($request->all());

        return (new InstitutionResource($institution))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Institution $institution)
    {
        abort_if(Gate::denies('institution_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InstitutionResource($institution->load(['district']));
    }

    public function update(UpdateInstitutionRequest $request, Institution $institution)
    {
        $institution->update($request->all());

        return (new InstitutionResource($institution))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Institution $institution)
    {
        abort_if(Gate::denies('institution_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $institution->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
