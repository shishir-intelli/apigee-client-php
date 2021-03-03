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

use Apigee\Edge\Api\Monetization\Entity\Property\BillingPeriodPropertyAwareTrait;
use Apigee\Edge\Api\Monetization\Entity\Property\PaymentFundingModelPropertyAwareTrait;
use Apigee\Edge\Api\Monetization\Entity\Property\CurrencyCodePropertyAwareTrait;
use Apigee\Edge\Api\Monetization\Entity\Property\FixedFeeFrequencyPropertyAwareTrait;
use Apigee\Edge\Api\Monetization\Entity\Property\ConsumptionPricingTypePropertyAwareTrait;
use Apigee\Edge\Api\Monetization\Entity\Property\RevenueShareTypePropertyAwareTrait;
use Apigee\Edge\Api\Monetization\Entity\Property\StartTimePropertyAwareTrait;
use Apigee\Edge\Api\Monetization\Entity\Property\EndTimePropertyAwareTrait;
use Apigee\Edge\Api\Monetization\Entity\Property\ApiXProductPropertyAwareTrait;
use Apigee\Edge\Entity\Property\DescriptionPropertyAwareTrait;
use Apigee\Edge\Entity\Property\DisplayNamePropertyAwareTrait;
use Apigee\Edge\Entity\Property\NamePropertyAwareTrait;
use Apigee\Edge\Api\Monetization\Structure\RatePlanXFee;
use Apigee\Edge\Api\Monetization\Structure\FixedRecurringFee;
use Apigee\Edge\Api\Monetization\Structure\RevenueShareRates;
use Apigee\Edge\Api\Monetization\Structure\ConsumptionPricingRates;

/**
 * Parent class for standard, developer- and developer specific rate plans.
 *
 * @see https://docs.apigee.com/api-platform/monetization/create-rate-plans#creatingrateplansusingtheapi-configurationsettingsforrateplans
 */
abstract class XRatePlan extends Entity implements XRatePlanInterface
{
    use DescriptionPropertyAwareTrait;
    use BillingPeriodPropertyAwareTrait;
    use PaymentFundingModelPropertyAwareTrait;
    use CurrencyCodePropertyAwareTrait;
    use FixedFeeFrequencyPropertyAwareTrait;
    use ConsumptionPricingTypePropertyAwareTrait;
    use RevenueShareTypePropertyAwareTrait;
    use StartTimePropertyAwareTrait;
    use EndTimePropertyAwareTrait;
    use DisplayNamePropertyAwareTrait;
    use ApiXProductPropertyAwareTrait;
    use NamePropertyAwareTrait;

    /**
     * Value of "monetizationPackage" from the API response.
     *
     * It can be null when a new rate plan is created.
     *
     * @var \Apigee\Edge\Api\Monetization\Entity\ApiXProduct|null
     */
    protected $package;

    /** @var bool */
    protected $published = false;

    /** @var \Apigee\Edge\Api\Monetization\Structure\RatePlanXFee[] */
    protected $ratePlanXFee = [];

    /** @var \Apigee\Edge\Api\Monetization\Structure\FixedRecurringFee[] */
    protected $fixedRecurringFee = [];

    /** @var \Apigee\Edge\Api\Monetization\Structure\ConsumptionPricingRates[] */
    protected $consumptionPricingRates = [];

    /** @var \Apigee\Edge\Api\Monetization\Structure\RevenueShareRates[] */
    protected $revenueShareRates = [];

    /**
     * @inheritdoc
     */
    public function getFrequencyDuration(): ?int
    {
        return $this->frequencyDuration;
    }

    /**
     * @inheritdoc
     */
    public function setFrequencyDuration(int $frequencyDuration): void
    {
        $this->frequencyDuration = $frequencyDuration;
    }

    /**
     * @inheritdoc
     */
    public function getFrequencyDurationType(): ?string
    {
        return $this->frequencyDurationType;
    }

    /**
     * @inheritdoc
     */
    public function setFrequencyDurationType(string $frequencyDurationType): void
    {
        $this->frequencyDurationType = $frequencyDurationType;
    }

    /**
     * @inheritdoc
     */
    public function getPackage(): ?ApiXProductInterface
    {
        return $this->package;
    }

    /**
     * @inheritdoc
     */
    public function setPackage(ApiXProductInterface $package): void
    {
        $this->package = $package;
    }

    /**
     * @inheritdoc
     */
    public function isPublished(): bool
    {
        return $this->published;
    }

    /**
     * @inheritdoc
     */
    public function setPublished(bool $published): void
    {
        $this->published = $published;
    }

    /**
     * @inheritdoc
     */
    public function getRatePlanXFee(): array
    {
        return $this->ratePlanXFee;
    }

    /**
     * @inheritdoc
     */
    public function setRatePlanXFee(RatePlanXFee ...$ratePlanXFee): void
    {
        $this->ratePlanXFee = $ratePlanXFee;
    }

    /**
     * @inheritdoc
     */
    public function getFixedRecurringFee(): array
    {
        return $this->fixedRecurringFee;
    }

    /**
     * @inheritdoc
     */
    public function setFixedRecurringFee(FixedRecurringFee ...$fixedRecurringFee): void
    {
        $this->fixedRecurringFee = $fixedRecurringFee;
    }

    /**
     * @inheritdoc
     */
    public function getConsumptionPricingRates(): array
    {
        return $this->consumptionPricingRates;
    }

    /**
     * @inheritdoc
     */
    public function setConsumptionPricingRates(ConsumptionPricingRates ...$consumptionPricingRates): void
    {
        $this->consumptionPricingRates = $consumptionPricingRates;
    }

    /**
     * @inheritdoc
     */
    public function getRevenueShareRates(): array
    {
        return $this->revenueShareRates;
    }

    /**
     * @inheritdoc
     */
    public function setRevenueShareRates(RevenueShareRates ...$revenueShareRates): void
    {
        $this->revenueShareRates = $revenueShareRates;
    }
}
