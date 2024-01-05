<?php
    $cont = $result;
    if(isset($_SESSION["COUNT"])){
        $cont = $_SESSION["COUNT"];
    }
?>
<script>
    var result = parseInt("<?php echo $result;?>")
    var cont = parseInt("<?php echo $cont;?>")
    if(result > cont){
        const audio = new Audio("novo_chamado.mp3");
        audio.play();
    }
    <?php $_SESSION["COUNT"] = $result ;?>
</script>
