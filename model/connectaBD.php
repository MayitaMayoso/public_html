<?php
function connectaBD()
{
    try{
        $connexio=new PDO(
            sprintf('mysql:dbname=%s;host=%s;charset=utf8mb4','tdiwe13','127.0.0.1'),
            'tdiw-e13',
            'GpoNGS_C'
        );
        return $connexio;

    }catch(\PDOException $e){
        echo sprintf('Error de connexio: %s',$e->getMessage());
        die;
    }
}