<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ClaimItemType
 *
 * A provider issued list of professional services and products which have been provided, or are to be provided, to a patient which is sent to an insurer for reimbursement.
 * XSD Type: Claim.Item
 */
class ClaimItemType extends BackboneElementType
{

    /**
     * A number to uniquely identify item entries.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * CareTeam members related to this service or product.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType[] $careTeamSequence
     */
    private $careTeamSequence = [
        
    ];

    /**
     * Diagnosis applicable for this service or product.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType[] $diagnosisSequence
     */
    private $diagnosisSequence = [
        
    ];

    /**
     * Procedures applicable for this service or product.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType[] $procedureSequence
     */
    private $procedureSequence = [
        
    ];

    /**
     * Exceptions, special conditions and supporting information applicable for this service or product.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType[] $informationSequence
     */
    private $informationSequence = [
        
    ];

    /**
     * The type of revenue or cost center providing the product and/or service.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $revenue
     */
    private $revenue = null;

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * When the value is a group code then this item collects a set of related claim details, otherwise this contains the product, service, drug or other billing code for the item.
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
     * Identifies the program under which this may be recovered.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $programCode
     */
    private $programCode = [
        
    ];

    /**
     * The date or dates when the service or product was supplied, performed or completed. (choose any one of serviced*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $servicedDate
     */
    private $servicedDate = null;

    /**
     * The date or dates when the service or product was supplied, performed or completed. (choose any one of serviced*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $servicedPeriod
     */
    private $servicedPeriod = null;

    /**
     * Where the product or service was provided. (choose any one of location*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $locationCodeableConcept
     */
    private $locationCodeableConcept = null;

    /**
     * Where the product or service was provided. (choose any one of location*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AddressType $locationAddress
     */
    private $locationAddress = null;

    /**
     * Where the product or service was provided. (choose any one of location*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $locationReference
     */
    private $locationReference = null;

    /**
     * The number of repetitions of a service or product.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $unitPrice
     */
    private $unitPrice = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $factor
     */
    private $factor = null;

    /**
     * The quantity times the unit price for an additional service or product or charge.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $net
     */
    private $net = null;

    /**
     * Unique Device Identifiers associated with this line item.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $udi
     */
    private $udi = [
        
    ];

    /**
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $bodySite
     */
    private $bodySite = null;

    /**
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $subSite
     */
    private $subSite = [
        
    ];

    /**
     * The Encounters during which this Claim was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $encounter
     */
    private $encounter = [
        
    ];

    /**
     * A claim detail line. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @var \TKusy\Hl7FhirR4\ClaimDetailType[] $detail
     */
    private $detail = [
        
    ];

    /**
     * Gets as sequence
     *
     * A number to uniquely identify item entries.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * A number to uniquely identify item entries.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7FhirR4\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Adds as careTeamSequence
     *
     * CareTeam members related to this service or product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PositiveIntType $careTeamSequence
     */
    public function addToCareTeamSequence(\TKusy\Hl7FhirR4\PositiveIntType $careTeamSequence)
    {
        $this->careTeamSequence[] = $careTeamSequence;
        return $this;
    }

    /**
     * isset careTeamSequence
     *
     * CareTeam members related to this service or product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCareTeamSequence($index)
    {
        return isset($this->careTeamSequence[$index]);
    }

    /**
     * unset careTeamSequence
     *
     * CareTeam members related to this service or product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCareTeamSequence($index)
    {
        unset($this->careTeamSequence[$index]);
    }

    /**
     * Gets as careTeamSequence
     *
     * CareTeam members related to this service or product.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType[]
     */
    public function getCareTeamSequence()
    {
        return $this->careTeamSequence;
    }

    /**
     * Sets a new careTeamSequence
     *
     * CareTeam members related to this service or product.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType[] $careTeamSequence
     * @return self
     */
    public function setCareTeamSequence(array $careTeamSequence)
    {
        $this->careTeamSequence = $careTeamSequence;
        return $this;
    }

    /**
     * Adds as diagnosisSequence
     *
     * Diagnosis applicable for this service or product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PositiveIntType $diagnosisSequence
     */
    public function addToDiagnosisSequence(\TKusy\Hl7FhirR4\PositiveIntType $diagnosisSequence)
    {
        $this->diagnosisSequence[] = $diagnosisSequence;
        return $this;
    }

    /**
     * isset diagnosisSequence
     *
     * Diagnosis applicable for this service or product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiagnosisSequence($index)
    {
        return isset($this->diagnosisSequence[$index]);
    }

    /**
     * unset diagnosisSequence
     *
     * Diagnosis applicable for this service or product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiagnosisSequence($index)
    {
        unset($this->diagnosisSequence[$index]);
    }

    /**
     * Gets as diagnosisSequence
     *
     * Diagnosis applicable for this service or product.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType[]
     */
    public function getDiagnosisSequence()
    {
        return $this->diagnosisSequence;
    }

