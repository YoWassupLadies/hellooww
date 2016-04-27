@extends('layouts/layout')

@section('content')
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Pesquisar">
            </div>
        </form>
        <ul class="nav menu">
            <li><a href="{{url('/')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Início</a></li>
            <li><a href="{{url('dashboard')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Área de Trabalho</a></li>

            <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg></span> Utilizadores
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="{{url('alunos')}}">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Alunos
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{url('professores')}}">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Professores
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{url('admins')}}">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Administradores
                        </a>
                    </li>
                </ul>
            </li>

            <li><a href="{{url('disciplinas')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Disciplinas</a></li>
            <li class="active"><a href="{{url('turmas')}}" ><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg> Turmas</a></li>
            <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></span> Exames
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li>
                        <a class="" href="{{url('examesfeitos')}}">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Feitos
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{url('examesnaofeitos')}}">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Não feitos
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="{{url('aulasonline')}}"><svg class="glyph stroked paperclip"><use xlink:href="#stroked-paperclip"/></svg> Aulas Online</a></li>

            <li role="presentation" class="divider"></li>
            <li><a href="{{url('tools')}}"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg> Ferramentas</a></li>
        </ul>

    </div><!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Turmas</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lista das Turmas</h1>
            </div>
        </div><!--/.row-->


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="asc">
                            <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name"  data-sortable="true">Nome</th>
                                <th data-field="email" data-sortable="true">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($turmas as $turma)
                            <tr>
                                <td>{{$turma->id}}</td>
                                <td>{{$turma->nome}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
        <script>
            $(function () {
                $('#hover, #striped, #condensed').click(function () {
                    var classes = 'table';

                    if ($('#hover').prop('checked')) {
                        classes += ' table-hover';
                    }
                    if ($('#condensed').prop('checked')) {
                        classes += ' table-condensed';
                    }
                    $('#table-style').bootstrapTable('destroy')
                            .bootstrapTable({
                                classes: classes,
                                striped: $('#striped').prop('checked')
                            });
                });
            });

            function rowStyle(row, index) {
                var classes = ['active', 'success', 'info', 'warning', 'danger'];

                if (index % 2 === 0 && index / 2 < classes.length) {
                    return {
                        classes: classes[index / 2]
                    };
                }
                return {};
            }
        </script>
    </div><!--/.main-->

@endsection