<?php
/**
 * @author      Roland Schilffarth <roland@schilffarth.org>
 * @license     https://opensource.org/licenses/GPL-3.0 General Public License (GNU 3.0)
 */

set_error_handler([
    new \Schilffarth\Exception\Handling\ErrorHandler(),
    'handle'
]);
