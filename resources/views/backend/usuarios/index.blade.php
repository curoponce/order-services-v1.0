@extends("backend.layouts.backend")
@section("backend")


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Lista de Usuarios

                                <a style="display: inline;" href="{{ route('usuarios.create') }}" ><button class="btn btn-sm btn-outline-success btn-min-width mr-1 "><i class="fa fa-check"></i> crear usuario</button></a>

                                <form action="{{ route('generar.pdf.usuarios') }}" method="POST" style="display: inline;">
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-sm btn-outline-danger btn-min-width mr-1 "><i class="fa fa-file-pdf-o"></i> generar reporte en pdf</button>
                                </form>
                            </h4>
                            <a class="heading-elements-toggle">
                                <i class="fa fa-ellipsis-v font-medium-3">
                                </i>
                            </a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="collapse">
                                            <i class="ft-minus">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-action="reload">
                                            <i class="ft-rotate-cw">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-action="expand">
                                            <i class="ft-maximize">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-action="close">
                                            <i class="ft-x">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Nombres
                                                </th>
                                                <th>
                                                    E-mail
                                                </th>
                                                <th>
                                                    Roles
                                                </th>
                                                <th>
                                                    Acciones
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($usuarios as $usuario)
                                            <tr>
                                                <td>
                                                    {{ $usuario->nombre }} {{ $usuario->apellidos }}
                                                </td>
                                                <td>
                                                    {{ $usuario->email }}
                                                </td>
                                                <td>
                                                    <span class="badge badge-info">
                                                        {{ $usuario->roles->pluck('display_name')->implode(' - ') }}
                                                    </span>
                                                </td>
                                               
                                                <td>
                                                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display: inline">
                                                        {!! csrf_field() !!}
                                                        {!! method_field('DELETE') !!}
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <i class="fa fa-times">
                                                            </i>
                                                        </button>
                                                    </form>
                                                    <a class="btn btn-sm btn-info" href="{{ route('usuarios.edit',$usuario->id) }}">
                                                        <i class="fa fa-link">
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
