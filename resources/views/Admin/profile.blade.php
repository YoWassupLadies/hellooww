@extends('layouts.layout')

@section('content')

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Pesquisar">
            </div>
        </form>
        <ul class="nav menu">
            <li><a href="{{url('/')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Início</a></li>
            <li class=""><a href="{{url('dashboard')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Área de Trabalho</a></li>

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
            <li><a href="{{url('turmas')}}"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg> Turmas</a></li>
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
                <li class="active">Perfil</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Perfil</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Dados pessoais</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="post">
                            <fieldset>
                                <!-- Nome input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Nome</label>
                                    <div class="col-md-5">
                                        <h4>{{$dadosPerfil[1]->name}}</h4>
                                        {{--<input id="name" name="name" type="text" placeholder="Nome" class="form-control" value="{{$dadosPerfil[1]->name}}">--}}
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="assunto">Email</label>
                                    <div class="col-md-5">
                                        <h4>{{$dadosPerfil[1]->email}}</h4>
                                    </div>
                                </div>

                                <!-- Data de criação -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="dateform">Utilizador desde</label>
                                    <div class="col-md-5">
                                        <h4>{{$dadosPerfil[1]->created_at}}</h4>
                                    </div>
                                </div>

                                <!-- Select -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="dateform">Turma</label>
                                    <div class="col-md-5">
                                        @foreach($dadosPerfil[0] as $turmaUser)
                                            <h4>{{$turmaUser}}</h4>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <a href="{{url('resetpassword')}}" class="btn btn-default btn-md pull-right">Reset Password</a>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection