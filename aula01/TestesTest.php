<?php

use PHPUnit\Framework\TestCase;

class TestesTest extends TestCase
{

	// Testa se eh identico
	public function testSame(){
		$soma = 3200+170;
		$this->assertSame(3370, $soma);
	}

	// Testa se eh true
	public function testTrue(){
		$verdadeiro = true;
		$this->assertTrue($verdadeiro);
	}

	// Testa se eh false
	public function testFalse(){
		$verdadeiro = false;
		$this->assertFalse($verdadeiro);
	}

	// Testa se o count eh igual
	public function testCount(){
		$arr = ["a", 1, true];
		$cnt = count($arr);

		$this->assertCount(3, $arr);
		$this->assertTrue($arr[2]);
		$this->assertSame(3, $cnt);
	}

	// Testa se eh vazio, false, null ou 0
	public function testEmpty(){
		//$vazio = [];
		//$vazio = 0;
		//$vazio = "";
		$vazio = null;
		$this->assertEmpty($vazio);
	}

	// Testa se eh nulo
	public function testNull(){
		$vazio = null;
		$this->assertNull($vazio);
	}

	// Testa se eh igual mas nao identico
	public function testEquals(){
		$a = "1";
		$b = 1;
		$this->assertEquals($a, $b);
	}


}