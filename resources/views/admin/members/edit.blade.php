@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.member.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.members.update", [$member->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="booth_name">{{ trans('cruds.member.fields.booth_name') }}</label>
                <input class="form-control {{ $errors->has('booth_name') ? 'is-invalid' : '' }}" type="text" name="booth_name" id="booth_name" value="{{ old('booth_name', $member->booth_name) }}">
                @if($errors->has('booth_name'))
                    <span class="text-danger">{{ $errors->first('booth_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.booth_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="booth_no">{{ trans('cruds.member.fields.booth_no') }}</label>
                <input class="form-control {{ $errors->has('booth_no') ? 'is-invalid' : '' }}" type="text" name="booth_no" id="booth_no" value="{{ old('booth_no', $member->booth_no) }}">
                @if($errors->has('booth_no'))
                    <span class="text-danger">{{ $errors->first('booth_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.booth_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="assembly_constituency">{{ trans('cruds.member.fields.assembly_constituency') }}</label>
                <input class="form-control {{ $errors->has('assembly_constituency') ? 'is-invalid' : '' }}" type="text" name="assembly_constituency" id="assembly_constituency" value="{{ old('assembly_constituency', $member->assembly_constituency) }}">
                @if($errors->has('assembly_constituency'))
                    <span class="text-danger">{{ $errors->first('assembly_constituency') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.assembly_constituency_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.member.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $member->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="first_name">{{ trans('cruds.member.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', $member->first_name) }}" required>
                @if($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="middle_name">{{ trans('cruds.member.fields.middle_name') }}</label>
                <input class="form-control {{ $errors->has('middle_name') ? 'is-invalid' : '' }}" type="text" name="middle_name" id="middle_name" value="{{ old('middle_name', $member->middle_name) }}">
                @if($errors->has('middle_name'))
                    <span class="text-danger">{{ $errors->first('middle_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.middle_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_name">{{ trans('cruds.member.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', $member->last_name) }}">
                @if($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dob">{{ trans('cruds.member.fields.dob') }}</label>
                <input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob', $member->dob) }}">
                @if($errors->has('dob'))
                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.dob_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.member.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $member->email) }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile">{{ trans('cruds.member.fields.mobile') }}</label>
                <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{ old('mobile', $member->mobile) }}">
                @if($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.mobile_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.member.fields.gender') }}</label>
                <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender" id="gender">
                    <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Member::GENDER_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('gender', $member->gender) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.member.fields.disability') }}</label>
                <select class="form-control {{ $errors->has('disability') ? 'is-invalid' : '' }}" name="disability" id="disability">
                    <option value disabled {{ old('disability', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Member::DISABILITY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('disability', $member->disability) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('disability'))
                    <span class="text-danger">{{ $errors->first('disability') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.disability_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.member.fields.disability_type') }}</label>
                <select class="form-control {{ $errors->has('disability_type') ? 'is-invalid' : '' }}" name="disability_type" id="disability_type">
                    <option value disabled {{ old('disability_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Member::DISABILITY_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('disability_type', $member->disability_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('disability_type'))
                    <span class="text-danger">{{ $errors->first('disability_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.disability_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.member.fields.religion') }}</label>
                <select class="form-control {{ $errors->has('religion') ? 'is-invalid' : '' }}" name="religion" id="religion">
                    <option value disabled {{ old('religion', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Member::RELIGION_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('religion', $member->religion) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('religion'))
                    <span class="text-danger">{{ $errors->first('religion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.religion_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.member.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address', $member->address) }}</textarea>
                @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="district_id">{{ trans('cruds.member.fields.district') }}</label>
                <select class="form-control select2 {{ $errors->has('district') ? 'is-invalid' : '' }}" name="district_id" id="district_id">
                    @foreach($districts as $id => $entry)
                        <option value="{{ $id }}" {{ (old('district_id') ? old('district_id') : $member->district->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('district'))
                    <span class="text-danger">{{ $errors->first('district') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.district_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="state_id">{{ trans('cruds.member.fields.state') }}</label>
                <select class="form-control select2 {{ $errors->has('state') ? 'is-invalid' : '' }}" name="state_id" id="state_id">
                    @foreach($states as $id => $entry)
                        <option value="{{ $id }}" {{ (old('state_id') ? old('state_id') : $member->state->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="home_state_id">{{ trans('cruds.member.fields.home_state') }}</label>
                <select class="form-control select2 {{ $errors->has('home_state') ? 'is-invalid' : '' }}" name="home_state_id" id="home_state_id">
                    @foreach($home_states as $id => $entry)
                        <option value="{{ $id }}" {{ (old('home_state_id') ? old('home_state_id') : $member->home_state->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('home_state'))
                    <span class="text-danger">{{ $errors->first('home_state') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.home_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="department">{{ trans('cruds.member.fields.department') }}</label>
                <input class="form-control {{ $errors->has('department') ? 'is-invalid' : '' }}" type="text" name="department" id="department" value="{{ old('department', $member->department) }}">
                @if($errors->has('department'))
                    <span class="text-danger">{{ $errors->first('department') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.department_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="subject">{{ trans('cruds.member.fields.subject') }}</label>
                <input class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" type="text" name="subject" id="subject" value="{{ old('subject', $member->subject) }}">
                @if($errors->has('subject'))
                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.subject_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation">{{ trans('cruds.member.fields.designation') }}</label>
                <input class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}" type="text" name="designation" id="designation" value="{{ old('designation', $member->designation) }}">
                @if($errors->has('designation'))
                    <span class="text-danger">{{ $errors->first('designation') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="institution_id">{{ trans('cruds.member.fields.institution') }}</label>
                <select class="form-control select2 {{ $errors->has('institution') ? 'is-invalid' : '' }}" name="institution_id" id="institution_id" required>
                    @foreach($institutions as $id => $entry)
                        <option value="{{ $id }}" {{ (old('institution_id') ? old('institution_id') : $member->institution->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('institution'))
                    <span class="text-danger">{{ $errors->first('institution') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.institution_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection