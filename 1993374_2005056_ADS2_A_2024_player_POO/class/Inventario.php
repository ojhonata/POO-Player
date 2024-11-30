<?php
require_once("Item.php");
require_once("Player.php");

class Inventario{
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct(int $capacidadeMaxima){
        $this->setCapacidadeMaxima($capacidadeMaxima);
    }

    public function getCapacidadeMaxima(): int{
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima($capacidadeMaxima): void{
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function adicionar(Item $item): void {
        if ($this->capacidadeLivre() >= $item->getTamanho()) {
            $this->itens[] = $item;
            echo " {$item->getName()} adicionado com sucesso <br>";
        } else {
            echo "Inventário cheio <br>";
        }
    }

    public function remover(Item $item): void{
        foreach($this->itens as $indice => $i){
            if($i->getName() == $item->getName()){
                unset($this->itens[$indice]);
                echo "Item {$item->getName()} removido com sucesso <br>";
                break;
            }   
        }
                    
    }

    public function capacidadeLivre(): int{
        $pesoTotal = 0;
        foreach ($this->itens as $item){
            $pesoTotal += $item->getTamanho();
        }

        return $this->capacidadeMaxima - $pesoTotal;
    }
}
