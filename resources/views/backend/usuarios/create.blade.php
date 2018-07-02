@extends('backend.layouts.backend')
@section('backend')
            <section id="basic-form-layouts">
                <div class="row match-height">

                    <div class="col-md-12">


                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">
                                    REGISTRAR NUEVO USUARIO
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
                                    
                                    <form class="form" action="{{ route('usuarios.store') }}" method="post">

                                        @include('backend.usuarios.includes.form', ['usuario' =>  new App\User ])

                                        
                                        <div class="form-actions">
                                            <button class="btn btn-warning mr-1" type="button">
                                                <i class="ft-x">
                                                </i>
                                                Cancel
                                            </button>
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fa fa-check-square-o">
                                                </i>
                                                Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection
