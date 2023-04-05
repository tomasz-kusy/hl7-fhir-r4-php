<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing BiologicallyDerivedProductType
 *
 * This resource reflects an instance of a biologically derived product. A material substance originating from a biological entity intended to be transplanted or infused
 * into another (possibly the same) biological entity.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: BiologicallyDerivedProduct
 */
class BiologicallyDerivedProductType extends DomainResourceType
{

    /**
     * Broad category of this product.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $productCategory
     */
    private $productCategory = null;

    /**
     * A codified value that systematically supports characterization and classification of medical products of human origin inclusive of processing conditions such as additives, volumes and handling conditions.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $productCode
     */
    private $productCode = null;

    /**
     * Parent product (if any) for this biologically-derived product.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $parent
     */
    private $parent = null;

    /**
     * Request to obtain and/or infuse this biologically derived product.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $request
     */
    private $request = null;

    /**
     * Unique instance identifiers assigned to a biologically derived product. Note: This is a business identifier, not a resource identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * An identifier that supports traceability to the event during which material in this product from one or more biological entities was obtained or pooled.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $biologicalSourceEvent
     */
    private $biologicalSourceEvent = null;

    /**
     * Processing facilities responsible for the labeling and distribution of this biologically derived product.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $processingFacility
     */
    private $processingFacility = null;

    /**
     * A unique identifier for an aliquot of a product. Used to distinguish individual aliquots of a product carrying the same biologicalSource and productCode identifiers.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $division
     */
    private $division = null;

    /**
     * Whether the product is currently available.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $productStatus
     */
    private $productStatus = null;

    /**
     * Date, and where relevant time, of expiration.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $expirationDate
     */
    private $expirationDate = null;

    /**
     * How this product was collected.
     *
     * @var \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductCollectionType $collection
     */
    private $collection = null;

    /**
     * The temperature requirements for storage of the biologically-derived product.
     *
     * @var \TKusy\Hl7Fhir\R5\RangeType $storageTempRequirements
     */
    private $storageTempRequirements = null;

    /**
     * A property that is specific to this BiologicallyDerviedProduct instance.
     *
     * @var \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductPropertyType[] $property
     */
    private $property = null;

    /**
     * Gets as productCategory
     *
     * Broad category of this product.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Sets a new productCategory
     *
     * Broad category of this product.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $productCategory
     * @return self
     */
    public function setProductCategory(?\TKusy\Hl7Fhir\R5\CodingType $productCategory = null)
    {
        $this->productCategory = $productCategory;
        return $this;
    }

