<?php

    session_start();

    if(!$_SESSION['email']){
		header('Location: index.php?erro=1');
	}

    require_once('config.php');

    $id_usuario = $_SESSION['id_usuario'];
    $cargo_usuario = $_SESSION['cargo'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    $sql = "SELECT DATE_FORMAT(t.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, t.prioridade, t.destino, t.ticket, u.nome, u.id ";
    $sql .= "FROM ticket AS t JOIN usuarios AS u ON (t.id_usuario = u.id) ";
     
    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
        
            if($id_usuario == $registro['id']){
                    
                 echo '<li>';
                 echo '<div class="collapsible-header ticket-titulo"><i class="material-icons"style="color:#e79538">list</i>'.$registro['nome'].'<br>'.$registro['data_inclusao_formatada'].'</div>';
                 echo '<div class="collapsible-body ticket-corpo"><b>Status:</b> Em andamento <br> <b>Prioridade: </b>'.$registro['prioridade'].'<br><br> <b>Solicitação: </b><span>'.$registro['ticket'].'</span></div>';
                 echo '</li>';

            }
        }

    }else{
        echo 'Erro na consulta de tickets no banco de dados!';
    }

?>
