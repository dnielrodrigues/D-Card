<?php

class Conexao {
    private static $host = 'localhost';
    private static $port = '80';
    private static $user = '######';
    private static $password = '#######';
    private static $banco = '######'; //Ver porque a variavel banco nao é aceita na função, escrevi a string no parâmetro
    private static $conect = false;
    private static $conectDb = false;
    
    public static function getConnection(){
        self::$conect = mysql_connect(
            self::$host,
            self::$user,
            self::$password
        );
        if (!self::$conect) {
            die ('Erro ao conectar o banco : ' . mysql_error());
        }
        //self::$conectDb = mysql_select_db('dcards', self::$conect);
        self::$conectDb = mysql_select_db(self::$banco, self::$conect);
        if (!self::$conectDb) {
            die ('Erro ao selecionar o banco : ' . mysql_error());
        }
        return true;
    }
    
    public static function closeConnection(){
        if(!mysql_close(self::$conect)){
            throw new Exception(
                    '('.mysql_error(self::$conect).')Erro ao encerrar conexao'
            );
        }else{
            return true;
        }
    }
    
}
