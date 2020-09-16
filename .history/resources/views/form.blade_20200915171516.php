<div id="request" class="form-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>¿Necesitas ayuda? ¡Solicita tu <span class="turquoise">Fixer</span> YA!</h2>
                    <p> ¿Quieres ver qué tan fácil es? Estos son los pasos: </p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body"><strong class="blue">Déjanos tus datos de contacto</strong></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body"><strong class="blue">Cuéntanos tu problema</strong></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body"><strong class="blue">Paga tu revisión técnica por medio de nuestra plataforma</strong></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body"><strong class="blue">Tu fixer estará ahí para ayudarte</strong></div>
                        </li>
                    </ul>
                </div>
                <!-- end of text-container -->
            </div>
            <!-- end of col -->
            <div class="col-lg-6">

                <!-- Request Form -->
                <div class="form-container">
                    <form method="POST" action="{{ route('solicitudes.crear') }}" id="requestForm" data-toggle="validator" data-focus="false">
                    @csrf
                        <!--<div class="form-group">
                            <input type="text" class="form-control-input" id="nombre" name="nombre" required placeholder="Nombre y Apellido">
                            <div class="help-block with-errors"></div>
                        </div>-->
                        <!--<div class="form-group">
                            <input type="email" class="form-control-input" id="remail" name="remail" required>
                            <label class="label-control" for="remail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>-->
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="celular" name="celular" required placeholder="N° Celular">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control-select" id="servicio" name="servicio" required>
                                <option class="select-option" value="" disabled selected>Selecciona el tipo de servicio</option>
                                <option class="select-option" value="gasfiteria">Gasfitería</option>
                                <option class="select-option" value="limpieza">Limpieza</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <!--<div class="form-group">
                            <select class="form-control-select" id="distrito" name="distrito" required>
                                <option class="select-option" value="" disabled selected>Selecciona tu distrito</option>
                                <option class="select-option" value="Surco">Surco</option>
                                <option class="select-option" value="Miraflores">Miraflores</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="direccion" name="direccion" required>
                            <label class="label-control" for="direccion">Domicilio en Apuros (Dirección)</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="referencia" name="referencia">
                            <label class="label-control" for="referencia">Déjanos una pequeña referencia</label>                            
                        </div>
                        <div class="form-group dateTimePicker">
                            <input type="datetime-local" class="form-control-input" id="fecha" name="fecha" required min="2020-09-09T00:00" max="2020-11-09T00:00">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea rows="4" cols="50" name="comentarios" form="requestForm" required placeholder=" Cuéntanos un poco sobre el problema" id="comentarios" rezise="disable" style="resize: none; width:100%"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>-->
                        <div class="form-group checkbox">
                            <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>Estoy de acuerdo con los <a href="#">términos y condiciones</a> de <a href="#">Spitist</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">QUIERO MI FIXER</button>
                        </div>
                        <div class="form-message">
                            <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                        @error('nombre')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            El nombre es requerido
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @enderror @if ($errors->has('descripcion'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            La descripción es requerida
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                    </form>
                </div>
                <!-- end of form-container -->
                <!-- end of request form -->
            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</div>
<!-- end of form-1 -->
<!-- TODO ver como verga hacer cada 30 min el datePicker-->
<!-- Dirección; Distrito; Referencia; Cobertura-->