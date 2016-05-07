<?php

namespace Acme\PhpBench\Extension\Example\Progress;

use PhpBench\Progress\Logger\PhpBenchLogger;
use PhpBench\Model\Iteration;

class FooLogger extends PhpBenchLogger
{
    public function iterationEnd(Iteration $iteration)
    {
        $this->output->write('_FOO_');
    }
}
