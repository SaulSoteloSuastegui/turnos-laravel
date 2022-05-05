
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Crear
</button>



<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="/action_page.php"  class="redireccionar">
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Numero de investigación:</label>
              <input type="text" class="form-control" id="email" placeholder="Numero de investigacion " name="numinv">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Tipo:</label>
              <select class="form-select mt-3">
                  <option>Con detenido</option>
                  <option>Sin detenido</option>
                  <option>Cuadernillo</option>
                  <option>Orden de aprehension</option>
              </select>
            </div>
         
            <a href="{{route('turno.registrar')}}"type="submit" class="btn btn-primary">Submit</a>
        </form> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
