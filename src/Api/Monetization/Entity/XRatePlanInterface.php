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

namespace Apigee\Edge\Api\Monetization\Entity;

use Apigee\Edge\Api\Monetization\Entity\Property\ApiXProductPropertyInterface;
use Apigee\Edge\Entity\Property\DescriptionPropertyInterface;
use Apigee\Edge\Entity\Property\DisplayNamePropertyInterface;
use Apigee\Edge\Entity\Property\NamePropertyInterface;
use Apigee\Edge\Api\Monetization\Structure\RatePlanXFee;
use Apigee\Edge\Api\Monetization\Structure\FixedRecurringFee;
use Apigee\Edge\Api\Monetization\Structure\ConsumptionPricingRates;
use Apigee\Edge\Api\Monetization\Structure\RevenueShareRates;

interface XRatePlanInterface extends
    EntityInterface,
    DescriptionPropertyInterface,
    DisplayNamePropertyInterface,
    ApiXProductPropertyInterface,
    NamePropertyInterface
{
    public const FREQUENCY_DURATION_DAY = 'DAY';

    public const FREQUENCY_DURATION_WEEK = 'WEEK';

    public const FREQUENCY_DURATION_MONTH = 'MONTH';

    public const FREQUENCY_DURATION_QUARTER = 'QUARTER';

    public const RECURRING_TYPE_CALENDAR = 'CALENDAR';

    public const RECURRING_TYPE_CUSTOM = 'CUSTOM';

    public const TYPE_STANDARD = 'STANDARD';

    public const TYPE_DEVELOPER = 'DEVELOPER';

    public const TYPE_DEVELOPER_CATEGORY = 'DEVELOPER_CATEGORY';

    /**
     * @return int|null
     */
    public function getFrequencyDuration(): ?int;

    /**
     * @param int $frequencyDuration
     */
    public function setFrequencyDuration(int $frequencyDuration): void;

    /**
     * @return string|null
     */
    public function getFrequencyDurationType(): ?string;

    /**
     * @param string $frequencyDurationType
     */
    public function setFrequencyDurationType(string $frequencyDurationType): void;

    /**
     * It could be null only when a rate plan is created.
     *
     * @return \Apigee\Edge\Api\Monetization\Entity\ApiXProductInterface|null
     */
    public function getPackage(): ?ApiXProductInterface;

    /**
     * @param \Apigee\Edge\Api\Monetization\Entity\ApiXProductInterface $package
     */
    public function setPackage(ApiXProductInterface $package): void;

    /**
     * @return bool
     */
    public function isPublished(): bool;

    /**
     * @param bool $published
     */
    public function setPublished(bool $published): void;

    /**
     * @return \Apigee\Edge\Api\Monetization\Structure\RatePlanXFee[]
     */
    public function getRatePlanXFee(): array;

    /**
     * @param \Apigee\Edge\Api\Monetization\Structure\RatePlanXFee ...$ratePlanXFee
     */
    public function setRatePlanXFee(RatePlanXFee ...$ratePlanXFee): void;

    /**
     * @return \Apigee\Edge\Api\Monetization\Structure\FixedRecurringFee[]
     */
    public function getFixedRecurringFee(): array;

    /**
     * @param \Apigee\Edge\Api\Monetization\Structure\FixedRecurringFee ...$fixedRecurringFee
     */
    public function setFixedRecurringFee(FixedRecurringFee ...$fixedRecurringFee): void;

    /**
     * @return \Apigee\Edge\Api\Monetization\Structure\ConsumptionPricingRates[]
     */
    public function getConsumptionPricingRates(): array;

    /**
     * @param \Apigee\Edge\Api\Monetization\Structure\ConsumptionPricingRates ...$consumptionPricingRates
     */
    public function setConsumptionPricingRates(ConsumptionPricingRates ...$consumptionPricingRates): void;

    /**
     * @return \Apigee\Edge\Api\Monetization\Structure\RevenueShareRates[]
     */
    public function getRevenueShareRates(): array;

    /**
     * @param \Apigee\Edge\Api\Monetization\Structure\RevenueShareRates ...$revenueShareRates
     */
    public function setRevenueShareRates(RevenueShareRates ...$revenueShareRates): void;

}
