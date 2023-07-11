<!DOCTYPE html>
<?php
require_once'database.php';

$sql = "SELECT k.id, k.engName,ka.name FROM katalog k INNER JOIN kategorie ka ON k.id_kategorie = ka.id ORDER BY k.id";
$stmt = $conn->prepare($sql);
$result = $stmt->execute();
$items = $stmt->fetchAll();

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CHINT</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
            #ContentArea{
            border:2px solid #0174DF;height:85vh;
        }
        @media only screen and (max-height: 853px) {
            #ContentArea{
                height:auto;
            }
         
}
    </style>
<script>$(document).ready(function(){
    $(".divs div").each(function(e) {
        if (e != 0)
            $(this).hide();
    });
    $("#Added").click(function(){
        if ($(".divs div:visible").next().length != 0)
            $(".divs div").fadeOut(function(){
                $(".divs .Added").fadeIn();
            });
        else {
            $(".divs div").fadeOut(function(){
                $(".divs .Added").fadeIn();
            });
        }
        return false;
    });
    $("#Delete").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Delete").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Delete").fadeIn();
            });
        }
        return false;
    });
         $("#News").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .News").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .News").fadeIn();
            });
        }
        return false;
    });
         $("#Edit").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Edit").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Edit").fadeIn();
            });
        }
        return false;
    });
});
</script>
    
</head>

