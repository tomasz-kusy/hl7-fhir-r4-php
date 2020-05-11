<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductPackagedType
 *
 * A medicinal product in a container or package.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicinalProductPackaged
 */
class MedicinalProductPackagedType extends DomainResourceType
{

    /**
     * Unique identifier.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The product with this is a pack for.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $subject
     */
    private $subject = [
        
    ];

    /**
     * Textual description.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * The legal status of supply of the medicinal product as classified by the regulator.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $legalStatusOfSupply
     */
    private $legalStatusOfSupply = null;

    /**
     * Marketing information.
     *
     * @var \TKusy\Hl7FhirR4\MarketingStatusType[] $marketingStatus
     */
    private $marketingStatus = [
        
    ];

    /**
     * Manufacturer of this Package Item.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $marketingAuthorization
     */
    private $marketingAuthorization = null;

    /**
     * Manufacturer of this Package Item.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $manufacturer
     */
    private $manufacturer = [
        
    ];

    /**
     * Batch numbering.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductPackagedBatchIdentifierType[] $batchIdentifier
     */
    private $batchIdentifier = [
        
    ];

    /**
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductPackagedPackageItemType[] $packageItem
     */
    private $packageItem = [
        
    ];

    /**
     * Adds as identifier
     *
     * Unique identifier.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Unique identifier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Unique identifier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Unique identifier.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Unique identifier.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Adds as subject
     *
     * The product with this is a pack for.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    public function addToSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * isset subject
     *
     * The product with this is a pack for.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubject($index)
    {
        return isset($this->subject[$index]);
    }

    /**
     * unset subject
     *
     * The product with this is a pack for.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubject($index)
    {
        unset($this->subject[$index]);
    }

    /**
     * Gets as subject
     *
     * The product with this is a pack for.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The product with this is a pack for.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $subject
     * @return self
     */
    public function setSubject(array $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as description
     *
     * Textual description.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Textual description.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as legalStatusOfSupply
     *
     * The legal status of supply of the medicinal product as classified by the regulator.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getLegalStatusOfSupply()
    {
        return $this->legalStatusOfSupply;
    }

    /**
     * Sets a new legalStatusOfSupply
     *
     * The legal status of supply of the medicinal product as classified by the regulator.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $legalStatusOfSupply
     * @return self
     */
    public function setLegalStatusOfSupply(\TKusy\Hl7FhirR4\CodeableConceptType $legalStatusOfSupply)
    {
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
    }

    /**
     * Adds as marketingStatus
     *
     * Marketing information.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MarketingStatusType $marketingStatus
     */
    public function addToMarketingStatus(\TKusy\Hl7FhirR4\MarketingStatusType $marketingStatus)
    {
        $this->marketingStatus[] = $marketingStatus;
        return $this;
    }

    /**
     * isset marketingStatus
     *
     * Marketing information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingStatus($index)
    {
        return isset($this->marketingStatus[$index]);
    }

    /**
     * unset marketingStatus
     *
     * Marketing information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingStatus($index)
    {
        unset($this->marketingStatus[$index]);
    }

    /**
     * Gets as marketingStatus
     *
     * Marketing information.
     *
     * @return \TKusy\Hl7FhirR4\MarketingStatusType[]
     */
    public function getMarketingStatus()
    {
        return $this->marketingStatus;
    }

    /**
     * Sets a new marketingStatus
     *
     * Marketing information.
     *
     * @param \TKusy\Hl7FhirR4\MarketingStatusType[] $marketingStatus
     * @return self
     */
    public function setMarketingStatus(array $marketingStatus)
    {
        $this->marketingStatus = $marketingStatus;
        return $this;
    }

    /**
     * Gets as marketingAuthorization
     *
     * Manufacturer of this Package Item.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getMarketingAuthorization()
    {
        return $this->marketingAuthorization;
    }

    /**
     * Sets a new marketingAuthorization
     *
     * Manufacturer of this Package Item.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $marketingAuthorization
     * @return self
     */
    public function setMarketingAuthorization(\TKusy\Hl7FhirR4\ReferenceType $marketingAuthorization)
    {
        $this->marketingAuthorization = $marketingAuthorization;
        return $this;
    }

    /**
     * Adds as manufacturer
     *
     * Manufacturer of this Package Item.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $manufacturer
     */
    public function addToManufacturer(\TKusy\Hl7FhirR4\ReferenceType $manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * isset manufacturer
     *
     * Manufacturer of this Package Item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturer($index)
    {
        return isset($this->manufacturer[$index]);
    }

    /**
     * unset manufacturer
     *
     * Manufacturer of this Package Item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturer($index)
    {
        unset($this->manufacturer[$index]);
    }

    /**
     * Gets as manufacturer
     *
     * Manufacturer of this Package Item.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * Manufacturer of this Package Item.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $manufacturer
     * @return self
     */
    public function setManufacturer(array $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Adds as batchIdentifier
     *
     * Batch numbering.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductPackagedBatchIdentifierType $batchIdentifier
     */
    public function addToBatchIdentifier(\TKusy\Hl7FhirR4\MedicinalProductPackagedBatchIdentifierType $batchIdentifier)
    {
        $this->batchIdentifier[] = $batchIdentifier;
        return $this;
    }

    /**
     * isset batchIdentifier
     *
     * Batch numbering.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBatchIdentifier($index)
    {
        return isset($this->batchIdentifier[$index]);
    }

    /**
     * unset batchIdentifier
     *
     * Batch numbering.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBatchIdentifier($index)
    {
        unset($this->batchIdentifier[$index]);
    }

    /**
     * Gets as batchIdentifier
     *
     * Batch numbering.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductPackagedBatchIdentifierType[]
     */
    public function getBatchIdentifier()
    {
        return $this->batchIdentifier;
    }

    /**
     * Sets a new batchIdentifier
     *
     * Batch numbering.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductPackagedBatchIdentifierType[] $batchIdentifier
     * @return self
     */
    public function setBatchIdentifier(array $batchIdentifier)
    {
        $this->batchIdentifier = $batchIdentifier;
        return $this;
    }

    /**
     * Adds as packageItem
     *
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductPackagedPackageItemType $packageItem
     */
    public function addToPackageItem(\TKusy\Hl7FhirR4\MedicinalProductPackagedPackageItemType $packageItem)
    {
        $this->packageItem[] = $packageItem;
        return $this;
    }

    /**
     * isset packageItem
     *
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageItem($index)
    {
        return isset($this->packageItem[$index]);
    }

    /**
     * unset packageItem
     *
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageItem($index)
    {
        unset($this->packageItem[$index]);
    }

    /**
     * Gets as packageItem
     *
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductPackagedPackageItemType[]
     */
    public function getPackageItem()
    {
        return $this->packageItem;
    }

    /**
     * Sets a new packageItem
     *
     * A packaging item, as a contained for medicine, possibly with other packaging items within.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductPackagedPackageItemType[] $packageItem
     * @return self
     */
    public function setPackageItem(array $packageItem)
    {
        $this->packageItem = $packageItem;
        return $this;
    }


}

