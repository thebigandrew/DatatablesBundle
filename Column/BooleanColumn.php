<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\DatatablesBundle\Column;

use Sg\DatatablesBundle\Column\AbstractColumn as BaseColumn;

use Exception;

/**
 * Class BooleanColumn
 *
 * @package Sg\DatatablesBundle\Column
 */
class BooleanColumn extends BaseColumn
{
    //-------------------------------------------------
    // Ctor.
    //-------------------------------------------------

    /**
     * Ctor.
     *
     * @param null|string $property An entity's property
     *
     * @throws Exception
     */
    public function __construct($property = null)
    {
        if (null == $property) {
            throw new Exception("The entity's property can not be null.");
        }

        parent::__construct($property);
    }


    //-------------------------------------------------
    // ColumnInterface
    //-------------------------------------------------

    /**
     * {@inheritdoc}
     */
    public function getClassName()
    {
        return 'boolean';
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions(array $options)
    {
        if (array_key_exists('render', $options)) {
            if (null == $options['render']) {
                throw new Exception('The render option can not be null.');
            } else {
                $this->setMRender($options['render']);
            }
        }

        $this->setMRender('render_boolean_icons');

        parent::setOptions($options);
    }
}