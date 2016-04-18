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

namespace BitcoinVietnam\Blinktrade;

/**
 * Class Blinktrade
 * @package BitcoinVietnam\Blinktrade
 */
class Blinktrade
{
    /** URL for API requests */
    const URL = 'https://api.blinktrade.com/tapi/v1/message';

    // Exchanges

    /** Surbitcoin */
    const BROKERID_SURBITCOIN = 1;

    /** VBTC */
    const BROKERID_VBTC = 3;

    /** Foxbit */
    const BROKERID_FOXBIT = 4;

    /** Testnet */
    const BROKERID_TESTNET = 5;

    /** Urdubit */
    const BROKERID_URDUBIT = 8;

    /** Chilebit */
    const BROKERID_CHILEBIT = 9;

    // Order sides

    /** Buy */
    const ORDER_SIDE_BUY = "1";

    /** Sell */
    const ORDER_SIDE_SELL = "2";

    /** Redeem */
    const ORDER_SIDE_REDEEM = "E";

    /** Lend */
    const ORDER_SIDE_LEND = "F";

    /** Borrow */
    const ORDER_SIDE_BORROW = "G";

    // Order types

    /** Market */
    const ORDER_TYPE_MARKET = "1";

    /** Limited */
    const ORDER_TYPE_LIMITED = "2";

    /** Stop limit */
    const ORDER_TYPE_STOP_LIMIT = "3";

    /** Swap */
    const ORDER_TYPE_SWAP = "G";

    /** Pegged */
    const ORDER_TYPE_PEGGED = "P";

    // Withdrawal status

    /** Pending */
    const WITHDRAW_STATUS_PENDING = '1';

    /** In progress */
    const WITHDRAW_STATUS_IN_PROGRESS = '2';

    /** Completed */
    const WITHDRAW_STATUS_COMPLETED = '4';

    /** Cancelled */
    const WITHDRAW_STATUS_CANCELLED = '8';

    /**
     * @param string $key
     * @param string $secret
     * @param int $brokerId
     * @return Client
     */
    public static function buildClient($key, $secret, $brokerId)
    {
        return new Client($key, $secret, $brokerId);
    }
}