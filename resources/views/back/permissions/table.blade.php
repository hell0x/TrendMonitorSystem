<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tables</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            @if (session('post-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                    @endslot
                    {!! session('post-ok') !!}
                @endcomponent
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    权限列表
                    <a href="{{ route('permissions.create') }}" class="btn btn-primary">权限添加</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>权限名</th>
                                <td>权限类型</td>
                                <th>创建时间</th>
                                <th>更新时间</th>
                                <td>操作</td>
                            </tr>
                            </thead>
                            <tbody>
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
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            {{ $links }}
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->