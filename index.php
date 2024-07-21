<?php 
include("config/app.php"); 
include("html/header.php"); 
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
                  <input type="text" class="form-control" name="intituler">
                  <span class="input-group-append">
                    <button type="submit" class="btn btn-info btn-flat">+</button>
                  </span>
                </div>
                </form>
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <!-- checkbox -->
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Design a nice theme</span>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash"></i>
                    </div>
                  </li>
                  
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