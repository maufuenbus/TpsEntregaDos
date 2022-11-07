<!-- Modal 1 -->
            <!--  -->
            @section('content')
            
            <!--  -->
            <!-- Modal 1 -->
            <!--  -->
     
                <div class="button-modal">
                    <button class="button-modal-reg-veh"  id="open">Registrar salida</button>

                    <form action="/gestionestacionamientovaras" method="POST"  role="form">

                         {{csrf_field()}}
                     <div id="modal_container" class="modal_container_salida">

                        <div class="modal">
                            <h1 class="h1-modal">Registro salida</h1>
                            
                            <div class="reg-busqueda">
                                <label>Buscar patente</label>
                                <input name="patente"  type="text" placeholder="XS6452">
                                <button class="button-modal-reg-veh">Buscar</button>
                            </div>

                            <hr>

                            <div class="reg-busqueda">
                                <label>Hora Entrada: </label>
                                <input name="hora_entrada"  type="time">
                            </div>

                            <div class="reg-busqueda">
                                <label>Nombre: </label>
                                <input name="nombre" type="text">
                            </div>

                            <div class="reg-busqueda">
                                <label>Rut: </label>
                                <input name="rut" type="text">
                            </div>

                            <div class="reg-busqueda">
                                <label>Hora salida: </label>
                                <input name="hora_salida" type="time">
                            </div>

                            <div class="reg-busqueda-button">
                                <button type="submit" class="button-modal-reg-veh" id="close">Registrar</button>
                            </div>
                            
                        </div>
                     </div>
                    </form>
                </div>

                <!--  -->
                <!-- modal 2 -->
                <!--  -->
                <div class="button-modal">
                    <button class="button-modal-reg-veh" id="open2">Modificar</button>
                    <div id="modal_container2" class="modal_container_modifica">
                        <div class="modal2">
                            <h1>Modificar Estacionamiento</h1>
                            <button class="button-modal-reg-veh" id="close2">Modificar</button>
                        </div>
                    </div>
                </div>
                <!-- Modal 3 -->
            <!--  -->
                <div class="button-modal">
                    <form action="/gestionestacionamientovaras" method="POST"  role="form">

                        {{csrf_field()}}
                   <div id="modal_container3" class="modal_container_entrada">

                       <div class="modal">
                           <h1 class="h1-modal">Registro entrada</h1>
                           
                           <div class="reg-busqueda">
                               <label>Buscar patente</label>
                               <input name="patente"  type="text" placeholder="XS6452">
                               <button class="button-modal-reg-veh">Buscar</button>
                           </div>

                           <hr>

                           <div class="reg-busqueda">
                               <label>Hora Entrada: </label>
                               <input name="hora_entrada"  type="time">
                           </div>

                           <div class="reg-busqueda">
                               <label>Nombre: </label>
                               <input name="nombre" type="text">
                           </div>

                           <div class="reg-busqueda">
                               <label>Rut: </label>
                               <input name="rut" type="text">
                           </div>

                           <div class="reg-busqueda-button">
                               <button type="submit" class="button-modal-reg-veh" id="close">Registrar</button>
                           </div>
                           
                       </div>
                   </div>
               </div>
                            
                           
            </div>