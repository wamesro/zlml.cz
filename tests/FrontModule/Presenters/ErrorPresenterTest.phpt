<?php declare(strict_types = 1);

namespace App\Tests\FrontModule\Presenters;

use Nette;
use Tester;

require __DIR__ . '/../../bootstrap.php';

/**
 * @testCase
 */
class ErrorPresenterTest extends \Tester\TestCase
{

	use \Testbench\TPresenter;

	public function testRenderDefault()
	{
		$response = $this->check('Front:Error:default', ['exception' => 'ErrorPresenterTest']);
		Tester\Assert::true($response instanceof Nette\Application\Responses\TextResponse);
		Tester\Assert::true($response->getSource() instanceof Nette\Application\UI\ITemplate);
	}

//	public function testRender404()
//	{
//		Tester\Assert::exception(function () {
//			$this->checkAction('missing');
//		}, 'Nette\Application\BadRequestException');
//	}

}

(new ErrorPresenterTest)->run();
