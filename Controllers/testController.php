<?php

class testController extends Controller {

  public function index(){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://gateway-a.watsonplatform.net/visual-recognition/api/v3/classify?api_key=da6d760f201657a622f70f0bd8109530b46e1869&version=2016-05-20&classifier_ids=TCC_495813897&url=https://firebasestorage.googleapis.com/v0/b/emotion-analyzer-1.appspot.com/o/William_Morrow_0001.jpg?alt=media%26token=7defb792-86f3-4b24-bc06-b8874c71a673');
      //curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password);
      curl_setopt($ch, CURLOPT_POST, true );
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      //curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
      $result = trim( curl_exec( $ch ) );
      curl_close($ch);
      //echo json_encode($result, JSON_UNESCAPED_UNICODE);
      $arrayRetorno = json_decode($result, TRUE);
      echo  "<pre>";
      print_r($arrayRetorno);
      echo  "</pre>";
      //echo $arrayRetorno[custom_classes];
      echo $arrayRetorno['images'][0]['classifiers'][0]['classes'][0]['class'];
      echo $arrayRetorno['images'][0]['classifiers'][0]['classes'][0]['score'];

      /*
      echo  "<pre>";
      echo json_encode($arrayRetorno, JSON_PRETTY_PRINT);
      echo  "</pre>";
      */
    }

  }

  ?>
