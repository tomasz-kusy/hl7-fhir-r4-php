<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExplanationOfBenefitAddItemType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.AddItem
 */
class ExplanationOfBenefitAddItemType extends BackboneElementType
{

    /**
     * Claim items which this service line is intended to replace.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType[] $itemSequence
     */
    private $itemSequence = null;

    /**
     * The sequence number of the details within the claim item which this line is intended to replace.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType[] $detailSequence
     */
    private $detailSequence = null;

    /**
     * The sequence number of the sub-details woithin the details within the claim item which this line is intended to replace.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType[] $subDetailSequence
     */
    private $subDetailSequence = null;

    /**
     * The providers who are authorized for the services rendered to the patient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $provider
     */
    private $provider = null;

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
    private $modifier = null;

    /**
     * Identifies the program under which this may be recovered.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $programCode
     */
    private $programCode = null;

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
     * @var float $factor
     */
    private $factor = null;

    /**
     * The quantity times the unit price for an additional service or product or charge.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $net
     */
    private $net = null;

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
    private $subSite = null;

    /**
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType[] $noteNumber
     */
    private $noteNumber = null;

    /**
     * The adjudication results.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType[] $adjudication
     */
    private $adjudication = null;

    /**
     * The second-tier service adjudications for payor added services.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitDetail1Type[] $detail
     */
    private $detail = null;

    /**
     * Adds as itemSequence
     *
     * Claim items which this service line is intended to replace.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PositiveIntType $itemSequence
     */
    public function addToItemSequence(\TKusy\Hl7FhirR4\PositiveIntType $itemSequence)
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
     * @return \TKusy\Hl7FhirR4\PositiveIntType[]
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
     * @param \TKusy\Hl7FhirR4\PositiveIntType[] $itemSequence
     * @return self
     */
    public function setItemSequence(array $itemSequence)
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
     * @param \TKusy\Hl7FhirR4\PositiveIntType $detailSequence
     */
    public function addToDetailSequence(\TKusy\Hl7FhirR4\PositiveIntType $detailSequence)
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
     * @return \TKusy\Hl7FhirR4\PositiveIntType[]
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
     * @param \TKusy\Hl7FhirR4\PositiveIntType[] $detailSequence
     * @return self
     */
    public function setDetailSequence(array $detailSequence)
    {
        $this->detailSequence = $detailSequence;
        return $this;
    }

    /**
     * Adds as subDetailSequence
     *
     * The sequence number of the sub-details woithin the details within the claim item which this line is intended to replace.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PositiveIntType $subDetailSequence
     */
    public function addToSubDetailSequence(\TKusy\Hl7FhirR4\PositiveIntType $subDetailSequence)
    {
        $this->subDetailSequence[] = $subDetailSequence;
        return $this;
    }

    /**
     * isset subDetailSequence
     *
     * The sequence number of the sub-details woithin the details within the claim item which this line is intended to replace.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubDetailSequence($index)
    {
        return isset($this->subDetailSequence[$index]);
    }

    /**
     * unset subDetailSequence
     *
     * The sequence number of the sub-details woithin the details within the claim item which this line is intended to replace.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubDetailSequence($index)
    {
        unset($this->subDetailSequence[$index]);
    }

    /**
     * Gets as subDetailSequence
     *
     * The sequence number of the sub-details woithin the details within the claim item which this line is intended to replace.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType[]
     */
    public function getSubDetailSequence()
    {
        return $this->subDetailSequence;
    }

    /**
     * Sets a new subDetailSequence
     *
     * The sequence number of the sub-details woithin the details within the claim item which this line is intended to replace.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType[] $subDetailSequence
     * @return self
     */
    public function setSubDetailSequence(array $subDetailSequence)
    {
        $this->subDetailSequence = $subDetailSequence;
        return $this;
    }

    /**
     * Adds as provider
     *
     * The providers who are authorized for the services rendered to the patient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $provider
     */
    public function addToProvider(\TKusy\Hl7FhirR4\ReferenceType $provider)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $provider
     * @return self
     */
    public function setProvider(array $provider)
    {
        $this->provider = $provider;
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
     * @return float
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
     * @param float $factor
     * @return self
     */
    public function setFactor($factor)
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
     * Adds as noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PositiveIntType $noteNumber
     */
    public function addToNoteNumber(\TKusy\Hl7FhirR4\PositiveIntType $noteNumber)
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
     * @return \TKusy\Hl7FhirR4\PositiveIntType[]
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
     * @param \TKusy\Hl7FhirR4\PositiveIntType[] $noteNumber
     * @return self
     */
    public function setNoteNumber(array $noteNumber)
    {
        $this->noteNumber = $noteNumber;
        return $this;
    }

    /**
     * Adds as adjudication
     *
     * The adjudication results.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType $adjudication
     */
    public function addToAdjudication(\TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType $adjudication)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType[] $adjudication
     * @return self
     */
    public function setAdjudication(array $adjudication)
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitDetail1Type $detail
     */
    public function addToDetail(\TKusy\Hl7FhirR4\ExplanationOfBenefitDetail1Type $detail)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitDetail1Type[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitDetail1Type[] $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;
        return $this;
    }


}

