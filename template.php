<?php
    include_once "database/connection.php";
?>

<html>

<head>
    <meta charset="utf-8" />
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="tarefas.css" type="text/css" />
</head>

<body>
    <h1>Gerenciador de Tarefas</h1>
    <form action="tasks.php" method="POST">
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="name" />
            </label>
            <label>
                Descrição (Opcional):
                <textarea name="description"></textarea>
            </label>
            <label>
                Prazo (Opcional):
                <input type="text" name="deadline" />
            </label>
            <fieldset>
                <legend>Prioridade:</legend>
                <label>
                    <input type="radio" name="priority" value="1" checked /> Baixa
                    <input type="radio" name="priority" value="2" /> Média
                    <input type="radio" name="priority" value="3" /> Alta
                </label>
            </fieldset>
            <label>
                Tarefa concluída:
                <input type="checkbox" name="concluded" value="1" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Tarefa</th>
            <th>Descricao</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </table>
</body>

</html>