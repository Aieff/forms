<?php 
include('config.php');
include_once __DIR__ . "/language/translate.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset ="UTF-8">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/forms.css">

<title><?php echo $keyword["titulo"]; ?></title>

</head>

<nav class="navigation">
        <a href="?language=pt-br"><?php echo $keyword["lan_pt"]; ?></a>
        <a href="?language=en-us"><?php echo $keyword["lan_en"]; ?></a>
        <a href="?language=es-mx"><?php echo $keyword["lan_es"]; ?></a>
    </nav>


<div class="container-fluid" id="containerconf">


<body>


                            <img src="img/logo-forms.png" class="rounded mx-auto d-block" id="logo">

        <form method="POST" action="ajax.php">


        <div class="mb-3">
            <p><?php echo $keyword["nome_forms"]; ?><span style="color:red; font-size: 11px;"><?php echo $keyword["warning_obrigatorio"]; ?></span></p>
                <input type="email" class="form-control" name="nome" id="nome">
        </div>

        <div class="mb-3">
            <p><?php echo $keyword["data_nascimento_forms"]; ?><span style="color:red; font-size: 11px;"><?php echo $keyword["warning_obrigatorio"]; ?></span></p>
             <input type="date" class="form-control" data-date-format="dd/mm/yyyy" placeholder="__/__/____" id="nascimento" name="nascimento">
        </div>

            <div class="mb-3">
                <p><?php echo $keyword["celular_forms"]; ?><span style="color:red; font-size: 11px;"><?php echo $keyword["warning_obrigatorio"]; ?></span></p>
                    <input type="text" class="form-control" placeholder="(00) 00000-0000" id="celular" name="celular">
            </div>

        <div class="mb-3">
            <p><?php echo $keyword["email_forms"]; ?><span style="color:red; font-size: 11px;"><?php echo $keyword["warning_obrigatorio"]; ?></span></p>
                <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $keyword["placheholder_email_forms"]; ?>">
        </div>
       
        <div class="mb-3">
        <p><?php echo $keyword["senha_forms"]; ?><span style="color:red; font-size: 11px;"><?php echo $keyword["warning_obrigatorio"]; ?></span></p>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="<?php echo $keyword["placheholder_senha_forms"]; ?>">
        </div>

        <p><?php echo $keyword["q2_forms"]; ?><span style="color:red; font-size: 11px;"><?php echo $keyword["warning_obrigatorio"]; ?></span></p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q2" id="q2" value="Sim">
            <label class="form-check-label" for="inlineRadio1"><?php echo $keyword["radio_btn_sim"]; ?></label>
        </div>
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q2" id="q2" value="Não">
            <label class="form-check-label" for="inlineRadio2"><?php echo $keyword["radio_btn_nao"]; ?></label>
        </div>
        </label><br><br>

        
        <div class="mb-3">
        <p><?php echo $keyword["q3_forms"]; ?><span style="color:red; font-size: 11px;"><?php echo $keyword["warning_obrigatorio"]; ?></span></p>
            <select class="form-select" aria-label="Default select example" name="q3" id="q3">
            <option selected disabled><?php echo $keyword["q3_select_select"]; ?></option>
            <option value="Ensino Fundamental"><?php echo $keyword["q3_select_select1"]; ?></option>
            <option value="Ensino Médio"><?php echo $keyword["q3_select_select2"]; ?></option>
            <option value="Ensino Superior"><?php echo $keyword["q3_select_select3"]; ?></option>
            <option value="Graduado"><?php echo $keyword["q3_select_select4"]; ?></option>
            <option value="Mestrado"><?php echo $keyword["q3_select_select5"]; ?></option>
            <option value="Doutorado"><?php echo $keyword["q3_select_select6"]; ?></option>
            </select>
        </div>

        <p><?php echo $keyword["q4_forms"]; ?><span style="color:red; font-size: 11px;"><?php echo $keyword["warning_obrigatorio"]; ?></span></p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"name="q4" id="q4_sim" value="Sim">
            <label class="form-check-label" for="inlineRadio1"><?php echo $keyword["radio_btn_sim"]; ?></label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="q4" id="q4_nao" value="Não">
            <label class="form-check-label" for="inlineRadio2"><?php echo $keyword["radio_btn_nao"]; ?></label>
        </div>
        </label><br><br>

        <div class="form-floating">
        <p><?php echo $keyword["q5_forms"]; ?><span style="color:red; font-size: 11px;"><?php echo $keyword["warning_obrigatorio"]; ?></span></p>
        <textarea class="form-control" name="q5" id="q5"></textarea>
        </div><br>


        <div class="form-floating">
        <p><?php echo $keyword["q6_forms"]; ?><span style="color:red; font-size: 11px;"><?php echo $keyword["warning_obrigatorio"]; ?></span></p>
        <textarea class="form-control" name="q6" id="q6"></textarea>
        </div>

        <br>

        <p><?php echo $keyword["q7_forms"]; ?><span style="color:red; font-size: 11px;"><?php echo $keyword["warning_obrigatorio"]; ?></span></p>
                <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        <?php echo $keyword["q7_forms_q1"]; ?>
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
        <?php echo $keyword["q7_forms_q2"]; ?>
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
        <?php echo $keyword["q7_forms_q3"]; ?>
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
        <?php echo $keyword["q7_forms_q4"]; ?>
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
        <label class="form-check-label" for="flexCheckChecked">
        <?php echo $keyword["q7_forms_q5"]; ?>
        </label>
        </div>

<br>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" >
    <label class="form-check-label" for="exampleCheck1" ><?php echo $keyword["btn_verificar"]; ?><a id="termos" href="pdf/politica.pdf"><?php echo $keyword["ler_termos"]; ?></a></label>
  </div>

  <button type="submit" class="btn btn-primary" style="float:right" onclick="cadastrar()"><?php echo $keyword["btn_salvar"]; ?></button>
  </form>

  <br><br>


</body>
</div>

<script type="javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="javascript" src="js/forms.js"></script>
</html>