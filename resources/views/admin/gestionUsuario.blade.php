
    <!--==============CABECERA======================-->
    
    @include("encabezado")
    @include("headerMenu")
    
    <!--================CUERPO======================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <main class="contenido-cuerpo">
        <section class="contenido-usuario">
            <div class="form-registro">
                <div class="form-user">
                    <div class="contenido1">
                        <h2>Agregar Usuarios</h2>
                        
                        <form class="register-user-form" method="POST" action="">
                            @csrf
                            <div class="inputs-form-reg-us">
                                <Label>Nombre: </Label>
                                <input type="name" id="name" name="name" placeholder="Ricardo" required >
                            </div>
                            <div class="inputs-form-reg-us">
                                <Label>Ap. Paterno: </Label>
                                <input type="apellidop" id="apellidop" name="apellidop" placeholder="Lopez" required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <Label>Ap. Materno: </Label>
                                <input type="apellidom" id="apellidom" name="apellidom" placeholder="Galindo" required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <label>Rut: </label>
                                <input type="rut" name='rut' id='rut' required>
                            </div>
                            
                            <div class="inputs-form-reg-us">
                                <label>Username: </label>
                                <input type="username" name='username' id='username' required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <label>Password: </label>
                                <input type="password" name='password' id='password' required>
                            </div>
                            
                            <div class="inputs-form-reg-us">
                                <label>Rol: </label>
                                <select class="combolista" name="role" id='role' onchange="combo(this,'role')">
                                    <option value="operador">Operador</option>
                                    <option value="admin">Administrador</option>
                                </select>
                                

                            </div>
                            
                            <div class="inputs-form-reg-us">
                                <button type="submit" class="button-reg">Registrar</button>
                            </div>
                        </form>
                        @error('message')
                            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </section>

       <!-- <section class="user-grilla">
            <div class="contenido2">
                <table class="table-grilla">
                    <tr>
                        <td class="title-table">Nombre</td>
                        <td class="title-table">Apellido Paterno</td>
                        <td class="title-table">Usuario</td>
                    </tr>
                @foreach ($users as $user)
                <div class="row py-1" ><tr>
                    <div class="col-md-9 d-flex align-items-center" style="display:inline-flex">
                        <td><a href="{{ route('gestionUsuario-edit',['id' => $user->id])}}">{{$user->name}}</a></td>
                        <td><a href="{{ route('gestionUsuario-edit',['id' => $user->id])}}">{{$user->apellidop}}</a></td>
                        <td><a href="{{ route('gestionUsuario-edit',['id' => $user->id])}}">{{$user->username}}</a></td>
                        <td><form action="{{ route('gestionUsuario-destroy', [$user->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td></tr>
                    </div>
                    
                    
                </div>
                    
                @endforeach
                </table>
            </div>
            
            
        </section>-->
    </main>    
        <div class="text-center">
            <h1>Lista de Usuarios</h1>
        </div>
        <div class="container">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                        <th>RUT</th>
                        <th>USERNAME</th>
                        <th>ROL</th>
                        <th>ACCIÓN</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($users as $user)
                    <tr>

                        <td>{{$user->name}}</td>
                        <td>{{$user->apellidop}}</td>
                        <td>{{$user->apellidom}}</td>
                        <td>{{$user->rut}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->role}}</td>
                        <td>
                            <a href="{{ route('gestionUsuario-edit',['id' => $user->id])}}" data-toggle="modal" data-target="#editarModal{{$user->id}}" class="btn btn-warning">Editar</a>
                                 <!-- Modal content-->
      <div class="modal fade" id="editarModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action={{ route('gestionUsuario-update',$user->id)}} method="POST">
                @csrf @method('PATCH')
                <div class="form-group">
                  <label for="" >Nombre:</label>
                  <input type="text" name="name" value="{{$user->name}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="" >Apellido Paterno:</label>
                    <input type="text" name="apellidop" value="{{$user->apellidop}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="" >Apellido Materno:</label>
                    <input type="text" name="apellidom" value="{{$user->apellidom}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="" >Rut:</label>
                    <input type="text" name="rut" value="{{$user->rut}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="" >Username:</label>
                    <input type="text" name="username" value="{{$user->username}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="" >Password:</label>
                    <input type="text" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Rol: </label>
                                <select class="combolista" name="role" id='role' value="{{$user->role}}" onchange="combo(this,'role')">
                                    <option value="operador">Operador</option>
                                    <option value="admin">Administrador</option>
                                </select>
                </div>
                
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            </form>
          </div>
        </div>
      </div>

                            
                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{$user->id}}">Eliminar</button>
                   
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
            {{$users->links()}}
            @if(\Session::has('destroy'))
                <div class="alert alert-danger">
                    <p>{{\Session::get('destroy')}}</p>
                </div>
            @endif
        </div>
        
    <!--=============Modal Confirmación=============-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>¿Deseas eliminar el usuario {{$user->username}}?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <form action="{{ route('gestionUsuario-destroy', [$user->id]) }}" method="POST">
                @method('DELETE')
                @csrf 
              <button class="btn btn-danger">Eliminar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!--=============Modal Confirmación=============-->
    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Se va a eliminar el registro: ' + id)
  
})

    </script>

  
 
     
    <!--================FOOTER======================-->
    
        @include("footer")
    


    


