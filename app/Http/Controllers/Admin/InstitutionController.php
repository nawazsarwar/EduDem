<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyInstitutionRequest;
use App\Http\Requests\StoreInstitutionRequest;
use App\Http\Requests\UpdateInstitutionRequest;
use App\Models\District;
use App\Models\Institution;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InstitutionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('institution_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $institutions = Institution::with(['district'])->get();

        $districts = District::get();

        return view('admin.institutions.index', compact('districts', 'institutions'));
    }

    public function create()
    {
        abort_if(Gate::denies('institution_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $districts = District::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.institutions.create', compact('districts'));
    }

    public function store(StoreInstitutionRequest $request)
    {
        $institution = Institution::create($request->all());

        return redirect()->route('admin.institutions.index');
    }

    public function edit(Institution $institution)
    {
        abort_if(Gate::denies('institution_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $districts = District::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $institution->load('district');

        return view('admin.institutions.edit', compact('districts', 'institution'));
    }

    public function update(UpdateInstitutionRequest $request, Institution $institution)
    {
        $institution->update($request->all());

        return redirect()->route('admin.institutions.index');
    }

    public function show(Institution $institution)
    {
        abort_if(Gate::denies('institution_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $institution->load('district');

        return view('admin.institutions.show', compact('institution'));
    }

    public function destroy(Institution $institution)
    {
        abort_if(Gate::denies('institution_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $institution->delete();

        return back();
    }

    public function massDestroy(MassDestroyInstitutionRequest $request)
    {
        $institutions = Institution::find(request('ids'));

        foreach ($institutions as $institution) {
            $institution->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
