@foreach($sources as $source)
    <tr>
        <td>{{ $source->id }}</td>
        <td>{{ $source->source }}</td>
        <td>{{ $source->source_url }}</td>
        <td>{{ $source->type }}</td>
        <td>{{ $source->status }}</td>
        <td>{{ $source->created_at }}</td>
        <td>{{ $source->updated_at }}</td>
        <td>
            <div class="col-md-12">
                <a class="btn btn-success btn-xs col-md-5" href="{{ route('sources.edit', [$source->id]) }}" role="button" title="@lang('Show')"><i class="fa fa-list"></i></a>
                <a class="btn btn-danger btn-xs col-md-offset-1 col-md-5" href="{{ route('sources.destroy', [$source->id]) }}" role="button" title="@lang('Destory')"><i class="fa fa-times"></i></a>
            </div>
        </td>
    </tr>
@endforeach