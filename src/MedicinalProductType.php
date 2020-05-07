<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductType
 *
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: MedicinalProduct
 */
class MedicinalProductType extends DomainResourceType
{

    /**
     * Business identifier for this product. Could be an MPID.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * If this medicine applies to human or veterinary uses.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $domain
     */
    private $domain = null;

    /**
     * The dose form for a single part product, or combined form of a multiple part product.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $combinedPharmaceuticalDoseForm
     */
    private $combinedPharmaceuticalDoseForm = null;

    /**
     * The legal status of supply of the medicinal product as classified by the regulator.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $legalStatusOfSupply
     */
    private $legalStatusOfSupply = null;

    /**
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $additionalMonitoringIndicator
     */
    private $additionalMonitoringIndicator = null;

    /**
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $specialMeasures
     */
    private $specialMeasures = [
        
    ];

    /**
     * If authorised for use in children.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $paediatricUseIndicator
     */
    private $paediatricUseIndicator = null;

    /**
     * Allows the product to be classified by various systems.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $productClassification
     */
    private $productClassification = [
        
    ];

    /**
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
     *
     * @var \TKusy\Hl7FhirR4\MarketingStatusType[] $marketingStatus
     */
    private $marketingStatus = [
        
    ];

    /**
     * Pharmaceutical aspects of product.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $pharmaceuticalProduct
     */
    private $pharmaceuticalProduct = [
        
    ];

    /**
     * Package representation for the product.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $packagedMedicinalProduct
     */
    private $packagedMedicinalProduct = [
        
    ];

    /**
     * Supporting documentation, typically for regulatory submission.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $attachedDocument
     */
    private $attachedDocument = [
        
    ];

    /**
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $masterFile
     */
    private $masterFile = [
        
    ];

    /**
     * A product specific contact, person (in a role), or an organization.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Clinical trials or studies that this product is involved in.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $clinicalTrial
     */
    private $clinicalTrial = [
        
    ];

    /**
     * The product's name, including full name and possibly coded parts.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductNameType[] $name
     */
    private $name = [
        
    ];

    /**
     * Reference to another product, e.g. for linking authorised to investigational product.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $crossReference
     */
    private $crossReference = [
        
    ];

    /**
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductManufacturingBusinessOperationType[] $manufacturingBusinessOperation
     */
    private $manufacturingBusinessOperation = [
        
    ];

    /**
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductSpecialDesignationType[] $specialDesignation
     */
    private $specialDesignation = [
        
    ];

