<?php

/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Apigee\Edge\Api\Monetization\Structure;

use Apigee\Edge\Structure\BaseObject;

/**
 * Class ConsumptionPricingRates.
 *
 * @see https://docs.apigee.com/api-platform/monetization/create-rate-plans#ConsumptionPricingRates
 */
final class ConsumptionPricingRates extends BaseObject
{

    /**
     * Value of "end" from the API response.
     *
     * TODO Can this be null?
     *
     * @var string|null
     */
    protected $end;

    /**
     * Value of "start" from the API response,.
     *
     * @var string
     */
    protected $start;
    /**
     * Value of "start" from the API response,.
     *
     * @var string
     */
    protected $fee = [];

    /**
     * @return string
     */
    public function getEnd(): string
    {
        return $this->end;
    }

    /**
     * @param string $end
     */
    public function setEnd(string $end): void
    {
        $this->end = $end;
    }

    /**
     * @return string
     */
    public function getStart(): string
    {
        return $this->start;
    }

    /**
     * @param string $start
     */
    public function setStart(string $start): void
    {
        $this->start = $start;
    }

    /**
     * @return string
     */
    public function getFee(): array
    {
        return $this->fee;
    }

    /**
     * @param string $fee
     */
    public function setFee(RatePlanXFee $fee): void
    {
        $this->fee = $fee;
    }
}