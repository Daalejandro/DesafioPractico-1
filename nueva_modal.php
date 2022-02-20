<!-- Nueva materia -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Nuevo Producto</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="agregar.php" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="codigo">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" placeholder="PROD00000" class="form-control" name="codigo" id="codigo" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre"required >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="uvs">descripcion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="descripcion" id="descripcion" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nota" >Imagen:</label>
					</div>
					<div class="col-sm-10">
						<input type="file"  class="form-control" name="img" id="img" required>
					</div>
				</div>

        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" for="uvs">categoria:</label>
          </div>
          <div class="col-sm-10">
    <select name="categoria" class="form-control">
   <option value="Textil">Textil</option>
   <option value="Promocional">Promocional</option>
    </select>

          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" for="uvs">precio:</label>
          </div>
          <div class="col-sm-10">
            <input type="number" min="0" step="0.1" class="form-control" name="precio" id="precio" required>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" for="uvs">existencias:</label>
          </div>
          <div class="col-sm-10">
            <input type="number"  min="0" step="1" class="form-control" name="existencias" id="existencias" required>
          </div>
        </div>
            </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</a>
			</form>
            </div>

        </div>
    </div>
</div>
