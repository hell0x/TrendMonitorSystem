@foreach($permissions as $permission)
    <tr>
        <td>{{ $permission->id }}</td>
        <td>{{ $permission->name }}</td>
        <td>{{ $permission->guard_name }}</td>
        <td>{{ $permission->created_at }}</td>
        <td>{{ $permission->updated_at }}</td>
        <td>
            <div class="col-md-12">
                <a class="btn btn-success btn-xs col-md-5" href="{{ route('permissions.edit', [$permission->id]) }}" role="button" title="@lang('Show')"><i class="fa fa-list"></i></a>
                <a class="btn btn-danger btn-xs col-md-offset-1 col-md-5" href="{{ route('permissions.destroy', [$permission->id]) }}" role="button" title="@lang('Destory')"><i class="fa fa-times"></i></a>
            </div>
        </td>
    </tr>
@endforeach