@extends('backend.layouts.backend')

@section('backend')

        <!-- Stats -->
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-primary bg-darken-2">
                    <i class="icon-settings font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-primary white media-body">
                    <h5>Servicios</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> {{ $servicios->count() }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-danger bg-darken-2">
                    <i class="icon-users font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-danger white media-body">
                    <h5>Usuarios</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>{{ $usuarios->count() }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-warning bg-darken-2">
                    <i class="icon-basket-loaded font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-warning white media-body">
                    <h5>Ordenes Recientes</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> {{ $ordenesRecientes->count() }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-success bg-darken-2">
                    <i class="icon-layers font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-success white media-body">
                    <h5>Total Ordenes</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i> {{ $ordenesTotal->count() }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Stats -->

        <!--Recent Orders & Monthly Salse -->
        <div class="row match-height">
          <div class="col-xl-8 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Ordenes Recientes</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <p>Total de Ordenes completadas {{ $ordenFinalizado }}, ordenes en Proceso {{ $ordenProceso }}, ordenes en espera {{ $ordenEspera }}.
                    <span class="float-right"><a href="{{ route('ordenes.index') }}" target="_blank">Ver todas las ordenes <i class="ft-arrow-right"></i></a></span>
                  </p>
                </div>
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Cliente</th>
                        <th>Estado</th>
                        <th>Fecha de solicitud</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($ultimasOrdenesTabla as $uo)
                      <tr>
                        <td>{{ $uo->id }}</td>
                        <td class="text-truncate">{{ $uo->user->nombre }} {{ $uo->user->apellidos }}</td>
                        <td class="text-truncate">
                          @if ($uo->estado_id == 1)
                            <span class="badge badge-pill badge-danger">{{ $uo->estado->nombre }}</span>
                             @else
                              @if ($uo->estado_id == 2)
                                <span class="badge badge-pill badge-warning">{{ $uo->estado->nombre }}</span>
                              @else
                                @if ($uo->estado_id == 3)
                                    <span class="badge badge-pill badge-success">{{ $uo->estado->nombre }}</span>
                                  @endif
                              @endif
                            @endif
                        </td>
                        <td class="text-truncate">{{ $uo->created_at }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recientemente Registrados</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content px-1">
                <div id="recent-buyers" class="media-list height-300 position-relative">
                  @foreach($usuariosRecientes as $ur)
                  <a href="#" class="media border-0">
                    <div class="media-left pr-1">
                      <span class="avatar avatar-md avatar-online">
                        <img class="media-object rounded-circle" src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-7.png') }}"
                        alt="Generic placeholder image">
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body w-100">
                      <h6 class="list-group-item-heading">{{ $ur->nombre }} {{ $ur->apellidos }}

                        @if ($ur->hasRoles(['cliente']))
                          <span class="icon icon-layers float-right pt-1" data-toggle="tooltip" data-original-title="Ordenes Solicitadas"> {{ $ur->ordenes->count() }}
                          </span>
                        @endif

                      </h6>
                      <p class="list-group-item-text mb-0">
                        @if ($ur->hasRoles(['cliente']))
                          <span class="badge badge-primary">Cliente</span>
                          @else
                          @if ($ur->hasRoles(['trabajador']))
                            <span class="badge badge-warning ml-1">Trabajador</span>
                            @else
                            @if ($ur->hasRoles(['admin']))
                              <span class="badge badge-success ml-1">Administrador</span>
                            @endif
                          @endif
                        @endif
                      </p>
                    </div>
                  </a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/Recent Orders & Monthly Salse -->
        <div class="row match-height">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-header border-0">
                <h4 class="card-title">Reporte de usuarios</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div id="piechart_3d" class="height-250"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-header border-0">
                <h4 class="card-title">Reporte de Ordenes</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div id="donutchart" class="height-250"></div>
                </div>
              </div>
            </div>
          </div>
      	</div>

        <div class="row match-height">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-header border-0">
                <h4 class="card-title">Servicios Populares</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div id="top_x_div" class="height-350"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-header border-0">
                <h4 class="card-title">Usuarios con mas ordenes solicitadas</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div id="columnchart_values" class="height-350"></div>
                </div>
              </div>
            </div>
          </div>

        </div>


	 @include('backend.paginas.include._script-reportes')
@endsection
