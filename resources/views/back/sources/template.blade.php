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
                                    'title' => '来源名称',
                                    'input' => 'text',
                                    'name' => 'source',
                                    'value' => isset($source) ? $source->source : '',
                                    'required' => 'true',
                                ],
                            ])
                            @include('back.partials.input', [
                                'input' => [
                                    'title' => '来源URL',
                                    'input' => 'text',
                                    'name' => 'source_url',
                                    'value' => isset($source) ? $source->source_url : '',
                                    'required' => 'true',
                                ],
                            ])
                            @include('back.partials.input', [
                                'input' => [
                                    'name' => 'type',
                                    'values' => isset($source) ? $source->type : collect(),
                                    'input' => 'select',
                                    'styles' => 'required',
                                    'options' => $source_types,
                                ],
                            ])
                            @include('back.partials.input', [
                                'input' => [
                                    'name' => 'status',
                                    'values' => isset($source) ? $source->status : collect(),
                                    'input' => 'select',
                                    'styles' => 'required',
                                    'options' => $status,
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