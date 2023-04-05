<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PackagedProductDefinitionType
 *
 * A medically related item or items, in a container or package.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: PackagedProductDefinition
 */
class PackagedProductDefinitionType extends DomainResourceType
{

    /**
     * A unique identifier for this package as whole - not the the content of the package. Unique instance identifiers assigned to a package by manufacturers, regulators, drug catalogue custodians or other organizations.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A name for this package. Typically what it would be listed as in a drug formulary or catalogue, inventory etc.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A high level category e.g. medicinal product, raw material, shipping/transport container, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The product this package model relates to, not the contents of the package (for which see package.containedItem).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $packageFor
     */
    private $packageFor = null;

    /**
     * The status within the lifecycle of this item. A high level status, this is not intended to duplicate details carried elsewhere such as legal status, or authorization or marketing status.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     */
    private $status = null;

    /**
     * The date at which the given status became applicable.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $statusDate
     */
    private $statusDate = null;

    /**
     * A total of the complete count of contained items of a particular type/form, independent of sub-packaging or organization. This can be considered as the pack size. This attribute differs from containedItem.amount in that it can give a single aggregated count of all tablet types in a pack, even when these are different manufactured items. For example a pill pack of 21 tablets plus 7 sugar tablets, can be denoted here as '28 tablets'. This attribute is repeatable so that the different item types in one pack type can be counted (e.g. a count of vials and count of syringes). Each repeat must have different units, so that it is clear what the different sets of counted items are, and it is not intended to allow different counts of similar items (e.g. not '2 tubes and 3 tubes'). Repeats are not to be used to represent different pack sizes (e.g. 20 pack vs. 50 pack) - which would be different instances of this resource.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType[] $containedItemQuantity
     */
    private $containedItemQuantity = null;

    /**
     * Textual description. Note that this is not the name of the package or product.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The legal status of supply of the packaged item as classified by the regulator.
     *
     * @var \TKusy\Hl7Fhir\R5\PackagedProductDefinitionLegalStatusOfSupplyType[] $legalStatusOfSupply
     */
    private $legalStatusOfSupply = null;

    /**
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
     *
     * @var \TKusy\Hl7Fhir\R5\MarketingStatusType[] $marketingStatus
     */
    private $marketingStatus = null;

    /**
     * Identifies if the package contains different items, such as when a drug product is supplied with another item e.g. a diluent or adjuvant.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $copackagedIndicator
     */
    private $copackagedIndicator = null;

    /**
     * Manufacturer of this package type. When there are multiple it means these are all possible manufacturers.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $manufacturer
     */
    private $manufacturer = null;

    /**
     * Additional information or supporting documentation about the packaged product.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $attachedDocument
     */
    private $attachedDocument = null;

    /**
     * A packaging item, as a container for medically related items, possibly with other packaging items within, or a packaging component, such as bottle cap (which is not a device or a medication manufactured item).
     *
     * @var \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPackagingType $packaging
     */
    private $packaging = null;

    /**
     * Allows the key features to be recorded, such as "hospital pack", "nurse prescribable", "calendar pack".
     *
     * @var \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPropertyType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Adds as identifier
     *
     * A unique identifier for this package as whole - not the the content of the package. Unique instance identifiers assigned to a package by manufacturers, regulators, drug catalogue custodians or other organizations.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A unique identifier for this package as whole - not the the content of the package. Unique instance identifiers assigned to a package by manufacturers, regulators, drug catalogue custodians or other organizations.
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
     * A unique identifier for this package as whole - not the the content of the package. Unique instance identifiers assigned to a package by manufacturers, regulators, drug catalogue custodians or other organizations.
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
     * A unique identifier for this package as whole - not the the content of the package. Unique instance identifiers assigned to a package by manufacturers, regulators, drug catalogue custodians or other organizations.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A unique identifier for this package as whole - not the the content of the package. Unique instance identifiers assigned to a package by manufacturers, regulators, drug catalogue custodians or other organizations.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as name
     *
     * A name for this package. Typically what it would be listed as in a drug formulary or catalogue, inventory etc.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A name for this package. Typically what it would be listed as in a drug formulary or catalogue, inventory etc.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type
     *
     * A high level category e.g. medicinal product, raw material, shipping/transport container, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A high level category e.g. medicinal product, raw material, shipping/transport container, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as packageFor
     *
     * The product this package model relates to, not the contents of the package (for which see package.containedItem).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $packageFor
     */
    public function addToPackageFor(\TKusy\Hl7Fhir\R5\ReferenceType $packageFor)
    {
        $this->packageFor[] = $packageFor;
        return $this;
    }

