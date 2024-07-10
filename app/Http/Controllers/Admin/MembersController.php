<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyMemberRequest;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\District;
use App\Models\Institution;
use App\Models\Member;
use App\Models\State;
use App\Models\Team;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class MembersController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('member_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Member::with(['district', 'state', 'home_state', 'institution', 'team'])->select(sprintf('%s.*', (new Member)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'member_show';
                $editGate      = 'member_edit';
                $deleteGate    = 'member_delete';
                $crudRoutePart = 'members';

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
            $table->editColumn('booth_name', function ($row) {
                return $row->booth_name ? $row->booth_name : '';
            });
            $table->editColumn('booth_no', function ($row) {
                return $row->booth_no ? $row->booth_no : '';
            });
            $table->editColumn('assembly_constituency', function ($row) {
                return $row->assembly_constituency ? $row->assembly_constituency : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('first_name', function ($row) {
                return $row->first_name ? $row->first_name : '';
            });
            $table->editColumn('middle_name', function ($row) {
                return $row->middle_name ? $row->middle_name : '';
            });
            $table->editColumn('last_name', function ($row) {
                return $row->last_name ? $row->last_name : '';
            });

            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });
            $table->editColumn('mobile', function ($row) {
                return $row->mobile ? $row->mobile : '';
            });
            $table->editColumn('gender', function ($row) {
                return $row->gender ? Member::GENDER_SELECT[$row->gender] : '';
            });
            $table->editColumn('disability', function ($row) {
                return $row->disability ? Member::DISABILITY_SELECT[$row->disability] : '';
            });
            $table->editColumn('disability_type', function ($row) {
                return $row->disability_type ? Member::DISABILITY_TYPE_SELECT[$row->disability_type] : '';
            });
            $table->editColumn('religion', function ($row) {
                return $row->religion ? Member::RELIGION_SELECT[$row->religion] : '';
            });
            $table->editColumn('address', function ($row) {
                return $row->address ? $row->address : '';
            });
            $table->addColumn('district_name', function ($row) {
                return $row->district ? $row->district->name : '';
            });

            $table->addColumn('state_name', function ($row) {
                return $row->state ? $row->state->name : '';
            });

            $table->addColumn('home_state_name', function ($row) {
                return $row->home_state ? $row->home_state->name : '';
            });

            $table->editColumn('department', function ($row) {
                return $row->department ? $row->department : '';
            });
            $table->editColumn('subject', function ($row) {
                return $row->subject ? $row->subject : '';
            });
            $table->editColumn('designation', function ($row) {
                return $row->designation ? $row->designation : '';
            });
            $table->addColumn('institution_name', function ($row) {
                return $row->institution ? $row->institution->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'district', 'state', 'home_state', 'institution']);

            return $table->make(true);
        }

        $districts    = District::get();
        $states       = State::get();
        $institutions = Institution::get();
        $teams        = Team::get();

        return view('admin.members.index', compact('districts', 'states', 'institutions', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('member_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $districts = District::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $states = State::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $home_states = State::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $institutions = Institution::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.members.create', compact('districts', 'home_states', 'institutions', 'states'));
    }

    public function store(StoreMemberRequest $request)
    {
        $member = Member::create($request->all());

        return redirect()->route('admin.members.index');
    }

    public function edit(Member $member)
    {
        abort_if(Gate::denies('member_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $districts = District::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $states = State::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $home_states = State::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $institutions = Institution::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $member->load('district', 'state', 'home_state', 'institution', 'team');

        return view('admin.members.edit', compact('districts', 'home_states', 'institutions', 'member', 'states'));
    }

    public function update(UpdateMemberRequest $request, Member $member)
    {
        $member->update($request->all());

        return redirect()->route('admin.members.index');
    }

    public function show(Member $member)
    {
        abort_if(Gate::denies('member_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member->load('district', 'state', 'home_state', 'institution', 'team');

        return view('admin.members.show', compact('member'));
    }

    public function destroy(Member $member)
    {
        abort_if(Gate::denies('member_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $member->delete();

        return back();
    }

    public function massDestroy(MassDestroyMemberRequest $request)
    {
        $members = Member::find(request('ids'));

        foreach ($members as $member) {
            $member->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
