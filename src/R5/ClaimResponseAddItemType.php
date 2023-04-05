<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClaimResponseAddItemType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * XSD Type: ClaimResponse.AddItem
 */
class ClaimResponseAddItemType extends BackboneElementType
{

    /**
     * Claim items which this service line is intended to replace.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType[] $itemSequence
     */
    private $itemSequence = null;

    /**
     * The sequence number of the details within the claim item which this line is intended to replace.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType[] $detailSequence
     */
    private $detailSequence = null;

    /**
     * The sequence number of the sub-details within the details within the claim item which this line is intended to replace.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType[] $subdetailSequence
     */
    private $subdetailSequence = null;

    /**
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $traceNumber
     */
    private $traceNumber = null;

    /**
     * The providers who are authorized for the services rendered to the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $provider
     */
    private $provider = null;

    /**
     * The type of revenue or cost center providing the product and/or service.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $revenue
     */
    private $revenue = null;

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
     * The total amount claimed for the group (if a grouper) or the addItem. Net = unit price * quantity * factor.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $net
     */
    private $net = null;

    /**
     * Physical location where the service is performed or applies.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseBodySiteType[] $bodySite
     */
    private $bodySite = null;

    /**
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType[] $noteNumber
     */
    private $noteNumber = null;

    /**
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseReviewOutcomeType $reviewOutcome
     */
    private $reviewOutcome = null;

    /**
     * The adjudication results.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType[] $adjudication
     */
    private $adjudication = null;

    /**
     * The second-tier service adjudications for payor added services.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseDetail1Type[] $detail
     */
    private $detail = null;

