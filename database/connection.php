<?php
    $db_server = "localhost:3306";
    $db_user = "root";
    $db_pwd = "admin";
    $db_schema = "tarefas";

    $conn = mysqli_connect($db_server, $db_user, $db_pwd, $db_schema);

    if (! $conn)
    {
        echo "Error while connecting...";
    }

    function fetch_task(?mysqli $conn, ?int $task_id): array | false
    {
        $sql_fetch = "Select * From `tarefa` where id = $task_id";
        $result = mysqli_query($conn, $sql_fetch);

        $task = mysqli_fetch_assoc($result);

        return $task;
    }

    function fetch_task_many(?mysqli $conn): array
    {
        $sql_fetch = "Select * From `tarefa`";
        $result = mysqli_query($conn, $sql_fetch);

        $tasks = array();

        while ($task = mysqli_fetch_assoc($result))
        {
            $tasks[] = $task;
        }

        return $tasks;
    }

    function record_task(?mysqli $conn, ?array $task): bool
    {
        $sql_insert = 
            "INSERT INTO `tarefa`
            (
                `nome`,
                `descricao`,
                `prazo`,
                `prioridade`,
                `concluida`
            )
            VALUES
            (
                {$task['name']}, 
                {$task['description']},
                {$task['deadline']},
                {$task['priority']},
                {$task['concluded']}
            );";
        
        $success = mysqli_query($conn, $sql_insert);

        return $success;
    }

    function update_task(?mysqli $conn, ?array $task): bool
    {
        $sql_update =
            "UPDATE `tarefa`
            SET
                `nome` = {$task['name']},
                `descricao` = {$task['description']},
                `prazo` = {$task['deadline']},
                `prioridade` = {$task['priority']},
                `concluida` = {$task['concluded']}
            WHERE `id` = {$task['id']};";
        
        $success = mysqli_query($conn, $sql_update);

        return $success;
    }

    function delete_task(?mysqli $conn, ?int $task_id): bool
    {
        $sql_delete = "DELETE FROM `tarefa` WHERE `id` = $task_id;";
        $success = mysqli_query($conn, $sql_delete);

        return $success;
    }
?>