@extends('frontend.layouts.frontend')

@section('frontend')

{{-- contenido de la pagina de inicio --}}

@include('frontend.includes_pagina_inicio._slider')

@include('frontend.includes_pagina_inicio._servicios')

@include('frontend.includes_pagina_inicio._nosotros')

@include('frontend.includes_pagina_inicio._team')

@include('frontend.includes_pagina_inicio._logros')

@include('frontend.includes_pagina_inicio._proyectos')

@include('frontend.includes_pagina_inicio._testimonios')

@include('frontend.includes_pagina_inicio._proveedores')

{{-- final del contenido de la pagina de inicio --}}


@endsection