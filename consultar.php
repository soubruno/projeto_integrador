<?php
    include_once 'topo1.php';
        
    include_once 'conexao.php';

    $sql = "select * from produtos ORDER BY nomep ASC";

    $rs = mysqli_query($con,$sql);

    if(mysqli_num_rows($rs)>0){
        
?>
<div class="container my-5">
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
            <tbody id="myTable">
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
            </tbody>
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