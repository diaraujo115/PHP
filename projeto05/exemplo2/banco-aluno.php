<?php
    include 'Aluno.php'; 
?>

<?php

    function insere($conecta,$aluno){

        $sql="insert into alunos(nome,matricula, disciplina) 
            values ('$aluno->nome',
                    '$aluno->matricula', 
                    '$aluno->disciplina')";

        $resultado=mysqli_query($conecta,$sql);
        return $resultado;

    }

?>