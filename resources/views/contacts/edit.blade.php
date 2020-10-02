@extends('base')
@section('main')
<div class="row">    
    <div class="col-sm-8 offset-sm-2">        
        <h1 class="d-flex justify-content-center py-4">Actualizar un Contacto</h1>        
        @if ($errors->any())        
        <div class="alert alert-danger">            
            <ul>                
                @foreach ($errors->all() as $error)                
                <li>{{ $error }}</li>                
                @endforeach            
            </ul>        
        </div>        
        <br />         
        @endif        
       <div class="card">
    <div class="card-body">
        
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">            
            {{method_field('PATCH')}}       
            {{ csrf_field() }}           
            <div class="form-group">                
<label for="nombres">Nombres:</label>                
    <input type="text" class="form-control" name="nombres" id="nombres" value={{ $contact->nombres }} />            
</div>            
    <div class="form-group">                
<label for="apellidos">Apellidos:</label>                
<input type="text" class="form-control" name="apellidos" id="apellidos" value={{ $contact->apellidos }} />           
</div>            
<div class="form-group">                
<label for="correo">Correo:</label>                
<input type="text" class="form-control" name="correo" id="correo" value={{ $contact->correo }} />            
</div>            
<div class="form-group">                
<label for="telefono">Telefono:</label>                
<input type="text" class="form-control" name="telefono" id="telefono" value={{ $contact->telefono }} />            
</div>                       
<button type="submit" class="btn btn-primary">Actualizar</button>        
</form>   
    </div>    
    
    </div> 

</div></div>
@endsection