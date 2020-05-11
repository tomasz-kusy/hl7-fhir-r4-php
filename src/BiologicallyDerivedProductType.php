<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing BiologicallyDerivedProductType
 *
 * A material substance originating from a biological entity intended to be transplanted or infused
 * into another (possibly the same) biological entity.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: BiologicallyDerivedProduct
 */
class BiologicallyDerivedProductType extends DomainResourceType
{

    /**
     * This records identifiers associated with this biologically derived product instance that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Broad category of this product.
     *
     * @var \TKusy\Hl7FhirR4\BiologicallyDerivedProductCategoryType $productCategory
     */
    private $productCategory = null;

    /**
     * A code that identifies the kind of this biologically derived product (SNOMED Ctcode).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $productCode
     */
    private $productCode = null;

    /**
     * Whether the product is currently available.
     *
     * @var \TKusy\Hl7FhirR4\BiologicallyDerivedProductStatusType $status
     */
    private $status = null;

    /**
     * Procedure request to obtain this biologically derived product.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $request
     */
    private $request = [
        
    ];

    /**
     * Number of discrete units within this product.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $quantity
     */
    private $quantity = null;

    /**
     * Parent product (if any).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $parent
     */
    private $parent = [
        
    ];

    /**
     * How this product was collected.
     *
     * @var \TKusy\Hl7FhirR4\BiologicallyDerivedProductCollectionType $collection
     */
    private $collection = null;

    /**
     * Any processing of the product during collection that does not change the fundamental nature of the product. For example adding anti-coagulants during the collection of Peripheral Blood Stem Cells.
     *
     * @var \TKusy\Hl7FhirR4\BiologicallyDerivedProductProcessingType[] $processing
     */
    private $processing = [
        
    ];

    /**
     * Any manipulation of product post-collection that is intended to alter the product. For example a buffy-coat enrichment or CD8 reduction of Peripheral Blood Stem Cells to make it more suitable for infusion.
     *
     * @var \TKusy\Hl7FhirR4\BiologicallyDerivedProductManipulationType $manipulation
     */
    private $manipulation = null;

    /**
     * Product storage.
     *
     * @var \TKusy\Hl7FhirR4\BiologicallyDerivedProductStorageType[] $storage
     */
    private $storage = [
        
    ];

    /**
     * Adds as identifier
     *
     * This records identifiers associated with this biologically derived product instance that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * This records identifiers associated with this biologically derived product instance that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * This records identifiers associated with this biologically derived product instance that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * This records identifiers associated with this biologically derived product instance that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * This records identifiers associated with this biologically derived product instance that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * Gets as productCategory
     *
     * Broad category of this product.
     *
     * @return \TKusy\Hl7FhirR4\BiologicallyDerivedProductCategoryType
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
     * @param \TKusy\Hl7FhirR4\BiologicallyDerivedProductCategoryType $productCategory
     * @return self
     */
    public function setProductCategory(\TKusy\Hl7FhirR4\BiologicallyDerivedProductCategoryType $productCategory)
    {
        $this->productCategory = $productCategory;
        return $this;
    }

