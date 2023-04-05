<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $traceNumber
     */
    private $traceNumber = null;

    /**
     * CareTeam members related to this service or product.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType[] $careTeamSequence
     */
    private $careTeamSequence = null;

    /**
     * Diagnosis applicable for this service or product.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType[] $diagnosisSequence
     */
    private $diagnosisSequence = null;

    /**
     * Procedures applicable for this service or product.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType[] $procedureSequence
     */
    private $procedureSequence = null;

    /**
     * Exceptions, special conditions and supporting information applicable for this service or product.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType[] $informationSequence
     */
    private $informationSequence = null;

    /**
     * The type of revenue or cost center providing the product and/or service.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $revenue
     */
    private $revenue = null;

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    private $category = null;

    /**
     * When the value is a group code then this item collects a set of related item details, otherwise this contains the product, service, drug or other billing code for the item. This element may be the start of a range of .productOrService codes used in conjunction with .productOrServiceEnd or it may be a solo element where .productOrServiceEnd is not used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $productOrService
     */
    private $productOrService = null;

    /**
     * This contains the end of a range of product, service, drug or other billing codes for the item. This element is not used when the .productOrService is a group code. This value may only be present when a .productOfService code has been provided to convey the start of the range. Typically this value may be used only with preauthorizations and not with claims.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $productOrServiceEnd
     */
    private $productOrServiceEnd = null;

    /**
     * Request or Referral for Goods or Service to be rendered.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $request
     */
    private $request = null;

    /**
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $modifier
     */
    private $modifier = null;

    /**
     * Identifies the program under which this may be recovered.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $programCode
     */
    private $programCode = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateType $servicedDate
     */
    private $servicedDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $servicedPeriod
     */
    private $servicedPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $locationCodeableConcept
     */
    private $locationCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AddressType $locationAddress
     */
    private $locationAddress = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $locationReference
     */
    private $locationReference = null;

    /**
     * The amount paid by the patient, in total at the claim claim level or specifically for the item and detail level, to the provider for goods and services.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $patientPaid
     */
    private $patientPaid = null;

    /**
     * The number of repetitions of a service or product.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $unitPrice
     */
    private $unitPrice = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $factor
     */
    private $factor = null;

    /**
     * The total of taxes applicable for this product or service.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $tax
     */
    private $tax = null;

    /**
     * The total amount claimed for the group (if a grouper) or the line item. Net = unit price * quantity * factor.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $net
     */
    private $net = null;

    /**
     * Unique Device Identifiers associated with this line item.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $udi
     */
    private $udi = null;

    /**
     * Physical location where the service is performed or applies.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimBodySiteType[] $bodySite
     */
    private $bodySite = null;

    /**
     * Healthcare encounters related to this claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $encounter
     */
    private $encounter = null;

    /**
     * A claim detail line. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimDetailType[] $detail
     */
    private $detail = null;

    /**
     * Gets as sequence
     *
     * A number to uniquely identify item entries.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
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
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Adds as traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $traceNumber
     */
    public function addToTraceNumber(\TKusy\Hl7Fhir\R5\IdentifierType $traceNumber)
    {
        $this->traceNumber[] = $traceNumber;
        return $this;
    }

    /**
     * isset traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTraceNumber($index)
    {
        return isset($this->traceNumber[$index]);
    }

    /**
     * unset traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTraceNumber($index)
    {
        unset($this->traceNumber[$index]);
    }

    /**
     * Gets as traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getTraceNumber()
    {
        return $this->traceNumber;
    }

    /**
     * Sets a new traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $traceNumber
     * @return self
     */
    public function setTraceNumber(array $traceNumber = null)
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * Adds as careTeamSequence
     *
     * CareTeam members related to this service or product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $careTeamSequence
     */
    public function addToCareTeamSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $careTeamSequence)
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
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType[]
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
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType[] $careTeamSequence
     * @return self
     */
    public function setCareTeamSequence(array $careTeamSequence = null)
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
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $diagnosisSequence
     */
    public function addToDiagnosisSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $diagnosisSequence)
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
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType[]
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
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType[] $diagnosisSequence
     * @return self
     */
    public function setDiagnosisSequence(array $diagnosisSequence = null)
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
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $procedureSequence
     */
    public function addToProcedureSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $procedureSequence)
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
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType[]
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
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType[] $procedureSequence
     * @return self
     */
    public function setProcedureSequence(array $procedureSequence = null)
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
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $informationSequence
     */
    public function addToInformationSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $informationSequence)
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
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType[]
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
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType[] $informationSequence
     * @return self
     */
    public function setInformationSequence(array $informationSequence = null)
    {
        $this->informationSequence = $informationSequence;
        return $this;
    }

    /**
     * Gets as revenue
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $revenue
     * @return self
     */
    public function setRevenue(?\TKusy\Hl7Fhir\R5\CodeableConceptType $revenue = null)
    {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * Gets as category
     *
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     * @return self
     */
    public function setCategory(?\TKusy\Hl7Fhir\R5\CodeableConceptType $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as productOrService
     *
     * When the value is a group code then this item collects a set of related item details, otherwise this contains the product, service, drug or other billing code for the item. This element may be the start of a range of .productOrService codes used in conjunction with .productOrServiceEnd or it may be a solo element where .productOrServiceEnd is not used.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getProductOrService()
    {
        return $this->productOrService;
    }

    /**
     * Sets a new productOrService
     *
     * When the value is a group code then this item collects a set of related item details, otherwise this contains the product, service, drug or other billing code for the item. This element may be the start of a range of .productOrService codes used in conjunction with .productOrServiceEnd or it may be a solo element where .productOrServiceEnd is not used.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $productOrService
     * @return self
     */
    public function setProductOrService(?\TKusy\Hl7Fhir\R5\CodeableConceptType $productOrService = null)
    {
        $this->productOrService = $productOrService;
        return $this;
    }

    /**
     * Gets as productOrServiceEnd
     *
     * This contains the end of a range of product, service, drug or other billing codes for the item. This element is not used when the .productOrService is a group code. This value may only be present when a .productOfService code has been provided to convey the start of the range. Typically this value may be used only with preauthorizations and not with claims.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getProductOrServiceEnd()
    {
        return $this->productOrServiceEnd;
    }

    /**
     * Sets a new productOrServiceEnd
     *
     * This contains the end of a range of product, service, drug or other billing codes for the item. This element is not used when the .productOrService is a group code. This value may only be present when a .productOfService code has been provided to convey the start of the range. Typically this value may be used only with preauthorizations and not with claims.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $productOrServiceEnd
     * @return self
     */
    public function setProductOrServiceEnd(?\TKusy\Hl7Fhir\R5\CodeableConceptType $productOrServiceEnd = null)
    {
        $this->productOrServiceEnd = $productOrServiceEnd;
        return $this;
    }

    /**
     * Adds as request
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $request
     */
    public function addToRequest(\TKusy\Hl7Fhir\R5\ReferenceType $request)
    {
        $this->request[] = $request;
        return $this;
    }

    /**
     * isset request
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequest($index)
    {
        return isset($this->request[$index]);
    }

    /**
     * unset request
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequest($index)
    {
        unset($this->request[$index]);
    }

    /**
     * Gets as request
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * Request or Referral for Goods or Service to be rendered.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $request
     * @return self
     */
    public function setRequest(array $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Adds as modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $modifier
     */
    public function addToModifier(\TKusy\Hl7Fhir\R5\CodeableConceptType $modifier)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $modifier
     * @return self
     */
    public function setModifier(array $modifier = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $programCode
     */
    public function addToProgramCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $programCode)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $programCode
     * @return self
     */
    public function setProgramCode(array $programCode = null)
    {
        $this->programCode = $programCode;
        return $this;
    }

    /**
     * Gets as servicedDate
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getServicedDate()
    {
        return $this->servicedDate;
    }

    /**
     * Sets a new servicedDate
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $servicedDate
     * @return self
     */
    public function setServicedDate(?\TKusy\Hl7Fhir\R5\DateType $servicedDate = null)
    {
        $this->servicedDate = $servicedDate;
        return $this;
    }

    /**
     * Gets as servicedPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getServicedPeriod()
    {
        return $this->servicedPeriod;
    }

    /**
     * Sets a new servicedPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $servicedPeriod
     * @return self
     */
    public function setServicedPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $servicedPeriod = null)
    {
        $this->servicedPeriod = $servicedPeriod;
        return $this;
    }

    /**
     * Gets as locationCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getLocationCodeableConcept()
    {
        return $this->locationCodeableConcept;
    }

    /**
     * Sets a new locationCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $locationCodeableConcept
     * @return self
     */
    public function setLocationCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $locationCodeableConcept = null)
    {
        $this->locationCodeableConcept = $locationCodeableConcept;
        return $this;
    }

    /**
     * Gets as locationAddress
     *
     * @return \TKusy\Hl7Fhir\R5\AddressType
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * Sets a new locationAddress
     *
     * @param \TKusy\Hl7Fhir\R5\AddressType $locationAddress
     * @return self
     */
    public function setLocationAddress(?\TKusy\Hl7Fhir\R5\AddressType $locationAddress = null)
    {
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * Gets as locationReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocationReference()
    {
        return $this->locationReference;
    }

    /**
     * Sets a new locationReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $locationReference
     * @return self
     */
    public function setLocationReference(?\TKusy\Hl7Fhir\R5\ReferenceType $locationReference = null)
    {
        $this->locationReference = $locationReference;
        return $this;
    }

    /**
     * Gets as patientPaid
     *
     * The amount paid by the patient, in total at the claim claim level or specifically for the item and detail level, to the provider for goods and services.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getPatientPaid()
    {
        return $this->patientPaid;
    }

    /**
     * Sets a new patientPaid
     *
     * The amount paid by the patient, in total at the claim claim level or specifically for the item and detail level, to the provider for goods and services.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $patientPaid
     * @return self
     */
    public function setPatientPaid(?\TKusy\Hl7Fhir\R5\MoneyType $patientPaid = null)
    {
        $this->patientPaid = $patientPaid;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The number of repetitions of a service or product.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
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
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as unitPrice
     *
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
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
     * @param \TKusy\Hl7Fhir\R5\MoneyType $unitPrice
     * @return self
     */
    public function setUnitPrice(?\TKusy\Hl7Fhir\R5\MoneyType $unitPrice = null)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Gets as factor
     *
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
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
     * @param \TKusy\Hl7Fhir\R5\DecimalType $factor
     * @return self
     */
    public function setFactor(?\TKusy\Hl7Fhir\R5\DecimalType $factor = null)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * Gets as tax
     *
     * The total of taxes applicable for this product or service.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * The total of taxes applicable for this product or service.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $tax
     * @return self
     */
    public function setTax(?\TKusy\Hl7Fhir\R5\MoneyType $tax = null)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * Gets as net
     *
     * The total amount claimed for the group (if a grouper) or the line item. Net = unit price * quantity * factor.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * Sets a new net
     *
     * The total amount claimed for the group (if a grouper) or the line item. Net = unit price * quantity * factor.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $net
     * @return self
     */
    public function setNet(?\TKusy\Hl7Fhir\R5\MoneyType $net = null)
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $udi
     */
    public function addToUdi(\TKusy\Hl7Fhir\R5\ReferenceType $udi)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $udi
     * @return self
     */
    public function setUdi(array $udi = null)
    {
        $this->udi = $udi;
        return $this;
    }

    /**
     * Adds as bodySite
     *
     * Physical location where the service is performed or applies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimBodySiteType $bodySite
     */
    public function addToBodySite(\TKusy\Hl7Fhir\R5\ClaimBodySiteType $bodySite)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * isset bodySite
     *
     * Physical location where the service is performed or applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBodySite($index)
    {
        return isset($this->bodySite[$index]);
    }

    /**
     * unset bodySite
     *
     * Physical location where the service is performed or applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBodySite($index)
    {
        unset($this->bodySite[$index]);
    }

    /**
     * Gets as bodySite
     *
     * Physical location where the service is performed or applies.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimBodySiteType[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * Physical location where the service is performed or applies.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimBodySiteType[] $bodySite
     * @return self
     */
    public function setBodySite(array $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Adds as encounter
     *
     * Healthcare encounters related to this claim.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    public function addToEncounter(\TKusy\Hl7Fhir\R5\ReferenceType $encounter)
    {
        $this->encounter[] = $encounter;
        return $this;
    }

    /**
     * isset encounter
     *
     * Healthcare encounters related to this claim.
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
     * Healthcare encounters related to this claim.
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
     * Healthcare encounters related to this claim.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * Healthcare encounters related to this claim.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $encounter
     * @return self
     */
    public function setEncounter(array $encounter = null)
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
     * @param \TKusy\Hl7Fhir\R5\ClaimDetailType $detail
     */
    public function addToDetail(\TKusy\Hl7Fhir\R5\ClaimDetailType $detail)
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
     * @return \TKusy\Hl7Fhir\R5\ClaimDetailType[]
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
     * @param \TKusy\Hl7Fhir\R5\ClaimDetailType[] $detail
     * @return self
     */
    public function setDetail(array $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }


}