    /**
     * Gets as productCode
     *
     * A codified value that systematically supports characterization and classification of medical products of human origin inclusive of processing conditions such as additives, volumes and handling conditions.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Sets a new productCode
     *
     * A codified value that systematically supports characterization and classification of medical products of human origin inclusive of processing conditions such as additives, volumes and handling conditions.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $productCode
     * @return self
     */
    public function setProductCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $productCode = null)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * Adds as parent
     *
     * Parent product (if any) for this biologically-derived product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $parent
     */
    public function addToParent(\TKusy\Hl7Fhir\R5\ReferenceType $parent)
    {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * isset parent
     *
     * Parent product (if any) for this biologically-derived product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParent($index)
    {
        return isset($this->parent[$index]);
    }

    /**
     * unset parent
     *
     * Parent product (if any) for this biologically-derived product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParent($index)
    {
        unset($this->parent[$index]);
    }

    /**
     * Gets as parent
     *
     * Parent product (if any) for this biologically-derived product.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * Parent product (if any) for this biologically-derived product.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $parent
     * @return self
     */
    public function setParent(array $parent = null)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Adds as request
     *
     * Request to obtain and/or infuse this biologically derived product.
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
     * Request to obtain and/or infuse this biologically derived product.
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
     * Request to obtain and/or infuse this biologically derived product.
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
     * Request to obtain and/or infuse this biologically derived product.
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
     * Request to obtain and/or infuse this biologically derived product.
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
     * Adds as identifier
     *
     * Unique instance identifiers assigned to a biologically derived product. Note: This is a business identifier, not a resource identifier.
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
     * Unique instance identifiers assigned to a biologically derived product. Note: This is a business identifier, not a resource identifier.
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
     * Unique instance identifiers assigned to a biologically derived product. Note: This is a business identifier, not a resource identifier.
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
     * Unique instance identifiers assigned to a biologically derived product. Note: This is a business identifier, not a resource identifier.
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
     * Unique instance identifiers assigned to a biologically derived product. Note: This is a business identifier, not a resource identifier.
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
     * Gets as biologicalSourceEvent
     *
     * An identifier that supports traceability to the event during which material in this product from one or more biological entities was obtained or pooled.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getBiologicalSourceEvent()
    {
        return $this->biologicalSourceEvent;
    }

    /**
     * Sets a new biologicalSourceEvent
     *
     * An identifier that supports traceability to the event during which material in this product from one or more biological entities was obtained or pooled.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $biologicalSourceEvent
     * @return self
     */
    public function setBiologicalSourceEvent(?\TKusy\Hl7Fhir\R5\IdentifierType $biologicalSourceEvent = null)
    {
        $this->biologicalSourceEvent = $biologicalSourceEvent;
        return $this;
    }

    /**
     * Adds as processingFacility
     *
     * Processing facilities responsible for the labeling and distribution of this biologically derived product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $processingFacility
     */
    public function addToProcessingFacility(\TKusy\Hl7Fhir\R5\ReferenceType $processingFacility)
    {
        $this->processingFacility[] = $processingFacility;
        return $this;
    }

    /**
     * isset processingFacility
     *
     * Processing facilities responsible for the labeling and distribution of this biologically derived product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcessingFacility($index)
    {
        return isset($this->processingFacility[$index]);
    }

    /**
     * unset processingFacility
     *
     * Processing facilities responsible for the labeling and distribution of this biologically derived product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcessingFacility($index)
    {
        unset($this->processingFacility[$index]);
    }

    /**
     * Gets as processingFacility
     *
     * Processing facilities responsible for the labeling and distribution of this biologically derived product.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getProcessingFacility()
    {
        return $this->processingFacility;
    }

    /**
     * Sets a new processingFacility
     *
     * Processing facilities responsible for the labeling and distribution of this biologically derived product.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $processingFacility
     * @return self
     */
    public function setProcessingFacility(array $processingFacility = null)
    {
        $this->processingFacility = $processingFacility;
        return $this;
    }

    /**
     * Gets as division
     *
     * A unique identifier for an aliquot of a product. Used to distinguish individual aliquots of a product carrying the same biologicalSource and productCode identifiers.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Sets a new division
     *
     * A unique identifier for an aliquot of a product. Used to distinguish individual aliquots of a product carrying the same biologicalSource and productCode identifiers.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $division
     * @return self
     */
    public function setDivision(?\TKusy\Hl7Fhir\R5\StringType $division = null)
    {
        $this->division = $division;
        return $this;
    }

    /**
     * Gets as productStatus
     *
     * Whether the product is currently available.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getProductStatus()
    {
        return $this->productStatus;
    }

    /**
     * Sets a new productStatus
     *
     * Whether the product is currently available.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $productStatus
     * @return self
     */
    public function setProductStatus(?\TKusy\Hl7Fhir\R5\CodingType $productStatus = null)
    {
        $this->productStatus = $productStatus;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * Date, and where relevant time, of expiration.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * Date, and where relevant time, of expiration.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $expirationDate
     * @return self
     */
    public function setExpirationDate(?\TKusy\Hl7Fhir\R5\DateTimeType $expirationDate = null)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as collection
     *
     * How this product was collected.
     *
     * @return \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductCollectionType
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Sets a new collection
     *
     * How this product was collected.
     *
     * @param \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductCollectionType $collection
     * @return self
     */
    public function setCollection(?\TKusy\Hl7Fhir\R5\BiologicallyDerivedProductCollectionType $collection = null)
    {
        $this->collection = $collection;
        return $this;
    }

    /**
     * Gets as storageTempRequirements
     *
     * The temperature requirements for storage of the biologically-derived product.
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getStorageTempRequirements()
    {
        return $this->storageTempRequirements;
    }

    /**
     * Sets a new storageTempRequirements
     *
     * The temperature requirements for storage of the biologically-derived product.
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $storageTempRequirements
     * @return self
     */
    public function setStorageTempRequirements(?\TKusy\Hl7Fhir\R5\RangeType $storageTempRequirements = null)
    {
        $this->storageTempRequirements = $storageTempRequirements;
        return $this;
    }

    /**
     * Adds as property
     *
     * A property that is specific to this BiologicallyDerviedProduct instance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductPropertyType $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\BiologicallyDerivedProductPropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * A property that is specific to this BiologicallyDerviedProduct instance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * A property that is specific to this BiologicallyDerviedProduct instance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * A property that is specific to this BiologicallyDerviedProduct instance.
     *
     * @return \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductPropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * A property that is specific to this BiologicallyDerviedProduct instance.
     *
     * @param \TKusy\Hl7Fhir\R5\BiologicallyDerivedProductPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }


}

