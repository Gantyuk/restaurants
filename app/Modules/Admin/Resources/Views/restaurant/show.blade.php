@extends('admin::layout.app')


@section('content')
    <div class="right_col" role="main" style="min-height: 1161px;">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tables
                        <small>Some examples to get you started</small>
                    </h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="clearfix"></div>

                <div class="clearfix"></div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Table design
                                <small>Custom design</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @include('admin::restaurant.helpers.show_list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection