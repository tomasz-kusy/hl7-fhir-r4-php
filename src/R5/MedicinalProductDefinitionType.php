<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicinalProductDefinitionType
 *
 * A medicinal product, being a substance or combination of substances that is intended to treat, prevent or diagnose a disease, or to restore, correct or modify physiological functions by exerting a pharmacological, immunological or metabolic action. This resource is intended to define and detail such products and their properties, for uses other than direct patient care (e.g. regulatory use, or drug catalogs).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicinalProductDefinition
 */
class MedicinalProductDefinitionType extends DomainResourceType
{

    /**
     * Business identifier for this product. Could be an MPID. When in development or being regulated, products are typically referenced by official identifiers, assigned by a manufacturer or regulator, and unique to a product (which, when compared to a product instance being prescribed, is actually a product type). See also MedicinalProductDefinition.code.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * If this medicine applies to human or veterinary uses.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $domain
     */
    private $domain = null;

    /**
     * A business identifier relating to a specific version of the product, this is commonly used to support revisions to an existing product.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * The status within the lifecycle of this product record. A high-level status, this is not intended to duplicate details carried elsewhere such as legal status, or authorization status.
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
     * General description of this product.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The dose form for a single part product, or combined form of a multiple part product. This is one concept that describes all the components. It does not represent the form with components physically mixed, if that might be necessary, for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $combinedPharmaceuticalDoseForm
     */
    private $combinedPharmaceuticalDoseForm = null;

    /**
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. See also AdministrableProductDefinition resource. MedicinalProductDefinition.route is the same concept as AdministrableProductDefinition.routeOfAdministration.code, and they cannot be used together.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $route
     */
    private $route = null;

    /**
     * Description of indication(s) for this product, used when structured indications are not required. In cases where structured indications are required, they are captured using the ClinicalUseDefinition resource. An indication is a medical situation for which using the product is appropriate.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $indication
     */
    private $indication = null;

    /**
     * The legal status of supply of the medicinal product as classified by the regulator.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $legalStatusOfSupply
     */
    private $legalStatusOfSupply = null;

    /**
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons, such as heightened reporting requirements.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $additionalMonitoringIndicator
     */
    private $additionalMonitoringIndicator = null;

    /**
     * Whether the Medicinal Product is subject to special measures for regulatory reasons, such as a requirement to conduct post-authorization studies.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialMeasures
     */
    private $specialMeasures = null;

    /**
     * If authorised for use in children, or infants, neonates etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $pediatricUseIndicator
     */
    private $pediatricUseIndicator = null;

    /**
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classification
     */
    private $classification = null;

    /**
     * Marketing status of the medicinal product, in contrast to marketing authorization. This refers to the product being actually 'on the market' as opposed to being allowed to be on the market (which is an authorization).
     *
     * @var \TKusy\Hl7Fhir\R5\MarketingStatusType[] $marketingStatus
     */
    private $marketingStatus = null;

    /**
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $packagedMedicinalProduct
     */
    private $packagedMedicinalProduct = null;

    /**
     * Types of medicinal manufactured items and/or devices that this product consists of, such as tablets, capsule, or syringes. Used as a direct link when the item's packaging is not being recorded (see also PackagedProductDefinition.package.containedItem.item).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $comprisedOf
     */
    private $comprisedOf = null;

    /**
     * The ingredients of this medicinal product - when not detailed in other resources. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource, or indirectly via incoming AdministrableProductDefinition, PackagedProductDefinition or ManufacturedItemDefinition references. In cases where those levels of detail are not used, the ingredients may be specified directly here as codes.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $ingredient
     */
    private $ingredient = null;

    /**
     * Any component of the drug product which is not the chemical entity defined as the drug substance, or an excipient in the drug product. This includes process-related impurities and contaminants, product-related impurities including degradation products.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $impurity
     */
    private $impurity = null;

    /**
     * Additional information or supporting documentation about the medicinal product.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $attachedDocument
     */
    private $attachedDocument = null;

