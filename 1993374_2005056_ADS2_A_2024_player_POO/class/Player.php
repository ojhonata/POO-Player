<?php
require_once("Inventario.php");
require_once("Item.php");

class Player{
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname, int $nivel){
        $this->setNickname($nickname);
        $this->setNivel($nivel);
        $this->inventario = new Inventario(20);
    }

    public function getNickname(): string{
        return $this->nickname;
    }
    public function setNickname($nickname): void{
        $this->nickname = $nickname;
    }

    public function getNivel(): int{
        return $this->nivel;
    }

    public function setNivel($nivel): void{
        $this->nivel = $nivel;
    }

    public function getInventario(): Inventario{
        return $this->inventario;
    }
    public function setInventario($inventario): void{
        $this->inventario = $inventario;
    }

    public function coletarItens(Item $item): void{
        if($this->inventario->capacidadeLivre() >= $item->getTamanho()){
            $this->inventario->adicionar($item);
            echo"{$item->getName()} coletado <br>";
        }else{
            echo "Espaço insuficiente <br>";
        }
    }

    public function soltarItem(Item $item): void{
        $this->inventario->remover($item);
        echo "O item {$item->getName()} foi solto <br>";
    }

    public function subirNivel(): void{
        $this->nivel++;
        $novaCapacidade = $this->inventario->getCapacidadeMaxima() + (3 * $this->nivel);
        $this->inventario->setCapacidadeMaxima($novaCapacidade);
        echo "<br> Você subiu para o Nível {$this->nivel} <br> Nova capacidade do invetário: {$novaCapacidade}";
    }

}

?>