<?php 

$db = new SQLite3('banco.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

$db->query('CREATE TABLE IF NOT EXISTS "admin"(
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "Nome" VARCHAR,
    "Email" VARCHAR,
    "Senha" VARCHAR

)');

