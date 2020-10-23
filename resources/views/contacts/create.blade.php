@extends('base')
@section('main')

<div class="row"> <div class="col-sm-8 offset-sm-2">   
     <h1 class="d-flex justify-content-center py-4">Agregar un Contacto</h1>  <div>   
          @if ($errors->any())     
         <div class="alert alert-danger">
             <ul>            
             @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>   
              @endforeach 
            </ul></div>
             <br />    
            @endif     
            <div class="card bg-dark">
                <div class="card-body ">

                    <form method="post" action="{{ route('contacts.store') }}">         
                        {{ csrf_field() }}        
                    <div class="form-group">                
                        <label for="nombres">Nombre: </label>             
                            <input type="text" class="form-control" name="nombres" id="nombres"/>         
                                </div>
                            <div class="form-group">             
                                <label for="apellidos">Descripcion:</label>             
                                    <input type="text" class="form-control" name="apellidos" id="apellidos"/>      
                                        </div>
                                    <div class="form-group">              
                                        <label for="correo">Precio:</label>            
                                    <input type="text" class="form-control" name="correo" id="correo"/>     
                                        </div>     
                                        <div class="form-group">              
                                            <label for="telefono">Stock:</label>            
                                        <input type="text" class="form-control" name="telefono" id="telefono"/>     
                                            </div> 
                                          <button type="submit" class="btn btn-primary">Agregar Contacto</button> 
                                                </form>  
                </div>
            
            </div>   
        </div>
    </div>
</div>
@endsection