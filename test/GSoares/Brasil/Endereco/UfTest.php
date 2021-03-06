<?php
use \GSoares\Brasil\Endereco\EnderecoInvalidoException;
use \GSoares\Brasil\Endereco\Uf;

/**
 * Uf test case.
 * 
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
class UfTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Tests Uf::exists()
	 * @expectedException \GSoares\Brasil\Endereco\EnderecoInvalidoException
	 */
	public function testeConstrutorLancaExceptionSeUfForInvalida()
	{
		$uf = new Uf('SS');
	}
	
	/**
	 * Tests Uf::exists()
	 * @dataProvider ufProvider
	 */
	public function testeConstrutorSetaUfCorretamente($uf)
	{
		$objUf = new Uf($uf);
		
		$this->assertEquals($objUf->getUf(), $uf);
	}
	
	/**
	 * @return string[]  
	 */
	public function ufProvider()
	{
		return array(
			array(Uf::SP),
			array(Uf::RJ),
			array(Uf::ES),
			array(Uf::MG),
			array(Uf::BA),
			array(Uf::SE),
			array(Uf::PE),
			array(Uf::AL),
			array(Uf::PB),
			array(Uf::RN),
			array(Uf::CE),
			array(Uf::PI),
			array(Uf::MA),
			array(Uf::PA),
			array(Uf::AM),
			array(Uf::AP),
			array(Uf::RR),
			array(Uf::AC),
			array(Uf::DF),
			array(Uf::GO),
			array(Uf::TO),
			array(Uf::MT),
			array(Uf::MS),
			array(Uf::RO),
			array(Uf::PR),
			array(Uf::SC),
			array(Uf::RS)
		);
	}
}