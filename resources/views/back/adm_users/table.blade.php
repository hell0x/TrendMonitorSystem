@foreach($adm_users as $adm_user)
    <tr>
        <td>{{ $adm_user->id }}</td>
        <td>{{ $adm_user->name }}</td>
        <td>{{ $adm_user->created_at }}</td>
        <td>{{ $adm_user->updated_at }}</td>
        {{--<td>--}}
            {{--<div class="col-md-12">--}}
                {{--<a class="btn btn-success btn-xs col-md-5" href="{{ route('adm_users.edit', [$adm_user->id]) }}" role="button" title="@lang('Show')"><i class="fa fa-list"></i></a>--}}
                {{--<a class="btn btn-danger btn-xs col-md-offset-1 col-md-5" href="{{ route('adm_users.destroy', [$adm_user->id]) }}" role="button" title="@lang('Destory')"><i class="fa fa-times"></i></a>--}}
            {{--</div>--}}
        {{--</td>--}}
    </tr>
@endforeach