    /**
     * Adds as identifier
     *
     * Business identifier for this product. Could be an MPID.
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
     * Business identifier for this product. Could be an MPID.
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
     * Business identifier for this product. Could be an MPID.
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
     * Business identifier for this product. Could be an MPID.
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
     * Business identifier for this product. Could be an MPID.
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
     * Regulatory type, e.g. Investigational or Authorized.
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
     * Regulatory type, e.g. Investigational or Authorized.
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
     * Gets as domain
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets a new domain
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $domain
     * @return self
     */
    public function setDomain(\TKusy\Hl7FhirR4\CodingType $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Gets as combinedPharmaceuticalDoseForm
     *
     * The dose form for a single part product, or combined form of a multiple part product.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCombinedPharmaceuticalDoseForm()
    {
        return $this->combinedPharmaceuticalDoseForm;
    }

    /**
     * Sets a new combinedPharmaceuticalDoseForm
     *
     * The dose form for a single part product, or combined form of a multiple part product.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $combinedPharmaceuticalDoseForm
     * @return self
     */
    public function setCombinedPharmaceuticalDoseForm(\TKusy\Hl7FhirR4\CodeableConceptType $combinedPharmaceuticalDoseForm)
    {
        $this->combinedPharmaceuticalDoseForm = $combinedPharmaceuticalDoseForm;
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
     * Gets as additionalMonitoringIndicator
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAdditionalMonitoringIndicator()
    {
        return $this->additionalMonitoringIndicator;
    }

    /**
     * Sets a new additionalMonitoringIndicator
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $additionalMonitoringIndicator
     * @return self
     */
    public function setAdditionalMonitoringIndicator(\TKusy\Hl7FhirR4\CodeableConceptType $additionalMonitoringIndicator)
    {
        $this->additionalMonitoringIndicator = $additionalMonitoringIndicator;
        return $this;
    }

    /**
     * Adds as specialMeasures
     *
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $specialMeasures
     */
    public function addToSpecialMeasures(\TKusy\Hl7FhirR4\StringType $specialMeasures)
    {
        $this->specialMeasures[] = $specialMeasures;
        return $this;
    }

    /**
     * isset specialMeasures
     *
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialMeasures($index)
    {
        return isset($this->specialMeasures[$index]);
    }

    /**
     * unset specialMeasures
     *
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialMeasures($index)
    {
        unset($this->specialMeasures[$index]);
    }

    /**
     * Gets as specialMeasures
     *
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getSpecialMeasures()
    {
        return $this->specialMeasures;
    }

    /**
     * Sets a new specialMeasures
     *
     * Whether the Medicinal Product is subject to special measures for regulatory reasons.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $specialMeasures
     * @return self
     */
    public function setSpecialMeasures(array $specialMeasures)
    {
        $this->specialMeasures = $specialMeasures;
        return $this;
    }

    /**
     * Gets as paediatricUseIndicator
     *
     * If authorised for use in children.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPaediatricUseIndicator()
    {
        return $this->paediatricUseIndicator;
    }

    /**
     * Sets a new paediatricUseIndicator
     *
     * If authorised for use in children.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $paediatricUseIndicator
     * @return self
     */
    public function setPaediatricUseIndicator(\TKusy\Hl7FhirR4\CodeableConceptType $paediatricUseIndicator)
    {
        $this->paediatricUseIndicator = $paediatricUseIndicator;
        return $this;
    }

    /**
     * Adds as productClassification
     *
     * Allows the product to be classified by various systems.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $productClassification
     */
    public function addToProductClassification(\TKusy\Hl7FhirR4\CodeableConceptType $productClassification)
    {
        $this->productClassification[] = $productClassification;
        return $this;
    }

    /**
     * isset productClassification
     *
     * Allows the product to be classified by various systems.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductClassification($index)
    {
        return isset($this->productClassification[$index]);
    }

    /**
     * unset productClassification
     *
     * Allows the product to be classified by various systems.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductClassification($index)
    {
        unset($this->productClassification[$index]);
    }

    /**
     * Gets as productClassification
     *
     * Allows the product to be classified by various systems.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getProductClassification()
    {
        return $this->productClassification;
    }

    /**
     * Sets a new productClassification
     *
     * Allows the product to be classified by various systems.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $productClassification
     * @return self
     */
    public function setProductClassification(array $productClassification)
    {
        $this->productClassification = $productClassification;
        return $this;
    }

    /**
     * Adds as marketingStatus
     *
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
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
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
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
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
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
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
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
     * Marketing status of the medicinal product, in contrast to marketing authorizaton.
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
     * Adds as pharmaceuticalProduct
     *
     * Pharmaceutical aspects of product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $pharmaceuticalProduct
     */
    public function addToPharmaceuticalProduct(\TKusy\Hl7FhirR4\ReferenceType $pharmaceuticalProduct)
    {
        $this->pharmaceuticalProduct[] = $pharmaceuticalProduct;
        return $this;
    }

    /**
     * isset pharmaceuticalProduct
     *
     * Pharmaceutical aspects of product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPharmaceuticalProduct($index)
    {
        return isset($this->pharmaceuticalProduct[$index]);
    }

    /**
     * unset pharmaceuticalProduct
     *
     * Pharmaceutical aspects of product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPharmaceuticalProduct($index)
    {
        unset($this->pharmaceuticalProduct[$index]);
    }

    /**
     * Gets as pharmaceuticalProduct
     *
     * Pharmaceutical aspects of product.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPharmaceuticalProduct()
    {
        return $this->pharmaceuticalProduct;
    }

    /**
     * Sets a new pharmaceuticalProduct
     *
     * Pharmaceutical aspects of product.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $pharmaceuticalProduct
     * @return self
     */
    public function setPharmaceuticalProduct(array $pharmaceuticalProduct)
    {
        $this->pharmaceuticalProduct = $pharmaceuticalProduct;
        return $this;
    }

    /**
     * Adds as packagedMedicinalProduct
     *
     * Package representation for the product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $packagedMedicinalProduct
     */
    public function addToPackagedMedicinalProduct(\TKusy\Hl7FhirR4\ReferenceType $packagedMedicinalProduct)
    {
        $this->packagedMedicinalProduct[] = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * isset packagedMedicinalProduct
     *
     * Package representation for the product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackagedMedicinalProduct($index)
    {
        return isset($this->packagedMedicinalProduct[$index]);
    }

    /**
     * unset packagedMedicinalProduct
     *
     * Package representation for the product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackagedMedicinalProduct($index)
    {
        unset($this->packagedMedicinalProduct[$index]);
    }

    /**
     * Gets as packagedMedicinalProduct
     *
     * Package representation for the product.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPackagedMedicinalProduct()
    {
        return $this->packagedMedicinalProduct;
    }

    /**
     * Sets a new packagedMedicinalProduct
     *
     * Package representation for the product.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $packagedMedicinalProduct
     * @return self
     */
    public function setPackagedMedicinalProduct(array $packagedMedicinalProduct)
    {
        $this->packagedMedicinalProduct = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * Adds as attachedDocument
     *
     * Supporting documentation, typically for regulatory submission.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $attachedDocument
     */
    public function addToAttachedDocument(\TKusy\Hl7FhirR4\ReferenceType $attachedDocument)
    {
        $this->attachedDocument[] = $attachedDocument;
        return $this;
    }

    /**
     * isset attachedDocument
     *
     * Supporting documentation, typically for regulatory submission.
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
     * Supporting documentation, typically for regulatory submission.
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
     * Supporting documentation, typically for regulatory submission.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getAttachedDocument()
    {
        return $this->attachedDocument;
    }

    /**
     * Sets a new attachedDocument
     *
     * Supporting documentation, typically for regulatory submission.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $attachedDocument
     * @return self
     */
    public function setAttachedDocument(array $attachedDocument)
    {
        $this->attachedDocument = $attachedDocument;
        return $this;
    }

    /**
     * Adds as masterFile
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $masterFile
     */
    public function addToMasterFile(\TKusy\Hl7FhirR4\ReferenceType $masterFile)
    {
        $this->masterFile[] = $masterFile;
        return $this;
    }

    /**
     * isset masterFile
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMasterFile($index)
    {
        return isset($this->masterFile[$index]);
    }

    /**
     * unset masterFile
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMasterFile($index)
    {
        unset($this->masterFile[$index]);
    }

    /**
     * Gets as masterFile
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getMasterFile()
    {
        return $this->masterFile;
    }

    /**
     * Sets a new masterFile
     *
     * A master file for to the medicinal product (e.g. Pharmacovigilance System Master File).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $masterFile
     * @return self
     */
    public function setMasterFile(array $masterFile)
    {
        $this->masterFile = $masterFile;
        return $this;
    }

    /**
     * Adds as contact
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $contact
     */
    public function addToContact(\TKusy\Hl7FhirR4\ReferenceType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adds as clinicalTrial
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $clinicalTrial
     */
    public function addToClinicalTrial(\TKusy\Hl7FhirR4\ReferenceType $clinicalTrial)
    {
        $this->clinicalTrial[] = $clinicalTrial;
        return $this;
    }

    /**
     * isset clinicalTrial
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClinicalTrial($index)
    {
        return isset($this->clinicalTrial[$index]);
    }

    /**
     * unset clinicalTrial
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClinicalTrial($index)
    {
        unset($this->clinicalTrial[$index]);
    }

    /**
     * Gets as clinicalTrial
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getClinicalTrial()
    {
        return $this->clinicalTrial;
    }

    /**
     * Sets a new clinicalTrial
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $clinicalTrial
     * @return self
     */
    public function setClinicalTrial(array $clinicalTrial)
    {
        $this->clinicalTrial = $clinicalTrial;
        return $this;
    }

    /**
     * Adds as name
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductNameType $name
     */
    public function addToName(\TKusy\Hl7FhirR4\MedicinalProductNameType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductNameType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductNameType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as crossReference
     *
     * Reference to another product, e.g. for linking authorised to investigational product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $crossReference
     */
    public function addToCrossReference(\TKusy\Hl7FhirR4\IdentifierType $crossReference)
    {
        $this->crossReference[] = $crossReference;
        return $this;
    }

    /**
     * isset crossReference
     *
     * Reference to another product, e.g. for linking authorised to investigational product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCrossReference($index)
    {
        return isset($this->crossReference[$index]);
    }

    /**
     * unset crossReference
     *
     * Reference to another product, e.g. for linking authorised to investigational product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCrossReference($index)
    {
        unset($this->crossReference[$index]);
    }

    /**
     * Gets as crossReference
     *
     * Reference to another product, e.g. for linking authorised to investigational product.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getCrossReference()
    {
        return $this->crossReference;
    }

    /**
     * Sets a new crossReference
     *
     * Reference to another product, e.g. for linking authorised to investigational product.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $crossReference
     * @return self
     */
    public function setCrossReference(array $crossReference)
    {
        $this->crossReference = $crossReference;
        return $this;
    }

    /**
     * Adds as manufacturingBusinessOperation
     *
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductManufacturingBusinessOperationType $manufacturingBusinessOperation
     */
    public function addToManufacturingBusinessOperation(\TKusy\Hl7FhirR4\MedicinalProductManufacturingBusinessOperationType $manufacturingBusinessOperation)
    {
        $this->manufacturingBusinessOperation[] = $manufacturingBusinessOperation;
        return $this;
    }

    /**
     * isset manufacturingBusinessOperation
     *
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturingBusinessOperation($index)
    {
        return isset($this->manufacturingBusinessOperation[$index]);
    }

    /**
     * unset manufacturingBusinessOperation
     *
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturingBusinessOperation($index)
    {
        unset($this->manufacturingBusinessOperation[$index]);
    }

    /**
     * Gets as manufacturingBusinessOperation
     *
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductManufacturingBusinessOperationType[]
     */
    public function getManufacturingBusinessOperation()
    {
        return $this->manufacturingBusinessOperation;
    }

    /**
     * Sets a new manufacturingBusinessOperation
     *
     * An operation applied to the product, for manufacturing or adminsitrative purpose.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductManufacturingBusinessOperationType[] $manufacturingBusinessOperation
     * @return self
     */
    public function setManufacturingBusinessOperation(array $manufacturingBusinessOperation)
    {
        $this->manufacturingBusinessOperation = $manufacturingBusinessOperation;
        return $this;
    }

    /**
     * Adds as specialDesignation
     *
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductSpecialDesignationType $specialDesignation
     */
    public function addToSpecialDesignation(\TKusy\Hl7FhirR4\MedicinalProductSpecialDesignationType $specialDesignation)
    {
        $this->specialDesignation[] = $specialDesignation;
        return $this;
    }

    /**
     * isset specialDesignation
     *
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialDesignation($index)
    {
        return isset($this->specialDesignation[$index]);
    }

    /**
     * unset specialDesignation
     *
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialDesignation($index)
    {
        unset($this->specialDesignation[$index]);
    }

    /**
     * Gets as specialDesignation
     *
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductSpecialDesignationType[]
     */
    public function getSpecialDesignation()
    {
        return $this->specialDesignation;
    }

    /**
     * Sets a new specialDesignation
     *
     * Indicates if the medicinal product has an orphan designation for the treatment of a rare disease.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductSpecialDesignationType[] $specialDesignation
     * @return self
     */
    public function setSpecialDesignation(array $specialDesignation)
    {
        $this->specialDesignation = $specialDesignation;
        return $this;
    }


}

