<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MarketingStatusType
 *
 * The marketing status describes the date when a medicinal product is actually put on the market or the date as of which it is no longer available.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: MarketingStatus
 */
class MarketingStatusType extends BackboneElementType
{

    /**
     * The country in which the marketing authorisation has been granted shall be specified It should be specified using the ISO 3166 ‑ 1 alpha-2 code elements.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $country
     */
    private $country = null;

    /**
     * Where a Medicines Regulatory Agency has granted a marketing authorisation for which specific provisions within a jurisdiction apply, the jurisdiction can be specified using an appropriate controlled terminology The controlled term and the controlled term identifier shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * This attribute provides information on the status of the marketing of the medicinal product See ISO/TS 20443 for more information and examples.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $status
     */
    private $status = null;

    /**
     * The date when the Medicinal Product is placed on the market by the Marketing Authorisation Holder (or where applicable, the manufacturer/distributor) in a country and/or jurisdiction shall be provided A complete date consisting of day, month and year shall be specified using the ISO 8601 date format NOTE “Placed on the market” refers to the release of the Medicinal Product into the distribution chain.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $dateRange
     */
    private $dateRange = null;

    /**
     * The date when the Medicinal Product is placed on the market by the Marketing Authorisation Holder (or where applicable, the manufacturer/distributor) in a country and/or jurisdiction shall be provided A complete date consisting of day, month and year shall be specified using the ISO 8601 date format NOTE “Placed on the market” refers to the release of the Medicinal Product into the distribution chain.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $restoreDate
     */
    private $restoreDate = null;

    /**
     * Gets as country
     *
     * The country in which the marketing authorisation has been granted shall be specified It should be specified using the ISO 3166 ‑ 1 alpha-2 code elements.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * The country in which the marketing authorisation has been granted shall be specified It should be specified using the ISO 3166 ‑ 1 alpha-2 code elements.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $country
     * @return self
     */
    public function setCountry(\TKusy\Hl7Fhir\R4\CodeableConceptType $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as jurisdiction
     *
     * Where a Medicines Regulatory Agency has granted a marketing authorisation for which specific provisions within a jurisdiction apply, the jurisdiction can be specified using an appropriate controlled terminology The controlled term and the controlled term identifier shall be specified.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * Where a Medicines Regulatory Agency has granted a marketing authorisation for which specific provisions within a jurisdiction apply, the jurisdiction can be specified using an appropriate controlled terminology The controlled term and the controlled term identifier shall be specified.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $jurisdiction
     * @return self
     */
    public function setJurisdiction(\TKusy\Hl7Fhir\R4\CodeableConceptType $jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Gets as status
     *
     * This attribute provides information on the status of the marketing of the medicinal product See ISO/TS 20443 for more information and examples.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * This attribute provides information on the status of the marketing of the medicinal product See ISO/TS 20443 for more information and examples.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as dateRange
     *
     * The date when the Medicinal Product is placed on the market by the Marketing Authorisation Holder (or where applicable, the manufacturer/distributor) in a country and/or jurisdiction shall be provided A complete date consisting of day, month and year shall be specified using the ISO 8601 date format NOTE “Placed on the market” refers to the release of the Medicinal Product into the distribution chain.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets a new dateRange
     *
     * The date when the Medicinal Product is placed on the market by the Marketing Authorisation Holder (or where applicable, the manufacturer/distributor) in a country and/or jurisdiction shall be provided A complete date consisting of day, month and year shall be specified using the ISO 8601 date format NOTE “Placed on the market” refers to the release of the Medicinal Product into the distribution chain.
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $dateRange
     * @return self
     */
    public function setDateRange(\TKusy\Hl7Fhir\R4\PeriodType $dateRange)
    {
        $this->dateRange = $dateRange;
        return $this;
    }

    /**
     * Gets as restoreDate
     *
     * The date when the Medicinal Product is placed on the market by the Marketing Authorisation Holder (or where applicable, the manufacturer/distributor) in a country and/or jurisdiction shall be provided A complete date consisting of day, month and year shall be specified using the ISO 8601 date format NOTE “Placed on the market” refers to the release of the Medicinal Product into the distribution chain.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getRestoreDate()
    {
        return $this->restoreDate;
    }

    /**
     * Sets a new restoreDate
     *
     * The date when the Medicinal Product is placed on the market by the Marketing Authorisation Holder (or where applicable, the manufacturer/distributor) in a country and/or jurisdiction shall be provided A complete date consisting of day, month and year shall be specified using the ISO 8601 date format NOTE “Placed on the market” refers to the release of the Medicinal Product into the distribution chain.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $restoreDate
     * @return self
     */
    public function setRestoreDate(\TKusy\Hl7Fhir\R4\DateTimeType $restoreDate)
    {
        $this->restoreDate = $restoreDate;
        return $this;
    }


}

