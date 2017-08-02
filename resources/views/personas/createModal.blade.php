
                    {!! Form::open(['route' => 'personas.storeModal','data-toggle'=>'validator', 'role'=>'form','id'=>'personaForm']) !!}
                        @include('personas.fields2')
                    {!! Form::close() !!}
    <script type="text/javascript" src="{{ asset('../resources/assets/js/modalPersona.js') }}"></script>
    @yield('scripts')