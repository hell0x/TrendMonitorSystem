@foreach($roles as $role)
    <tr>
        <td>{{ $role->id }}</td>
        <td>{{ $role->name }}</td>
        <td>{{ $role->guard_name }}</td>
        <td>{{ $role->created_at }}</td>
        <td>{{ $role->updated_at }}</td>
        <td>
            <div class="col-md-12">
                <a class="btn btn-success btn-xs col-md-5" href="{{ route('roles.edit', [$role->id]) }}" role="button" title="@lang('Show')"><i class="fa fa-list"></i></a>
                <a class="btn btn-danger btn-xs col-md-offset-1 col-md-5" href="{{ route('roles.destroy', [$role->id]) }}" role="button" title="@lang('Destory')"><i class="fa fa-times"></i></a>
            </div>
        </td>
    </tr>
@endforeach