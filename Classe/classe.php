<?php 
    class Funcionario{
        var $nome;
        var $idade;
        var $sexo;
        var $funcao;
        var $setor;

        function __construct($nomeExterno, $idadeExterno, $sexoExterno, $funcaoExterno, $setorExterno){
            $this->nome = $nomeExterno;
            $this->idade = $idadeExterno;
            $this->sexo = $sexoExterno;
            $this->funcao = $funcaoExterno;
            $this->setor = $setorExterno;
        }

        function getNome(){
            return $this->nome;
        }

        function setNome($nomeExterno){
            $this->nome = $nomeExterno;
        }

        function getIdade(){
            return $this->idade;
        }

        function setIdade($idadeExterno){
            $this->idade = $idadeExterno;
        }

        function getSexo(){
            return $this->sexo;
        }

        function setSexo($sexoExterno){
            $this->sexo = $sexoExterno;
        }

        function getFuncao(){
            return $this->funcao;
        }

        function setFuncao($funcaoExterno){
            $this->funcao = $funcaoExterno;
        }

        function getSetor(){
            return $this->setor;
        }

        function setSetor($setorExterno){
            $this->setor = $setorExterno;
        }

    }
?>