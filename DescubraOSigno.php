<?php

class DescubraOSigno
{
    public readonly int $id;
    public readonly string $nome;
    public readonly string $dataInicio;
    public readonly string $dataFim;
    public readonly string $descricao;

    public function __construct(string $data)
    {
        $this->idSigno($data);
        $listaSignos = $this->geradorLista();
        $this->geradorDadosSigno($listaSignos);
    }

    private function idSigno(string $data): void
    {
        $codigo = $this->geradorCodigo($data);
        $this->geradorId($codigo);
    }

    private function geradorCodigo(string $data): int
    {
        if($data) {
            $data = explode('-', $data);
            $dia = $data[2];
            $mes = $data[1];
            $arrayCodigo = [$mes, $dia];
            return intval(implode('', $arrayCodigo));
        } else {
            return 0;
        }
    }

    private function geradorId(int $codigo): void
    {
        if ($codigo >= 321 AND $codigo <= 420) {
            //Aries
            $this->id = 0;
        } elseif ($codigo >= 421 AND $codigo <= 520) {
            //Touro
            $this->id = 1;
        } elseif ($codigo >= 521 AND $codigo <= 620) {
            //Gêmeos
            $this->id = 2;
        } elseif ($codigo >= 621 AND $codigo <= 722) {
            //Câncer
            $this->id = 3;
        } elseif ($codigo >= 723 AND $codigo <= 822) {
            //Leão
            $this->id = 4;
        } elseif ($codigo >= 823 AND $codigo <= 922) {
            //Virgem
            $this->id = 5;
        } elseif ($codigo >= 923 AND $codigo <= 1022) {
            //Libra
            $this->id = 6;
        } elseif ($codigo >= 1023 AND $codigo <= 1121) {
            //Escorpião
            $this->id = 7;
        } elseif ($codigo >= 1122 AND $codigo <= 1221) {
            //Sagitário
            $this->id = 8;
        } elseif ($codigo >= 1222 OR ($codigo <= 120 AND $codigo > 0)) {
            //Capricórnio
            $this->id = 9;
        } elseif ($codigo >= 121 AND $codigo <= 218) {
            //Aquário
            $this->id = 10;
        } elseif ($codigo >= 219 AND $codigo <= 320) {
            //Peixes
            $this->id = 11;
        } else {
            //Erro
            $this->id = 12;
        }
    }

    private function geradorLista(): array
    {

        $caminhoXML = 'signos.xml';
        $xml = simplexml_load_file($caminhoXML);

        foreach ($xml->children() as $signo) {
            $nome[] = $signo->signoNome;
            $dataInicio[] = $signo->dataInicio;
            $dataFim[] = $signo->dataFim;
            $descricao[] = $signo->descricao;
        }

        $lista = [
            'nome' => $nome[$this->id],
            'dataInicio' => $dataInicio[$this->id],
            'dataFim' => $dataFim[$this->id],
            'descricao' => $descricao[$this->id]   
        ];

        return $lista;
    }

    private function geradorDadosSigno(array $lista): void
    {
        $this->nome = $lista['nome'];
        $this->dataInicio = $lista['dataInicio'];
        $this->dataFim = $lista['dataFim'];
        $this->descricao = $lista['descricao'];
    }
}
