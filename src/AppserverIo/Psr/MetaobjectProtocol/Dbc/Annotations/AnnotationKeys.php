<?php

/**
 * \AppserverIo\Psr\MetaobjectProtocol\Dbc\Annotations\AnnotationKeys
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <t.wagner@appserver.io>
 * @copyright 2018 TechDivision GmbH - <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/mop
 * @link      http://www.appserver.io/
 */

namespace AppserverIo\Psr\MetaobjectProtocol\Dbc\Annotations;

/**
 * Annotation class which is used to identify the ensured state a method execution or property access will leave
 *
 * @author    Tim Wagner <t.wagner@appserver.io>
 * @copyright 2018 TechDivision GmbH - <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/mop
 * @link      http://www.appserver.io/
 */
class AnnotationKeys
{

    /**
     * Key for the annotation property 'type'.
     *
     * @var string
     */
    const TYPE = 'type';

    /**
     * Key for the annotation property 'constraint'.
     *
     * @var string
     */
    const CONSTRAINT = 'constraint';
}
