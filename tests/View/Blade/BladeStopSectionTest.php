<?php

namespace Atypiccraft\StringBladeCompiler\Tests\Blade;

class BladeStopSectionTest extends AbstractBladeTestCase
{
    public function testStopSectionsAreCompiled()
    {
        $this->assertEquals('<?php $__env->stopSection(); ?>', $this->compiler->compileString('@stop'));
    }
}
