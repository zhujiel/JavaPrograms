<!DOCTYPE html>
<?php
require_once'database.php';

$sql = "SELECT * FROM katalog";
$stmt = $conn->prepare($sql);
$result = $stmt->execute();

$items = $stmt->fetchAll();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <style>
        #ContentArea{
            border:2px solid #0174DF;height:85vh;
        }
        .items{
            font-size: 1em;
            border:2px solid black;
            float:left;
            margin-left: 2%;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease; 
        }
        .items:hover{
            background: black;
            opacity: 0.7;
            color: lightgray;
        }
        .im{
            height:84.6vh;width:100%;
            margin:0;padding:0;
        }
        @media only screen and (max-height: 853px) {
            #ContentArea{
                height:auto;
            }
            .im{
                height:auto;width:100%;
            }
}
        @media only screen and (max-width: 767px) {
           
            .items{
                height:auto;width:100%;
                margin-left:0;
                padding:0;
                font-size: 2.3em;
            }
        @media only screen and (max-width: 1707px) {
           
            .items{
                font-size: 1em;
            }
        @media only screen and (max-width: 767px) {
           
            .items{
                height:auto;width:100%;
                margin-left:0;
                padding:0;
                font-size: 2.3em;
            }
}
    </style>
    <title>CHINT</title>
    <script>$(document).ready(function(){
    $(".divs div").each(function(e) {
        if (e != 0)
            $(this).hide();
    });
    $("#Moularni").click(function(){
        if ($(".divs div:visible").next().length != 0)
            $(".divs div").fadeOut(function(){
                $(".divs .Moularni").fadeIn();
            });
        else {
            $(".divs div").fadeOut(function(){
                $(".divs .Moularni").fadeIn();
            });
        }
        return false;
    });
    $("#Vyk").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Vyk").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Vyk").fadeIn();
            });
        }
        return false;
    });
                $("#Vzd").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Vzd").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Vzd").fadeIn();
            });
        }
        return false;
    });
                $("#Sty").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Sty").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Sty").fadeIn();
            });
        }
        return false;
    });
                $("#Nap").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Nap").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Nap").fadeIn();
            });
        }
        return false;
    });
                $("#Mot").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Mot").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Mot").fadeIn();
            });
        }
        return false;
    });
                $("#Tla").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Tla").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Tla").fadeIn();
            });
        }
        return false;
    });
                $("#Rel").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Rel").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Rel").fadeIn();
            });
        }
        return false;
    });
                $("#Fre").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Fre").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Fre").fadeIn();
            });
        }
        return false;
    });
                $("#Nab").click(function(){
        if ($(".divs div:visible").prev().length != 0)
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Nab").fadeIn();
            });
        else {
            $(".divs div:visible").fadeOut(function(){
                $(".divs .Nab").fadeIn();
            });
        }
        return false;
    });

});
</script>
    
</head>

