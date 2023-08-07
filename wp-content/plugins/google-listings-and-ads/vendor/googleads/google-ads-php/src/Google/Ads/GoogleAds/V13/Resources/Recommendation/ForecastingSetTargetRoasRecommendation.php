<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V13\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The forecasting set target ROAS recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.Recommendation.ForecastingSetTargetRoasRecommendation</code>
 */
class ForecastingSetTargetRoasRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The recommended target ROAS (revenue per unit of spend).
     * The value is between 0.01 and 1000.0, inclusive.
     *
     * Generated from protobuf field <code>double recommended_target_roas = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_target_roas = 0.0;
    /**
     * Output only. The campaign budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.Recommendation.CampaignBudget campaign_budget = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $campaign_budget = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $recommended_target_roas
     *           Output only. The recommended target ROAS (revenue per unit of spend).
     *           The value is between 0.01 and 1000.0, inclusive.
     *     @type \Google\Ads\GoogleAds\V13\Resources\Recommendation\CampaignBudget $campaign_budget
     *           Output only. The campaign budget.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The recommended target ROAS (revenue per unit of spend).
     * The value is between 0.01 and 1000.0, inclusive.
     *
     * Generated from protobuf field <code>double recommended_target_roas = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getRecommendedTargetRoas()
    {
        return $this->recommended_target_roas;
    }

    /**
     * Output only. The recommended target ROAS (revenue per unit of spend).
     * The value is between 0.01 and 1000.0, inclusive.
     *
     * Generated from protobuf field <code>double recommended_target_roas = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setRecommendedTargetRoas($var)
    {
        GPBUtil::checkDouble($var);
        $this->recommended_target_roas = $var;

        return $this;
    }

    /**
     * Output only. The campaign budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.Recommendation.CampaignBudget campaign_budget = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V13\Resources\Recommendation\CampaignBudget|null
     */
    public function getCampaignBudget()
    {
        return $this->campaign_budget;
    }

    public function hasCampaignBudget()
    {
        return isset($this->campaign_budget);
    }

    public function clearCampaignBudget()
    {
        unset($this->campaign_budget);
    }

    /**
     * Output only. The campaign budget.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.Recommendation.CampaignBudget campaign_budget = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V13\Resources\Recommendation\CampaignBudget $var
     * @return $this
     */
    public function setCampaignBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Resources\Recommendation\CampaignBudget::class);
        $this->campaign_budget = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ForecastingSetTargetRoasRecommendation::class, \Google\Ads\GoogleAds\V13\Resources\Recommendation_ForecastingSetTargetRoasRecommendation::class);
