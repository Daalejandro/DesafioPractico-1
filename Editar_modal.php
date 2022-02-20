<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row->codigo; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editar.php" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" value="<?php echo $row->codigo; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" value="<?php echo $row->nombre; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">descripcion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="descripcion" value="<?php echo $row->descripcion; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Imagen:</label>
					</div>
					<div class="col-sm-10">
            <label>Imagen actual:</label> <?php echo "  ".$row->img;?><br>

						<label>Nueva imagen(Opcional):</label><input type="file"  id="file" class="form-control" name="img">

					</div>
				</div>

        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">categoria:</label>
					</div>
					<div class="col-sm-10">

            <select name = "categoria" class="form-control">
              <option value="Textil" <?php if ($row->categoria == "Textil") echo "selected='selected'";?> >Textil</option>
              <option value="Promocional" <?php if ($row->categoria == "Promocional") echo "selected='selected'";?> >Promocional</option>
              </select>


					</div>
				</div>

        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">precio:</label>
          </div>
          <div class="col-sm-10">
            <input type="number" min="0" step="0.1" class="form-control" name="precio" value="<?php echo $row->precio; ?>" required>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">existencias:</label>
          </div>
          <div class="col-sm-10">
            <input type="number" min="0.0" step="1" class="form-control" name="existencias" value="<?php echo $row->existencias; ?>" required>
          </div>
        </div>

            </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>