<body>
    <main class="mt-0">
      <div class="container-fluid text-center justify-content-center" style="width:96%;margin-left:2%;background-color:#FBFAFA;height:100%;">
          
            <!--<h2 class="mb-4 font-weight-bold" style="color:orange">Katalogy</h2>-->
            <!--<div class="row d-flex justify-content-center mb-4">
              <div class="col-md-8 font-weight-bold">
                <p>Pro správné zobrazení katalogů si prosím stáhněte poslední verzi programu Adobe Reader <a href="https://get.adobe.com/cz/reader/">zde</a></p>
              </div>
            </div>-->
        
       
            <div class="row">
              <div class="col-md-3 " style="background:#FBFAFA;border-bottom:2px solid #0174DF;border-top:2px solid #0174DF;border-left:2px solid #0174DF; ">
              <div class="col col-md-12 mb-4  shadow-sm p-1   rounded mt-4" style="width:70%;margin-left:15%;background:#0174DF;">
                <h6 class="my-0"><a href="#" class="link" style="color:#FBFAFA;font-size:0.7vw" id="Moularni">MOULÁRNÍ PŘÍSTROJE NA DIN LIŠTU</a></h6>
              </div>
              
               <div class="col col-md-12 mb-4 shadow-sm p-1  rounded"style="width:70%;margin-left:15%;background:#0174DF;">
                <h6 class="my-0"><a href="#" class="link" style="color:#FBFAFA;font-size:0.7vw" id="Vyk">VÝKONOVÉ JISTIČE</a></h6>
              </div>
              
               <div class="col col-md-12 mb-4 shadow-sm p-1  rounded"style="width:70%;margin-left:15%;background:#0174DF;">
                <h6 class="my-0"><a href="#" class="link" style="color:#FBFAFA;font-size:0.7vw" id="Vzd">VZDUCHOVÉ JISTIČE</a></h6>
              </div>
              
               <div class="col col-md-12 mb-4 shadow-sm p-1  rounded"style="width:70%;margin-left:15%;background:#0174DF;">
                <h6 class="my-0"><a href="#" class="link" style="color:#FBFAFA;font-size:0.7vw" id="Sty">STYKAČE</a></h6>
              </div>
              
               <div class="col col-md-12 mb-4 shadow-sm p-1  rounded"style="width:70%;margin-left:15%;background:#0174DF;">
                <h6 class="my-0"><a href="#" class="link" style="color:#FBFAFA;font-size:0.7vw" id="Nap">NADPROUDOVÁ RELÉ</a></h6>
              </div>
              
               <div class="col col-md-12 mb-4 shadow-sm p-1  rounded"style="width:70%;margin-left:15%;background:#0174DF;">
                <h6 class="my-0"><a href="#" class="link" style="color:#FBFAFA;font-size:0.7vw" id="Mot">MOTOROVÉ SPOUŠTĚČE</a></h6>
              </div>
              
               <div class="col col-md-12 mb-4 shadow-sm p-1  rounded"style="width:70%;margin-left:15%;background:#0174DF;">
                <h6 class="my-0"><a href="#" class="link" style="color:#FBFAFA;font-size:0.7vw" id="Tla">TLAČÍTKA A KONTROLKY</a></h6>
              </div>
              
               <div class="col col-md-12 mb-4 shadow-sm p-1   rounded"style="width:70%;margin-left:15%;background:#0174DF;">
                <h6 class="my-0"><a href="#" class="link" style="color:#FBFAFA;font-size:0.7vw" id="Rel">RELÉ </a></h6>
              </div>
              
              <div class="col col-md-12 mb-4 shadow-sm p-1  rounded"style="width:70%;margin-left:15%;background:#0174DF;">
                <h6 class="my-0"><a href="#" class="link" style="color:#FBFAFA;font-size:0.7vw" id="Fre">FREKVENČNÍ MĚNIČE A SOFTSTARTÉRY</a></h6>
              </div>
              
              <div class="col col-md-12 mb-4 shadow-sm p-1  rounded"style="width:70%;margin-left:15%;background:#0174DF;">
                <h6 class="my-0"><a href="#" class="link" style="color:#FBFAFA;font-size:0.7vw" id="Nab">NABÍJECÍ STANICE</a></h6>
              </div>
              </div>
              
              <div class="divs col-md-9"  id="ContentArea" style="margin:0;padding:3px;">
                
                <!-- <div class="col col-md-3 mb-2">
                <h5 class="my-3"><a href="#" class="link">FREKVENČNÍ MĚNIČE A MOTOROVÉ SPOUŠ</a></h5>
              </div>
              
              <div class="col col-md-3 mb-2">
                <h5 class="my-3"><a href="#" class="link">NABÍJECÍ STANICE</a></h5>
              </div>
                
                 
              <div class="col col-md-3 mb-2">
                <h5 class="my-3"><a href="#" class="link">NABÍJECÍ STANICE</a></h5>
              </div>-->
                <div class="main" style="visibility:visible;">
                    <img src="img/czdesk.jpg" class="im img-fluid">
                  </div>
               <div class="Moularni">
              <?php foreach($items as $i):?>
                   <?php if($i['id_kategorie']=='1'):?>
                       <a href="detail.php?id=<?= $i['id'] ?>"><div class="items col-md-2 d-inline-block mt-3">
                 <img src="uploads/produkt_img/<?= $i['id'] . '.' . getExt($i['img']) ?>" style="width:inherit;
                                                                                height:inherit;">
                 <p style="padding:0;margin:0;"><?= $i['czName']?></p>
             </div></a>
                   <?php endif;?>
               <?php endforeach;?>
            </div>
         <div class="Vyk">
              <?php foreach($items as $i):?>
                   <?php if($i['id_kategorie']=='2'):?>
                       <a href="detail.php?id=<?= $i['id'] ?>"><div class="items col-md-2 d-inline-block mt-3">
                 <img src="uploads/produkt_img/<?= $i['id'] . '.' . getExt($i['img']) ?>" style="width:inherit;
                                                                                height:inherit;">
                 <p style="padding:0;margin:0;"><?= $i['czName']?></p>
             </div></a>
                   <?php endif;?>
               <?php endforeach;?>
            </div>
                   <div class="Vzd">
              <?php foreach($items as $i):?>
                   <?php if($i['id_kategorie']=='3'):?>
                       <a href="detail.php?id=<?= $i['id'] ?>"><div class="items col-md-2 d-inline-block mt-3">
                 <img src="uploads/produkt_img/<?= $i['id'] . '.' . getExt($i['img']) ?>" style="width:inherit;
                                                                                height:inherit;">
                 <p style="padding:0;margin:0;"><?= $i['czName']?></p>
             </div></a>
                   <?php endif;?>
               <?php endforeach;?>
            </div>
                   <div class="Sty">
              <?php foreach($items as $i):?>
                   <?php if($i['id_kategorie']=='4'):?>
                       <a href="detail.php?id=<?= $i['id'] ?>"><div class="items col-md-2 d-inline-block mt-3">
                 <img src="uploads/produkt_img/<?= $i['id'] . '.' . getExt($i['img']) ?>" style="width:inherit;
                                                                                height:inherit;">
                 <p style="padding:0;margin:0;"><?= $i['czName']?></p>
             </div></a>
                   <?php endif;?>
               <?php endforeach;?>
            </div>
                   <div class="Nap">
              <?php foreach($items as $i):?>
                   <?php if($i['id_kategorie']=='5'):?>
                       <a href="detail.php?id=<?= $i['id'] ?>"><div class="items col-md-2 d-inline-block mt-3">
                 <img src="uploads/produkt_img/<?= $i['id'] . '.' . getExt($i['img']) ?>" style="width:inherit;
                                                                                height:inherit;">
                 <p style="padding:0;margin:0;"><?= $i['czName']?></p>
             </div></a>
                   <?php endif;?>
               <?php endforeach;?>
            </div>
                   <div class="Mot">
              <?php foreach($items as $i):?>
                   <?php if($i['id_kategorie']=='6'):?>
                       <a href="detail.php?id=<?= $i['id'] ?>"><div class="items col-md-2 d-inline-block mt-3">
                 <img src="uploads/produkt_img/<?= $i['id'] . '.' . getExt($i['img']) ?>" style="width:inherit;
                                                                                height:inherit;">
                 <p style="padding:0;margin:0;"><?= $i['czName']?></p>
             </div></a>
                   <?php endif;?>
               <?php endforeach;?>
            </div>
                   <div class="Tla">
              <?php foreach($items as $i):?>
                   <?php if($i['id_kategorie']=='7'):?>
                       <a href="detail.php?id=<?= $i['id'] ?>"><div class="items col-md-2 d-inline-block mt-3">
                 <img src="uploads/produkt_img/<?= $i['id'] . '.' . getExt($i['img']) ?>" style="width:inherit;
                                                                                height:inherit;">
                 <p style="padding:0;margin:0;"><?= $i['czName']?></p>
             </div></a>
                   <?php endif;?>
               <?php endforeach;?>
            </div>
                   <div class="Rel">
              <?php foreach($items as $i):?>
                   <?php if($i['id_kategorie']=='8'):?>
                       <a href="detail.php?id=<?= $i['id'] ?>"><div class="items col-md-2 d-inline-block mt-3">
                 <img src="uploads/produkt_img/<?= $i['id'] . '.' . getExt($i['img']) ?>" style="width:inherit;
                                                                                height:inherit;">
                 <p style="padding:0;margin:0;"><?= $i['czName']?></p>
             </div></a>
                   <?php endif;?>
               <?php endforeach;?>
            </div>
                   <div class="Fre">
              <?php foreach($items as $i):?>
                   <?php if($i['id_kategorie']=='9'):?>
                       <a href="detail.php?id=<?= $i['id'] ?>"><div class="items col-md-2 d-inline-block mt-3">
                 <img src="uploads/produkt_img/<?= $i['id'] . '.' . getExt($i['img']) ?>" style="width:inherit;
                                                                                height:inherit;">
                 <p style="padding:0;margin:0;"><?= $i['czName']?></p>
             </div></a>
                   <?php endif;?>
               <?php endforeach;?>
            </div>
                   <div class="Nab">
              <?php foreach($items as $i):?>
                   <?php if($i['id_kategorie']=='10'):?>
                       <a href="detail.php?id=<?= $i['id'] ?>"><div class="items col-md-2 d-inline-block mt-3">
                 <img src="uploads/produkt_img/<?= $i['id'] . '.' . getExt($i['img']) ?>" style="width:inherit;
                                                                                height:inherit;">
                 <p style="padding:0;margin:0;"><?= $i['czName']?></p>
             </div></a>
                   <?php endif;?>
               <?php endforeach;?>
            </div>
                
              </div>
              
            </div>
          
     
         <br>
        
      </div>
    </main>
   
</body>

</html>
<?php
function getExt($name) {
    return pathinfo($name, PATHINFO_EXTENSION);
}
?>
