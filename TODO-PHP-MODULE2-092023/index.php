<?php 
include("config/app.php"); 
include("config/db.php"); 
include("connection.php"); 
include("html/header.php"); 
include("fct/item.php");
include("fct/request.php");
?>

        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card" style="position: relative; left: 0px; top: 0px;">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  <?= APP_NAME ?>
                </h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- formulaire -->
                <form action="addItem.php" method="POST">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" name="intitule">
                  <span class="input-group-append">
                    <button type="submit" class="btn btn-info btn-flat">+</button>
                  </span>
                </div>
                </form>
                <!-- liste -->
                <ul class="todo-list" data-widget="todo-list">
                 <?php
                   $query = 'SELECT *FROM todo';
                   $stmt = $pdo->query($query);
                   while($item = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo displayItem($item);
                   }
                 ?>
                  
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              </div>
            </div>
            </div>

            
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
  
<?php include("html/footer.php");         ?>