    /**
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master File). Drug master files (DMFs) are documents submitted to regulatory agencies to provide confidential detailed information about facilities, processes or articles used in the manufacturing, processing, packaging and storing of drug products.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $masterFile
     */
    private $masterFile = null;

    /**
     * A product specific contact, person (in a role), or an organization.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionContactType[] $contact
     */
    private $contact = null;

    /**
     * Clinical trials or studies that this product is involved in.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $clinicalTrial
     */
    private $clinicalTrial = null;

    /**
     * A code that this product is known by, usually within some formal terminology, perhaps assigned by a third party (i.e. not the manufacturer or regulator). Products (types of medications) tend to be known by identifiers during development and within regulatory process. However when they are prescribed they tend to be identified by codes. The same product may be have multiple codes, applied to it by multiple organizations.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType[] $code
     */
    private $code = null;

    /**
     * The product's name, including full name and possibly coded parts.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionNameType[] $name
     */
    private $name = null;

    /**
     * Reference to another product, e.g. for linking authorised to investigational product, or a virtual product.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionCrossReferenceType[] $crossReference
     */
    private $crossReference = null;

    /**
     * A manufacturing or administrative process or step associated with (or performed on) the medicinal product.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionOperationType[] $operation
     */
    private $operation = null;