    /**
     * isset packageFor
     *
     * The product this package model relates to, not the contents of the package (for which see package.containedItem).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageFor($index)
    {
        return isset($this->packageFor[$index]);
    }

    /**
     * unset packageFor
     *
     * The product this package model relates to, not the contents of the package (for which see package.containedItem).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageFor($index)
    {
        unset($this->packageFor[$index]);
    }

    /**
     * Gets as packageFor
     *
     * The product this package model relates to, not the contents of the package (for which see package.containedItem).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getPackageFor()
    {
        return $this->packageFor;
    }

    /**
     * Sets a new packageFor
     *
     * The product this package model relates to, not the contents of the package (for which see package.containedItem).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $packageFor
     * @return self
     */
    public function setPackageFor(array $packageFor = null)
    {
        $this->packageFor = $packageFor;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status within the lifecycle of this item. A high level status, this is not intended to duplicate details carried elsewhere such as legal status, or authorization or marketing status.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status within the lifecycle of this item. A high level status, this is not intended to duplicate details carried elsewhere such as legal status, or authorization or marketing status.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusDate
     *
     * The date at which the given status became applicable.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Sets a new statusDate
     *
     * The date at which the given status became applicable.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $statusDate
     * @return self
     */
    public function setStatusDate(?\TKusy\Hl7Fhir\R5\DateTimeType $statusDate = null)
    {
        $this->statusDate = $statusDate;
        return $this;
    }

    /**
     * Adds as containedItemQuantity
     *
     * A total of the complete count of contained items of a particular type/form, independent of sub-packaging or organization. This can be considered as the pack size. This attribute differs from containedItem.amount in that it can give a single aggregated count of all tablet types in a pack, even when these are different manufactured items. For example a pill pack of 21 tablets plus 7 sugar tablets, can be denoted here as '28 tablets'. This attribute is repeatable so that the different item types in one pack type can be counted (e.g. a count of vials and count of syringes). Each repeat must have different units, so that it is clear what the different sets of counted items are, and it is not intended to allow different counts of similar items (e.g. not '2 tubes and 3 tubes'). Repeats are not to be used to represent different pack sizes (e.g. 20 pack vs. 50 pack) - which would be different instances of this resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\QuantityType $containedItemQuantity
     */
    public function addToContainedItemQuantity(\TKusy\Hl7Fhir\R5\QuantityType $containedItemQuantity)
    {
        $this->containedItemQuantity[] = $containedItemQuantity;
        return $this;
    }

    /**
     * isset containedItemQuantity
     *
     * A total of the complete count of contained items of a particular type/form, independent of sub-packaging or organization. This can be considered as the pack size. This attribute differs from containedItem.amount in that it can give a single aggregated count of all tablet types in a pack, even when these are different manufactured items. For example a pill pack of 21 tablets plus 7 sugar tablets, can be denoted here as '28 tablets'. This attribute is repeatable so that the different item types in one pack type can be counted (e.g. a count of vials and count of syringes). Each repeat must have different units, so that it is clear what the different sets of counted items are, and it is not intended to allow different counts of similar items (e.g. not '2 tubes and 3 tubes'). Repeats are not to be used to represent different pack sizes (e.g. 20 pack vs. 50 pack) - which would be different instances of this resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedItemQuantity($index)
    {
        return isset($this->containedItemQuantity[$index]);
    }

    /**
     * unset containedItemQuantity
     *
     * A total of the complete count of contained items of a particular type/form, independent of sub-packaging or organization. This can be considered as the pack size. This attribute differs from containedItem.amount in that it can give a single aggregated count of all tablet types in a pack, even when these are different manufactured items. For example a pill pack of 21 tablets plus 7 sugar tablets, can be denoted here as '28 tablets'. This attribute is repeatable so that the different item types in one pack type can be counted (e.g. a count of vials and count of syringes). Each repeat must have different units, so that it is clear what the different sets of counted items are, and it is not intended to allow different counts of similar items (e.g. not '2 tubes and 3 tubes'). Repeats are not to be used to represent different pack sizes (e.g. 20 pack vs. 50 pack) - which would be different instances of this resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedItemQuantity($index)
    {
        unset($this->containedItemQuantity[$index]);
    }

    /**
     * Gets as containedItemQuantity
     *
     * A total of the complete count of contained items of a particular type/form, independent of sub-packaging or organization. This can be considered as the pack size. This attribute differs from containedItem.amount in that it can give a single aggregated count of all tablet types in a pack, even when these are different manufactured items. For example a pill pack of 21 tablets plus 7 sugar tablets, can be denoted here as '28 tablets'. This attribute is repeatable so that the different item types in one pack type can be counted (e.g. a count of vials and count of syringes). Each repeat must have different units, so that it is clear what the different sets of counted items are, and it is not intended to allow different counts of similar items (e.g. not '2 tubes and 3 tubes'). Repeats are not to be used to represent different pack sizes (e.g. 20 pack vs. 50 pack) - which would be different instances of this resource.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType[]
     */
    public function getContainedItemQuantity()
    {
        return $this->containedItemQuantity;
    }

    /**
     * Sets a new containedItemQuantity
     *
     * A total of the complete count of contained items of a particular type/form, independent of sub-packaging or organization. This can be considered as the pack size. This attribute differs from containedItem.amount in that it can give a single aggregated count of all tablet types in a pack, even when these are different manufactured items. For example a pill pack of 21 tablets plus 7 sugar tablets, can be denoted here as '28 tablets'. This attribute is repeatable so that the different item types in one pack type can be counted (e.g. a count of vials and count of syringes). Each repeat must have different units, so that it is clear what the different sets of counted items are, and it is not intended to allow different counts of similar items (e.g. not '2 tubes and 3 tubes'). Repeats are not to be used to represent different pack sizes (e.g. 20 pack vs. 50 pack) - which would be different instances of this resource.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType[] $containedItemQuantity
     * @return self
     */
    public function setContainedItemQuantity(array $containedItemQuantity = null)
    {
        $this->containedItemQuantity = $containedItemQuantity;
        return $this;
    }

    /**
     * Gets as description
     *
     * Textual description. Note that this is not the name of the package or product.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Textual description. Note that this is not the name of the package or product.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as legalStatusOfSupply
     *
     * The legal status of supply of the packaged item as classified by the regulator.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinitionLegalStatusOfSupplyType $legalStatusOfSupply
     */
    public function addToLegalStatusOfSupply(\TKusy\Hl7Fhir\R5\PackagedProductDefinitionLegalStatusOfSupplyType $legalStatusOfSupply)
    {
        $this->legalStatusOfSupply[] = $legalStatusOfSupply;
        return $this;
    }

    /**
     * isset legalStatusOfSupply
     *
     * The legal status of supply of the packaged item as classified by the regulator.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLegalStatusOfSupply($index)
    {
        return isset($this->legalStatusOfSupply[$index]);
    }

    /**
     * unset legalStatusOfSupply
     *
     * The legal status of supply of the packaged item as classified by the regulator.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLegalStatusOfSupply($index)
    {
        unset($this->legalStatusOfSupply[$index]);
    }

    /**
     * Gets as legalStatusOfSupply
     *
     * The legal status of supply of the packaged item as classified by the regulator.
     *
     * @return \TKusy\Hl7Fhir\R5\PackagedProductDefinitionLegalStatusOfSupplyType[]
     */
    public function getLegalStatusOfSupply()
    {
        return $this->legalStatusOfSupply;
    }

    /**
     * Sets a new legalStatusOfSupply
     *
     * The legal status of supply of the packaged item as classified by the regulator.
     *
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinitionLegalStatusOfSupplyType[] $legalStatusOfSupply
     * @return self
     */
    public function setLegalStatusOfSupply(array $legalStatusOfSupply = null)
    {
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
    }

    /**
     * Adds as marketingStatus
     *
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MarketingStatusType $marketingStatus
     */
    public function addToMarketingStatus(\TKusy\Hl7Fhir\R5\MarketingStatusType $marketingStatus)
    {
        $this->marketingStatus[] = $marketingStatus;
        return $this;
    }

    /**
     * isset marketingStatus
     *
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
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
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
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
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
     *
     * @return \TKusy\Hl7Fhir\R5\MarketingStatusType[]
     */
    public function getMarketingStatus()
    {
        return $this->marketingStatus;
    }

    /**
     * Sets a new marketingStatus
     *
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
     *
     * @param \TKusy\Hl7Fhir\R5\MarketingStatusType[] $marketingStatus
     * @return self
     */
    public function setMarketingStatus(array $marketingStatus = null)
    {
        $this->marketingStatus = $marketingStatus;
        return $this;
    }

    /**
     * Gets as copackagedIndicator
     *
     * Identifies if the package contains different items, such as when a drug product is supplied with another item e.g. a diluent or adjuvant.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getCopackagedIndicator()
    {
        return $this->copackagedIndicator;
    }

    /**
     * Sets a new copackagedIndicator
     *
     * Identifies if the package contains different items, such as when a drug product is supplied with another item e.g. a diluent or adjuvant.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $copackagedIndicator
     * @return self
     */
    public function setCopackagedIndicator(?\TKusy\Hl7Fhir\R5\BooleanType $copackagedIndicator = null)
    {
        $this->copackagedIndicator = $copackagedIndicator;
        return $this;
    }

    /**
     * Adds as manufacturer
     *
     * Manufacturer of this package type. When there are multiple it means these are all possible manufacturers.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $manufacturer
     */
    public function addToManufacturer(\TKusy\Hl7Fhir\R5\ReferenceType $manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * isset manufacturer
     *
     * Manufacturer of this package type. When there are multiple it means these are all possible manufacturers.
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
     * Manufacturer of this package type. When there are multiple it means these are all possible manufacturers.
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
     * Manufacturer of this package type. When there are multiple it means these are all possible manufacturers.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * Manufacturer of this package type. When there are multiple it means these are all possible manufacturers.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $manufacturer
     * @return self
     */
    public function setManufacturer(array $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Adds as attachedDocument
     *
     * Additional information or supporting documentation about the packaged product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $attachedDocument
     */
    public function addToAttachedDocument(\TKusy\Hl7Fhir\R5\ReferenceType $attachedDocument)
    {
        $this->attachedDocument[] = $attachedDocument;
        return $this;
    }

    /**
     * isset attachedDocument
     *
     * Additional information or supporting documentation about the packaged product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttachedDocument($index)
    {
        return isset($this->attachedDocument[$index]);
    }

    /**
     * unset attachedDocument
     *
     * Additional information or supporting documentation about the packaged product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttachedDocument($index)
    {
        unset($this->attachedDocument[$index]);
    }

    /**
     * Gets as attachedDocument
     *
     * Additional information or supporting documentation about the packaged product.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAttachedDocument()
    {
        return $this->attachedDocument;
    }

    /**
     * Sets a new attachedDocument
     *
     * Additional information or supporting documentation about the packaged product.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $attachedDocument
     * @return self
     */
    public function setAttachedDocument(array $attachedDocument = null)
    {
        $this->attachedDocument = $attachedDocument;
        return $this;
    }

    /**
     * Gets as packaging
     *
     * A packaging item, as a container for medically related items, possibly with other packaging items within, or a packaging component, such as bottle cap (which is not a device or a medication manufactured item).
     *
     * @return \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPackagingType
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * Sets a new packaging
     *
     * A packaging item, as a container for medically related items, possibly with other packaging items within, or a packaging component, such as bottle cap (which is not a device or a medication manufactured item).
     *
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPackagingType $packaging
     * @return self
     */
    public function setPackaging(?\TKusy\Hl7Fhir\R5\PackagedProductDefinitionPackagingType $packaging = null)
    {
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * Adds as characteristic
     *
     * Allows the key features to be recorded, such as "hospital pack", "nurse prescribable", "calendar pack".
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPropertyType $characteristic
     */
    public function addToCharacteristic(\TKusy\Hl7Fhir\R5\PackagedProductDefinitionPropertyType $characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * isset characteristic
     *
     * Allows the key features to be recorded, such as "hospital pack", "nurse prescribable", "calendar pack".
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristic($index)
    {
        return isset($this->characteristic[$index]);
    }

    /**
     * unset characteristic
     *
     * Allows the key features to be recorded, such as "hospital pack", "nurse prescribable", "calendar pack".
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristic($index)
    {
        unset($this->characteristic[$index]);
    }

    /**
     * Gets as characteristic
     *
     * Allows the key features to be recorded, such as "hospital pack", "nurse prescribable", "calendar pack".
     *
     * @return \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPropertyType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * Allows the key features to be recorded, such as "hospital pack", "nurse prescribable", "calendar pack".
     *
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPropertyType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic = null)
    {
        $this->characteristic = $characteristic;
        return $this;
    }


}

