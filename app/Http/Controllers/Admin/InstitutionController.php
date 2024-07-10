<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyInstitutionRequest;
use App\Http\Requests\StoreInstitutionRequest;
use App\Http\Requests\UpdateInstitutionRequest;
use App\Models\District;
use App\Models\Institution;
use App\Models\Team;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class InstitutionController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('institution_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Institution::with(['district', 'team'])->select(sprintf('%s.*', (new Institution)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'institution_show';
                $editGate      = 'institution_edit';
                $deleteGate    = 'institution_delete';
                $crudRoutePart = 'institutions';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->addColumn('district_name', function ($row) {
                return $row->district ? $row->district->name : '';
            });

            $table->editColumn('address', function ($row) {
                return $row->address ? $row->address : '';
            });
            $table->editColumn('level', function ($row) {
                return $row->level ? Institution::LEVEL_SELECT[$row->level] : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'district']);

            return $table->make(true);
        }

        $districts = District::get();
        $teams     = Team::get();

        return view('admin.institutions.index', compact('districts', 'teams'));
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

        $institution->load('district', 'team');

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

        $institution->load('district', 'team');

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
