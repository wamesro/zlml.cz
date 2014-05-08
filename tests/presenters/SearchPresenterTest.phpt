<?php

namespace Test;

use Nette;
use Tester;

$container = require __DIR__ . '/../bootstrap.php';

/**
 * @testCase
 */
class SearchPresenterTest extends Tester\TestCase {

	public function __construct(Nette\DI\Container $container) {
		$this->tester = new Presenter($container);
	}

	public function setUp() {
		$this->tester->init('Search');
	}

	public function testRenderDefault() {
		$this->tester->testAction('default', 'GET', ['search' => 'nette']);
	}

	public function testRenderDefaultEmpty() {
		$this->tester->testAction('default', 'GET', ['search' => 'pritomtodotazupravdepodobnenicvdatabazinenajdu']);
	}

	//FIXME
	/*public function testSearchForm() {
		$this->tester->testForm('default', 'GET', array(
			'do' => 'search-submit',
		), array(
			'search' => 'test',
		));
	}*/

}

$test = new SearchPresenterTest($container);
$test->run();