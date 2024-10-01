<?php 

function conectarBanco(){
    $db = new SQLite3('banco.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
    return $db;
}