<?php
use \GSoares\Brasil\Pessoa\DocumentoInvalidoException;
use \GSoares\Brasil\Pessoa\Rg;

/**
 * Rg test case.
 */
class RgTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Tests Rg->__construct()
	 * 
	 * @param string $rg
	 * @dataProvider rgValidoProvider
	 */
	public function testRgValidoNaoDeveLancarException($rg)
	{
		$rg = new Rg($rg);		
	}
	
	/**
	 * Tests Rg->__construct()
	 * 
	 * @param string $rg
	 * @dataProvider rgInvalidoProvider
	 * @expectedException GSoares\Brasil\Pessoa\DocumentoInvalidoException
	 */
	public function testRgInvalidoDeveLancarException($rg)
	{
		$rg = new Rg($rg);
	}

	/**
	 * Tests Rg->numero()
	 */
	public function testNumero()
	{
		$rg = new Rg('MG-4.032.894-40');
		
		$this->assertEquals('403289440', $rg->numero());
	}

	/**
	 * Tests Rg->formata()
	 */
	public function testFormata()
	{
		$rg = new Rg('MG-4.032.894-40');
		
		$this->assertEquals('MG-4.032.894-40', $rg->formata());
	}
	
	/**
	 * @return multitype:multitype:string  
	 */
	public function rgInvalidoProvider()
	{
		return array(
			array('4.032.8'),
			array('XX-BB.012.455'),
			array('XX-BB.AA.CCC'),
			array('BBB-55.012.455')
		);
	}
	
	/**
	 * @return multitype:multitype:string  
	 */
	public function rgValidoProvider()
	{
		return array(
			array('4.032.894-40'),
			array('MG-4.032.894-40'),
			array('2.977.269'),
			array('4.032.894-B')
		);
	}
}