<div id="banner">
    <div class="container">
       <div class="search-container">
          <!-- Form -->
          <h2>Qué estás buscando ?</h2>
          <form action="{{route('home.filtrado')}}" method="GET">
             <!-- Search Input -->
             <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                <div class="form-group">
                   <input type="text" class="form-control banner-icon-search" name="titulo" placeholder="buscar por nombre del anuncio" value=""> 
                </div>
             </div>
             <!-- Search Category -->
             <div class="col-md-3 col-sm-6 col-xs-12 no-padding">
                <div class="form-group">
                   <select class="category form-control" name="ciudad" >
                      <option label="Seleccione una ciudad"></option>
                      <option value="Guayaquil">Guayaquil</option>
                      <option value="Esmeraldas">Esmeraldas</option>
                   </select>
                </div>
             </div>
             <!-- Search Location -->
             <div class="col-md-3 col-sm-9 col-xs-12 no-padding">
                <div class="form-group">
                   <select class=" form-control" name="categoria">
                      @foreach ($categorias as $categoria)
                      <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                      @endforeach                      
                   </select>
                </div>
             </div>
             <div class="col-md-2 col-sm-3 col-xs-12 no-padding">
                <div class="form-group form-action">
                   <button type="submit" class="btn btn-theme btn-search-submit">Buscar</button>
                </div>
             </div>
          </form>
       </div>
    </div>
 </div>