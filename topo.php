<?php
    include_once 'topo1.php';
        
    include_once 'conexao.php';

    $sql = "select * from produtos ORDER BY nomep ASC";

    $rs = mysqli_query($con,$sql);

    if(mysqli_num_rows($rs)>0){
        
?>
<div class="container my-5">

<div class="container">
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="img/a1.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $linha["nomep"]; ?></h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
  </div>


        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Valor</th>
                    <th scope="col">mais</th>
                    
                </tr>
            </thead>        
    <?php
            while($linha = mysqli_fetch_array($rs)){
    ?>
                <tr>
                    <td><?php echo $linha["nomep"]; ?></td>
                    <td><?php echo $linha["modelo"]; ?></td>
                    <td><?php echo $linha["cor"]; ?></td>
                    <td><?php echo $linha["valor"]; ?></td>
                    <td scope="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                        </svg>
                        <i class="bi bi-three-dots"></i>
                    </td>
                </tr>
            <?php   }?>
            </table>
</div>
            <?php
    }else{
        echo"Não existe produto cadastrado";
    }
    mysqli_close($con);
    ?>  
    
<?php include_once 'rodape.php'; ?>