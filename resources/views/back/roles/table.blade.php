@foreach($roles as $role)
    <tr>
        <td>{{ $role->id }}</td>
        <td>{{ $role->name }}</td>
        <td>{{ $role->guard_name }}</td>
        <td>{{ $role->created_at }}</td>
        <td>{{ $role->updated_at }}</td>
    </tr>
@endforeach