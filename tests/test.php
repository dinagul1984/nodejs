<?php
namespace PMVC\PlugIn\nodejs;

use PMVC_TestCase;

class NodejsTest extends PMVC_TestCase
{
    private $_plug = 'nodejs';
    function testPlugin()
    {
        ob_start();
        print_r(\PMVC\plug($this->_plug));
        $output = ob_get_contents();
        ob_end_clean();
        $this->haveString($this->_plug,$output);
    }

}
