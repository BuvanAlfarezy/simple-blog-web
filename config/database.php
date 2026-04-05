<?php

function getDatabaseConfig(): array
{
    return [
        "database" => [
            "test" => [
                "url" => "mysql:host=localhost:3306;dbname=blog",
                "username" => "root",
                "password" => ""
            ],
            "prod" => [
                "url" => "mysql:host=localhost:3306;dbname=blog",
                "username" =>  "root",
                "password" =>   ""
            ]       
        ]
    ];
} 