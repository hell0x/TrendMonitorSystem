@foreach($factors as $factor)
    <tr>
        <td>{{ $factor->id }}</td>
        <td>{{ $factor->name }}</td>
        <td>{{ $factor->child_name }}</td>
        <td>{{ $factor->created_at }}</td>
        <td>{{ $factor->updated_at }}</td>
        <td>
            <div class="col-md-12">
                <a class="btn btn-success btn-xs col-md-5" href="{{ route('factors.edit', [$factor->id]) }}" factor="button" title="@lang('Show')"><i class="fa fa-list"></i></a>
                <a class="btn btn-danger btn-xs col-md-offset-1 col-md-5" href="{{ route('factors.destroy', [$factor->id]) }}" factor="button" title="@lang('Destory')"><i class="fa fa-times"></i></a>
            </div>
        </td>
    </tr>
@endforeach