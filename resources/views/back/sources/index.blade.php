@extends('back.layout')

@section('css')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
    <style>
        input, th span {
            cursor: pointer;
        }
    </style>
@endsection

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
                        来源列表
                        <a href="{{ route('sources.create') }}" class="btn btn-primary">来源添加</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>来源名称</th>
                                    <td>来源URL</td>
                                    <th>网站类型</th>
                                    <td>状态</td>
                                    <th>创建时间</th>
                                    <th>更新时间</th>
                                    <td>操作</td>
                                </tr>
                                </thead>
                                <tbody id="pannel">
                                @if (session('source-ok'))
                                    @component('back.components.alert')
                                        @slot('type')
                                            success
                                        @endslot
                                        {!! session('source-ok') !!}
                                    @endcomponent
                                @endif
                                @include('back.sources.table', compact('sources'))
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
@endsection

@section('js')
    <script src="{{ asset('admin/js/back.js') }}"></script>
    <script>

        var source = (function () {

            var url = '{{ route('sources.index') }}'
            var swalTitle = '@lang('Really destroy source ?')'
            var confirmButtonText = '@lang('Yes')'
            var cancelButtonText = '@lang('No')'
            var errorAjax = '@lang('Looks like there is a server issue...')'

            var onReady = function () {
                $('#pagination').on('click', 'ul.pagination a', function (event) {
                    back.pagination(event, $(this), errorAjax)
                })
                $('#pannel').on('change', ':checkbox[name="seen"]', function () {
                    back.seen(url, $(this), errorAjax)
                })
                    .on('change', ':checkbox[name="status"]', function () {
                        back.status(url, $(this), errorAjax)
                    })
                    .on('click', 'td a.btn-danger', function (event) {
                        back.destroy(event, $(this), url, swalTitle, confirmButtonText, cancelButtonText, errorAjax)
                    })
                $('th span').click(function () {
                    back.ordering(url, $(this), errorAjax)
                })
                $('.box-header :radio, .box-header :checkbox').click(function () {
                    back.filters(url, errorAjax)
                })
            }

            return {
                onReady: onReady
            }

        })()

        $(document).ready(source.onReady)

    </script>
@endsection