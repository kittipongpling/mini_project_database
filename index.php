<?php include("header.php"); ?>


    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">

     
              
          





          <div class="card">
            <div class="card-header">
              <h3 class="card-title">หน้าแรก</h3>
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-1">
                  
                </div>


            <div class="col-md-10">


            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">ระบบสอนแทน</h3>
              </div>
              <div class="tae">

<h1 align="center">ระบบสอนแทน</h1>
<table class="table table-bordered">
<button class="btn btn-primary" onclick="window.location.href ='./view/create.php'"><i class="fas fa-plus"></i> เพิ่มข้อมูล</button>
  <thead>
    <tr>
      <th scope="col">รหัสบัตรประชาชน </th>
      <th scope="col">คำนำหน้าชื่อ </th>
      <th scope="col">ชื่อ </th>
      <th scope="col">นามสกุล </th>
      
      <th scope="col">รหัสสาขา  </th>
      
      <th scope="col">  </th>
      <th scope="col">  </th>
      <th scope="col">  </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>1325654111</td>
      <td>นาย</td>
      <td>กิตติพงษ์</td>
      <td>ปลิงกระโทก</td>
     
      <td>CPE</td>
   
      <td><button class="btn" >ดูข้อมูล</button></td>
      <td><button class="btn btn-warning" onclick="window.location.href='./view/update.php'">แก้ไข</button></td>
      <td><button class="btn btn-danger">ลบข้อมูล</button></td>
    </tr>
    
  </tbody>
</table>
</div>
              <!-- /.card-header -->
              <!-- form start -->
              
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
