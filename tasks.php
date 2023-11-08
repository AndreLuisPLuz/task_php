<?php
    session_start();

    include_once "database/connection.php";

    function set_task_property(?array $task, ?string $property)
    {
        if (array_key_exists($property, $_POST))
        {
            $task[$property] = $_POST[$property];
        }
    }

    $task = array();
    $properties = ['name', 'description', 'deadline', 'priority', 'concluded'];

    foreach ($properties as $property)
    {
        set_task_property($task, $property);
    }

    include_once "template.php";
?>