    /**
     * Gets as productCode
     *
     * A code that identifies the kind of this biologically derived product (SNOMED Ctcode).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Sets a new productCode
     *
     * A code that identifies the kind of this biologically derived product (SNOMED Ctcode).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $productCode
     * @return self
     */
    public function setProductCode(\TKusy\Hl7FhirR4\CodeableConceptType $productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * Gets as status
     *
     * Whether the product is currently available.
     *
     * @return \TKusy\Hl7FhirR4\BiologicallyDerivedProductStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Whether the product is currently available.
     *
     * @param \TKusy\Hl7FhirR4\BiologicallyDerivedProductStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\BiologicallyDerivedProductStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as request
     *
     * Procedure request to obtain this biologically derived product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $request
     */
    public function addToRequest(\TKusy\Hl7FhirR4\ReferenceType $request)
    {
        $this->request[] = $request;
        return $this;
    }

    /**
     * isset request
     *
     * Procedure request to obtain this biologically derived product.
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
     * Procedure request to obtain this biologically derived product.
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
     * Procedure request to obtain this biologically derived product.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * Procedure request to obtain this biologically derived product.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $request
     * @return self
     */
    public function setRequest(array $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Number of discrete units within this product.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Number of discrete units within this product.
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\IntegerType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as parent
     *
     * Parent product (if any).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $parent
     */
    public function addToParent(\TKusy\Hl7FhirR4\ReferenceType $parent)
    {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * isset parent
     *
     * Parent product (if any).
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
     * Parent product (if any).
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
     * Parent product (if any).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * Parent product (if any).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $parent
     * @return self
     */
    public function setParent(array $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as collection
     *
     * How this product was collected.
     *
     * @return \TKusy\Hl7FhirR4\BiologicallyDerivedProductCollectionType
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
     * @param \TKusy\Hl7FhirR4\BiologicallyDerivedProductCollectionType $collection
     * @return self
     */
    public function setCollection(\TKusy\Hl7FhirR4\BiologicallyDerivedProductCollectionType $collection)
    {
        $this->collection = $collection;
        return $this;
    }

    /**
     * Adds as processing
     *
     * Any processing of the product during collection that does not change the fundamental nature of the product. For example adding anti-coagulants during the collection of Peripheral Blood Stem Cells.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\BiologicallyDerivedProductProcessingType $processing
     */
    public function addToProcessing(\TKusy\Hl7FhirR4\BiologicallyDerivedProductProcessingType $processing)
    {
        $this->processing[] = $processing;
        return $this;
    }

    /**
     * isset processing
     *
     * Any processing of the product during collection that does not change the fundamental nature of the product. For example adding anti-coagulants during the collection of Peripheral Blood Stem Cells.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcessing($index)
    {
        return isset($this->processing[$index]);
    }

    /**
     * unset processing
     *
     * Any processing of the product during collection that does not change the fundamental nature of the product. For example adding anti-coagulants during the collection of Peripheral Blood Stem Cells.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcessing($index)
    {
        unset($this->processing[$index]);
    }

    /**
     * Gets as processing
     *
     * Any processing of the product during collection that does not change the fundamental nature of the product. For example adding anti-coagulants during the collection of Peripheral Blood Stem Cells.
     *
     * @return \TKusy\Hl7FhirR4\BiologicallyDerivedProductProcessingType[]
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    /**
     * Sets a new processing
     *
     * Any processing of the product during collection that does not change the fundamental nature of the product. For example adding anti-coagulants during the collection of Peripheral Blood Stem Cells.
     *
     * @param \TKusy\Hl7FhirR4\BiologicallyDerivedProductProcessingType[] $processing
     * @return self
     */
    public function setProcessing(array $processing)
    {
        $this->processing = $processing;
        return $this;
    }

    /**
     * Gets as manipulation
     *
     * Any manipulation of product post-collection that is intended to alter the product. For example a buffy-coat enrichment or CD8 reduction of Peripheral Blood Stem Cells to make it more suitable for infusion.
     *
     * @return \TKusy\Hl7FhirR4\BiologicallyDerivedProductManipulationType
     */
    public function getManipulation()
    {
        return $this->manipulation;
    }

    /**
     * Sets a new manipulation
     *
     * Any manipulation of product post-collection that is intended to alter the product. For example a buffy-coat enrichment or CD8 reduction of Peripheral Blood Stem Cells to make it more suitable for infusion.
     *
     * @param \TKusy\Hl7FhirR4\BiologicallyDerivedProductManipulationType $manipulation
     * @return self
     */
    public function setManipulation(\TKusy\Hl7FhirR4\BiologicallyDerivedProductManipulationType $manipulation)
    {
        $this->manipulation = $manipulation;
        return $this;
    }

    /**
     * Adds as storage
     *
     * Product storage.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\BiologicallyDerivedProductStorageType $storage
     */
    public function addToStorage(\TKusy\Hl7FhirR4\BiologicallyDerivedProductStorageType $storage)
    {
        $this->storage[] = $storage;
        return $this;
    }

    /**
     * isset storage
     *
     * Product storage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStorage($index)
    {
        return isset($this->storage[$index]);
    }

    /**
     * unset storage
     *
     * Product storage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStorage($index)
    {
        unset($this->storage[$index]);
    }

    /**
     * Gets as storage
     *
     * Product storage.
     *
     * @return \TKusy\Hl7FhirR4\BiologicallyDerivedProductStorageType[]
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Sets a new storage
     *
     * Product storage.
     *
     * @param \TKusy\Hl7FhirR4\BiologicallyDerivedProductStorageType[] $storage
     * @return self
     */
    public function setStorage(array $storage)
    {
        $this->storage = $storage;
        return $this;
    }


}

