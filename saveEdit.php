<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
		$ordem = $_POST['ordem'];
        $nome= $_POST['nome'];
        $rua= $_POST['rua'];
        $bairro= $_POST['bairro'];
        $cidade= $_POST['cidade'];
        $referencia= $_POST['referencia'];
        $telefone= $_POST['telefone'];
        $total= $_POST['total'];
        $cpf= $_POST['cpf'];
        $vendedor= $_POST['vendedor'];
        $data_venda= $_POST['data_venda'];
        $obs1= $_POST['obs1'];
        $obs2= $_POST['obs2'];
        $obs3= $_POST['obs3'];
        $obs4= $_POST['obs4'];
        $obs5= $_POST['obs5'];
        $obs6= $_POST['obs6'];
        $obs7= $_POST['obs7'];
        $obs8= $_POST['obs8'];
        $obs9= $_POST['obs9'];
        $obs10= $_POST['obs10'];
        $obs11= $_POST['obs11'];
        $obs12= $_POST['obs12'];
        $obs13= $_POST['obs13'];
        $obs14= $_POST['obs14'];
        $obs15= $_POST['obs15'];
        $obs16= $_POST['obs16'];
        $obs17= $_POST['obs17'];
        $obs18= $_POST['obs18'];
        $obs19= $_POST['obs19'];
        $obs20= $_POST['obs20'];
        $obs21= $_POST['obs21'];
        $obs22= $_POST['obs22'];
        $obs23= $_POST['obs23'];
        $obs24= $_POST['obs24'];
        $obs25= $_POST['obs25'];
        $obs26= $_POST['obs26'];
        $obs27= $_POST['obs27'];
        $obs28= $_POST['obs28'];
        $obs29= $_POST['obs29'];
        $obs30= $_POST['obs30'];
        $obs31= $_POST['obs31'];
        $obs32= $_POST['obs32'];
        $obs33= $_POST['obs33'];
        $obs34= $_POST['obs34'];
        $obs35= $_POST['obs35'];
        $obs36= $_POST['obs36'];
        $obs37= $_POST['obs37'];
        $obs38= $_POST['obs38'];
        $obs39= $_POST['obs39'];
        $obs40= $_POST['obs40'];
        $obs41= $_POST['obs41'];
        $obs42= $_POST['obs42'];
        $obs43= $_POST['obs43'];
        $obs44= $_POST['obs44'];
        $obs45= $_POST['obs45'];
        
        $sqlInsert = "UPDATE clientes 
        SET ordem='$ordem',nome='$nome',rua='$rua',bairro='$bairro',cidade='$cidade', referencia='$referencia', telefone='$telefone', total='$total', cpf='$cpf', vendedor='$vendedor', data_venda='$data_venda', obs1='$obs1', obs2='$obs2', obs3='$obs3', obs4='$obs4', obs5='$obs5', obs6='$obs6', obs7='$obs7', obs8='$obs8', obs9='$obs9', obs10='$obs10', obs11='$obs11', obs12='$obs12', obs13='$obs13', obs14='$obs14', obs15='$obs15', obs16='$obs16', obs17='$obs17', obs18='$obs18', obs19='$obs19', obs20='$obs20', obs21='$obs21', obs22='$obs22', obs23='$obs23', obs24='$obs24', obs25='$obs25', obs26='$obs26', obs27='$obs27', obs28='$obs28', obs29='$obs29', obs30='$obs30', obs31='$obs31', obs32='$obs32', obs33='$obs33', obs34='$obs34', obs35='$obs35', obs36='$obs36', obs37='$obs37', obs38='$obs38', obs39='$obs39', obs40='$obs40', obs41='$obs41', obs42='$obs42', obs43='$obs43', obs44='$obs44', obs45='$obs45'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>