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
                            <div class="col-lg-6">
                                @include('back.partials.input', [
                                    'input' => [
                                        'name' => 'guard_name',
                                        'value' => isset($permission) ? $permission->grard_name : '',
                                        'input' => 'select',
                                    ],
                                ])
                                @include('back.partials.specific', [
                                    'specific' => [
                                        'type' => 'inline-input',
                                        'position' => 'front',
                                        'contents' => isset($permission) ? $permission->name : '',
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