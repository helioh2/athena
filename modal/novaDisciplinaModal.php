<?php
$idCurso = $_POST['idCurso'];
require_once '../classes/BD/crudPDO.php';
$fetch = selecionarWhere('disciplina', array('categoria'), "id_curso = $idCurso GROUP BY categoria")
?>

<center>
<!--    <div class="panel panel-primary" style="margin-left: 30%; margin-right: 30%;">-->
    <label class="text-uppercase">Inserir Disciplina</label>

    <br><br>
    Nome<br><input name="nome" class="text-primary center-block " ng-model="nomeDisciplina" type="text" id="nomeD" value=""><br>
    Cógido<br><input class="text-primary center-block" name="codigo" type="text" id="codigoD" value = ""><br>

    Carga Horaria<br><input class="text-primary center-block" name="CH" type="number" id="chD" value = ""> 
<!--                                Ativa <br><input class="text-success  text-center" name="ativa" type="checkbox" id="ativaD" value = "1" ?> <br> -->
    <input name="codCurso" class="text-primary center-block "  type="hidden" id="idCurso" value ="<?php echo $idCurso; ?>" >



    <br>
<!--    </div>-->
    <div class="panel panel-primary"style="margin-left: 20%; margin-right: 20%;">
        <label>Categoria</label>
        <br>


        <div id='divSelectCategoria'>
            <select id="selectCategoria" class="panel panel-primary text-primary" style="border: white;">
                <?php
                foreach ($fetch as $f) {
                    $categoria = $f['categoria'];
                    echo "<option class='text-uppercase text-primary text-center' value='$categoria'>$categoria</option>";
                }
                ?>
            </select>
            <br>
            <button id="btnNovaCategoria" class="btn btn-md btn-default" onclick="inputNovaCategoria()">NOVA</button>

        </div>

        <div id="divNovaCategoria" hidden="true">

            <input class="text-primary center-block" name="categoria" type="text" id="categoriaD" value = "">
            <br>
            <button id="btnSelectCategoria" class="btn btn-md btn-default" onclick="selecionarCategoria()">LISTAR</button>
            <br>
        </div>
    </div>
    <br>

    <input id="inputNovaCategoria" type="button" onclick="inserirDisciplina()"  class="btn btn-md btn-primary" value="inserir">

</center>