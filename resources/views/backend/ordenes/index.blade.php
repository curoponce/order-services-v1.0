@extends('backend.layouts.backend')
@section('backend')

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Lista de ordenes
                                <a style="display: inline;" href="{{ route('pagina.solicitar.servicio') }}" ><button class="btn btn-sm btn-outline-success btn-min-width mr-1 "><i class="fa fa-check"></i> nueva orden</button></a>

                                <form action="{{ route('generar.pdf.ordenes') }}" method="POST" style="display: inline;">
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
                                
                                {!! $ordenes->links('vendor.pagination.bootstrap-4') !!}

                                <div class="row match-height">
                                  @foreach($ordenes as $orden)
                                  <div class="col-xl-4 col-md-6 col-sm-12">
                                    <div class="text-center card box-shadow-0 border-info bg-transparent">
                                      <div class="card-content">
                                        <div class="card-body">
                                          <h4 class="card-title">Servicio de: {{ $orden->servicio->titulo }}</h4>
                                          <h6 class="card-subtitle text-muted"><strong>Solicitado por:</strong> {{ $orden->user->nombre }} {{ $orden->user->apellidos }}</h6>
                                        </div>
                                        <img class="img-fluid" src="{{ asset('images/servicios/'.$orden->servicio->imagen) }}" alt="Card image cap" style="height: 150px; width: 100%;">
                                        
                                        <div class="card-body">
                                          <h2>Detalles de la orden</h2>
                                          <p class="card-text">{{ $orden->contenido }}
                                          </p>

                                          <div class="row">
                                            
                                            @if (Auth::user()->hasRoles(['trabajador']))
                                            <div class="col-md-12">
                                              
                                                  @if($orden->estado_id == 1)
                                                  <form action="{{ route('iniciar', $orden->id) }}" method="POST">
                                                      {!! csrf_field() !!}
                                                      {!! method_field('PUT') !!}
                                                      <button class="btn btn-warning btn-sm mb-1" type="submit">
                                                           <i class="fa fa-user"></i> INICIAR ORDEN
                                                      </button>
                                                  </form>
                                                  @else
                                                      @if($orden->estado_id == 2)
                                                        <form action="{{ route('finalizar', $orden->id) }}" method="POST">
                                                            {!! csrf_field() !!}
                                                            {!! method_field('PUT') !!}
                                                            <button class="btn btn-success btn-sm mb-1" type="submit">
                                                             <i class="fa fa-check"></i> FiNALIZAR ORDEN
                                                        </button>
                                                        </form>
                                                      @endif
                                                  @endif
                                            </div>
                                            @endif

                                            @if (Auth::user()->hasRoles(['cliente', 'admin']))
                                              @if($orden->estado_id == 1)
                                              <div class="col-md-12">
                                                <a href="{{ route('ordenes.edit',$orden->id) }}">
                                                  <button type="button" class="btn btn-info square btn-min-width"><i class="fa fa-info"></i> Editar</button>
                                                </a>

                                                <form action="{{ route('ordenes.destroy', $orden->id) }}" method="POST" style="display: inline;">
                                                  {!! csrf_field() !!}
                                                  {!! method_field('DELETE') !!}
                                                  <button type="submit" class="btn btn-warning square btn-min-width"><i class="fa fa-trash"></i> Eliminar</button>
                                                </form>
                                              </div>
                                              @endif
                                            @endif
                                          
                                          </div>

                                          @if ($orden->trabajador_id)
                                          <hr>
                                          Trabajador: <a href="#" class="card-link">{{ $orden->trabajador->user->nombre }} {{ $orden->trabajador->user->apellidos }}
                                          </a>
                                          @endif

                                        </div>
                                      </div>
                                      <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                        <span class="float-left"><i class="fa fa-clock-o"></i> {{ $orden->created_at->diffForHumans() }}</span>

                                        @if ($orden->estado_id == 1)
                                        <span class="tags float-right">
                                          Estado: <span class="badge badge-pill badge-danger">{{ $orden->estado->nombre }}</span>
                                        </span>
                                        @else
                                          @if ($orden->estado_id == 2)
                                          <span class="tags float-right">
                                          Estado: <span class="badge badge-pill badge-warning">{{ $orden->estado->nombre }}</span>
                                          </span>
                                          @else
                                              @if ($orden->estado_id == 3)
                                              <span class="tags float-right">
                                              Estado: <span class="badge badge-pill badge-success">{{ $orden->estado->nombre }}</span>
                                              </span>
                                              @endif
                                          @endif
                                        @endif
                                      </div>
                                    </div>
                                  </div>
                                  @endforeach
                                </div>

                                {!! $ordenes->links('vendor.pagination.bootstrap-4') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->
@endsection
