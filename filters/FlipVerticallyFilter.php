<?php
/**
 * FlipVerticallyFilter class file.
 * @author Christoffer Niska <christoffer.niska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2013-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package crisu83.yii-imagemanager.filters
 */

use Imagine\Filter\Basic\FlipVertically;
use Imagine\Filter\FilterInterface;

/**
 * Loader for the Imagine flip vertically filter.
 */
class FlipVerticallyFilter extends ImagineFilter
{
    /**
     * Loads the filter.
     * @return FilterInterface
     */
    public function load()
    {
        return new FlipVertically();
    }
}