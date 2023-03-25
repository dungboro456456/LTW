<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

$list = Category::where('status','!=','0')->orderBy('created_at','DESC')->get();

// var_dump($list);
use node_modules\bootstrap\dist\js\bootstrap;

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
            <h1 >Chi tiết sản phẩm </h1> 
          </div> 
          <div class="col-sm-6 "> 
            <div class="row float-right"> 
              <a style="padding: 4px; border-radius: 10%;text-align: center;padding-left: 5px; align-items:center;" class="btn btn-danger mr-1 px-1"  href="index.php?option=category"><i class="fa-solid fa-arrow-left-long"></i>Quay về</a> 
              <a class="btn btn-success mr-1 px-1"  href="index.php?option=category&cat=create"><i class="fa-solid fa-plus"></i>Thêm</a>
              <a style="padding: 4px; border-radius: 10%;text-align: center;padding-left: 5px; align-items:center;" class="btn btn-danger mr-1 px-1"  href="index.php?option=category&cat=trash"><i class="fa-solid fa-trash"></i>Thùng Rác</a> 
            </div> 
          </div> 
        </div> 
      </div><!-- /.container-fluid --> 
    </section> 
 
    <!-- Main content --> 
    <section class="content"> 
   
 
<!-- Default box --> 
<div class="card"> 
  <div class="card-header"> 
    <h3 class="card-title"></h3> 
 
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
        
          <?php              
         $id = $_REQUEST['id'];
         $category = Category::find($id);
         $product= Product::find($id);
                ?>
                        <div class="container my-5">
                        <div class="row">
                        <div class="col-md-5">
                        <img src="../../backend/img/ao-len-nam-totoday-ao-len-soc-lon-mau.jpg" alt="Product Image" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-7">
                        <h2>Tên sản phẩm:<?=$category['name']?></h2>
                        <p><strong>ID sản phẩm: <?=$category['id']?></strong></p>
                        <p><strong>Giá:<?=$product['price']?></strong></p>
                        <h3>Mô tả sản phẩm:<?=$product['metadesc']?></h3>
                        </div>
                    </div>
                    </div>





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