    /**
     * Allows the key product features to be recorded, such as "sugar free", "modified release", "parallel import".
     *
     * @var \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionCharacteristicType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Adds as identifier
     *
     * Business identifier for this product. Could be an MPID. When in development or being regulated, products are typically referenced by official identifiers, assigned by a manufacturer or regulator, and unique to a product (which, when compared to a product instance being prescribed, is actually a product type). See also MedicinalProductDefinition.code.
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
     * Business identifier for this product. Could be an MPID. When in development or being regulated, products are typically referenced by official identifiers, assigned by a manufacturer or regulator, and unique to a product (which, when compared to a product instance being prescribed, is actually a product type). See also MedicinalProductDefinition.code.
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
     * Business identifier for this product. Could be an MPID. When in development or being regulated, products are typically referenced by official identifiers, assigned by a manufacturer or regulator, and unique to a product (which, when compared to a product instance being prescribed, is actually a product type). See also MedicinalProductDefinition.code.
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
     * Business identifier for this product. Could be an MPID. When in development or being regulated, products are typically referenced by official identifiers, assigned by a manufacturer or regulator, and unique to a product (which, when compared to a product instance being prescribed, is actually a product type). See also MedicinalProductDefinition.code.
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
     * Business identifier for this product. Could be an MPID. When in development or being regulated, products are typically referenced by official identifiers, assigned by a manufacturer or regulator, and unique to a product (which, when compared to a product instance being prescribed, is actually a product type). See also MedicinalProductDefinition.code.
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
     * Gets as type
     *
     * Regulatory type, e.g. Investigational or Authorized.
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
     * Regulatory type, e.g. Investigational or Authorized.
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
     * Gets as domain
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $domain
     * @return self
     */
    public function setDomain(?\TKusy\Hl7Fhir\R5\CodeableConceptType $domain = null)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Gets as version
     *
     * A business identifier relating to a specific version of the product, this is commonly used to support revisions to an existing product.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * A business identifier relating to a specific version of the product, this is commonly used to support revisions to an existing product.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $version
     * @return self
     */
    public function setVersion(?\TKusy\Hl7Fhir\R5\StringType $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status within the lifecycle of this product record. A high-level status, this is not intended to duplicate details carried elsewhere such as legal status, or authorization status.
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
     * The status within the lifecycle of this product record. A high-level status, this is not intended to duplicate details carried elsewhere such as legal status, or authorization status.
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
     * Gets as description
     *
     * General description of this product.
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
     * General description of this product.
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
     * Gets as combinedPharmaceuticalDoseForm
     *
     * The dose form for a single part product, or combined form of a multiple part product. This is one concept that describes all the components. It does not represent the form with components physically mixed, if that might be necessary, for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCombinedPharmaceuticalDoseForm()
    {
        return $this->combinedPharmaceuticalDoseForm;
    }

    /**
     * Sets a new combinedPharmaceuticalDoseForm
     *
     * The dose form for a single part product, or combined form of a multiple part product. This is one concept that describes all the components. It does not represent the form with components physically mixed, if that might be necessary, for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $combinedPharmaceuticalDoseForm
     * @return self
     */
    public function setCombinedPharmaceuticalDoseForm(?\TKusy\Hl7Fhir\R5\CodeableConceptType $combinedPharmaceuticalDoseForm = null)
    {
        $this->combinedPharmaceuticalDoseForm = $combinedPharmaceuticalDoseForm;
        return $this;
    }

    /**
     * Adds as route
     *
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. See also AdministrableProductDefinition resource. MedicinalProductDefinition.route is the same concept as AdministrableProductDefinition.routeOfAdministration.code, and they cannot be used together.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $route
     */
    public function addToRoute(\TKusy\Hl7Fhir\R5\CodeableConceptType $route)
    {
        $this->route[] = $route;
        return $this;
    }

    /**
     * isset route
     *
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. See also AdministrableProductDefinition resource. MedicinalProductDefinition.route is the same concept as AdministrableProductDefinition.routeOfAdministration.code, and they cannot be used together.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoute($index)
    {
        return isset($this->route[$index]);
    }

    /**
     * unset route
     *
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. See also AdministrableProductDefinition resource. MedicinalProductDefinition.route is the same concept as AdministrableProductDefinition.routeOfAdministration.code, and they cannot be used together.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoute($index)
    {
        unset($this->route[$index]);
    }

    /**
     * Gets as route
     *
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. See also AdministrableProductDefinition resource. MedicinalProductDefinition.route is the same concept as AdministrableProductDefinition.routeOfAdministration.code, and they cannot be used together.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Sets a new route
     *
     * The path by which the product is taken into or makes contact with the body. In some regions this is referred to as the licenced or approved route. See also AdministrableProductDefinition resource. MedicinalProductDefinition.route is the same concept as AdministrableProductDefinition.routeOfAdministration.code, and they cannot be used together.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $route
     * @return self
     */
    public function setRoute(array $route = null)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * Gets as indication
     *
     * Description of indication(s) for this product, used when structured indications are not required. In cases where structured indications are required, they are captured using the ClinicalUseDefinition resource. An indication is a medical situation for which using the product is appropriate.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Sets a new indication
     *
     * Description of indication(s) for this product, used when structured indications are not required. In cases where structured indications are required, they are captured using the ClinicalUseDefinition resource. An indication is a medical situation for which using the product is appropriate.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $indication
     * @return self
     */
    public function setIndication(?\TKusy\Hl7Fhir\R5\MarkdownType $indication = null)
    {
        $this->indication = $indication;
        return $this;
    }

    /**
     * Gets as legalStatusOfSupply
     *
     * The legal status of supply of the medicinal product as classified by the regulator.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $legalStatusOfSupply
     * @return self
     */
    public function setLegalStatusOfSupply(?\TKusy\Hl7Fhir\R5\CodeableConceptType $legalStatusOfSupply = null)
    {
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
    }

    /**
     * Gets as additionalMonitoringIndicator
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons, such as heightened reporting requirements.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAdditionalMonitoringIndicator()
    {
        return $this->additionalMonitoringIndicator;
    }

    /**
     * Sets a new additionalMonitoringIndicator
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory reasons, such as heightened reporting requirements.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $additionalMonitoringIndicator
     * @return self
     */
    public function setAdditionalMonitoringIndicator(?\TKusy\Hl7Fhir\R5\CodeableConceptType $additionalMonitoringIndicator = null)
    {
        $this->additionalMonitoringIndicator = $additionalMonitoringIndicator;
        return $this;
    }

    /**
     * Adds as specialMeasures
     *
     * Whether the Medicinal Product is subject to special measures for regulatory reasons, such as a requirement to conduct post-authorization studies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $specialMeasures
     */
    public function addToSpecialMeasures(\TKusy\Hl7Fhir\R5\CodeableConceptType $specialMeasures)
    {
        $this->specialMeasures[] = $specialMeasures;
        return $this;
    }

    /**
     * isset specialMeasures
     *
     * Whether the Medicinal Product is subject to special measures for regulatory reasons, such as a requirement to conduct post-authorization studies.
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
     * Whether the Medicinal Product is subject to special measures for regulatory reasons, such as a requirement to conduct post-authorization studies.
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
     * Whether the Medicinal Product is subject to special measures for regulatory reasons, such as a requirement to conduct post-authorization studies.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSpecialMeasures()
    {
        return $this->specialMeasures;
    }

    /**
     * Sets a new specialMeasures
     *
     * Whether the Medicinal Product is subject to special measures for regulatory reasons, such as a requirement to conduct post-authorization studies.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialMeasures
     * @return self
     */
    public function setSpecialMeasures(array $specialMeasures = null)
    {
        $this->specialMeasures = $specialMeasures;
        return $this;
    }

    /**
     * Gets as pediatricUseIndicator
     *
     * If authorised for use in children, or infants, neonates etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPediatricUseIndicator()
    {
        return $this->pediatricUseIndicator;
    }

    /**
     * Sets a new pediatricUseIndicator
     *
     * If authorised for use in children, or infants, neonates etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $pediatricUseIndicator
     * @return self
     */
    public function setPediatricUseIndicator(?\TKusy\Hl7Fhir\R5\CodeableConceptType $pediatricUseIndicator = null)
    {
        $this->pediatricUseIndicator = $pediatricUseIndicator;
        return $this;
    }

    /**
     * Adds as classification
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $classification
     */
    public function addToClassification(\TKusy\Hl7Fhir\R5\CodeableConceptType $classification)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * isset classification
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
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
     * Allows the product to be classified by various systems, commonly WHO ATC.
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
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classification
     * @return self
     */
    public function setClassification(array $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Adds as marketingStatus
     *
     * Marketing status of the medicinal product, in contrast to marketing authorization. This refers to the product being actually 'on the market' as opposed to being allowed to be on the market (which is an authorization).
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
     * Marketing status of the medicinal product, in contrast to marketing authorization. This refers to the product being actually 'on the market' as opposed to being allowed to be on the market (which is an authorization).
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
     * Marketing status of the medicinal product, in contrast to marketing authorization. This refers to the product being actually 'on the market' as opposed to being allowed to be on the market (which is an authorization).
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
     * Marketing status of the medicinal product, in contrast to marketing authorization. This refers to the product being actually 'on the market' as opposed to being allowed to be on the market (which is an authorization).
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
     * Marketing status of the medicinal product, in contrast to marketing authorization. This refers to the product being actually 'on the market' as opposed to being allowed to be on the market (which is an authorization).
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
     * Adds as packagedMedicinalProduct
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $packagedMedicinalProduct
     */
    public function addToPackagedMedicinalProduct(\TKusy\Hl7Fhir\R5\CodeableConceptType $packagedMedicinalProduct)
    {
        $this->packagedMedicinalProduct[] = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * isset packagedMedicinalProduct
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
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
     * Package type for the product. See also the PackagedProductDefinition resource.
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
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getPackagedMedicinalProduct()
    {
        return $this->packagedMedicinalProduct;
    }

    /**
     * Sets a new packagedMedicinalProduct
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $packagedMedicinalProduct
     * @return self
     */
    public function setPackagedMedicinalProduct(array $packagedMedicinalProduct = null)
    {
        $this->packagedMedicinalProduct = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * Adds as comprisedOf
     *
     * Types of medicinal manufactured items and/or devices that this product consists of, such as tablets, capsule, or syringes. Used as a direct link when the item's packaging is not being recorded (see also PackagedProductDefinition.package.containedItem.item).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $comprisedOf
     */
    public function addToComprisedOf(\TKusy\Hl7Fhir\R5\ReferenceType $comprisedOf)
    {
        $this->comprisedOf[] = $comprisedOf;
        return $this;
    }

    /**
     * isset comprisedOf
     *
     * Types of medicinal manufactured items and/or devices that this product consists of, such as tablets, capsule, or syringes. Used as a direct link when the item's packaging is not being recorded (see also PackagedProductDefinition.package.containedItem.item).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComprisedOf($index)
    {
        return isset($this->comprisedOf[$index]);
    }

    /**
     * unset comprisedOf
     *
     * Types of medicinal manufactured items and/or devices that this product consists of, such as tablets, capsule, or syringes. Used as a direct link when the item's packaging is not being recorded (see also PackagedProductDefinition.package.containedItem.item).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComprisedOf($index)
    {
        unset($this->comprisedOf[$index]);
    }

    /**
     * Gets as comprisedOf
     *
     * Types of medicinal manufactured items and/or devices that this product consists of, such as tablets, capsule, or syringes. Used as a direct link when the item's packaging is not being recorded (see also PackagedProductDefinition.package.containedItem.item).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getComprisedOf()
    {
        return $this->comprisedOf;
    }

    /**
     * Sets a new comprisedOf
     *
     * Types of medicinal manufactured items and/or devices that this product consists of, such as tablets, capsule, or syringes. Used as a direct link when the item's packaging is not being recorded (see also PackagedProductDefinition.package.containedItem.item).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $comprisedOf
     * @return self
     */
    public function setComprisedOf(array $comprisedOf = null)
    {
        $this->comprisedOf = $comprisedOf;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * The ingredients of this medicinal product - when not detailed in other resources. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource, or indirectly via incoming AdministrableProductDefinition, PackagedProductDefinition or ManufacturedItemDefinition references. In cases where those levels of detail are not used, the ingredients may be specified directly here as codes.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7Fhir\R5\CodeableConceptType $ingredient)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * isset ingredient
     *
     * The ingredients of this medicinal product - when not detailed in other resources. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource, or indirectly via incoming AdministrableProductDefinition, PackagedProductDefinition or ManufacturedItemDefinition references. In cases where those levels of detail are not used, the ingredients may be specified directly here as codes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIngredient($index)
    {
        return isset($this->ingredient[$index]);
    }

    /**
     * unset ingredient
     *
     * The ingredients of this medicinal product - when not detailed in other resources. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource, or indirectly via incoming AdministrableProductDefinition, PackagedProductDefinition or ManufacturedItemDefinition references. In cases where those levels of detail are not used, the ingredients may be specified directly here as codes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIngredient($index)
    {
        unset($this->ingredient[$index]);
    }

    /**
     * Gets as ingredient
     *
     * The ingredients of this medicinal product - when not detailed in other resources. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource, or indirectly via incoming AdministrableProductDefinition, PackagedProductDefinition or ManufacturedItemDefinition references. In cases where those levels of detail are not used, the ingredients may be specified directly here as codes.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets a new ingredient
     *
     * The ingredients of this medicinal product - when not detailed in other resources. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource, or indirectly via incoming AdministrableProductDefinition, PackagedProductDefinition or ManufacturedItemDefinition references. In cases where those levels of detail are not used, the ingredients may be specified directly here as codes.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient = null)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Adds as impurity
     *
     * Any component of the drug product which is not the chemical entity defined as the drug substance, or an excipient in the drug product. This includes process-related impurities and contaminants, product-related impurities including degradation products.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $impurity
     */
    public function addToImpurity(\TKusy\Hl7Fhir\R5\CodeableReferenceType $impurity)
    {
        $this->impurity[] = $impurity;
        return $this;
    }

    /**
     * isset impurity
     *
     * Any component of the drug product which is not the chemical entity defined as the drug substance, or an excipient in the drug product. This includes process-related impurities and contaminants, product-related impurities including degradation products.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImpurity($index)
    {
        return isset($this->impurity[$index]);
    }

    /**
     * unset impurity
     *
     * Any component of the drug product which is not the chemical entity defined as the drug substance, or an excipient in the drug product. This includes process-related impurities and contaminants, product-related impurities including degradation products.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImpurity($index)
    {
        unset($this->impurity[$index]);
    }

    /**
     * Gets as impurity
     *
     * Any component of the drug product which is not the chemical entity defined as the drug substance, or an excipient in the drug product. This includes process-related impurities and contaminants, product-related impurities including degradation products.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getImpurity()
    {
        return $this->impurity;
    }

    /**
     * Sets a new impurity
     *
     * Any component of the drug product which is not the chemical entity defined as the drug substance, or an excipient in the drug product. This includes process-related impurities and contaminants, product-related impurities including degradation products.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $impurity
     * @return self
     */
    public function setImpurity(array $impurity = null)
    {
        $this->impurity = $impurity;
        return $this;
    }

    /**
     * Adds as attachedDocument
     *
     * Additional information or supporting documentation about the medicinal product.
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
     * Additional information or supporting documentation about the medicinal product.
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
     * Additional information or supporting documentation about the medicinal product.
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
     * Additional information or supporting documentation about the medicinal product.
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
     * Additional information or supporting documentation about the medicinal product.
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
     * Adds as masterFile
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master File). Drug master files (DMFs) are documents submitted to regulatory agencies to provide confidential detailed information about facilities, processes or articles used in the manufacturing, processing, packaging and storing of drug products.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $masterFile
     */
    public function addToMasterFile(\TKusy\Hl7Fhir\R5\ReferenceType $masterFile)
    {
        $this->masterFile[] = $masterFile;
        return $this;
    }

    /**
     * isset masterFile
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master File). Drug master files (DMFs) are documents submitted to regulatory agencies to provide confidential detailed information about facilities, processes or articles used in the manufacturing, processing, packaging and storing of drug products.
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
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master File). Drug master files (DMFs) are documents submitted to regulatory agencies to provide confidential detailed information about facilities, processes or articles used in the manufacturing, processing, packaging and storing of drug products.
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
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master File). Drug master files (DMFs) are documents submitted to regulatory agencies to provide confidential detailed information about facilities, processes or articles used in the manufacturing, processing, packaging and storing of drug products.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getMasterFile()
    {
        return $this->masterFile;
    }

    /**
     * Sets a new masterFile
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master File). Drug master files (DMFs) are documents submitted to regulatory agencies to provide confidential detailed information about facilities, processes or articles used in the manufacturing, processing, packaging and storing of drug products.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $masterFile
     * @return self
     */
    public function setMasterFile(array $masterFile = null)
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
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionContactType $contact
     */
    public function addToContact(\TKusy\Hl7Fhir\R5\MedicinalProductDefinitionContactType $contact)
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
     * @return \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionContactType[]
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
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionContactType[] $contact
     * @return self
     */
    public function setContact(array $contact = null)
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $clinicalTrial
     */
    public function addToClinicalTrial(\TKusy\Hl7Fhir\R5\ReferenceType $clinicalTrial)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $clinicalTrial
     * @return self
     */
    public function setClinicalTrial(array $clinicalTrial = null)
    {
        $this->clinicalTrial = $clinicalTrial;
        return $this;
    }

    /**
     * Adds as code
     *
     * A code that this product is known by, usually within some formal terminology, perhaps assigned by a third party (i.e. not the manufacturer or regulator). Products (types of medications) tend to be known by identifiers during development and within regulatory process. However when they are prescribed they tend to be identified by codes. The same product may be have multiple codes, applied to it by multiple organizations.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodingType $code
     */
    public function addToCode(\TKusy\Hl7Fhir\R5\CodingType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * A code that this product is known by, usually within some formal terminology, perhaps assigned by a third party (i.e. not the manufacturer or regulator). Products (types of medications) tend to be known by identifiers during development and within regulatory process. However when they are prescribed they tend to be identified by codes. The same product may be have multiple codes, applied to it by multiple organizations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * A code that this product is known by, usually within some formal terminology, perhaps assigned by a third party (i.e. not the manufacturer or regulator). Products (types of medications) tend to be known by identifiers during development and within regulatory process. However when they are prescribed they tend to be identified by codes. The same product may be have multiple codes, applied to it by multiple organizations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * A code that this product is known by, usually within some formal terminology, perhaps assigned by a third party (i.e. not the manufacturer or regulator). Products (types of medications) tend to be known by identifiers during development and within regulatory process. However when they are prescribed they tend to be identified by codes. The same product may be have multiple codes, applied to it by multiple organizations.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that this product is known by, usually within some formal terminology, perhaps assigned by a third party (i.e. not the manufacturer or regulator). Products (types of medications) tend to be known by identifiers during development and within regulatory process. However when they are prescribed they tend to be identified by codes. The same product may be have multiple codes, applied to it by multiple organizations.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType[] $code
     * @return self
     */
    public function setCode(array $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as name
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionNameType $name
     */
    public function addToName(\TKusy\Hl7Fhir\R5\MedicinalProductDefinitionNameType $name)
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
     * @return \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionNameType[]
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
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionNameType[] $name
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
     * Reference to another product, e.g. for linking authorised to investigational product, or a virtual product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionCrossReferenceType $crossReference
     */
    public function addToCrossReference(\TKusy\Hl7Fhir\R5\MedicinalProductDefinitionCrossReferenceType $crossReference)
    {
        $this->crossReference[] = $crossReference;
        return $this;
    }

    /**
     * isset crossReference
     *
     * Reference to another product, e.g. for linking authorised to investigational product, or a virtual product.
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
     * Reference to another product, e.g. for linking authorised to investigational product, or a virtual product.
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
     * Reference to another product, e.g. for linking authorised to investigational product, or a virtual product.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionCrossReferenceType[]
     */
    public function getCrossReference()
    {
        return $this->crossReference;
    }

    /**
     * Sets a new crossReference
     *
     * Reference to another product, e.g. for linking authorised to investigational product, or a virtual product.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionCrossReferenceType[] $crossReference
     * @return self
     */
    public function setCrossReference(array $crossReference = null)
    {
        $this->crossReference = $crossReference;
        return $this;
    }

    /**
     * Adds as operation
     *
     * A manufacturing or administrative process or step associated with (or performed on) the medicinal product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionOperationType $operation
     */
    public function addToOperation(\TKusy\Hl7Fhir\R5\MedicinalProductDefinitionOperationType $operation)
    {
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * isset operation
     *
     * A manufacturing or administrative process or step associated with (or performed on) the medicinal product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperation($index)
    {
        return isset($this->operation[$index]);
    }

    /**
     * unset operation
     *
     * A manufacturing or administrative process or step associated with (or performed on) the medicinal product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperation($index)
    {
        unset($this->operation[$index]);
    }

    /**
     * Gets as operation
     *
     * A manufacturing or administrative process or step associated with (or performed on) the medicinal product.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionOperationType[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * A manufacturing or administrative process or step associated with (or performed on) the medicinal product.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionOperationType[] $operation
     * @return self
     */
    public function setOperation(array $operation = null)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Adds as characteristic
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified release", "parallel import".
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionCharacteristicType $characteristic
     */
    public function addToCharacteristic(\TKusy\Hl7Fhir\R5\MedicinalProductDefinitionCharacteristicType $characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * isset characteristic
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified release", "parallel import".
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
     * Allows the key product features to be recorded, such as "sugar free", "modified release", "parallel import".
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
     * Allows the key product features to be recorded, such as "sugar free", "modified release", "parallel import".
     *
     * @return \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionCharacteristicType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified release", "parallel import".
     *
     * @param \TKusy\Hl7Fhir\R5\MedicinalProductDefinitionCharacteristicType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic = null)
    {
        $this->characteristic = $characteristic;
        return $this;
    }


}

