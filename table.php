<?php include("header.php"); ?>


    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <h1>Table</h1>
      </div>
    </section> -->

    <!-- Main content -->
    <section class="content">

     
              
          





          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><h1 align="center">ระบบสอนแทน</h1></h3>
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">


                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row" class="info">
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ลำดับ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">นามสกุล</th>

                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รหัสสาขา</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">จัดการ</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <?php for($i=1;$i<=5;$i++){
                                     
                                     ?>
                                    <tbody>
                                        
                                        <tr>
                                                <td>
                                                Test
                                                </td>

                                                <td>
                                                   Test1
                                                </td>

                                                <td>
                                                  Test
                                                </td>

                                                <td>
                                                   CPE.
                                                </td>

                                                <td>
                                                  <a class="btn btn-primary btn-sm" href="#">
                                                  <i class="fas fa-folder">
                                                  </i>
                                                  View
                                              </a>
                                              <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#staticBackdrop"href="./view/update.php" >
                                                  <i class="fas fa-pencil-alt">
                                                  </i>
                                                  Edit
                                              </a>
                                              <a class="btn btn-danger btn-sm" onclick = "tae()" href="#" >
                                                  <i class="fas fa-trash">
                                                  </i>
                                                  Delete
                                              </a>
                                                </td>

                                               
                                               
                                            </tr>
                                    </tbody>
                                    <?php } ?>
                                    </table>



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- ************************************************ -->
      <div class="example">
  <button id="b1">A basic message</button>
  <button id="b2">A title with a text under</button>
  <button id="b3">A success message!</button>
  <button id="b4">A warning message, with a function attached to the "Confirm"-button...</button>
  <button id="b4">A warning message, with a function attached to the "Confirm"-button...</button>
  <button id="b4">A warning message, with a function attached to the "Confirm"-button...</button>
  <button id="b5">... and by passing a parameter, you can execute something else for "Cancel".</button>
  <button id="b6">A message with a custom icon</button>
</div>
       <!-- ****************************************************** -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
                  
                </div>


                <div class="col-md-1">
                  
                </div>

              </div>

            </div>
              
          </div>

          
        

          


        </div>
        <!-- /.col -->
      </div>

      

    </section>
    <!-- /.content -->

    
<?php include('footer.php'); ?>

<script>
  $(function () {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // });
  });
</script>
  
</body>
</html>
