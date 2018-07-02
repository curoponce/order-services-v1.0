@extends('backend.layouts.backend')
<link href="{{ asset('backend/vendors/x-editable/css/bootstrap-editable.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('backend/css/pages/user_profile.css') }}" rel="stylesheet" type="text/css"/>
@section('backend')
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            User Profile
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">
                    <i class="livicon" data-loop="true" data-name="home" data-size="14">
                    </i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">
                    User
                </a>
            </li>
            <li class="active">
                User Profile
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs ">
                    <li class="active">
                        <a data-toggle="tab" href="#tab1">
                            <i class="livicon" data-c="#000" data-hc="#000" data-loop="true" data-name="user" data-size="16">
                            </i>
                            Perfil de usuario
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab2">
                            <i class="livicon" data-c="#000" data-hc="#000" data-loop="true" data-name="key" data-size="16">
                            </i>
                            Cambiar contraseña
                        </a>
                    </li>
                </ul>
                <div class="tab-content mar-top">
                    <div class="tab-pane fade active in" id="tab1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Perfil de usuario
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail img-file">
                                                        <img alt="riot" class="img-responsive" height="150" src="{{ asset('images/team/4.jpg') }}" width="200">
                                                        </img>
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail img-max">
                                                    </div>
                                                    <div>
                                                        <span class="btn btn-default btn-file ">
                                                            <span class="fileinput-new">
                                                                Seleccionar imagen
                                                            </span>
                                                            <span class="fileinput-exists">
                                                                Cambiar
                                                            </span>
                                                            <input name="..." type="file">
                                                            </input>
                                                        </span>
                                                        <a class="btn btn-default fileinput-exists" data-dismiss="fileinput" href="#">
                                                            Eliminar
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped" id="users">
                                                        <tr>
                                                            <td>
                                                                nombres y apellidos
                                                            </td>
                                                            <td>
                                                                <a class="editable" data-pk="1" data-title="Edit User Name" href="#">
                                                                    {{ $usuario->nombre }} {{ $usuario->apellidos }}
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                E-mail
                                                            </td>
                                                            <td>
                                                                <a class="editable" data-pk="1" data-title="Edit E-mail" href="#">
                                                                    {{ $usuario->email }}
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Phone Number
                                                            </td>
                                                            <td>
                                                                <a class="editable" data-pk="1" data-title="Edit Phone Number" href="#">
                                                                    {{ $usuario->telefono }}
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Address
                                                            </td>
                                                            <td>
                                                                <a class="editable" data-pk="1" data-title="Edit Address" href="#">
                                                                    {{ $usuario->direccion }}
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        {{--
                                                        <tr>
                                                            <td>
                                                                Status
                                                            </td>
                                                            <td>
                                                                <a data-pk="1" data-title="Status" data-type="select" data-value="1" href="#" id="status">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        --}}
                                                        <tr>
                                                            <td>
                                                                Created At
                                                            </td>
                                                            <td>
                                                                {{ $usuario->created_at->diffForHumans() }}
                                                            </td>
                                                        </tr>
                                                        {{--
                                                        <tr>
                                                            <td>
                                                                City
                                                            </td>
                                                            <td>
                                                                <a class="editable" data-pk="1" data-title="Edit City" href="#">
                                                                    Nakia
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        --}}
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <div class="row">
                            <div class="col-md-12 pd-top">
                                <form action="{{ route('usuarios.update', $usuario->id) }}" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputpassword">
                                                Password
                                                <span class="require">
                                                    *
                                                </span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="livicon" data-c="#000" data-hc="#000" data-loop="true" data-name="key" data-size="16">
                                                        </i>
                                                    </span>
                                                    <input class="form-control" id="inputpassword" name="password" placeholder="Password" type="password"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="inputnumber">
                                                Confirm Password
                                                <span class="require">
                                                    *
                                                </span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="livicon" data-c="#000" data-hc="#000" data-loop="true" data-name="key" data-size="16">
                                                        </i>
                                                    </span>
                                                    <input class="form-control" id="inputnumber" name="password_confirmation" placeholder="Confirm Password" type="password"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button class="btn btn-primary" type="submit">
                                                Cambiar contraseña
                                            </button>
                                            {{--
                                            <input class="btn btn-default hidden-xs" type="reset" value="Reset">
                                                --}}
                                            </input>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
</aside>
<!-- right-side -->
@endsection
