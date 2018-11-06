@extends('back.layout')

@section('main')
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
                        权限管理
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        @yield('form-open')
                        {{ csrf_field() }}
                        <div class="col-lg-12">
                            @include('back.partials.input', [
                                'input' => [
                                    'title' => '角色',
                                    'input' => 'text',
                                    'name' => 'name',
                                    'value' => isset($role) ? $role->name : '',
                                    'required' => 'true',
                                ],
                            ])
                            @include('back.partials.input', [
                                'input' => [
                                    'title' => '前台权限',
                                    'name' => 'web_permission',
                                    'values' => isset($role) ? $role->permissions : collect(),
                                    'input' => 'checkbox',
                                    'options' => $web_permissions,
                                ],
                            ])
                            @include('back.partials.input', [
                                'input' => [
                                    'title' => '后台权限',
                                    'name' => 'back_permission',
                                    'values' => isset($role) ? $role->permissions : collect(),
                                    'input' => 'checkbox',
                                    'options' => $back_permissions,
                                ],
                            ])
                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                        </form>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection