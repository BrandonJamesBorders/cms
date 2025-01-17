<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.github.io/license/
 */

namespace crafttests\unit\validators;

use Codeception\Test\Unit;
use craft\test\mockclasses\models\ExampleModel;
use craft\validators\ColorValidator;
use ErrorException;

/**
 * Class ColorValidatorTest.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @author Global Network Group | Giel Tettelaar <giel@yellowflash.net>
 * @since 3.2
 */
class ColorValidatorTest extends Unit
{
    /**
     * @var ColorValidator
     */
    protected $colorValidator;

    /**
     * @var ExampleModel
     */
    protected $model;

    /*
     * @var \UnitTester
     */
    protected $tester;

    /**
     *
     */
    public function testPattern()
    {
        self::assertSame('/^#[0-9a-f]{6}$/', $this->colorValidator->pattern);
    }

    /**
     * @dataProvider normalizeColorDataProvider
     *
     * @param string $expected
     * @param string $color
     */
    public function testNormalizeColor(string $expected, string $color)
    {
        self::assertSame($expected, ColorValidator::normalizeColor($color));
    }

    /**
     * Passing an empty string will return an exception.
     */
    public function testNormalizeColorException()
    {
        $this->tester->expectThrowable(ErrorException::class, function() {
            ColorValidator::normalizeColor('');
        });
    }

    /**
     * @dataProvider colorValidatorAttributesDataProvider
     *
     * @param $input
     * @param bool $mustValidate
     */
    public function testAttributeValidation($input, bool $mustValidate)
    {
        $this->model->exampleParam = $input;

        $this->colorValidator->validateAttribute($this->model, 'exampleParam');

        if (!$mustValidate) {
            self::assertArrayHasKey('exampleParam', $this->model->getErrors());
        } else {
            self::assertSame([], $this->model->getErrors());
        }

        $this->model->clearErrors();
        $this->model->exampleParam = null;
    }

    /**
     * @return array
     */
    public function normalizeColorDataProvider(): array
    {
        return [
            ['#ffc10e', 'ffc10e'],
            ['#', '#'],
            ['#1234567890qwertyuiop!@#$%^&*()', '1234567890qwertyuiop!@#$%^&*()'],
            ['#12', '12'],
            ['#!!@@##', '!@#'],
            'three-chars-becomes-six' => ['#aassdd', 'asd'],
            ['#aassdd', 'ASD'],
            ['#a22d', 'a22d'],
        ];
    }

    /**
     * @return array
     */
    public function colorValidatorAttributesDataProvider(): array
    {
        return [
            ['#ffc', true],
            ['#ffc10e', true],
            ['ffc10e', true],
            ['#ffc10eaaaaaaaaa', false],
            ['fffc10e', false],
            ['xxx', false],
            ['#ffc1', false],
            ['#ffc1e', false],
            ['#ff', false],
            ['#f', false],
            ['#', false],
            ['rgba(255, 0, 0, 0.2)', false],
            ['255, 0, 0, 0.2', false],
        ];
    }

    /**
     * @inheritdoc
     */
    protected function _before()
    {
        $this->model = new ExampleModel();
        $this->colorValidator = new ColorValidator();
    }
}
