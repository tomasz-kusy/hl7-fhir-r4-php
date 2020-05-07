<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CatalogEntryType
 *
 * Catalog entries are wrappers that contextualize items included in a catalog.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: CatalogEntry
 */
class CatalogEntryType extends DomainResourceType
{

    /**
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The type of item - medication, device, service, protocol or other.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Whether the entry represents an orderable item.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $orderable
     */
    private $orderable = null;

    /**
     * The item in a catalog or definition.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $referencedItem
     */
    private $referencedItem = null;

    /**
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $additionalIdentifier
     */
    private $additionalIdentifier = [
        
    ];

    /**
     * Classes of devices, or ATC for medication.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $classification
     */
    private $classification = [
        
    ];

    /**
     * Used to support catalog exchange even for unsupported products, e.g. getting list of medications even if not prescribable.
     *
     * @var \TKusy\Hl7FhirR4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * The time period in which this catalog entry is expected to be active.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * The date until which this catalog entry is expected to be active.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $validTo
     */
    private $validTo = null;

    /**
     * Typically date of issue is different from the beginning of the validity. This can be used to see when an item was last updated.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $additionalCharacteristic
     */
    private $additionalCharacteristic = [
        
    ];

    /**
     * User for example for ATC classification, or.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $additionalClassification
     */
    private $additionalClassification = [
        
    ];

    /**
     * Used for example, to point to a substance, or to a device used to administer a medication.
     *
     * @var \TKusy\Hl7FhirR4\CatalogEntryRelatedEntryType[] $relatedEntry
     */
    private $relatedEntry = [
        
    ];

    /**
     * Adds as identifier
     *
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
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
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
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
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
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
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
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
     * Used in supporting different identifiers for the same product, e.g. manufacturer code and retailer code.
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
     * Gets as type
     *
     * The type of item - medication, device, service, protocol or other.
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
     * The type of item - medication, device, service, protocol or other.
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
     * Gets as orderable
     *
     * Whether the entry represents an orderable item.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getOrderable()
    {
        return $this->orderable;
    }

    /**
     * Sets a new orderable
     *
     * Whether the entry represents an orderable item.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $orderable
     * @return self
     */
    public function setOrderable(\TKusy\Hl7FhirR4\BooleanType $orderable)
    {
        $this->orderable = $orderable;
        return $this;
    }

    /**
     * Gets as referencedItem
     *
     * The item in a catalog or definition.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getReferencedItem()
    {
        return $this->referencedItem;
    }

    /**
     * Sets a new referencedItem
     *
     * The item in a catalog or definition.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $referencedItem
     * @return self
     */
    public function setReferencedItem(\TKusy\Hl7FhirR4\ReferenceType $referencedItem)
    {
        $this->referencedItem = $referencedItem;
        return $this;
    }

    /**
     * Adds as additionalIdentifier
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $additionalIdentifier
     */
    public function addToAdditionalIdentifier(\TKusy\Hl7FhirR4\IdentifierType $additionalIdentifier)
    {
        $this->additionalIdentifier[] = $additionalIdentifier;
        return $this;
    }

    /**
     * isset additionalIdentifier
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalIdentifier($index)
    {
        return isset($this->additionalIdentifier[$index]);
    }

    /**
     * unset additionalIdentifier
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalIdentifier($index)
    {
        unset($this->additionalIdentifier[$index]);
    }

    /**
     * Gets as additionalIdentifier
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getAdditionalIdentifier()
    {
        return $this->additionalIdentifier;
    }

    /**
     * Sets a new additionalIdentifier
     *
     * Used in supporting related concepts, e.g. NDC to RxNorm.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $additionalIdentifier
     * @return self
     */
    public function setAdditionalIdentifier(array $additionalIdentifier)
    {
        $this->additionalIdentifier = $additionalIdentifier;
        return $this;
    }

    /**
     * Adds as classification
     *
     * Classes of devices, or ATC for medication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $classification
     */
    public function addToClassification(\TKusy\Hl7FhirR4\CodeableConceptType $classification)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * isset classification
     *
     * Classes of devices, or ATC for medication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassification($index)
    {
        return isset($this->classification[$index]);
    }

