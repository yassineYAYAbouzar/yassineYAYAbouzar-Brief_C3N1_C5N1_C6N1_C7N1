<?php
include 'header.php';
?>
<h1 class="text-center">la liste du devloppers</h1>
<hr>
<div class="content row ">
<?php
include 'conect.php';
 $stmt = $con->prepare("SELECT * FROM developpeurs INNER JOIN technos ON developpeurs.id = technos.ID ORDER BY FulName
 ");
 
 $stmt->execute();
 foreach ($stmt as $stm) {
    echo '
    <div class="card text-center h-100" style="width: 18rem;">
      <h6 class= "mt-3">'. $stm['FulName'] .'</h6>
      <hr>
      <img src="../'. $stm['Image'] .'"  class="card-img-top  w-75 h-75 m-auto" alt="...">
      <div class="progresses col-lg-10" id="progresses">
      <div class="progress mb-3 ">
          <div class="progress-bar" role="progressbar" style="width: '. $stm['html']."%" .'"
              aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
      <div class="progress mb-3 ">
          <div class="progress-bar" role="progressbar" style="width: '. $stm['css']."%" .'"
              aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
      <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: '. $stm['ajax']."%" .'"
              aria-valuenow=" 0" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
      <div class="progress mb-3">
          <div class="progress-bar " role="progressbar" style="width: '. $stm['js']."%" .'"
              aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
      <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width:  '.$stm['php']."%" .'"
              aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
      <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" style="width: '. $stm['mysql']."%" .'"
              aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
          </div>
      </div>
  </div>
      <div class="mt-3 mb-3">
      <form action="" method="post" class="d-inline"><button class="btn btn-danger col-lg-5" name= "Suprime" type="submit" value="'. $stm['ID'] .'">Suprime</button></form>

      <button class="btn btn-success col-lg-5 " id="technosE" >Modifier</button>
      <form action="" method="post"  id="form11" class="d-none">
          <h5 class="mt-3">Saisir Votre compétence</h5>
          <hr>
          <input type="number" min="0" max="100" step="25" name="html" placeholder="html" />
          <input type="number" min="0" max="100" step="25" name="css" placeholder="css"/>
          <input type="number" min="0" max="100" step="25" name="ajax" placeholder="js"/>
          <input type="number" min="0" max="100" step="25" name="js" placeholder="php"/>
          <input type="number" min="0" max="100" step="25" name="php" placeholder="jquiry"/>
          <input type="number" min="0" max="100" step="25" name="mysql" placeholder="ajax"/>
          <button type="submit" class="btn btn-primary btn-block mt-3" name= "techno" value="'. $stm['ID'] .'">send</button>
      </form> 
    </div> 
    </div>
  ';

 }
 if(isset($_POST['techno'])){
    $html =  filter_var($_POST['html'],FILTER_SANITIZE_NUMBER_INT);
    $css =  filter_var($_POST['css'],FILTER_SANITIZE_NUMBER_INT);
    $ajax =  filter_var($_POST['ajax'],FILTER_SANITIZE_NUMBER_INT);
    $js =  filter_var($_POST['js'],FILTER_SANITIZE_NUMBER_INT);
    $php =  filter_var($_POST['php'],FILTER_SANITIZE_NUMBER_INT);
    $mysql =  filter_var($_POST['mysql'],FILTER_SANITIZE_NUMBER_INT);
    $stmts = $con->prepare("UPDATE `technos` SET  `Html` = '$html', `css` = '$css',`ajax` = '$ajax', `js` = '$js', `php` = '$php', `mysql` = '$mysql' WHERE ID =:id ");
    $stmts->bindParam("id",$_POST['techno']);
    $stmts->execute();
    echo "<script>window.location.assign('devlopper.php') ;</script>";
}
if(isset($_POST['Suprime'])){
    $stmt1 = $con->prepare("DELETE FROM `technos` WHERE ID ={$_POST['Suprime']}");
    $stmt2 = $con->prepare("DELETE FROM `formations` WHERE ID ={$_POST['Suprime']} ");
    $stmt1->execute();
    $stmt2->execute();
}
?>
<script src="ADMIN.js"></script>
</div>
<?php


include 'footer.php';

?>

