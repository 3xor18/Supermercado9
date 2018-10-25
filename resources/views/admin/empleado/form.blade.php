
    <div class="form-row">
        <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span style="background-color: #1c7430;" class="input-group-text text-light">RUT</span>
                    </div>
                    {!! Form::text('rut',null,['class'=>'form-control','placeholder' => 'Ejemplo: 3101111111','required']) !!}
                     <div class="invalid-feedback">
                        Por favor Complete Este Campo
                    </div>
                </div>
        </div>
        <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span style="background-color: #1c7430;"  class="input-group-text text-light" id="inputGroupPrepend">Nombre</span>
                    </div>
                    {!! Form::text('nombre',null,['class'=>'form-control','placeholder' => 'Ejemplo: Gerson Gonzalo','required']) !!}
                    <div class="invalid-feedback">
                        Por Favor Complete este Campo
                    </div>
            </div>

        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light" id="inputGroupPrepend">Apellido</span>
                </div>
                {!! Form::text('apellido',null,['class'=>'form-control','placeholder' => 'Ejemplo: Aponte Rodriguez','required']) !!}
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
          </div>
    </div>
    <div class="form-row mt-4">
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Estudios</span>
                </div>
                {!! Form::text('estudios',null,['class'=>'form-control','placeholder' => 'Ejemplo: Ingeniero En Sistemas','required']) !!}
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
            </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Nacionalidad</span>
                </div>
                {!! Form::select('nacionalidad', [''=>'Seleccione','Chile' => 'Chile', 'Colombia' => 'Colombia', 'Venezuela' => 'Venezuela'],null,['class'=>'form-control','required']) !!}
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
             </div>
        <div class="col ">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Correo</span>
                </div>
                {!! Form::text('correo',null,['class'=>'form-control','placeholder' => 'Ejemplo: 3xor18@gmail.com','required']) !!}
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
            </div>
    </div>
    <div class="form-row mt-4">
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Celular</span>
                </div>
                {!! Form::text('celular',null,['class'=>'form-control','placeholder' => 'Ejemplo: 996606415','required']) !!}
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
              </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Tlf de Emergencia</span>
                </div>
                {!! Form::text('celular_emergencia',null,['class'=>'form-control','placeholder' => 'Ejm: 996606415','required']) !!}

                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
             </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Fecha de Nacimiento</span>
                </div>

                {!! Form::date('fecha_nac',null,['class'=>'form-control','required']); !!}
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
        </div>
    </div>

    <div class="form-row mt-4">
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Sexo</span>
                </div>
                {!! Form::select('sexo', [''=>'Seleccione','Femenino' => 'Femenino', 'Masculino' => 'Masculino'],null,['class'=>'form-control','required']) !!}
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;"  class="input-group-text text-light" id="inputGroupPrepend">Direccion</span>
                </div>
                {!! Form::textarea('direccion',null,['class'=>'form-control','rows' => 2,'cols' => 10,'placeholder' => 'Ejemplo: Villa Galilea Pje Pf Cadiz Marin casa # 10 San Fernando','required']) !!}<div class="invalid-feedback">
                    Por Favor Complete este Campo
                </div>
            </div>

        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;"  class="input-group-text text-light" id="inputGroupPrepend">Observacion</span><div class="invalid-feedback">
                </div>
                {!! Form::textarea('observacion',null,['class'=>'form-control','rows' => 2,'cols' => 50,'placeholder' => 'Ejemplo: Contratado para Carniceria, sin experiencia','required']) !!}
                </div>
            </div>
         </div>
    </div>


    <div class="form-row mt-4">
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Estado Civil</span>
                </div>
                        {!! Form::select('estado_civil', [''=>'Seleccione','Soltero' => 'Soltero', 'Casado' => 'Casado',
                                 'Divorsiado'=>'Divorsiado','Viudo'=>'Viudo'
                                 ],null,['class'=>'form-control','required']) !!}
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>


        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Talla de Camisa</span>
                </div>
                {!! Form::select('camisa', [''=>'','m' => 'm', 's' => 's', 'l' => 'l', 'XL' => 'XL', 'XXL' => 'XXL'],null,['class'=>'form-control','required']) !!}

                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
            </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Talla de Pantalon</span>
                </div>
                {!! Form::select('pantalon', [''=>'Seleccione','25'=>'25','26'=>'26','27'=>'27','28'=>'28'],null,['class'=>'form-control','required']) !!}

                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
           </div>
    </div>
    <div class="form-row mt-4">
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Talla de Zapatos</span>
                </div>
                {!! Form::select('zapatos', [''=>'','25'=>'25','26'=>'26','27'=>'27','28'=>'28'],null,['class'=>'form-control','required']) !!}

                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>

               </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Talla de Guantes</span>
                </div>
                {!! Form::select('guantes', [''=>'Seleccione','m' => 'm', 's' => 's', 'l' => 'l', 'XL' => 'XL', 'XXL' => 'XXL'],null,['class'=>'form-control','required']) !!}

                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
             </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Talla de Casco</span>
                </div>
                {!! Form::select('casco', [''=>'Seleccione','m' => 'm', 's' => 's', 'l' => 'l', 'XL' => 'XL', 'XXL' => 'XXL'],null,['class'=>'form-control','required']) !!}

                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
             </div>
    </div>
    <div class="form-row mt-4">
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Alergias</span>
                </div>
                {!! Form::textarea('alergias',null,['class'=>'form-control','rows' => 2,'cols' => 10,'placeholder' => 'Ejemplo: lana,poliester, ampicilina'],null,['class'=>'form-control','required']) !!}

                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
               </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Enfermedades</span>
                </div>
                {!! Form::textarea('enfermedades',null,['class'=>'form-control','rows' => 2,'cols' => 10,'placeholder' => 'Ejemplo: diavetes, hernias'],null,['class'=>'form-control','required']) !!}

                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
             </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Medicamentos</span>
                </div>
                {!! Form::textarea('medicamentos',null,['class'=>'form-control','rows' => 2,'cols' => 10,'placeholder' => 'Si Depende de algun Medicamento: insulina, ampicilina'],null,['class'=>'form-control','required']) !!}

                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>
           </div>
    </div>
    <div class="form-row mt-4">
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">AFP</span>
                </div>

                <select name="afp" class="form-control" required>
                    <option value="">Seleccione</option>
                    {{$afp=App\afp::all()}}

                    @foreach($afp as $category)
                        <option>{{$category->nombre}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>

           </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">SALUD</span>
                </div>
                <select name="salud" class="form-control" required>
                    <option value="">Seleccione</option>
                    {{$salud=App\salud::all()}}
                    @foreach($salud as $ca)
                        <option>{{$ca->nombre}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>

           </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Cargo</span>
                </div>
                <select name="cargo" class="form-control" required>
                    <option value="">Seleccione</option>
                    {{$cargo=App\cargo::all()}}
                    @foreach($cargo as $ca)
                        <option>{{$ca->nombre}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>


        </div>
    </div>
    <div class="form-row mt-4">
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Sucursal</span>
                </div>
                <select name="sucursal" class="form-control" required>
                    <option value="">Seleccione</option>
                    {{$sucursal=App\sucursal::all()}}
                    @foreach($sucursal as $ca)
                        <option>{{$ca->nombre}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>

           </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Razon Social</span>
                </div>
                <select name="razon" class="form-control" required>
                    <option value="">Seleccione</option>
                    {{$razon=App\razon::all()}}
                    @foreach($razon as $ca)
                        <option>{{$ca->nombre}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>

            </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">RUT</span>
                </div>
                {!! Form::date('fecha_contrato',null,['class'=>'form-control','required']); !!}
                <div class="invalid-feedback">
                    Por favor Complete Este Campo
                </div>
            </div>

             </div>
    </div>

    <div class="form-row mt-4">


        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span style="background-color: #1c7430;" class="input-group-text text-light">Foto</span>
                </div>
                {!! Form::file('foto')!!} <div class="invalid-feedback">

                </div>
            </div>
            </div>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>