    /**
     * unset classification
     *
     * Classes of devices, or ATC for medication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassification($index)
    {
        unset($this->classification[$index]);
    }

    /**
     * Gets as classification
     *
     * Classes of devices, or ATC for medication.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * Classes of devices, or ATC for medication.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $classification
     * @return self
     */
    public function setClassification(array $classification)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Gets as status
     *
     * Used to support catalog exchange even for unsupported products, e.g. getting list of medications even if not prescribable.
     *
     * @return \TKusy\Hl7FhirR4\PublicationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Used to support catalog exchange even for unsupported products, e.g. getting list of medications even if not prescribable.
     *
     * @param \TKusy\Hl7FhirR4\PublicationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\PublicationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * The time period in which this catalog entry is expected to be active.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * The time period in which this catalog entry is expected to be active.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\TKusy\Hl7FhirR4\PeriodType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as validTo
     *
     * The date until which this catalog entry is expected to be active.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Sets a new validTo
     *
     * The date until which this catalog entry is expected to be active.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $validTo
     * @return self
     */
    public function setValidTo(\TKusy\Hl7FhirR4\DateTimeType $validTo)
    {
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * Gets as lastUpdated
     *
     * Typically date of issue is different from the beginning of the validity. This can be used to see when an item was last updated.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * Typically date of issue is different from the beginning of the validity. This can be used to see when an item was last updated.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $lastUpdated
     * @return self
     */
    public function setLastUpdated(\TKusy\Hl7FhirR4\DateTimeType $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Adds as additionalCharacteristic
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $additionalCharacteristic
     */
    public function addToAdditionalCharacteristic(\TKusy\Hl7FhirR4\CodeableConceptType $additionalCharacteristic)
    {
        $this->additionalCharacteristic[] = $additionalCharacteristic;
        return $this;
    }

    /**
     * isset additionalCharacteristic
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalCharacteristic($index)
    {
        return isset($this->additionalCharacteristic[$index]);
    }

    /**
     * unset additionalCharacteristic
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalCharacteristic($index)
    {
        unset($this->additionalCharacteristic[$index]);
    }

    /**
     * Gets as additionalCharacteristic
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getAdditionalCharacteristic()
    {
        return $this->additionalCharacteristic;
    }

    /**
     * Sets a new additionalCharacteristic
     *
     * Used for examplefor Out of Formulary, or any specifics.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $additionalCharacteristic
     * @return self
     */
    public function setAdditionalCharacteristic(array $additionalCharacteristic)
    {
        $this->additionalCharacteristic = $additionalCharacteristic;
        return $this;
    }

    /**
     * Adds as additionalClassification
     *
     * User for example for ATC classification, or.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $additionalClassification
     */
    public function addToAdditionalClassification(\TKusy\Hl7FhirR4\CodeableConceptType $additionalClassification)
    {
        $this->additionalClassification[] = $additionalClassification;
        return $this;
    }

    /**
     * isset additionalClassification
     *
     * User for example for ATC classification, or.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalClassification($index)
    {
        return isset($this->additionalClassification[$index]);
    }

    /**
     * unset additionalClassification
     *
     * User for example for ATC classification, or.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalClassification($index)
    {
        unset($this->additionalClassification[$index]);
    }

    /**
     * Gets as additionalClassification
     *
     * User for example for ATC classification, or.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getAdditionalClassification()
    {
        return $this->additionalClassification;
    }

    /**
     * Sets a new additionalClassification
     *
     * User for example for ATC classification, or.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $additionalClassification
     * @return self
     */
    public function setAdditionalClassification(array $additionalClassification)
    {
        $this->additionalClassification = $additionalClassification;
        return $this;
    }

    /**
     * Adds as relatedEntry
     *
     * Used for example, to point to a substance, or to a device used to administer a medication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CatalogEntryRelatedEntryType $relatedEntry
     */
    public function addToRelatedEntry(\TKusy\Hl7FhirR4\CatalogEntryRelatedEntryType $relatedEntry)
    {
        $this->relatedEntry[] = $relatedEntry;
        return $this;
    }

    /**
     * isset relatedEntry
     *
     * Used for example, to point to a substance, or to a device used to administer a medication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedEntry($index)
    {
        return isset($this->relatedEntry[$index]);
    }

    /**
     * unset relatedEntry
     *
     * Used for example, to point to a substance, or to a device used to administer a medication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedEntry($index)
    {
        unset($this->relatedEntry[$index]);
    }

    /**
     * Gets as relatedEntry
     *
     * Used for example, to point to a substance, or to a device used to administer a medication.
     *
     * @return \TKusy\Hl7FhirR4\CatalogEntryRelatedEntryType[]
     */
    public function getRelatedEntry()
    {
        return $this->relatedEntry;
    }

    /**
     * Sets a new relatedEntry
     *
     * Used for example, to point to a substance, or to a device used to administer a medication.
     *
     * @param \TKusy\Hl7FhirR4\CatalogEntryRelatedEntryType[] $relatedEntry
     * @return self
     */
    public function setRelatedEntry(array $relatedEntry)
    {
        $this->relatedEntry = $relatedEntry;
        return $this;
    }


}

