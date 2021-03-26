<?php
include 'header.php';
?>
<h1 class="text-center">Formation</h1>
<hr>
<div class="content row ">
<?php
include 'conect.php';
 $stmt = $con->prepare("SELECT * FROM developpeurs  INNER JOIN formations  ON developpeurs.id =  formations.ID");
 
 $stmt->execute();
 foreach ($stmt as $stm) {
    echo '
    <div class="card text-center h-100" style="width: 18rem;">
      <h6 class= "mt-3">'. $stm['FulName'] .'</h6>
      <hr>
      <img src="../'. $stm['Image'] .'"  class="card-img-top  w-75 h-75 m-auto" alt="..."> 
      <div class="accordion" id="accordionExample">
  <div class="">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-light font-weight-bolder text-primary btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        '. $stm['techno'] .'
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body ">
      <p class="font-weight-light">
      On train de fair formation on language  <strong> '. $stm['techno'] .' </strong> la date de debut 
      </p>
      <b class="font-italic">'. $stm['date'] .'</b>
      </div>
    </div>
  </div>
</div>
      <form action="" method="POST" > 
      <button type="submit" name="validation" class="btn btn-danger col-lg-12 '. $stm['validation'] .'" id="validation" value=" '. $stm['ID'] .'" >Not Accepte</button>
      </form>
    </div>
  ';
 }
 if(isset($_POST['validation'])){
  $stmts = $con->prepare("UPDATE `formations` SET `validation` = 'Yes' WHERE ID =:id ");
  $stmts->bindParam("id",$_POST['validation']);
  $stmts->execute();
  if($stmts->execute()){
    echo "<script>window.location.assign('Formation.php') ;</script>";
  }

}


?>
<script src="ADMIN.js"></script>
</div>
<?php
include 'footer.php';

?>