    /**
     * Adds as itemSequence
     *
     * Claim items which this service line is intended to replace.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $itemSequence
     */
    public function addToItemSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $itemSequence)
    {
        $this->itemSequence[] = $itemSequence;
        return $this;
    }

    /**
     * isset itemSequence
     *
     * Claim items which this service line is intended to replace.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemSequence($index)
    {
        return isset($this->itemSequence[$index]);
    }

    /**
     * unset itemSequence
     *
     * Claim items which this service line is intended to replace.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemSequence($index)
    {
        unset($this->itemSequence[$index]);
    }

    /**
     * Gets as itemSequence
     *
     * Claim items which this service line is intended to replace.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType[]
     */
    public function getItemSequence()
    {
        return $this->itemSequence;
    }

    /**
     * Sets a new itemSequence
     *
     * Claim items which this service line is intended to replace.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType[] $itemSequence
     * @return self
     */
    public function setItemSequence(array $itemSequence = null)
    {
        $this->itemSequence = $itemSequence;
        return $this;
    }

    /**
     * Adds as detailSequence
     *
     * The sequence number of the details within the claim item which this line is intended to replace.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $detailSequence
     */
    public function addToDetailSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $detailSequence)
    {
        $this->detailSequence[] = $detailSequence;
        return $this;
    }

    /**
     * isset detailSequence
     *
     * The sequence number of the details within the claim item which this line is intended to replace.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetailSequence($index)
    {
        return isset($this->detailSequence[$index]);
    }

    /**
     * unset detailSequence
     *
     * The sequence number of the details within the claim item which this line is intended to replace.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetailSequence($index)
    {
        unset($this->detailSequence[$index]);
    }

    /**
     * Gets as detailSequence
     *
     * The sequence number of the details within the claim item which this line is intended to replace.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType[]
     */
    public function getDetailSequence()
    {
        return $this->detailSequence;
    }

    /**
     * Sets a new detailSequence
     *
     * The sequence number of the details within the claim item which this line is intended to replace.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType[] $detailSequence
     * @return self
     */
    public function setDetailSequence(array $detailSequence = null)
    {
        $this->detailSequence = $detailSequence;
        return $this;
    }

    /**
     * Adds as subdetailSequence
     *
     * The sequence number of the sub-details within the details within the claim item which this line is intended to replace.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $subdetailSequence
     */
    public function addToSubdetailSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $subdetailSequence)
    {
        $this->subdetailSequence[] = $subdetailSequence;
        return $this;
    }

    /**
     * isset subdetailSequence
     *
     * The sequence number of the sub-details within the details within the claim item which this line is intended to replace.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubdetailSequence($index)
    {
        return isset($this->subdetailSequence[$index]);
    }

    /**
     * unset subdetailSequence
     *
     * The sequence number of the sub-details within the details within the claim item which this line is intended to replace.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubdetailSequence($index)
    {
        unset($this->subdetailSequence[$index]);
    }

    /**
     * Gets as subdetailSequence
     *
     * The sequence number of the sub-details within the details within the claim item which this line is intended to replace.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType[]
     */
    public function getSubdetailSequence()
    {
        return $this->subdetailSequence;
    }

    /**
     * Sets a new subdetailSequence
     *
     * The sequence number of the sub-details within the details within the claim item which this line is intended to replace.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType[] $subdetailSequence
     * @return self
     */
    public function setSubdetailSequence(array $subdetailSequence = null)
    {
        $this->subdetailSequence = $subdetailSequence;
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
     * Adds as provider
     *
     * The providers who are authorized for the services rendered to the patient.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $provider
     */
    public function addToProvider(\TKusy\Hl7Fhir\R5\ReferenceType $provider)
    {
        $this->provider[] = $provider;
        return $this;
    }

    /**
     * isset provider
     *
     * The providers who are authorized for the services rendered to the patient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProvider($index)
    {
        return isset($this->provider[$index]);
    }

    /**
     * unset provider
     *
     * The providers who are authorized for the services rendered to the patient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProvider($index)
    {
        unset($this->provider[$index]);
    }

    /**
     * Gets as provider
     *
     * The providers who are authorized for the services rendered to the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * The providers who are authorized for the services rendered to the patient.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $provider
     * @return self
     */
    public function setProvider(array $provider = null)
    {
        $this->provider = $provider;
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
     * The total amount claimed for the group (if a grouper) or the addItem. Net = unit price * quantity * factor.
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
     * The total amount claimed for the group (if a grouper) or the addItem. Net = unit price * quantity * factor.
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
     * Adds as bodySite
     *
     * Physical location where the service is performed or applies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseBodySiteType $bodySite
     */
    public function addToBodySite(\TKusy\Hl7Fhir\R5\ClaimResponseBodySiteType $bodySite)
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
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseBodySiteType[]
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
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseBodySiteType[] $bodySite
     * @return self
     */
    public function setBodySite(array $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Adds as noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $noteNumber
     */
    public function addToNoteNumber(\TKusy\Hl7Fhir\R5\PositiveIntType $noteNumber)
    {
        $this->noteNumber[] = $noteNumber;
        return $this;
    }

    /**
     * isset noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNoteNumber($index)
    {
        return isset($this->noteNumber[$index]);
    }

    /**
     * unset noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNoteNumber($index)
    {
        unset($this->noteNumber[$index]);
    }

    /**
     * Gets as noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType[]
     */
    public function getNoteNumber()
    {
        return $this->noteNumber;
    }

    /**
     * Sets a new noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType[] $noteNumber
     * @return self
     */
    public function setNoteNumber(array $noteNumber = null)
    {
        $this->noteNumber = $noteNumber;
        return $this;
    }

    /**
     * Gets as reviewOutcome
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseReviewOutcomeType
     */
    public function getReviewOutcome()
    {
        return $this->reviewOutcome;
    }

    /**
     * Sets a new reviewOutcome
     *
     * The high-level results of the adjudication if adjudication has been performed.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseReviewOutcomeType $reviewOutcome
     * @return self
     */
    public function setReviewOutcome(?\TKusy\Hl7Fhir\R5\ClaimResponseReviewOutcomeType $reviewOutcome = null)
    {
        $this->reviewOutcome = $reviewOutcome;
        return $this;
    }

    /**
     * Adds as adjudication
     *
     * The adjudication results.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType $adjudication
     */
    public function addToAdjudication(\TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType $adjudication)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * isset adjudication
     *
     * The adjudication results.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdjudication($index)
    {
        return isset($this->adjudication[$index]);
    }

    /**
     * unset adjudication
     *
     * The adjudication results.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdjudication($index)
    {
        unset($this->adjudication[$index]);
    }

    /**
     * Gets as adjudication
     *
     * The adjudication results.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * Sets a new adjudication
     *
     * The adjudication results.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType[] $adjudication
     * @return self
     */
    public function setAdjudication(array $adjudication = null)
    {
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * Adds as detail
     *
     * The second-tier service adjudications for payor added services.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseDetail1Type $detail
     */
    public function addToDetail(\TKusy\Hl7Fhir\R5\ClaimResponseDetail1Type $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * The second-tier service adjudications for payor added services.
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
     * The second-tier service adjudications for payor added services.
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
     * The second-tier service adjudications for payor added services.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseDetail1Type[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * The second-tier service adjudications for payor added services.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseDetail1Type[] $detail
     * @return self
     */
    public function setDetail(array $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }


}
