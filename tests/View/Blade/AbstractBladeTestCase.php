<?php

namespace Atypiccraft\StringBladeCompiler\Tests\Blade;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Illuminate\Filesystem\Filesystem;
//use Illuminate\View\Compilers\BladeCompiler;
use Atypiccraft\StringBladeCompiler\Compilers\StringBladeCompiler as BladeCompiler;

abstract class AbstractBladeTestCase extends TestCase
{
    protected $compiler;

    protected function setUp(): void
    {
        $this->compiler = new BladeCompiler(m::mock(Filesystem::class), __DIR__);
        parent::setUp();
    }

    protected function tearDown(): void
    {
        m::close();

        parent::tearDown();
    }
}
