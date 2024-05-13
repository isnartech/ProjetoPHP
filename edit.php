<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM clientes WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
              $id= $user_data['id'];
			  $ordem= $user_data['ordem'];
              $nome= $user_data['nome'];
              $rua= $user_data['rua'];
              $bairro= $user_data['bairro'];
              $cidade= $user_data['cidade'];
              $referencia= $user_data['referencia'];
              $telefone= $user_data['telefone'];
              $total= $user_data['total'];
              $cpf= $user_data['cpf'];
              $vendedor= $user_data['vendedor'];
              $data_venda= $user_data['data_venda'];
              $obs1= $user_data['obs1'];
              $obs2= $user_data['obs2'];
              $obs3= $user_data['obs3'];
              $obs4= $user_data['obs4'];
              $obs5= $user_data['obs5'];
              $obs6= $user_data['obs6'];
              $obs7= $user_data['obs7'];
              $obs8= $user_data['obs8'];
              $obs9= $user_data['obs9'];
              $obs10= $user_data['obs10'];
              $obs11= $user_data['obs11'];
              $obs12= $user_data['obs12'];
              $obs13= $user_data['obs13'];
              $obs14= $user_data['obs14'];
              $obs15= $user_data['obs15'];
              $obs16= $user_data['obs16'];
              $obs17= $user_data['obs17'];
              $obs18= $user_data['obs18'];
              $obs19= $user_data['obs19'];
              $obs20= $user_data['obs20'];
              $obs21= $user_data['obs21'];
              $obs22= $user_data['obs22'];
              $obs23= $user_data['obs23'];
              $obs24= $user_data['obs24'];
              $obs25= $user_data['obs25'];
              $obs26= $user_data['obs26'];
              $obs27= $user_data['obs27'];
              $obs28= $user_data['obs28'];
              $obs29= $user_data['obs29'];
              $obs30= $user_data['obs30'];
              $obs31= $user_data['obs31'];
              $obs32= $user_data['obs32'];
              $obs33= $user_data['obs33'];
              $obs34= $user_data['obs34'];
              $obs35= $user_data['obs35'];
              $obs36= $user_data['obs36'];
              $obs37= $user_data['obs37'];
              $obs38= $user_data['obs38'];
              $obs39= $user_data['obs39'];
              $obs40= $user_data['obs40'];
              $obs41= $user_data['obs41'];
              $obs42= $user_data['obs42'];
              $obs43= $user_data['obs43'];
              $obs44= $user_data['obs44'];
              $obs45= $user_data['obs45'];
              
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário DISK CESTA SÃO JOSÉ</title>
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
        .inputBox{
            position: relative;
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
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
				<br>
                <div class="inputBox">
                    <label for="ordem">Numero da Cartela:</label><p></p>
                    <input type="text" name="ordem" id="ordem" class="inputUser" value="<?php echo $ordem;?>" required>
               </div>
                <br>
                <div class="inputBox">
                    <label for="nome">Nome:</label><p></p>
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome;?>" required>
               </div>
                <br>
                <div class="inputBox">
                    <label for="rua" >Rua:</label><p></p>
                    <input type="text" name="rua" id="rua" class="inputUser" value="<?php echo $rua;?>" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="bairro" >Bairro:</label><p></p>
                    <input type="text" name="bairro" id="bairro" class="inputUser" value="<?php echo $bairro;?>" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="cidade" >Cidade:</label><p></p>
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade;?>" required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="referencia" >Referencia:</label><p></p>
                    <input type="text" name="referencia" id="referencia" class="inputUser" value="<?php echo $referencia;?>">
                </div>
                <br>
                <div class="inputBox">
                    <label for="telefone" >Telefone:</label><p></p>
                    <input type="text" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone;?>">
                </div>
                <div class="inputBox">
                    <label for="total" >Total:</label><p></p>
                    <input type="text" name="total" id="total" class="inputUser" value="<?php echo $total;?>">
                </div>
                <div class="inputBox">
                    <label for="cpf" >CPF:</label><p></p>
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf;?>">
                </div>
                <br>
                <div class="inputBox">
                    <label for="vendedor" >Vendedor:</label><p></p>
                    <input type="text" name="vendedor" id="vendedor" class="inputUser" value="<?php echo $vendedor;?>">
                </div>
                <br>
                    <label for="data_venda"><b>Data da Venda:</b><br></label><p></p>
                    <input type="date" name="data_venda" id="data_venda" value="<?php echo $data_venda;?>" required>
                <br><br>
                 <div class="inputBox">
                    <label for="obs1">&ensp;DATA&ensp;&ensp;&ensp;&ensp;PAGO &ensp;&ensp;&ensp;RESTA</label><br>
                    <input type="text" name="obs1" id="obs1" size="5" maxlength="5" value="<?php echo $obs1;?>"">
                    <input type="text" name="obs2" id="obs2" size="5" maxlength="4" value="<?php echo $obs2;?>"">
                    <input type="text" name="obs3" id="obs3" size="5" maxlength="4" value="<?php echo $obs3;?>"">
                    <br>
                    <input type="text" name="obs4" id="obs4" size="5" maxlength="5" value="<?php echo $obs4;?>"">
                    <input type="text" name="obs5" id="obs5" size="5" maxlength="4" value="<?php echo $obs5;?>"">
                    <input type="text" name="obs6" id="obs6" size="5" maxlength="4" value="<?php echo $obs6;?>"">
                    <br>
                    <input type="text" name="obs7" id="obs7" size="5" maxlength="5" value="<?php echo $obs7;?>"">
                    <input type="text" name="obs8" id="obs8" size="5" maxlength="4" value="<?php echo $obs8;?>"">
                    <input type="text" name="obs9" id="obs9" size="5" maxlength="4" value="<?php echo $obs9;?>"">
                    <br>
                    <input type="text" name="obs10" id="obs10" size="5" maxlength="5" value="<?php echo $obs10;?>"">
                    <input type="text" name="obs11" id="obs11" size="5" maxlength="4" value="<?php echo $obs11;?>"">
                    <input type="text" name="obs12" id="obs12" size="5" maxlength="4" value="<?php echo $obs12;?>"">
                    <br>
                    <input type="text" name="obs13" id="obs13" size="5" maxlength="5" value="<?php echo $obs13;?>"">
                    <input type="text" name="obs14" id="obs14" size="5" maxlength="4" value="<?php echo $obs14;?>"">
                    <input type="text" name="obs15" id="obs15" size="5" maxlength="4" value="<?php echo $obs15;?>"">
                    <br>
                    <input type="text" name="obs16" id="obs16" size="5" maxlength="5" value="<?php echo $obs16;?>"">
                    <input type="text" name="obs17" id="obs17" size="5" maxlength="4" value="<?php echo $obs17;?>"">
                    <input type="text" name="obs18" id="obs18" size="5" maxlength="4" value="<?php echo $obs18;?>"">
                    <br>
                    <input type="text" name="obs19" id="obs19" size="5" maxlength="5" value="<?php echo $obs19;?>"">
                    <input type="text" name="obs20" id="obs20" size="5" maxlength="4" value="<?php echo $obs20;?>"">
                    <input type="text" name="obs21" id="obs21" size="5" maxlength="4" value="<?php echo $obs21;?>"">
                    <br>
                    <input type="text" name="obs22" id="obs22" size="5" maxlength="5" value="<?php echo $obs22;?>"">
                    <input type="text" name="obs23" id="obs23" size="5" maxlength="4" value="<?php echo $obs23;?>"">
                    <input type="text" name="obs24" id="obs24" size="5" maxlength="4" value="<?php echo $obs24;?>"">
                    <br>
                    <input type="text" name="obs25" id="obs25" size="5" maxlength="5" value="<?php echo $obs25;?>"">
                    <input type="text" name="obs26" id="obs26" size="5" maxlength="4" value="<?php echo $obs26;?>"">
                    <input type="text" name="obs27" id="obs27" size="5" maxlength="4" value="<?php echo $obs27;?>"">
                    <br>
                    <input type="text" name="obs28" id="obs28" size="5" maxlength="5" value="<?php echo $obs28;?>"">
                    <input type="text" name="obs29" id="obs29" size="5" maxlength="4" value="<?php echo $obs29;?>"">
                    <input type="text" name="obs30" id="obs30" size="5" maxlength="4" value="<?php echo $obs30;?>"">
                    <br>
                    <input type="text" name="obs31" id="obs31" size="5" maxlength="5" value="<?php echo $obs31;?>"">
                    <input type="text" name="obs32" id="obs32" size="5" maxlength="4" value="<?php echo $obs32;?>"">
                    <input type="text" name="obs33" id="obs33" size="5" maxlength="4" value="<?php echo $obs33;?>"">
                    <br>
                    <input type="text" name="obs34" id="obs34" size="5" maxlength="5" value="<?php echo $obs34;?>"">
                    <input type="text" name="obs35" id="obs35" size="5" maxlength="4" value="<?php echo $obs35;?>"">
                    <input type="text" name="obs36" id="obs36" size="5" maxlength="4" value="<?php echo $obs36;?>"">
                    <br>
                    <input type="text" name="obs37" id="obs37" size="5" maxlength="5" value="<?php echo $obs37;?>"">
                    <input type="text" name="obs38" id="obs38" size="5" maxlength="4" value="<?php echo $obs38;?>"">
                    <input type="text" name="obs39" id="obs39" size="5" maxlength="4" value="<?php echo $obs39;?>"">
                    <br>
                    <input type="text" name="obs40" id="obs40" size="5" maxlength="5" value="<?php echo $obs40;?>"">
                    <input type="text" name="obs41" id="obs41" size="5" maxlength="4" value="<?php echo $obs41;?>"">
                    <input type="text" name="obs42" id="obs42" size="5" maxlength="4" value="<?php echo $obs42;?>"">
                    <br>
                    <input type="text" name="obs43" id="obs43" size="5" maxlength="5" value="<?php echo $obs43;?>"">
                    <input type="text" name="obs44" id="obs44" size="5" maxlength="4" value="<?php echo $obs44;?>"">
                    <input type="text" name="obs45" id="obs45" size="5" maxlength="4" value="<?php echo $obs45;?>"">
                    </div>
				<input type="hidden" name="id" value="<?php echo $id;?>"">
            </fieldset>
            <br>
            <input type="submit" name="update" id="submit"  value="Editar cliente">
        </form>
    </div>
</body>
</html>