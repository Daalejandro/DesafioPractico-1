<!-- Edit -->
<div class="modal fade" id="details_<?php echo $row->codigo; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Detalles</h4></center>
            </div>
            <div class="modal-body">
              <div class="container-fluid"


                <div class="row g-2">
                  <div class="col-md-6" >
                  <img src="img/<?=$row->img?>" alt="" height="200" width="200" style="border:2px solid black;">
                  </div>
                  <div class="col-md-6">
                  <label>Nombre:</label><?=$row->nombre?>
                  </div>
                  <div class="col-md-6">
                  <label>Precio:</label><?=$row->precio?>
                  </div>
                  <div class="col-md-6">
                  <label>Descripcion:</label><?=$row->descripcion?>
                  </div>
                  <div class="col-md-6">
                  <label>Categoria:</label><?=$row->categoria?>
                  </div>
                  <div class="col-md-6" style="">
                  <label>Existencias:</label><?=$row->existencias?>
                  </div>
                </div>

              </div>

        </div>
    </div>
</div>
