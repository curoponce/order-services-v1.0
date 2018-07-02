@extends('backend.layouts.backend')
@section('backend')



<main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <div class="block">
                         
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Crear orden</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="{{ route('ordenes.store') }}" method="post" >
                                
                                @include('backend.ordenes.includes.form')
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-primary">
                                            <i class="fa fa-check mr-5"></i> Guardar orden
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Mega Form -->

                        </div>
                    </div>
                </div>
            </main>
            <!-- END Main Container -->


@endsection
