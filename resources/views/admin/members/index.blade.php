@extends('layouts.admin')
@section('content')
@can('member_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.members.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.member.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.member.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Member">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.member.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.booth_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.booth_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.assembly_constituency') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.first_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.middle_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.last_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.dob') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.mobile') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.disability') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.disability_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.religion') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.district') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.state') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.home_state') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.department') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.subject') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.institution') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Member::GENDER_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Member::DISABILITY_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Member::DISABILITY_TYPE_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Member::RELIGION_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($districts as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($states as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($states as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($institutions as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $key => $member)
                        <tr data-entry-id="{{ $member->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $member->id ?? '' }}
                            </td>
                            <td>
                                {{ $member->booth_name ?? '' }}
                            </td>
                            <td>
                                {{ $member->booth_no ?? '' }}
                            </td>
                            <td>
                                {{ $member->assembly_constituency ?? '' }}
                            </td>
                            <td>
                                {{ $member->name ?? '' }}
                            </td>
                            <td>
                                {{ $member->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $member->middle_name ?? '' }}
                            </td>
                            <td>
                                {{ $member->last_name ?? '' }}
                            </td>
                            <td>
                                {{ $member->dob ?? '' }}
                            </td>
                            <td>
                                {{ $member->email ?? '' }}
                            </td>
                            <td>
                                {{ $member->mobile ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Member::GENDER_SELECT[$member->gender] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Member::DISABILITY_SELECT[$member->disability] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Member::DISABILITY_TYPE_SELECT[$member->disability_type] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Member::RELIGION_SELECT[$member->religion] ?? '' }}
                            </td>
                            <td>
                                {{ $member->address ?? '' }}
                            </td>
                            <td>
                                {{ $member->district->name ?? '' }}
                            </td>
                            <td>
                                {{ $member->state->name ?? '' }}
                            </td>
                            <td>
                                {{ $member->home_state->name ?? '' }}
                            </td>
                            <td>
                                {{ $member->department ?? '' }}
                            </td>
                            <td>
                                {{ $member->subject ?? '' }}
                            </td>
                            <td>
                                {{ $member->designation ?? '' }}
                            </td>
                            <td>
                                {{ $member->institution->name ?? '' }}
                            </td>
                            <td>
                                @can('member_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.members.show', $member->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('member_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.members.edit', $member->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('member_delete')
                                    <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('member_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.members.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Member:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection