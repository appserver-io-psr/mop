<?php

/**
 * \AppserverIo\Psr\MetaobjectProtocol\Dbc\Annotations\Requires
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

namespace AppserverIo\Psr\MetaobjectProtocol\Dbc\Annotations;

/**
 * Annotation class which is used to identify the pre-condition a method execution or property access must fulfill
 *
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH - <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/mop
 * @link      http://www.appserver.io/
 *
 * @Annotation
 * @Target({"METHOD"})
 */
class Requires
{
    /**
     * The annotation which identifies this annotation class
     *
     * @var string
     */
    const ANNOTATION = 'Requires';

    /**
     * The assertion type to use.
     *
     * @var string
     */
    protected $type;

    /**
     * The constraint to use for assertion.
     *
     * @var string
     */
    protected $constraint;

    /**
     * The constructor the initializes the instance with the
     * data passed with the token.
     *
     * @param array $values The annotation values
     */
    public function __construct(array $values = array())
    {

        // set the name attribute, if available
        if (isset($values[AnnotationKeys::TYPE])) {
            $this->name = $values[AnnotationKeys::TYPE];
        }

        // set the constraint attribute, if available
        if (isset($values[AnnotationKeys::CONSTRAINT])) {
            $this->constraint = $values[AnnotationKeys::CONSTRAINT];
        }
    }

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
     * Returns the value of the name attribute.
     *
     * @return string|null The annotations name attribute
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the value of the constraint attribute.
     *
     * @return string|null The annotations constraint attribute
     */
    public function getConstraint()
    {
        return $this->constraint;
    }
}
