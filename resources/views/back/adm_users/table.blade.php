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
            <div class="panel panel-default">
                <div class="panel-heading">
                    后台用户列表
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>用户名</th>
                                <td>邮箱</td>
                                <th>创建时间</th>
                                <th>更新时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($adm_users as $adm_user)
                                <tr>
                                    <td>{{ $adm_user->id }}</td>
                                    <td>{{ $adm_user->name }}</td>
                                    <td>{{ $adm_user->email }}</td>
                                    <td>{{ $adm_user->created_at }}</td>
                                    <td>{{ $adm_user->updated_at }}</td>
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