@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.notification.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.notifications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.notification.fields.id') }}
                        </th>
                        <td>
                            {{ $notification->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.notification.fields.mode') }}
                        </th>
                        <td>
                            {{ App\Models\Notification::MODE_SELECT[$notification->mode] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.notification.fields.type') }}
                        </th>
                        <td>
                            {{ $notification->type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.notification.fields.status') }}
                        </th>
                        <td>
                            {{ $notification->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.notification.fields.data') }}
                        </th>
                        <td>
                            {{ $notification->data }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.notification.fields.try_count') }}
                        </th>
                        <td>
                            {{ $notification->try_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.notification.fields.done') }}
                        </th>
                        <td>
                            {{ $notification->done }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.notification.fields.remarks') }}
                        </th>
                        <td>
                            {{ $notification->remarks }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.notification.fields.user') }}
                        </th>
                        <td>
                            {{ $notification->user->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.notifications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection