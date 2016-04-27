@extends('layouts.layout')

@section('content')
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Pesquisar">
            </div>
        </form>
        <ul class="nav menu">
            <li class="active"><a href="{{url('/')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Início</a></li>
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
                <li class="active">Início</li>
            </ol>
        </div><!--/.row-->

        @include('common.error')

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">///Início///</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{{$shownumbers[0]}}</div>
                            <div class="text-muted">Turmas</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-orange panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{{$shownumbers[1]}}</div>
                            <div class="text-muted">Alunos</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-teal panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">{{$shownumbers[2]}}</div>
                            <div class="text-muted">Professores</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-red panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked email"><use xlink:href="#stroked-email"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">25.2k</div>
                            <div class="text-muted">Messagens</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Site Traffic Overview</div>
                    <div class="panel-body">
                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Faltas</h2>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Alunos</h4>
                        <div class="easypiechart" id="easypiechart-blue" data-percent="12" ><span class="percent">12%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Professores</h4>
                        <div class="easypiechart" id="easypiechart-orange" data-percent="3" ><span class="percent">3%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body easypiechart-panel">
                        <h4>Auxiliares</h4>
                        <div class="easypiechart" id="easypiechart-teal" data-percent="5" ><span class="percent">5%</span>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--/.row-->

        <div class="row">
            <div class="col-md-8">

                <div class="panel panel-default chat">
                    <div class="panel-heading" id="accordion"><svg class="glyph stroked two-messages"><use xlink:href="#stroked-two-messages"></use></svg> Chat</div>
                    <div class="panel-body">
                        <ul>
                            <li class="left clearfix">
								<span class="chat-img pull-left">
									<img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies.
                                    </p>
                                </div>
                            </li>
                            <li class="right clearfix">
								<span class="chat-img pull-right">
									<img src="http://placehold.it/80/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
								</span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="pull-left primary-font">Jane Doe</strong> <small class="text-muted">6 mins ago</small>
                                    </div>
                                    <p>
                                        Mauris dignissim porta enim, sed commodo sem blandit non. Ut scelerisque sapien eu mauris faucibus ultrices. Nulla ac odio nisl. Proin est metus, interdum scelerisque quam eu, eleifend pretium nunc. Suspendisse finibus auctor lectus, eu interdum sapien.
                                    </p>
                                </div>
                            </li>
                            <li class="left clearfix">
								<span class="chat-img pull-left">
									<img src="http://placehold.it/80/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." />
							<span class="input-group-btn">
								<button class="btn btn-success btn-md" id="btn-chat">Send</button>
							</span>
                        </div>
                    </div>
                </div>

            </div><!--/.col-->

            <div class="col-md-4">

                <div class="panel panel-blue">
                    <div class="panel-heading dark-overlay"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>To-do List</div>
                    <div class="panel-body">
                        <ul class="todo-list">
                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <label for="checkbox">Make a plan for today</label>
                                </div>
                                <div class="pull-right action-buttons">
                                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                                </div>
                            </li>
                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <label for="checkbox">Update Basecamp</label>
                                </div>
                                <div class="pull-right action-buttons">
                                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                                </div>
                            </li>
                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <label for="checkbox">Send email to Jane</label>
                                </div>
                                <div class="pull-right action-buttons">
                                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                                </div>
                            </li>
                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <label for="checkbox">Drink coffee</label>
                                </div>
                                <div class="pull-right action-buttons">
                                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                                </div>
                            </li>
                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <label for="checkbox">Do some work</label>
                                </div>
                                <div class="pull-right action-buttons">
                                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                                </div>
                            </li>
                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <label for="checkbox">Tidy up workspace</label>
                                </div>
                                <div class="pull-right action-buttons">
                                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" />
							<span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
							</span>
                        </div>
                    </div>
                </div>

            </div><!--/.col-->
        </div><!--/.row-->
    </div>
@endsection