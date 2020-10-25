<?php

include '../../mainfile.php';
if (file_exists($xoopsConfig['root_path'] . 'modules/' . $xoopsModule->dirname() . '/language/' . $xoopsConfig['language'] . '/main.php')) {
    include $xoopsConfig['root_path'] . 'modules/' . $xoopsModule->dirname() . '/language/' . $xoopsConfig['language'] . '/main.php';
} else {
    include $xoopsConfig['root_path'] . 'modules/' . $xoopsModule->dirname() . '/language/french/main.php';
}
