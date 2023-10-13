<?php

namespace HelgeSverre\Extractor\Extraction\Builtins;

use HelgeSverre\Extractor\Extraction\Concerns\ExpectsJson;
use HelgeSverre\Extractor\Extraction\Concerns\TrimsInput;
use HelgeSverre\Extractor\Extraction\Extractor;

class Payslip extends Extractor
{
    use ExpectsJson;
    use TrimsInput;
}