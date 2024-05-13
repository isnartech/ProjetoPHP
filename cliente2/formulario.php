<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('cpf: ' . $_POST['cpf']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);
        // print_r('<br>');
        // print_r('bairro: ' . $_POST['bairro']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Data da venda: ' . $_POST['data_pagamento']);
        // print_r('<br>');
        // print_r('Produto: ' . $_POST['produto']);
        // print_r('<br>');
        // print_r('obs1: ' . $_POST['obs1']);
        // print_r('<br>');
        // print_r('obs2: ' . $_POST['obs2']);
        // print_r('<br>');
        // print_r('obs3: ' . $_POST['obs3']);
        
        
        include_once('config.php');

        $ordem= $_POST['ordem'];
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

        $result = mysqli_query($conexao, "INSERT INTO clientes2 (ordem,nome,rua,bairro,cidade,referencia,telefone,total,cpf,vendedor,data_venda,
        obs1,obs2,obs3,obs4,obs5,obs6,obs7,obs8,obs9,obs10,obs11,obs12,obs13,obs14,obs15,obs16,obs17,obs18,obs19,obs20,obs21,obs22,obs23,obs24,obs25,obs26,obs27,obs28,obs29,obs30,obs31,obs32,obs33,obs34,obs35,obs36,obs37,obs38,obs39,obs40,obs41,obs42,obs43,obs44,obs45) 
        VALUES ('$ordem','$nome','$rua','$bairro','$cidade','$referencia','$telefone','$total','$cpf','$vendedor','$data_venda','$obs1','$obs2','$obs3','$obs4','$obs5','$obs6','$obs7','$obs8','$obs9','$obs10','$obs11','$obs12','$obs13','$obs14','$obs15','$obs16','$obs17','$obs18','$obs19','$obs20','$obs21','$obs22','$obs23','$obs24','$obs25','$obs26','$obs27','$obs28','$obs29','$obs30','$obs31','$obs32','$obs33','$obs34','$obs35','$obs36','$obs37','$obs38','$obs39','$obs40','$obs41','$obs42','$obs43','$obs44','$obs45')");

        header('Location: sistema.php');
    }

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | DISK CESTA SÃO JOSÉ</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 228), rgb(20, 147, 228));
            
        }
        .box{
            color: white;
            text-align: center;
            padding: 30px;
            border-radius: 85px;
            width: 100%;
        }
        fieldset{
            border: 1px solid black;
        }
        legend{
            border: 1px black;
            padding: 10px;
            text-align: center;
            background-color: solid dodgerblue;
            border-radius: 28px;
        }
    
        .inputUser{
            background: white;
            border: none;
            border-bottom: 1px black;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 10px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .labelInput1{
            position: relative;
            top: 1px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
             background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(0, 92, 197));
            width: 50%;
            border: black;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        a{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(0, 92, 197));
            width: 50%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(0, 80, 172));
        }
    </style>
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <br>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes 2</b></legend>
				<br>
				<div class="inputBox">
                    <label for="ordem">Numero da Ficha:</label><p></p>
                    <input type="text" name="ordem" id="ordem" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="nome">Nome:</label><p></p>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="rua" >Rua:</label><p></p>
                    <input type="text" name="rua" id="rua" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="bairro" >Bairro:</label><p></p>
                    <input type="text" name="bairro" id="bairro" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="cidade" >Cidade:</label><p></p>
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="referencia" >Referencia:</label><p></p>
                    <input type="text" name="referencia" id="referencia" class="inputUser">
                </div>
                <br>
                <div class="inputBox">
                    <label for="telefone" >Telefone:</label><p></p>
                    <input type="telefone" name="telefone" id="telefone" class="inputUser">
                </div>
                <br>
                <div class="inputBox">
                   <label for="total" >Total:</label><p></p>
                   <input type="text" name="total" id="total" class="inputUser">
                </div>
                 <br>
                 <div class="inputBox">
                     <label for="cpf" >CPF:</label><p></p>
                    <input type="text" name="cpf" id="cpf" class="inputUser">
                </div>
                <br>
                <div class="inputBox">
                     <label for="vendedor" >vendedor:</label><p></p>
                    <input type="text" name="vendedor" id="vendedor" class="inputUser">
                </div>
                <br>
                     <label for="data_venda"><b>Data da Venda:</b><br></label><p></p>
                    <input type="date" name="data_venda" id="data_venda" required>
                <br><br>
                
                <div class="inputBox">
                    <label for="obs1">&ensp;DATA&ensp;&ensp;&ensp;&ensp;PAGO &ensp;&ensp;&ensp;RESTA</label><br>
                    <input type="text" name="obs1" id="obs1" size="5" maxlength="5">
                    <input type="text" name="obs2" id="obs2" size="5" maxlength="4">
                    <input type="text" name="obs3" id="obs3" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs4" id="obs4" size="5" maxlength="5">
                    <input type="text" name="obs5" id="obs5" size="5" maxlength="4">
                    <input type="text" name="obs6" id="obs6" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs7" id="obs7" size="5" maxlength="5">
                    <input type="text" name="obs8" id="obs8" size="5" maxlength="4">
                    <input type="text" name="obs9" id="obs9" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs10" id="obs10" size="5" maxlength="5">
                    <input type="text" name="obs11" id="obs11" size="5" maxlength="4">
                    <input type="text" name="obs12" id="obs12" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs13" id="obs13" size="5" maxlength="5">
                    <input type="text" name="obs14" id="obs14" size="5" maxlength="4">
                    <input type="text" name="obs15" id="obs15" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs16" id="obs16" size="5" maxlength="5">
                    <input type="text" name="obs17" id="obs17" size="5" maxlength="4">
                    <input type="text" name="obs18" id="obs18" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs19" id="obs19" size="5" maxlength="5">
                    <input type="text" name="obs20" id="obs20" size="5" maxlength="4">
                    <input type="text" name="obs21" id="obs21" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs22" id="obs22" size="5" maxlength="5">
                    <input type="text" name="obs23" id="obs23" size="5" maxlength="4">
                    <input type="text" name="obs24" id="obs24" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs25" id="obs25" size="5" maxlength="5">
                    <input type="text" name="obs26" id="obs26" size="5" maxlength="4">
                    <input type="text" name="obs27" id="obs27" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs28" id="obs28" size="5" maxlength="5">
                    <input type="text" name="obs29" id="obs29" size="5" maxlength="4">
                    <input type="text" name="obs30" id="obs30" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs31" id="obs31" size="5" maxlength="5">
                    <input type="text" name="obs32" id="obs32" size="5" maxlength="4">
                    <input type="text" name="obs33" id="obs33" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs34" id="obs34" size="5" maxlength="5">
                    <input type="text" name="obs35" id="obs35" size="5" maxlength="4">
                    <input type="text" name="obs36" id="obs36" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs37" id="obs37" size="5" maxlength="5">
                    <input type="text" name="obs38" id="obs38" size="5" maxlength="4">
                    <input type="text" name="obs39" id="obs39" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs40" id="obs40" size="5" maxlength="5">
                    <input type="text" name="obs41" id="obs41" size="5" maxlength="4">
                    <input type="text" name="obs42" id="obs42" size="5" maxlength="4">
                    <br>
                    <input type="text" name="obs43" id="obs43" size="5" maxlength="5">
                    <input type="text" name="obs44" id="obs44" size="5" maxlength="4">
                    <input type="text" name="obs45" id="obs45" size="5" maxlength="4">
                    </div>
                <br>
            </fieldset>
            <br>
            <input type="submit" name="submit" id="submit"  value="Salvar cliente">
        </form>
    </div>
</body>
</html>