<body style="font-family:Arial;">

    <!--Main Navigation-->
    <?php include 'czHeaders/header8.php'; ?>
     
    <main class="mt-0">
      <div class="container-fluid text-center justify-content-center" style="width:96%;margin-left:2%;background-color:#FBFAFA;height:100%;">
          
            <!--<h2 class="mb-4 font-weight-bold" style="color:orange">Katalogy</h2>-->
            <!--<div class="row d-flex justify-content-center mb-4">
              <div class="col-md-8 font-weight-bold">
                <p>Pro správné zobrazení katalogů si prosím stáhněte poslední verzi programu Adobe Reader <a href="https://get.adobe.com/cz/reader/">zde</a></p>
              </div>
            </div>-->
            <div id="Moularni" style="visibility:hidden;">
                
            </div>
       
            <div class="seznam row">
              <div class="col-md-3 " style="background:#0174DF">
              <div class="col col-md-12 mb-4  shadow-sm p-1  bg-white rounded mt-4" style="width:70%;margin-left:15%;">
                <h6 class="my-0"><a href="#" class="link" style="color:#0174DF;font-size:1em;" id="Added">添加 / Add / Přidat</a></h6>
              </div>
              
               <div class="col col-md-12 mb-4 shadow-sm p-1 bg-white rounded"style="width:70%;margin-left:15%;">
                <h6 class="my-0"><a href="#" class="link" style="color:#0174DF;font-size:1em;" id="Delete">删除 / Delete / Smazat</a></h6>
              </div>
               
                <div class="col col-md-12 mb-4 shadow-sm p-1 bg-white rounded"style="width:70%;margin-left:15%;">
                <h6 class="my-0"><a href="#" class="link" style="color:#0174DF;font-size:1em;" id="News"> 文章添加/ News add / Zprávy přidat</a></h6>
              </div>
                  
                 <div class="col col-md-12 mb-4 shadow-sm p-1 bg-white rounded"style="width:70%;margin-left:15%;">
                <h6 class="my-0"><a href="#" class="link" style="color:#0174DF;font-size:1em;" id="Edit"> 修改 / Edit</a></h6>
              </div>  
        
              </div>
              
              <div class="divs col-md-9"  id="ContentArea">
                
                 <div class="Added">
                     <form class="mt-3" action="upload.php" method="post" enctype="multipart/form-data" id="form-create">
                        
                            <label class="col-sm-2 col-form-label">Czech name</label>
                         
                              <input type="text" class="form-control" name="czname" placeholder="Czech name">
                         
                            <label class="col-sm-2 col-form-label">Full Czech name</label>
                         
                              <input type="text" class="form-control" name="fczname" placeholder="Czech name">
                          
                           <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">přijmení</label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="přijmení">
                            </div>-->
                        
                            <label class="col-sm-2 col-form-label">English name</label>
                           
                              <input type="text" class="form-control" name="engname" placeholder="English name">
                         
                            <label class="col-sm-2 col-form-label">Full English name</label>
                           
                              <input type="text" class="form-control" name="fengname" placeholder="English name">
                         
                            <label class="col-sm-2 col-form-label" >English overview</label>
                           
                            <textarea rows="10" class="form-control" name="engov" placeholder="Products Eng. overview..."></textarea>
                         
                            <label class="col-sm-2 col-form-label" >Czech overview</label>
                           
                            <textarea rows="10" class="form-control" name="czov" placeholder="Products Cze. overview..."></textarea> 
                     
                            <label class="col-sm-2 col-form-label">Image</label>
                           
                              <input type="file" class="form-control" name="image" accept="image/*">
                       
                            <label class="col-sm-2 col-form-label">Czech PDF</label>
                          
                              <input input type="file"  class="form-control" name="intr_pdf[]"  multiple >
                         
                            <label class="col-sm-2 col-form-label">English PDF</label>
                          
                              <input input type="file"  class="form-control" name="engintr_pdf[]"  multiple >
                     
                            <label class="col-sm-2 col-form-label">Certificate pdf</label>
                           
                              <input input type="file" class="form-control"  name="cert_pdf[]"  multiple>
                       
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

                              <button type="submit" class="btn btn-primary">Submit</button>
                       
                    </form>
                     <br>
                </div> 
                  <div class="Delete">
                
                      <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              
                              <th scope="col">Name of product</th>
                              <th scope="col">Category</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($items as $i):?>
                                <tr>

                                    <td><?= $i['engName']?></td>

                                    <td><?= $i['name']?></td>
                                    <td> <a href="delete.php?id=<?= $i['id']?>" class="del btn btn-info btn-lg" style="background:red;">
                                              <span class="glyphicon glyphicon-trash"></span> Delete 
                                            </a></td>
                                </tr>
                        <?php endforeach;?>
                            
                         
                          </tbody>
                    </table>
                  </div>
                  <div class="News">
                      <form class="mt-3" action="uploadNews.php" method="post" enctype="multipart/form-data" id="form-create">
                        
                            <label class="col-sm-2 col-form-label">Head Title</label>
                         
                              <input type="text" class="form-control" name="HT" placeholder="Head..">
                          
                           <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">přijmení</label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="přijmení">
                            </div>-->
                        
                         
                            <label class="col-sm-2 col-form-label">Text</label>
                           
                            <textarea rows="10" class="form-control" name="txt" placeholder="CHiNT ...."></textarea> 
                     
                            <label class="col-sm-2 col-form-label">Image</label>
                           
                              <input type="file" class="form-control" name="images[]" accept="image/*" multiple>
                             <br>
                           
                              <input class="form-check-input" type="checkbox" name="checkSend"  value="Yes">
                              <label class="form-check-label">Send to customers</label>
                            
                          
                             <br>
                          <br>

                              <button type="submit" class="btn btn-primary mb-4">Submit</button>
                          
                       
                    </form>
                  </div>
                  
                  <div class="Edit">
                      
                      <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              
                              <th scope="col">Name of product</th>
                              <th scope="col">Category</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($items as $i):?>
                                <tr>

                                    <td><?= $i['engName']?></td>

                                    <td><?= $i['name']?></td>
                                    <td> <a href="edit.php?id=<?= $i['id']?>" class="del btn btn-info btn-lg" style="background:red;">
                                              <span class="glyphicon glyphicon-trash"></span> Edit 
                                            </a></td>
                                </tr>
                        <?php endforeach;?>
                            
                         
                          </tbody>
                    </table>
                  </div>
                
              </div>
              
            </div>
          
     
         <br>
        
      </div>
        
    </main>

  
    <?php include 'czFooter/footer.php'; ?>


</body>

</html>

