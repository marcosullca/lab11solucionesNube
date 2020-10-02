@extends('base')
@section('main')
<div>    <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">Agregar Contactos</a></div>
<div class="row"><div class="col-sm-12">    
    <h1 class="d-flex justify-content-center py-4">Lista de Contactos</h1>      
    <table class="table table-dark">    
        <thead>       
        <tr>          
            <td>ID</td>          
            <td>Nombres</td>       
                <td>Apellidos</td>        
                <td>Correo</td>   
                <td>Telefono</td>              
            <td colspan = 2>Acciones</td>       
        </tr>    
    </thead>    
    <tbody>        
    @foreach($contacts as $contact)        
    <tr>            
    <td>{{$contact->id}}</td>            
    <td>{{$contact->nombres}}</td> 
    <td>{{$contact->apellidos}}</td>            
    <td>{{$contact->correo}}</td>
    <td>{{$contact->telefono}}</td>                     
    <td>                
    <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Editar</a>            
</td>            
<td>                
    <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">                  
    {{ csrf_field() }}
    {{method_field('DELETE')}} 
    <button class="btn btn-danger" type="submit">Eliminar</button>               
</form>            
</td>        </tr>       
 @endforeach   
</tbody>  </table>
</div>
<div class="col-sm-12">  @if(session()->get('success'))   
     <div class="alert alert-success">     
          {{ session()->get('success') }}     
         </div>  @endif</div>
</div>

@endsection