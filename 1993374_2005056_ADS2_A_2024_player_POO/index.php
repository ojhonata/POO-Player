<?php
require_once("./class/Item.php");
require_once("./class/Ataque.php");
require_once("./class/Defesa.php");
require_once("./class/Magia.php");
require_once("./class/Inventario.php");
require_once("./class/Player.php");

$player1 = new Player("Xaulin0800", 1);

$ataque1 = new Ataque("Espada Longa");
$defesa1 = new Defesa("Escudo de Ferro");
$magia1 = new Magia("Poção de Cura");
$ataque2 = new Ataque("Katana");

$player1 = new Player("Xaulin0800", 1);

echo"<h2>Jogador 1</h2>";
echo "<strong>Nickname:</strong> {$player1->getNickname()} <br>";
echo "<strong>Nível:</strong> {$player1->getNivel()} <br>";
echo "<strong>Capacidade inicial do inventário:</strong> {$player1->getInventario()->getCapacidadeMaxima()} <br>";


echo "<h3>Itens disponíveis:</h3>";
echo "Item: {$ataque1->getName()} | Tamanho: {$ataque1->getTamanho()} | Classe: {$ataque1->getClasse()}<br>";
echo "Item: {$defesa1->getName()} | Tamanho: {$defesa1->getTamanho()} | Classe: {$defesa1->getClasse()}<br>";
echo "Item: {$magia1->getName()} | Tamanho: {$magia1->getTamanho()} | Classe: {$magia1->getClasse()}<br>";
echo "Item: {$ataque2->getName()} | Tamanho: {$ataque2->getTamanho()} | Classe: {$ataque2->getClasse()}<br>";

echo "<h3>Subindo de nível</h3>";
$player1->subirNivel();
$player1->subirNivel();
$player1->subirNivel();

echo "<h3>Coletando itens</h3>";
$player1->coletarItens($ataque1);
$player1->coletarItens($defesa1);
$player1->coletarItens($magia1);
$player1->coletarItens($ataque2);

echo "<h3>Soltando um item</h3>";
$player1->soltarItem($defesa1);
$player1->soltarItem($ataque1);

echo "<br>Capacidade livre: {$player1->getInventario()->capacidadeLivre()} <br><br>";


echo "<hr>";

$player2 = new Player("Periculoso", 1);

$ataque1 = new Ataque("Bastão");
$defesa1 = new Defesa("Escudo de Ouro");
$magia1 = new Magia("Veneno");

echo"<h2>Jogador 2</h2>";
echo "<strong>Nickname:</strong> {$player2->getNickname()} <br>";
echo "<strong>Nível:</strong> {$player2->getNivel()} <br>";
echo "<strong>Capacidade inicial do inventário:</strong> {$player2->getInventario()->getCapacidadeMaxima()} <br>";

echo "<h3>Itens disponíveis:</h3>";
echo "Item: {$ataque1->getName()} | Tamanho: {$ataque1->getTamanho()} | Classe: {$ataque1->getClasse()}<br>";
echo "Item: {$defesa1->getName()} | Tamanho: {$defesa1->getTamanho()} | Classe: {$defesa1->getClasse()}<br>";
echo "Item: {$magia1->getName()} | Tamanho: {$magia1->getTamanho()} | Classe: {$magia1->getClasse()}<br>";

echo "<h3>Subindo de nível</h3>";
$player2->subirNivel();
$player2->subirNivel();
$player2->subirNivel();
$player2->subirNivel();
$player2->subirNivel();

echo "<h3>Coletando itens</h3>";
$player2->coletarItens($ataque1);
$player2->coletarItens($defesa1);
$player2->coletarItens($magia1);
$player2->coletarItens($ataque2);

echo "<h3>Soltando um item</h3>";
$player2->soltarItem($defesa1);
$player2->soltarItem($ataque1);

echo "<br>Capacidade livre: {$player2->getInventario()->capacidadeLivre()} <br><br>";



?>