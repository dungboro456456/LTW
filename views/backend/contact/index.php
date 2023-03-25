<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Menu;

$list = Contact::all(); 
// var_dump($list); 
?> 
 
 
 
<?php require_once('../views/backend/Header.php') ;?> 
 
  <!-- Content Wrapper. Contains page content --> 
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) --> 
     <!-- Content Header (Page header) --> 
     <section class="content-header"> 
      <div class="container-fluid"> 
        <div class="row mb-2"> 
          <div class="col-sm-6 " style="justify-content: center;"> 
            <h1 >Tất cả Liên Hệ </h1> 
          </div> 
          <div class="col-sm-6"> 
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="#">Home</a></li> 
              <li class="breadcrumb-item active">Blank Page</li> 
            </ol> 
          </div> 
        </div> 
      </div><!-- /.container-fluid --> 
    </section> 
 
    <!-- Main content --> 
    <section class="content"> 
   
 
<!-- Default box --> 
<div class="card"> 
  <div class="card-header"> 
    <h3 class="card-title">Title</h3> 
 
    <div class="card-tools"> 
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"> 
        <i class="fas fa-minus"></i> 
      </button> 
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove"> 
        <i class="fas fa-times"></i> 
      </button> 
    </div> 
  </div> 
  <div class="card-body"> 
    <table class="table table-bordered table-hover table-striped"> 
        <thead> 
            <tr> 
                <th>#</th> 
                <th>ID</th>
                <th>Tên</th> 
                <th>Email</th> 
                <th>Sô Điện Thoại</th> 
                <th>Tiêu Đề</th> 
                <th>Chi Tiết</th> 
                <th>Ngày tạo</th> 
            </tr> 
        </thead> 
        <tbody> 
            <?php foreach($list as $row):?> 
            <tr> 
                <td> 
                    <input type="checkbox"> 
                </td> 
                <td><?=$row['id']?></td> 
                <td><?=$row['name']?></td> 
                <td><?=$row['email']?></td> 
                <td><?=$row['phone']?></td> 
                <td><?=$row['title']?></td> 
                <td><?=$row['detail']?></td> 
                <td><?=$row['created_at']?></td>                 
            </tr> 
            <?php endforeach;?> 
        </tbody> 
    </table> 
  </div> 
  <!-- /.card-body --> 
  
  <!-- /.card-footer--> 
</div> 
<!-- /.card --> 
 
</section> 
<!-- /.content --> 
</div> 
<!-- /.content-wrapper --> 
 
<?php require_once('../views/backend/Footer.php') ;?>