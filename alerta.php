<?php
    $refresh = 0;
    if(isset($_SESSION["refresh"])){
      $refresh = $_SESSION["refresh"];
    }
?>
<script>
  var refresh = parseInt("<?php echo $refresh;?>")
  if(refresh == 6){
    var alerta = parseInt("<?php echo $result;?>")
    if(alerta > 0){
      const audio = new Audio("beep.mp3");
      audio.play();
    }
  }
<?php
  $refresh == 6 ?  $refresh = 0 : $refresh = ++$refresh;
  $_SESSION["refresh"] = $refresh ;
?>
</script>
