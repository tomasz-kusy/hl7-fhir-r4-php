<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing InsurancePlanCoverageType
 *
 * Details of a Health Insurance product/plan provided by an organization.
 * XSD Type: InsurancePlan.Coverage
 */
class InsurancePlanCoverageType extends BackboneElementType
{

    /**
     * Type of coverage (Medical; Dental; Mental Health; Substance Abuse; Vision; Drug; Short Term; Long Term Care; Hospice; Home Health).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Reference to the network that providing the type of coverage.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $network
     */
    private $network = [
        
    ];

    /**
     * Specific benefits under this type of coverage.
     *
     * @var \TKusy\Hl7FhirR4\InsurancePlanBenefitType[] $benefit
     */
    private $benefit = [
        
    ];

    /**
     * Gets as type
     *
     * Type of coverage (Medical; Dental; Mental Health; Substance Abuse; Vision; Drug; Short Term; Long Term Care; Hospice; Home Health).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of coverage (Medical; Dental; Mental Health; Substance Abuse; Vision; Drug; Short Term; Long Term Care; Hospice; Home Health).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as network
     *
     * Reference to the network that providing the type of coverage.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $network
     */
    public function addToNetwork(\TKusy\Hl7FhirR4\ReferenceType $network)
    {
        $this->network[] = $network;
        return $this;
    }

    /**
     * isset network
     *
     * Reference to the network that providing the type of coverage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNetwork($index)
    {
        return isset($this->network[$index]);
    }

    /**
     * unset network
     *
     * Reference to the network that providing the type of coverage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNetwork($index)
    {
        unset($this->network[$index]);
    }

    /**
     * Gets as network
     *
     * Reference to the network that providing the type of coverage.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets a new network
     *
     * Reference to the network that providing the type of coverage.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $network
     * @return self
     */
    public function setNetwork(array $network)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * Adds as benefit
     *
     * Specific benefits under this type of coverage.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\InsurancePlanBenefitType $benefit
     */
    public function addToBenefit(\TKusy\Hl7FhirR4\InsurancePlanBenefitType $benefit)
    {
        $this->benefit[] = $benefit;
        return $this;
    }

    /**
     * isset benefit
     *
     * Specific benefits under this type of coverage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBenefit($index)
    {
        return isset($this->benefit[$index]);
    }

    /**
     * unset benefit
     *
     * Specific benefits under this type of coverage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBenefit($index)
    {
        unset($this->benefit[$index]);
    }

    /**
     * Gets as benefit
     *
     * Specific benefits under this type of coverage.
     *
     * @return \TKusy\Hl7FhirR4\InsurancePlanBenefitType[]
     */
    public function getBenefit()
    {
        return $this->benefit;
    }

    /**
     * Sets a new benefit
     *
     * Specific benefits under this type of coverage.
     *
     * @param \TKusy\Hl7FhirR4\InsurancePlanBenefitType[] $benefit
     * @return self
     */
    public function setBenefit(array $benefit)
    {
        $this->benefit = $benefit;
        return $this;
    }


}

