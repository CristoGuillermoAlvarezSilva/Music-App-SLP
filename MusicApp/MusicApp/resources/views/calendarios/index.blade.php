@extends('../layouts.app')
@section('title')
    Calendario
@endsection


<!--Contenido de la pagina-->
@section('content')
    @guest

    @else
    @endguest
    <!--Todos usuarios-->

    <section id="services" class="services">

        <div class="container centrar" data-aos="fade-up">
        <div class="categoria-items row py-5">
                @foreach($calendarios as $item)
                    @guest
                        @else
                            @if(Auth::user()->id == $item->idR)
                                @foreach($representantes as $item2)
                                    @guest
                                        @else
                                            @if($item->idR == $item2->idU)
                                                
                                            @endif
                                    @endguest

                                @endforeach 
                            @endif
                            
                        @endguest
                @endforeach  
                
               <!--CODIGO CALENDARIO-->
               <script>
               
                function getDay() {
                    var botones = document.getElementsByClassName('dateDay');
                    for(var i = 0; i < botones.length; i++){
                    botones[i].addEventListener('click', capturar);
                    }
                        function capturar(){
                        window.location.href = window.location.href + "&dia=" + this.id;
                    }
                }
                
                </script>
                
                <div class="container row">
                    <div class="col-3"></div>

                    <div class="col-6">
                        <form method='GET' enctype="multipart/form-data">
                        <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
                        
                        <div class="section-title">
                                <br>
                                <h2>Calendario</h2>
                                <p>Calendario</p>
                        </div>
                        <div class="section-title">
                                        <h6 for="fecha">Selecciona mes/año para ver la agenda</h6>
                                
                                        <select id="seleccionMes" name="seleccionMes" class="form-control">
                                            <option value='01';>Enero</option>
                                            <option value='02';>Febrero</option>
                                            <option value='03';>Marzo</option>
                                            <option value='04';>Abril</option>
                                            <option value='05';>Mayo</option>
                                            <option value='06';>Junio</option>
                                            <option value='07';>Julio</option>
                                            <option value='08';>Agosto</option>
                                            <option value='09';>Septiembre</option>
                                            <option value='10';>Octubre</option>
                                            <option value='11';>Noviembre</option>
                                            <option value='12';>Diciembre</option>
                                        </select>
                                    
                                
                                        <select name="seleccionAnio" class="form-control">
                                            <option>2021</option>
                                            <option>2022</option>
                                        </select>
                                        <br>
                                    
                                        <button class="btn btn-warning" type="submit">Ver mes</button>  
                        </div>
                        <div class="container row">

                            <div class="col-1"></div>

                            <div class="col-4">
                            <?php            
                                $selMes = null;
                                $selYear = null;
                                $month = null;
                                $mesStr = null;
                                
                                    if(isset($_GET["seleccionMes"]) && isset($_GET["seleccionAnio"]))
                                    {
                                        
                                        $selMes = $_GET["seleccionMes"]; 
                                        $selYear = $_GET["seleccionAnio"];

                                        $month = $selMes;
                                        $year = $selYear;
                                        
                                        $mesStr = mesToString($selMes);
                                        echo "<div class='titleDate section-title center'><p>$mesStr $year</p></div>";
                                       
                                        echo generar_calendario($month,$year);
                                    }   
                            ?>
                            </div>
                            
                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                
                <div class="col-3"></div>
            
                </div>

                

                <section>
                
                <form method='POST' enctype="multipart/form-data" class='modal fade' id='miModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                                @csrf
                @method('POST')
                <div>
                    <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                <h4 class='modal-title' id='myModalLabel'></h4>
                            </div>
                            <div class='modal-body'>
                            <div class="form-group col-8">
                            <label for="fecha">Fecha a agendar:</label><br>
                                <?php
                                    $day = null;
                                    $dia = null;
                                    $prueba = "Febrero";
                                    if(isset($_GET["dia"]))
                                    {
                                        $day = $_GET["dia"]; 
                                    }
                                    $dia = $day;
                                    
                                ?>
                                Dia: <input type="text" name="dia" value="<?php echo $day; ?>"><br><br>
                                Mes: <input type="text" name="mes" value="<?php echo $mesStr ?>">
                            </div>
                            <div class="form-group col-8">
                                <select name="disp" class="form-control">
                                    <option>Disponible</option>
                                    <option>Ocupado</option>
                                </select>
                            </div>
                            <br>
                            <div class="col-12 text-center">
                                <button class="btn btn-success" type="submit">Guardar</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </form>

                </section>
                        <br>

        </div>
        </div>
        
    </section>

   
@endsection