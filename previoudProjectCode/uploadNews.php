<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");


require_once 'database.php';


$sql = "INSERT INTO zprava SET nadpis = :nadpis, text = :text,  datum = now()";
$stmt = $conn->prepare($sql);
//$result = $stmt->execute([
//    'id_kategory' => $_POST['category'],
//    'id_gender' => $_POST['gender'],
//    'nazev' => $_POST['nazev'],
//    'cena' => $_POST['cena'],
//    'mnozstvi' => $_POST['mnozstvi'],
//    'image' => $_FILES['image']['name'],
//    'mime' => $_FILES['image']['type']
//]);
$stmt->bindValue(":nadpis", $_POST['HT']);
$stmt->bindValue(":text", $_POST['txt']);


$result = $stmt->execute();

//var_dump($result); die;

if (!$result) {
    var_dump($stmt->errorInfo());
}

$id = $conn->lastInsertId();


/*****************************Intro PDF******************************************/

$targetDir = "uploads/news_img/";
    $allowTypes = array('jpg','gif','png');
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['images']['name']))){
        foreach($_FILES['images']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['images']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $insertValuesSQL .= "('".$id."','".$fileName."', NOW()),";
                }else{
                    $errorUpload .= $_FILES['images']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['images']['name'][$key].', ';
            }
        }
        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = $conn->query("INSERT INTO images (id_zpravy,file_name, uploaded_on) VALUES $insertValuesSQL");
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.".$errorMsg;
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
    
    // Display status message
    echo $statusMsg;

/*********Email*********/
if(isset($_POST['checkSend'])){
    $sql = "SELECT email FROM cenik WHERE zasilat = 'ano'";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute();
    $emails = $stmt->fetchAll();
    
    foreach($emails as $e){
        $array=array();
        array_push($array,$e['email']);
    }
      //$to = implode(",", $array);
      $from = 'zhujiel52@gmail.com';

      $headers = "From: " . strip_tags($from) . "\r\n";
      $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
      $headers .= "CC: zhujiel52@gmail.com\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   
    //$to='zhujiel52@gmail.com';
    var_dump($to);
    $subject = "CHiNT News";
    
    $htmlContent = '
    <html>
    <head>
        <title>CHiNT News</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >
    
    </head>
    <body>
        <div class=/"container text-center/">
        <h1><?= $_POST[/"HT/"] ?></h1>
        <p><?= $_POST[/"txt/"]?></p>
        <div class="row justify-content-center">
          <?php foreach($_POST[/"images/"] as $i)?>
              <div class="col-md-2">
                  <img src="uploads/news_img/<?=$i?>" class="img-fluid" >
              </div>
        
            </div>
        </div>
    </body>
    </html>';
    $to = 'test@test.com';
    $subject = 'test';
    $htmlContent = 'test';
    $headers = 'From tt@tt.com\r\n';
    
     var_dump($to, $subject, $htmlContent, $headers);
     if(mail($to, $subject, $htmlContent)){
         echo 'Email has sent successfully.';
     }
    else{
        echo 'Email sending fail.';

    }
  
}

//header('Location: ' . $_SERVER['HTTP_REFERER']);
