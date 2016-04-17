<?php
/**
 * Copyright (c) 2016 Bitcoin Viet Nam Co., Ltd.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to
 * do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 *  portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 * THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BitcoinVietnam\Blinktrade\Api;
use BitcoinVietnam\Blinktrade\Request;
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;

/**
 * Class Manager
 * @package BitcoinVietnam\Blinktrade\Api
 */
class Manager
{
    /**
     * @var array
     */
    private $factory;

    /**
     * @return Request\Factory
     */
    public function request()
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : ($this->factory[__FUNCTION__] = new Request\Factory());
    }

    /**
     * @return \GuzzleHttp\Client
     */
    public function guzzle()
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : ($this->factory[__FUNCTION__] = new \GuzzleHttp\Client());
    }

    /**
     * @return \JMS\Serializer\Serializer
     */
    public function serializer()
    {
        if (!isset($this->factory[__FUNCTION__])) {
            AnnotationRegistry::registerAutoloadNamespace('JMS\Serializer\Annotation', __DIR__ . '/../../vendor/jms/serializer/src');
            $this->factory[__FUNCTION__] = SerializerBuilder::create()->build();
        }

        return $this->factory[__FUNCTION__];
    }
}