    /**
     * Sets a new diagnosisSequence
     *
     * Diagnosis applicable for this service or product.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType[] $diagnosisSequence
     * @return self
     */
    public function setDiagnosisSequence(array $diagnosisSequence)
    {
        $this->diagnosisSequence = $diagnosisSequence;
        return $this;
    }

    /**
     * Adds as procedureSequence
     *
     * Procedures applicable for this service or product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PositiveIntType $procedureSequence
     */
    public function addToProcedureSequence(\TKusy\Hl7FhirR4\PositiveIntType $procedureSequence)
    {
        $this->procedureSequence[] = $procedureSequence;
        return $this;
    }

    /**
     * isset procedureSequence
     *
     * Procedures applicable for this service or product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcedureSequence($index)
    {
        return isset($this->procedureSequence[$index]);
    }

    /**
     * unset procedureSequence
     *
     * Procedures applicable for this service or product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcedureSequence($index)
    {
        unset($this->procedureSequence[$index]);
    }

    /**
     * Gets as procedureSequence
     *
     * Procedures applicable for this service or product.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType[]
     */
    public function getProcedureSequence()
    {
        return $this->procedureSequence;
    }

    /**
     * Sets a new procedureSequence
     *
     * Procedures applicable for this service or product.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType[] $procedureSequence
     * @return self
     */
    public function setProcedureSequence(array $procedureSequence)
    {
        $this->procedureSequence = $procedureSequence;
        return $this;
    }

    /**
     * Adds as informationSequence
     *
     * Exceptions, special conditions and supporting information applicable for this service or product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PositiveIntType $informationSequence
     */
    public function addToInformationSequence(\TKusy\Hl7FhirR4\PositiveIntType $informationSequence)
    {
        $this->informationSequence[] = $informationSequence;
        return $this;
    }

    /**
     * isset informationSequence
     *
     * Exceptions, special conditions and supporting information applicable for this service or product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformationSequence($index)
    {
        return isset($this->informationSequence[$index]);
    }

    /**
     * unset informationSequence
     *
     * Exceptions, special conditions and supporting information applicable for this service or product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformationSequence($index)
    {
        unset($this->informationSequence[$index]);
    }

    /**
     * Gets as informationSequence
     *
     * Exceptions, special conditions and supporting information applicable for this service or product.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType[]
     */
    public function getInformationSequence()
    {
        return $this->informationSequence;
    }

    /**
     * Sets a new informationSequence
     *
     * Exceptions, special conditions and supporting information applicable for this service or product.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType[] $informationSequence
     * @return self
     */
    public function setInformationSequence(array $informationSequence)
    {
        $this->informationSequence = $informationSequence;
        return $this;
    }

    /**
     * Gets as revenue
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Sets a new revenue
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $revenue
     * @return self
     */
    public function setRevenue(\TKusy\Hl7FhirR4\CodeableConceptType $revenue)
    {
        $this->revenue = $revenue;
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
     * When the value is a group code then this item collects a set of related claim details, otherwise this contains the product, service, drug or other billing code for the item.
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
     * When the value is a group code then this item collects a set of related claim details, otherwise this contains the product, service, drug or other billing code for the item.
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
     * Adds as programCode
     *
     * Identifies the program under which this may be recovered.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $programCode
     */
    public function addToProgramCode(\TKusy\Hl7FhirR4\CodeableConceptType $programCode)
    {
        $this->programCode[] = $programCode;
        return $this;
    }

    /**
     * isset programCode
     *
     * Identifies the program under which this may be recovered.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgramCode($index)
    {
        return isset($this->programCode[$index]);
    }

    /**
     * unset programCode
     *
     * Identifies the program under which this may be recovered.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgramCode($index)
    {
        unset($this->programCode[$index]);
    }

    /**
     * Gets as programCode
     *
     * Identifies the program under which this may be recovered.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getProgramCode()
    {
        return $this->programCode;
    }

    /**
     * Sets a new programCode
     *
     * Identifies the program under which this may be recovered.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $programCode
     * @return self
     */
    public function setProgramCode(array $programCode)
    {
        $this->programCode = $programCode;
        return $this;
    }

    /**
     * Gets as servicedDate
     *
     * The date or dates when the service or product was supplied, performed or completed. (choose any one of serviced*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getServicedDate()
    {
        return $this->servicedDate;
    }

    /**
     * Sets a new servicedDate
     *
     * The date or dates when the service or product was supplied, performed or completed. (choose any one of serviced*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateType $servicedDate
     * @return self
     */
    public function setServicedDate(\TKusy\Hl7FhirR4\DateType $servicedDate)
    {
        $this->servicedDate = $servicedDate;
        return $this;
    }

    /**
     * Gets as servicedPeriod
     *
     * The date or dates when the service or product was supplied, performed or completed. (choose any one of serviced*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getServicedPeriod()
    {
        return $this->servicedPeriod;
    }

    /**
     * Sets a new servicedPeriod
     *
     * The date or dates when the service or product was supplied, performed or completed. (choose any one of serviced*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $servicedPeriod
     * @return self
     */
    public function setServicedPeriod(\TKusy\Hl7FhirR4\PeriodType $servicedPeriod)
    {
        $this->servicedPeriod = $servicedPeriod;
        return $this;
    }

    /**
     * Gets as locationCodeableConcept
     *
     * Where the product or service was provided. (choose any one of location*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getLocationCodeableConcept()
    {
        return $this->locationCodeableConcept;
    }

    /**
     * Sets a new locationCodeableConcept
     *
     * Where the product or service was provided. (choose any one of location*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $locationCodeableConcept
     * @return self
     */
    public function setLocationCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $locationCodeableConcept)
    {
        $this->locationCodeableConcept = $locationCodeableConcept;
        return $this;
    }

