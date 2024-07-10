@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.member.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.members.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.id') }}
                        </th>
                        <td>
                            {{ $member->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.booth_name') }}
                        </th>
                        <td>
                            {{ $member->booth_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.booth_no') }}
                        </th>
                        <td>
                            {{ $member->booth_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.assembly_constituency') }}
                        </th>
                        <td>
                            {{ $member->assembly_constituency }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.name') }}
                        </th>
                        <td>
                            {{ $member->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.first_name') }}
                        </th>
                        <td>
                            {{ $member->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.middle_name') }}
                        </th>
                        <td>
                            {{ $member->middle_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.last_name') }}
                        </th>
                        <td>
                            {{ $member->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.dob') }}
                        </th>
                        <td>
                            {{ $member->dob }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.email') }}
                        </th>
                        <td>
                            {{ $member->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.mobile') }}
                        </th>
                        <td>
                            {{ $member->mobile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Models\Member::GENDER_SELECT[$member->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.disability') }}
                        </th>
                        <td>
                            {{ App\Models\Member::DISABILITY_SELECT[$member->disability] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.disability_type') }}
                        </th>
                        <td>
                            {{ App\Models\Member::DISABILITY_TYPE_SELECT[$member->disability_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.religion') }}
                        </th>
                        <td>
                            {{ App\Models\Member::RELIGION_SELECT[$member->religion] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.address') }}
                        </th>
                        <td>
                            {{ $member->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.district') }}
                        </th>
                        <td>
                            {{ $member->district->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.state') }}
                        </th>
                        <td>
                            {{ $member->state->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.home_state') }}
                        </th>
                        <td>
                            {{ $member->home_state->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.department') }}
                        </th>
                        <td>
                            {{ $member->department }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.subject') }}
                        </th>
                        <td>
                            {{ $member->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.designation') }}
                        </th>
                        <td>
                            {{ $member->designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.member.fields.institution') }}
                        </th>
                        <td>
                            {{ $member->institution->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.members.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection