<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CoverageEligibilityResponseInsuranceType
 *
 * This resource provides eligibility and plan details from the processing of an CoverageEligibilityRequest resource.
 * XSD Type: CoverageEligibilityResponse.Insurance
 */
class CoverageEligibilityResponseInsuranceType extends BackboneElementType
{

    /**
     * Reference to the insurance card level information contained in the Coverage resource. The coverage issuing insurer will use these details to locate the patient's actual coverage within the insurer's information system.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $coverage
     */
    private $coverage = null;

    /**
     * Flag indicating if the coverage provided is inforce currently if no service date(s) specified or for the whole duration of the service dates.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $inforce
     */
    private $inforce = null;

    /**
     * The term of the benefits documented in this response.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $benefitPeriod
     */
    private $benefitPeriod = null;

    /**
     * Benefits and optionally current balances, and authorization details by category or service.
     *
     * @var \TKusy\Hl7Fhir\R5\CoverageEligibilityResponseItemType[] $item
     */
    private $item = null;

    /**
     * Gets as coverage
     *
     * Reference to the insurance card level information contained in the Coverage resource. The coverage issuing insurer will use these details to locate the patient's actual coverage within the insurer's information system.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Sets a new coverage
     *
     * Reference to the insurance card level information contained in the Coverage resource. The coverage issuing insurer will use these details to locate the patient's actual coverage within the insurer's information system.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $coverage
     * @return self
     */
    public function setCoverage(\TKusy\Hl7Fhir\R5\ReferenceType $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Gets as inforce
     *
     * Flag indicating if the coverage provided is inforce currently if no service date(s) specified or for the whole duration of the service dates.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getInforce()
    {
        return $this->inforce;
    }

    /**
     * Sets a new inforce
     *
     * Flag indicating if the coverage provided is inforce currently if no service date(s) specified or for the whole duration of the service dates.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $inforce
     * @return self
     */
    public function setInforce(?\TKusy\Hl7Fhir\R5\BooleanType $inforce = null)
    {
        $this->inforce = $inforce;
        return $this;
    }

    /**
     * Gets as benefitPeriod
     *
     * The term of the benefits documented in this response.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getBenefitPeriod()
    {
        return $this->benefitPeriod;
    }

    /**
     * Sets a new benefitPeriod
     *
     * The term of the benefits documented in this response.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $benefitPeriod
     * @return self
     */
    public function setBenefitPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $benefitPeriod = null)
    {
        $this->benefitPeriod = $benefitPeriod;
        return $this;
    }

    /**
     * Adds as item
     *
     * Benefits and optionally current balances, and authorization details by category or service.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CoverageEligibilityResponseItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R5\CoverageEligibilityResponseItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * Benefits and optionally current balances, and authorization details by category or service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * Benefits and optionally current balances, and authorization details by category or service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * Benefits and optionally current balances, and authorization details by category or service.
     *
     * @return \TKusy\Hl7Fhir\R5\CoverageEligibilityResponseItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Benefits and optionally current balances, and authorization details by category or service.
     *
     * @param \TKusy\Hl7Fhir\R5\CoverageEligibilityResponseItemType[] $item
     * @return self
     */
    public function setItem(array $item = null)
    {
        $this->item = $item;
        return $this;
    }


}

