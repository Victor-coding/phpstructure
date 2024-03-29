<?php
session_start();

require 'connect.php';

function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    exit();
}

// Проверка выполнения запроса к БД
function dbCheckError($query)
{
    $errInfo = $query->errorInfo();

    if ($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}
// Запрос на получение одной строки с выбраной таблицы
function selectAll($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'". $value . "'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key=$value";
            }else{
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }

    }
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}
// Запрос на получение данных с одной таблицы
function selectOne($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params))
    {
        $i = 0;
        foreach ($params as $key => $value)
        {
            if (!is_numeric($value))
            {
                $value = "'". $value . "'";
            }
            if ($i === 0)
            {
                $sql = $sql . " WHERE $key=$value";
            }
            else
            {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}
// Запись в таблицу БД
function insert($table, $configureTable, $param)
{
    global $pdo;
    $i = 0;
    $coll = '';
    $mask = '';

    foreach ($configureTable as $key => $value)
    {
        if ($i === 0)
        {
            $coll = $coll . $key;
            $mask = $mask . $value;
        }
        else
        {
            $coll = $coll . ', ' . $key;
            $mask = $mask . ', ' . $value;
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
    $query = $pdo->prepare($sql);
    $query->execute($param);
    dbCheckError($query);
    return $pdo->lastInsertId();

}
// Обновление строки в таблице
function update($table,$id, $params, $configureTable)
{
    global $pdo;
    $i = 0;
    $str = '';

    foreach ($configureTable as $key => $value)
    {
        if ($i === 0)
        {
            $str = $str . $key . " = " . $value;
        }
        else
        {
            $str = $str . ", " . $key . " = " . $value;
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}
// Удаление строки в таблице
function delete($table,$id)
{
    global $pdo;
    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}
