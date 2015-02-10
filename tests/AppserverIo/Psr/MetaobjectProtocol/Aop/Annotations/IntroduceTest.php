<?php

/**
 * \AppserverIo\Psr\MetaobjectProtocol\Aop\Annotations\IntroduceTest
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

/**
 * Simple test case as a foundation for further tests (if PSR gets extended)
 *
 * @author    Bernhard Wick <bw@appserver.io>
 * @copyright 2015 TechDivision GmbH - <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/mop
 * @link      http://www.appserver.io/
 */
class IntroduceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Tests if the getter can be used right after initialisation
     *
     * @return null
     */
    public function testIntroductionGetter()
    {
        $values = array(
            AnnotationKeys::INTRODUCTION_INTERFACE => 'testInterface',
            AnnotationKeys::IMPLEMENTATION => 'testImplementationTrait'
        );
        $introduce = new Introduce(Introduce::ANNOTATION, $values);

        $this->assertEquals('testInterface', $introduce->getInterface());
        $this->assertEquals('testImplementationTrait', $introduce->getImplementation());
    }
}
