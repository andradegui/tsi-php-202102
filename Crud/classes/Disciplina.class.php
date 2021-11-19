<?php

class Disciplina {

    var $bd;

    function __construct($bd)
    {
        $this->bd = $bd;
    }

    function listar( $id = null)
    {
        $id = preg_replace( '/\D/', '', $id);

        $strSql = !empty($id) ? "WHERE id = $id" : '';

        $sql = 'SELECT id, nome, professor, dia, descricao FROM disciplinas ' . $strSql . ' ORDER BY nome';

        foreach ($this->bd->query($sql) as $registro) {
           
            $lista[$registro['id']] = $registro; 
        }

        return $lista;
    }

    function apagar($id)
    {
        $id = preg_replace( '/\D/', '', $id);

        if($this->bd->query("DELETE FROM disciplinas WHERE id = $id")){

            return true;

        }else{

            return false;
        }
    }

    function criar($dados)
    {
        $nome = $dados['nome'];
        $prof = $dados['prof'];
        $desc = $dados['desc'];
        $dia = $dados['dia'];
        $ip = $_SERVER['REMOTE_ADDR'];

        //Prerar a consulta do bd
        $stmt = $this->bd->prepare('INSERT INTO disciplinas 
                                        (nome, professor, dia, descricao, end_ip) 
                                    VALUES 
                                        ( :nome, :professor, :dia, :descricao, :end_ip)');

        $stmt->bindParam( ':nome', $nome);
        $stmt->bindParam( ':professor', $prof);
        $stmt->bindParam( ':dia', $dia);
        $stmt->bindParam( ':descricao', $desc);
        $stmt->bindParam( ':end_ip', $ip);

        //Executar a consulta no bd
        if ( $stmt->execute() ) {

            //retornar true ou false
            return true;

        } else {

            return false;
        }
        
    }

    function salvar($dados)
    {
        $id = $dados['id'];
        $nome = $dados['nome'];
        $prof = $dados['prof'];
        $desc = $dados['desc'];
        $dia = $dados['dia'];
        $ip = $_SERVER['REMOTE_ADDR'];

        //Prerar a consulta do bd
        $stmt = $this->bd->prepare('UPDATE disciplinas SET 
                                        nome = :nome, 
                                        professor = :professor, 
                                        dia = :dia, 
                                        descricao = :descricao, 
                                        end_ip = :end_ip
                                    WHERE
                                        id = :id');

        $stmt->bindParam( ':nome', $nome);
        $stmt->bindParam( ':professor', $prof);
        $stmt->bindParam( ':dia', $dia);
        $stmt->bindParam( ':descricao', $desc);
        $stmt->bindParam( ':end_ip', $ip);
        $stmt->bindParam( ':id', $id);

        //Executar a consulta no bd
        if ( $stmt->execute() ) {

            //retornar true ou false
            return true;

        } else {

            return false;
        }
    }
}