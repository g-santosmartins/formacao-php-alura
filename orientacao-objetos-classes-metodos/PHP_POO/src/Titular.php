<?php

class Titular {
    private string $nome;
    private Cpf $cpf;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaOCpf()
    {
        return $this->cpf->recuperaCpf();
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5 )  {
            echo "Impossível o nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
