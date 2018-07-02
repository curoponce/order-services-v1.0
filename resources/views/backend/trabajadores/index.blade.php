@extends("backend.layouts.backend")
@section("backend")


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Lista de Trabajadores
                                <a style="display: inline;" href="{{ route('trabajadores.create') }}" class="btn btn-sm btn-outline-success btn-min-width mr-1 mb-1"> CREAR TRABAJADOR</a>
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
                                <div class="row">
                                    @foreach($trabajadores as $t)
                                    <div class="col-xl-3 col-md-6 col-12">
                                        <div class="card border-teal border-lighten-2">
                                          <div class="text-center">
                                            <div class="card-body">
                                              <img src="{{ asset('images/team/4.jpg') }}" class="rounded-circle  height-150"
                                              alt="Card image">
                                            </div>
                                            <div class="card-body">
                                              <h4 class="card-title">{{ str_limit($t->user->nombre.' '. $t->user->apellidos , $limit = 18, $end = '...')  }}</h4>

                                              @if($t->designacion)
                                              <h6 class="card-subtitle text-muted">{{ $t->designacion }}</h6>
                                              @endif

                                            </div>
                                            <div class="text-center">
                                              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                                                <span class="fa fa-facebook"></span>
                                              </a>
                                              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                                                <span class="fa fa-twitter"></span>
                                              </a>
                                              <a href="#" class="btn btn-social-icon mb-1 btn-outline-linkedin">
                                                <span class="fa fa-linkedin font-medium-4"></span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
