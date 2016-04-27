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
            <li class="active"><a href="{{url('dashboard')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Área de Trabalho</a></li>

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
                <li class="active">Área de Trabalho</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Área de Trabalho</h1>
            </div>
        </div><!--/.row-->


        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Enviar Email</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Nome</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Nome" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="assunto">Assunto</label>
                                    <div class="col-md-9">
                                        <input id="assunto" name="assunto" type="text" placeholder="Assunto" class="form-control">
                                    </div>
                                </div>

                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="message">Mensagem</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="message" name="message" placeholder="Por favor, digite sua mensagem..." rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 widget-right">
                                        <button type="submit" class="btn btn-default btn-md pull-right">Enviar</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

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

                <div class="panel panel-red">
                    <div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendar</div>
                    <div class="panel-body">
                        <div id="calendar"></div>
                    </div>
                </div>

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
    </div>	<!--/.main-->

@endsection