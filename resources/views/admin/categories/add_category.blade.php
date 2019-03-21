@extends('layouts.adminLayout.admin_design')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ url('/admin/add-category') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
            <h1>Form validation</h1>
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Form validation</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
                                <div class="control-group">
                                    <label class="control-label">Nome</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="name">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Descrição</label>
                                    <div class="controls">
                                        <textarea type="text" name="description" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">URL</label>
                                    <div class="controls">
                                        <input type="text" name="url" id="url">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Cadastrar" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection