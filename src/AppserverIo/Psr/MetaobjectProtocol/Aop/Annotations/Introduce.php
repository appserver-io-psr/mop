<?php

/**
 * \AppserverIo\Psr\MetaobjectProtocol\Aop\Annotations\Introduce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH - <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/mop
 * @link      http://www.appserver.io/
 */

namespace AppserverIo\Psr\MetaobjectProtocol\Aop\Annotations;

use AppserverIo\Lang\Reflection\ReflectionAnnotation;

/**
 * Annotation class which is used to introduce new characteristics into a class.
 * Will result in a trait-supported implementation of a specified interface
 *
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH - <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/mop
 * @link      http://www.appserver.io/
 *
 * @Annotation
 * @Target({"CLASS"})
 */
class Introduce extends ReflectionAnnotation
{
    /**
     * The annotation which identifies this annotation class
     *
     * @var string
     */
    const ANNOTATION = 'Introduce';

    /**
     * This method returns the class name as a string
     *
     * @return string
     */
    public static function __getClass()
    {
        return __CLASS__;
    }

    /**
     * Returns the value of the interface attribute.
     *
     * @return string The annotations interface attribute
     */
    public function getInterface()
    {
        return $this->values[AnnotationKeys::INTRODUCTION_INTERFACE];
    }

    /**
     * Returns the value of the implementation attribute.
     *
     * @return string The annotations implementation attribute
     */
    public function getImplementation()
    {
        return $this->values[AnnotationKeys::IMPLEMENTATION];
    }
}
