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

namespace BitcoinVietnam\Blinktrade\Request;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetWithdrawals
 * @package BitcoinVietnam\Blinktrade\Request
 */
class GetWithdrawals extends BaseRequest
{
    /**
     * @Serializer\SerializedName("WithdrawListReqID")
     * @Serializer\Type("integer")
     * @var int
     */
    private $withdrawListReqId;

    /**
     * @Serializer\SerializedName("Page")
     * @Serializer\Type("integer")
     * @var int
     */
    private $page;

    /**
     * @Serializer\SerializedName("PageSize")
     * @Serializer\Type("integer")
     * @var int
     */
    private $pageSize;

    /**
     * @Serializer\SerializedName("StatusList")
     * @Serializer\Type("array")
     * @var array
     */
    private $statusList;

    /**
     * GetWithdrawals constructor.
     */
    public function __construct()
    {
        $this->setMsgType('U26');
        $this->setWithdrawListReqId(1);
    }

    /**
     * @return int
     */
    public function getWithdrawListReqId()
    {
        return $this->withdrawListReqId;
    }

    /**
     * @param int $withdrawListReqId
     */
    public function setWithdrawListReqId($withdrawListReqId)
    {
        $this->withdrawListReqId = $withdrawListReqId;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return array
     */
    public function getStatusList()
    {
        return $this->statusList;
    }

    /**
     * @param array $statusList
     */
    public function setStatusList($statusList)
    {
        $this->statusList = $statusList;
    }
}