    /**
     * Gets as locationAddress
     *
     * Where the product or service was provided. (choose any one of location*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AddressType
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * Sets a new locationAddress
     *
     * Where the product or service was provided. (choose any one of location*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AddressType $locationAddress
     * @return self
     */
    public function setLocationAddress(\TKusy\Hl7FhirR4\AddressType $locationAddress)
    {
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * Gets as locationReference
     *
     * Where the product or service was provided. (choose any one of location*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getLocationReference()
    {
        return $this->locationReference;
    }

    /**
     * Sets a new locationReference
     *
     * Where the product or service was provided. (choose any one of location*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $locationReference
     * @return self
     */
    public function setLocationReference(\TKusy\Hl7FhirR4\ReferenceType $locationReference)
    {
        $this->locationReference = $locationReference;
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
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
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
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
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
     * Gets as factor
     *
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Sets a new factor
     *
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @param \TKusy\Hl7FhirR4\DecimalType $factor
     * @return self
     */
    public function setFactor(\TKusy\Hl7FhirR4\DecimalType $factor)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * Gets as net
     *
     * The quantity times the unit price for an additional service or product or charge.
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * Sets a new net
     *
     * The quantity times the unit price for an additional service or product or charge.
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $net
     * @return self
     */
    public function setNet(\TKusy\Hl7FhirR4\MoneyType $net)
    {
        $this->net = $net;
        return $this;
    }

    /**
     * Adds as udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $udi
     */
    public function addToUdi(\TKusy\Hl7FhirR4\ReferenceType $udi)
    {
        $this->udi[] = $udi;
        return $this;
    }

    /**
     * isset udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUdi($index)
    {
        return isset($this->udi[$index]);
    }

    /**
     * unset udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUdi($index)
    {
        unset($this->udi[$index]);
    }

    /**
     * Gets as udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getUdi()
    {
        return $this->udi;
    }

    /**
     * Sets a new udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $udi
     * @return self
     */
    public function setUdi(array $udi)
    {
        $this->udi = $udi;
        return $this;
    }

    /**
     * Gets as bodySite
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $bodySite
     * @return self
     */
    public function setBodySite(\TKusy\Hl7FhirR4\CodeableConceptType $bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Adds as subSite
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $subSite
     */
    public function addToSubSite(\TKusy\Hl7FhirR4\CodeableConceptType $subSite)
    {
        $this->subSite[] = $subSite;
        return $this;
    }

    /**
     * isset subSite
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubSite($index)
    {
        return isset($this->subSite[$index]);
    }

    /**
     * unset subSite
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubSite($index)
    {
        unset($this->subSite[$index]);
    }

    /**
     * Gets as subSite
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getSubSite()
    {
        return $this->subSite;
    }

    /**
     * Sets a new subSite
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $subSite
     * @return self
     */
    public function setSubSite(array $subSite)
    {
        $this->subSite = $subSite;
        return $this;
    }

    /**
     * Adds as encounter
     *
     * The Encounters during which this Claim was created or to which the creation of this record is tightly associated.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    public function addToEncounter(\TKusy\Hl7FhirR4\ReferenceType $encounter)
    {
        $this->encounter[] = $encounter;
        return $this;
    }

    /**
     * isset encounter
     *
     * The Encounters during which this Claim was created or to which the creation of this record is tightly associated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncounter($index)
    {
        return isset($this->encounter[$index]);
    }

    /**
     * unset encounter
     *
     * The Encounters during which this Claim was created or to which the creation of this record is tightly associated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncounter($index)
    {
        unset($this->encounter[$index]);
    }

    /**
     * Gets as encounter
     *
     * The Encounters during which this Claim was created or to which the creation of this record is tightly associated.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The Encounters during which this Claim was created or to which the creation of this record is tightly associated.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $encounter
     * @return self
     */
    public function setEncounter(array $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Adds as detail
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ClaimDetailType $detail
     */
    public function addToDetail(\TKusy\Hl7FhirR4\ClaimDetailType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
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
     * A claim detail line. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
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
     * A claim detail line. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @return \TKusy\Hl7FhirR4\ClaimDetailType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @param \TKusy\Hl7FhirR4\ClaimDetailType[] $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;
        return $this;
    }


}

