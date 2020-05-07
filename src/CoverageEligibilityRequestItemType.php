<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CoverageEligibilityRequestItemType
 *
 * The CoverageEligibilityRequest provides patient and insurance coverage information to an insurer for them to respond, in the form of an CoverageEligibilityResponse, with information regarding whether the stated coverage is valid and in-force and optionally to provide the insurance details of the policy.
 * XSD Type: CoverageEligibilityRequest.Item
 */
class CoverageEligibilityRequestItemType extends BackboneElementType
{

    /**
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType[] $supportingInfoSequence
     */
    private $supportingInfoSequence = [
        
    ];

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * This contains the product, service, drug or other billing code for the item.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $productOrService
     */
    private $productOrService = null;

    /**
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $modifier
     */
    private $modifier = [
        
    ];

    /**
     * The practitioner who is responsible for the product or service to be rendered to the patient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $provider
     */
    private $provider = null;

    /**
     * The number of repetitions of a service or product.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The amount charged to the patient by the provider for a single unit.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $unitPrice
     */
    private $unitPrice = null;

    /**
     * Facility where the services will be provided.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $facility
     */
    private $facility = null;

    /**
     * Patient diagnosis for which care is sought.
     *
     * @var \TKusy\Hl7FhirR4\CoverageEligibilityRequestDiagnosisType[] $diagnosis
     */
    private $diagnosis = [
        
    ];

    /**
     * The plan/proposal/order describing the proposed service in detail.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $detail
     */
    private $detail = [
        
    ];

    /**
     * Adds as supportingInfoSequence
     *
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PositiveIntType $supportingInfoSequence
     */
    public function addToSupportingInfoSequence(\TKusy\Hl7FhirR4\PositiveIntType $supportingInfoSequence)
    {
        $this->supportingInfoSequence[] = $supportingInfoSequence;
        return $this;
    }

    /**
     * isset supportingInfoSequence
     *
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInfoSequence($index)
    {
        return isset($this->supportingInfoSequence[$index]);
    }

    /**
     * unset supportingInfoSequence
     *
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInfoSequence($index)
    {
        unset($this->supportingInfoSequence[$index]);
    }

    /**
     * Gets as supportingInfoSequence
     *
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType[]
     */
    public function getSupportingInfoSequence()
    {
        return $this->supportingInfoSequence;
    }

    /**
     * Sets a new supportingInfoSequence
     *
     * Exceptions, special conditions and supporting information applicable for this service or product line.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType[] $supportingInfoSequence
     * @return self
     */
    public function setSupportingInfoSequence(array $supportingInfoSequence)
    {
        $this->supportingInfoSequence = $supportingInfoSequence;
        return $this;
    }

    /**
     * Gets as category
     *
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as productOrService
     *
     * This contains the product, service, drug or other billing code for the item.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getProductOrService()
    {
        return $this->productOrService;
    }

    /**
     * Sets a new productOrService
     *
     * This contains the product, service, drug or other billing code for the item.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $productOrService
     * @return self
     */
    public function setProductOrService(\TKusy\Hl7FhirR4\CodeableConceptType $productOrService)
    {
        $this->productOrService = $productOrService;
        return $this;
    }

    /**
     * Adds as modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $modifier
     */
    public function addToModifier(\TKusy\Hl7FhirR4\CodeableConceptType $modifier)
    {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * isset modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModifier($index)
    {
        return isset($this->modifier[$index]);
    }

    /**
     * unset modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModifier($index)
    {
        unset($this->modifier[$index]);
    }

    /**
     * Gets as modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Sets a new modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $modifier
     * @return self
     */
    public function setModifier(array $modifier)
    {
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * Gets as provider
     *
     * The practitioner who is responsible for the product or service to be rendered to the patient.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * The practitioner who is responsible for the product or service to be rendered to the patient.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $provider
     * @return self
     */
    public function setProvider(\TKusy\Hl7FhirR4\ReferenceType $provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The number of repetitions of a service or product.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The number of repetitions of a service or product.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as unitPrice
     *
     * The amount charged to the patient by the provider for a single unit.
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets a new unitPrice
     *
     * The amount charged to the patient by the provider for a single unit.
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $unitPrice
     * @return self
     */
    public function setUnitPrice(\TKusy\Hl7FhirR4\MoneyType $unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Gets as facility
     *
     * Facility where the services will be provided.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Sets a new facility
     *
     * Facility where the services will be provided.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $facility
     * @return self
     */
    public function setFacility(\TKusy\Hl7FhirR4\ReferenceType $facility)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * Adds as diagnosis
     *
     * Patient diagnosis for which care is sought.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityRequestDiagnosisType $diagnosis
     */
    public function addToDiagnosis(\TKusy\Hl7FhirR4\CoverageEligibilityRequestDiagnosisType $diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * isset diagnosis
     *
     * Patient diagnosis for which care is sought.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiagnosis($index)
    {
        return isset($this->diagnosis[$index]);
    }

    /**
     * unset diagnosis
     *
     * Patient diagnosis for which care is sought.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiagnosis($index)
    {
        unset($this->diagnosis[$index]);
    }

    /**
     * Gets as diagnosis
     *
     * Patient diagnosis for which care is sought.
     *
     * @return \TKusy\Hl7FhirR4\CoverageEligibilityRequestDiagnosisType[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Sets a new diagnosis
     *
     * Patient diagnosis for which care is sought.
     *
     * @param \TKusy\Hl7FhirR4\CoverageEligibilityRequestDiagnosisType[] $diagnosis
     * @return self
     */
    public function setDiagnosis(array $diagnosis)
    {
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * Adds as detail
     *
     * The plan/proposal/order describing the proposed service in detail.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $detail
     */
    public function addToDetail(\TKusy\Hl7FhirR4\ReferenceType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * The plan/proposal/order describing the proposed service in detail.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * The plan/proposal/order describing the proposed service in detail.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * The plan/proposal/order describing the proposed service in detail.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * The plan/proposal/order describing the proposed service in detail.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;
        return $this;
    }


}

