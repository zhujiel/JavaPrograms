<!DOCTYPE html>
<?php
require_once'database.php';
if(isset($_GET['id'])){
$sql = "SELECT* FROM katalog WHERE id = :id";
$stmt = $conn->prepare($sql);
$result = $stmt->execute([
    ':id' => $_GET['id']
]);
$items = $stmt->fetchAll()[0];
}
if(isset($_POST['submit'])){
    $sql = "UPDATE katalog SET czName = :czname, engNAme = :engname, fczname = :fczname, fengname = :fengname, czov= :czov, engov = :engov,id_kategorie=:category WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([
        ':czname' => $_POST['czname'],
        ':engname' => $_POST['engname'],
        ':fczname' => $_POST['fczname'],
        ':fengname' => $_POST['fengname'],
        ':czov' => $_POST['czov'],
        ':engov' => $_POST['engov'],
        ':category' => $_POST['category'],
        ':id' => $_GET['id']
    ]);
    if (!$result) {
    var_dump($stmt->errorInfo());
        
}
    header('Location: cms.php');
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CHINT</title>
    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >
    
   

    
</head>

<body style="font-family:Arial;">
   
    <!--Main Navigation-->
    <?php include 'czHeaders/header8.php'; ?>
    <div class="container text-center justify-content-center mb-3">
             <form class="mt-3" action="" method="post" enctype="multipart/form-data" id="form-create">
                        
                            <label class="col-sm-2 col-form-label">Czech name</label>
                         
                              <input type="text" class="form-control" name="czname" placeholder="Czech name"  value="<?=$items['czName']?>">
                         
                            <label class="col-sm-2 col-form-label">Full Czech name</label>
                         
                              <input type="text" class="form-control" name="fczname" placeholder="Czech name"  value="<?=$items['fczname']?>">
                          
                           <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">přijmení</label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="přijmení">
                            </div>-->
                        
                            <label class="col-sm-2 col-form-label">English name</label>
                           
                              <input type="text" class="form-control" name="engname" placeholder="English name"  value="<?=$items['engName']?>">
                         
                            <label class="col-sm-2 col-form-label">Full English name</label>
                           
                              <input type="text" class="form-control" name="fengname" placeholder="English name"  value="<?=$items['fengname']?>">
                         
                            <label class="col-sm-2 col-form-label" >English overview</label>
                           
                            <textarea rows="10" class="form-control" name="engov" placeholder="Products Eng. overview..." ><?=$items['engov']?></textarea>
                         
                            <label class="col-sm-2 col-form-label" >Czech overview</label>
                           
                            <textarea rows="10" class="form-control" name="czov" placeholder="Products Cze. overview..." ><?=$items['czov']?></textarea> 
                     
                            <!--<label class="col-sm-2 col-form-label" >Image</label>
                           
                              <input type="file" class="form-control" name="image" accept="image/*"  value="<?=$items['img']?>">
                       
                            <label class="col-sm-2 col-form-label">Czech PDF</label>
                          
                              <input input type="file"  class="form-control" name="intr_pdf[]"  multiple >
                         
                            <label class="col-sm-2 col-form-label">English PDF</label>
                          
                              <input input type="file"  class="form-control" name="engintr_pdf[]"  multiple >
                     
                            <label class="col-sm-2 col-form-label">Certificate pdf</label>
                           
                              <input input type="file" class="form-control"  name="cert_pdf[]"  multiple>-->
                       
                            <label class="col-sm-2 col-form-label">Category</label>
                          <select name="category" class="form-control">
                              <option value="1">MODULAR DIN RAIL PRODUCTS</option>
                              <option value="2">MOULDED CASE CIRCUIT BREAKERS </option>
                              <option value="3">AIR CIRCUIT BREAKER</option>
                              <option value="4">CONTACTORS</option>
                              <option value="5">OVERLOAD RELAYS</option>
                              <option value="6">MOTOR STARTERS</option>
                              <option value="7">PUSHBUTTONS & INDICATORS</option>
                              <option value="8">RELAYS</option>
                              <option value="9">INVERTERS & SOFT-STARTERS</option>
                              <option value="10">CAR CHARGER</option>
                            </select>
                             <br>

                              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                       
                    </form>
        </div>
   
    <?php include 'czFooter/footer.php'; ?>

   
</body>

</html>

