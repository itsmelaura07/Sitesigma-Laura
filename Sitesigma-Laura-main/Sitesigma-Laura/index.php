<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_bancos.php';
?>
<h1>Home</h1>
<div class="container">
<h2 class="clear">Promoção</h2>
    <div class="row mt-5">
        
    <?php
    $sql = " SELECT * FROM  produtos WHERE  Ativo = 1 LIMIT 3";
    $exec = mysqli_query($conn,$sql);
    $NumProdutos = mysqli_num_rows($exec);
    while ($dados = mysqli_fetch_assoc($exec)){
    
    ?>
    <div class="card m-3" style="width: 18rem;">
  <img src="./content/<?php echo $dados[$i]['imagem'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $dados[$i]['nome'];?></h5>
    <p class="card-text"><?php echo $dados[$i]['descricao'];?></p>
    <a href="produto-detalhe.php?id=<?php echo $dados ['ProdutoID'] ?>&tipo=promocao" class="btn btn-primary">Comprar</a>
  </div>
</div>
<?php
    }
?>
<?php
print "<script> document.bgColor='red'</script>";
$s=$_POST['op1']+$_POST['op2'];
echo "O Resultado da soma é = ". $s;
?>

</div>
</div>


<?php
// include do footer
include_once './includes/_footer.php';
?>