<?php 

    include 'Classe/classe.php';

    $funcionario1 = new Funcionario("Julia Salvador", 20, "Feminino", "Analista de Software", "Setor WMS");
    $funcionario2 = new Funcionario("Guilherme Felix", 21, "Masculino", "Líder do atendimento", "Setor WMS");
    $funcionario3 = new Funcionario("Rafaela Toledo", 21, "Feminino", "Líder do atendimento", "Setor TMS");
    $funcionario4 = new Funcionario("Felipe Ern", 18, "Masculino", "Analista de Software", "Setor WMS");

    echo "<h2>{$funcionario1->getNome()}</h2>
        <ol>
            <li>Idade: {$funcionario1->getIdade()}</li>
            <li>Sexo: {$funcionario1->getSexo()}</li>
            <li>Função: {$funcionario1->getFuncao()}</li>
            <li>Setor: {$funcionario1->getSetor()}</li>
        </ol>
        
        <h2>{$funcionario2->getNome()}</h2>
        <ul>
            <li>Idade: {$funcionario2->getIdade()}</li>
            <li>Sexo: {$funcionario2->getSexo()}</li>
            <li>Função: {$funcionario2->getFuncao()}</li>
            <li>Setor: {$funcionario2->getSetor()}</li>
        </ul>
        
        <h2>{$funcionario3->getNome()}</h2>
        <ol>
            <li>Idade: {$funcionario3->getIdade()}</li>
            <li>Sexo: {$funcionario3->getSexo()}</li>
            <li>Função: {$funcionario3->getFuncao()}</li>
            <li>Setor: {$funcionario3->getSetor()}</li>
        </ol>
        
        <h2>{$funcionario4->getNome()}</h2>
        <ul>
            <li>Idade: {$funcionario4->getIdade()}</li>
            <li>Sexo: {$funcionario4->getSexo()}</li>
            <li>Função: {$funcionario4->getFuncao()}</li>
            <li>Setor: {$funcionario4->getSetor()}</li>
        </ul>";

?>