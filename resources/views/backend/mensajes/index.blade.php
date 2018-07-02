@extends("backend.layouts.backend")
@section("backend")



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Lista de Mensajes
                                <a style="display: inline;" href="{{ route('mensajes.create') }}" class="btn btn-sm btn-outline-success btn-min-width mr-1 mb-1"> NUEVO MENSAJE</a>
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
                                                    Nombre y apellidos
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    mensaje
                                                </th>
                                                <th>
                                                    Acciones
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($mensajes as $mensaje)
                                            <tr>
                                                @if( $mensaje->user_id)
                                                
                                                <td class="font-w600">
                                                    <a href="{{ route('mensajes.show', $mensaje->id) }}">
                                                        {{ $mensaje->user->nombre}} {{ $mensaje->user->apellidos}}
                                                    </a>
                                                </td>

                                                <td>
                                                    {{ $mensaje->user->email }}
                                                </td>
                                                
                                                <td>
                                                    {{ $mensaje->contenido }}
                                                </td>

                                                
                                                @else
                                                
                                                <td class="font-w600">
                                                    <a href="{{ route('mensajes.show', $mensaje->id) }}">
                                                        {{ $mensaje->nombre}} {{ $mensaje->apellidos}}
                                                    </a>
                                                </td>
                                                
                                                <td>
                                                    {{ $mensaje->email }}
                                                </td>

                                                <td>
                                                    {{ $mensaje->contenido }}
                                                </td>

                                                
                                                @endif

                                                <td>
                                                    <form action="{{ route('mensajes.destroy', $mensaje->id) }}" method="POST" style="display: inline">
                                                        {!! csrf_field() !!}
                                                        {!! method_field('DELETE') !!}
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <i class="fa fa-times">
                                                            </i>
                                                        </button>
                                                    </form>
                                                    <a class="btn btn-sm btn-info" href="{{ route('mensajes.edit',$mensaje->id) }}">
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
