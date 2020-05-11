<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationKnowledgeType
 *
 * Information about a medication that is used to support knowledge.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicationKnowledge
 */
class MedicationKnowledgeType extends DomainResourceType
{

    /**
     * A code that specifies this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A code to indicate if the medication is in active use. The status refers to the validity about the information of the medication and not to its medicinal properties.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $status
     */
    private $status = null;

    /**
     * Describes the details of the manufacturer of the medication product. This is not intended to represent the distributor of a medication product.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $manufacturer
     */
    private $manufacturer = null;

    /**
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $doseForm
     */
    private $doseForm = null;

    /**
     * Specific amount of the drug in the packaged product. For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $amount
     */
    private $amount = null;

    /**
     * Additional names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $synonym
     */
    private $synonym = [
        
    ];

    /**
     * Associated or related knowledge about a medication.
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeRelatedMedicationKnowledgeType[] $relatedMedicationKnowledge
     */
    private $relatedMedicationKnowledge = [
        
    ];

    /**
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $associatedMedication
     */
    private $associatedMedication = [
        
    ];

    /**
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc.).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $productType
     */
    private $productType = [
        
    ];

    /**
     * Associated documentation about the medication.
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeMonographType[] $monograph
     */
    private $monograph = [
        
    ];

    /**
     * Identifies a particular constituent of interest in the product.
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeIngredientType[] $ingredient
     */
    private $ingredient = [
        
    ];

    /**
     * The instructions for preparing the medication.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $preparationInstruction
     */
    private $preparationInstruction = null;

    /**
     * The intended or approved route of administration.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $intendedRoute
     */
    private $intendedRoute = [
        
    ];

    /**
     * The price of the medication.
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeCostType[] $cost
     */
    private $cost = [
        
    ];

    /**
     * The program under which the medication is reviewed.
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeMonitoringProgramType[] $monitoringProgram
     */
    private $monitoringProgram = [
        
    ];

    /**
     * Guidelines for the administration of the medication.
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeAdministrationGuidelinesType[] $administrationGuidelines
     */
    private $administrationGuidelines = [
        
    ];

    /**
     * Categorization of the medication within a formulary or classification system.
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeMedicineClassificationType[] $medicineClassification
     */
    private $medicineClassification = [
        
    ];

    /**
     * Information that only applies to packages (not products).
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgePackagingType $packaging
     */
    private $packaging = null;

    /**
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeDrugCharacteristicType[] $drugCharacteristic
     */
    private $drugCharacteristic = [
        
    ];

    /**
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $contraindication
     */
    private $contraindication = [
        
    ];

    /**
     * Regulatory information about a medication.
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeRegulatoryType[] $regulatory
     */
    private $regulatory = [
        
    ];

    /**
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeKineticsType[] $kinetics
     */
    private $kinetics = [
        
    ];

    /**
     * Gets as code
     *
     * A code that specifies this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that specifies this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code to indicate if the medication is in active use. The status refers to the validity about the information of the medication and not to its medicinal properties.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code to indicate if the medication is in active use. The status refers to the validity about the information of the medication and not to its medicinal properties.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\CodeType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as manufacturer
     *
     * Describes the details of the manufacturer of the medication product. This is not intended to represent the distributor of a medication product.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * Describes the details of the manufacturer of the medication product. This is not intended to represent the distributor of a medication product.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $manufacturer
     * @return self
     */
    public function setManufacturer(\TKusy\Hl7FhirR4\ReferenceType $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Gets as doseForm
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDoseForm()
    {
        return $this->doseForm;
    }

    /**
     * Sets a new doseForm
     *
     * Describes the form of the item. Powder; tablets; capsule.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $doseForm
     * @return self
     */
    public function setDoseForm(\TKusy\Hl7FhirR4\CodeableConceptType $doseForm)
    {
        $this->doseForm = $doseForm;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Specific amount of the drug in the packaged product. For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Specific amount of the drug in the packaged product. For example, when specifying a product that has the same strength (For example, Insulin glargine 100 unit per mL solution for injection), this attribute provides additional clarification of the package amount (For example, 3 mL, 10mL, etc.).
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7FhirR4\QuantityType $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as synonym
     *
     * Additional names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $synonym
     */
    public function addToSynonym(\TKusy\Hl7FhirR4\StringType $synonym)
    {
        $this->synonym[] = $synonym;
        return $this;
    }

    /**
     * isset synonym
     *
     * Additional names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSynonym($index)
    {
        return isset($this->synonym[$index]);
    }

    /**
     * unset synonym
     *
     * Additional names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSynonym($index)
    {
        unset($this->synonym[$index]);
    }

    /**
     * Gets as synonym
     *
     * Additional names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getSynonym()
    {
        return $this->synonym;
    }

    /**
     * Sets a new synonym
     *
     * Additional names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $synonym
     * @return self
     */
    public function setSynonym(array $synonym)
    {
        $this->synonym = $synonym;
        return $this;
    }

    /**
     * Adds as relatedMedicationKnowledge
     *
     * Associated or related knowledge about a medication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeRelatedMedicationKnowledgeType $relatedMedicationKnowledge
     */
    public function addToRelatedMedicationKnowledge(\TKusy\Hl7FhirR4\MedicationKnowledgeRelatedMedicationKnowledgeType $relatedMedicationKnowledge)
    {
        $this->relatedMedicationKnowledge[] = $relatedMedicationKnowledge;
        return $this;
    }

    /**
     * isset relatedMedicationKnowledge
     *
     * Associated or related knowledge about a medication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedMedicationKnowledge($index)
    {
        return isset($this->relatedMedicationKnowledge[$index]);
    }

    /**
     * unset relatedMedicationKnowledge
     *
     * Associated or related knowledge about a medication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedMedicationKnowledge($index)
    {
        unset($this->relatedMedicationKnowledge[$index]);
    }

    /**
     * Gets as relatedMedicationKnowledge
     *
     * Associated or related knowledge about a medication.
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeRelatedMedicationKnowledgeType[]
     */
    public function getRelatedMedicationKnowledge()
    {
        return $this->relatedMedicationKnowledge;
    }

    /**
     * Sets a new relatedMedicationKnowledge
     *
     * Associated or related knowledge about a medication.
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeRelatedMedicationKnowledgeType[] $relatedMedicationKnowledge
     * @return self
     */
    public function setRelatedMedicationKnowledge(array $relatedMedicationKnowledge)
    {
        $this->relatedMedicationKnowledge = $relatedMedicationKnowledge;
        return $this;
    }

    /**
     * Adds as associatedMedication
     *
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $associatedMedication
     */
    public function addToAssociatedMedication(\TKusy\Hl7FhirR4\ReferenceType $associatedMedication)
    {
        $this->associatedMedication[] = $associatedMedication;
        return $this;
    }

    /**
     * isset associatedMedication
     *
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssociatedMedication($index)
    {
        return isset($this->associatedMedication[$index]);
    }

    /**
     * unset associatedMedication
     *
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssociatedMedication($index)
    {
        unset($this->associatedMedication[$index]);
    }

    /**
     * Gets as associatedMedication
     *
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getAssociatedMedication()
    {
        return $this->associatedMedication;
    }

    /**
     * Sets a new associatedMedication
     *
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $associatedMedication
     * @return self
     */
    public function setAssociatedMedication(array $associatedMedication)
    {
        $this->associatedMedication = $associatedMedication;
        return $this;
    }

    /**
     * Adds as productType
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc.).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $productType
     */
    public function addToProductType(\TKusy\Hl7FhirR4\CodeableConceptType $productType)
    {
        $this->productType[] = $productType;
        return $this;
    }

    /**
     * isset productType
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc.).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductType($index)
    {
        return isset($this->productType[$index]);
    }

    /**
     * unset productType
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc.).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductType($index)
    {
        unset($this->productType[$index]);
    }

    /**
     * Gets as productType
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc.).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc.).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $productType
     * @return self
     */
    public function setProductType(array $productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * Adds as monograph
     *
     * Associated documentation about the medication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeMonographType $monograph
     */
    public function addToMonograph(\TKusy\Hl7FhirR4\MedicationKnowledgeMonographType $monograph)
    {
        $this->monograph[] = $monograph;
        return $this;
    }

    /**
     * isset monograph
     *
     * Associated documentation about the medication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMonograph($index)
    {
        return isset($this->monograph[$index]);
    }

    /**
     * unset monograph
     *
     * Associated documentation about the medication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMonograph($index)
    {
        unset($this->monograph[$index]);
    }

    /**
     * Gets as monograph
     *
     * Associated documentation about the medication.
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeMonographType[]
     */
    public function getMonograph()
    {
        return $this->monograph;
    }

    /**
     * Sets a new monograph
     *
     * Associated documentation about the medication.
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeMonographType[] $monograph
     * @return self
     */
    public function setMonograph(array $monograph)
    {
        $this->monograph = $monograph;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeIngredientType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7FhirR4\MedicationKnowledgeIngredientType $ingredient)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * isset ingredient
     *
     * Identifies a particular constituent of interest in the product.
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
     * Identifies a particular constituent of interest in the product.
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
     * Identifies a particular constituent of interest in the product.
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeIngredientType[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets a new ingredient
     *
     * Identifies a particular constituent of interest in the product.
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeIngredientType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Gets as preparationInstruction
     *
     * The instructions for preparing the medication.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getPreparationInstruction()
    {
        return $this->preparationInstruction;
    }

    /**
     * Sets a new preparationInstruction
     *
     * The instructions for preparing the medication.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $preparationInstruction
     * @return self
     */
    public function setPreparationInstruction(\TKusy\Hl7FhirR4\MarkdownType $preparationInstruction)
    {
        $this->preparationInstruction = $preparationInstruction;
        return $this;
    }

    /**
     * Adds as intendedRoute
     *
     * The intended or approved route of administration.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $intendedRoute
     */
    public function addToIntendedRoute(\TKusy\Hl7FhirR4\CodeableConceptType $intendedRoute)
    {
        $this->intendedRoute[] = $intendedRoute;
        return $this;
    }

    /**
     * isset intendedRoute
     *
     * The intended or approved route of administration.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntendedRoute($index)
    {
        return isset($this->intendedRoute[$index]);
    }

    /**
     * unset intendedRoute
     *
     * The intended or approved route of administration.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntendedRoute($index)
    {
        unset($this->intendedRoute[$index]);
    }

    /**
     * Gets as intendedRoute
     *
     * The intended or approved route of administration.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getIntendedRoute()
    {
        return $this->intendedRoute;
    }

    /**
     * Sets a new intendedRoute
     *
     * The intended or approved route of administration.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $intendedRoute
     * @return self
     */
    public function setIntendedRoute(array $intendedRoute)
    {
        $this->intendedRoute = $intendedRoute;
        return $this;
    }

    /**
     * Adds as cost
     *
     * The price of the medication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeCostType $cost
     */
    public function addToCost(\TKusy\Hl7FhirR4\MedicationKnowledgeCostType $cost)
    {
        $this->cost[] = $cost;
        return $this;
    }

    /**
     * isset cost
     *
     * The price of the medication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCost($index)
    {
        return isset($this->cost[$index]);
    }

    /**
     * unset cost
     *
     * The price of the medication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCost($index)
    {
        unset($this->cost[$index]);
    }

    /**
     * Gets as cost
     *
     * The price of the medication.
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeCostType[]
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Sets a new cost
     *
     * The price of the medication.
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeCostType[] $cost
     * @return self
     */
    public function setCost(array $cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Adds as monitoringProgram
     *
     * The program under which the medication is reviewed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeMonitoringProgramType $monitoringProgram
     */
    public function addToMonitoringProgram(\TKusy\Hl7FhirR4\MedicationKnowledgeMonitoringProgramType $monitoringProgram)
    {
        $this->monitoringProgram[] = $monitoringProgram;
        return $this;
    }

    /**
     * isset monitoringProgram
     *
     * The program under which the medication is reviewed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMonitoringProgram($index)
    {
        return isset($this->monitoringProgram[$index]);
    }

    /**
     * unset monitoringProgram
     *
     * The program under which the medication is reviewed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMonitoringProgram($index)
    {
        unset($this->monitoringProgram[$index]);
    }

    /**
     * Gets as monitoringProgram
     *
     * The program under which the medication is reviewed.
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeMonitoringProgramType[]
     */
    public function getMonitoringProgram()
    {
        return $this->monitoringProgram;
    }

    /**
     * Sets a new monitoringProgram
     *
     * The program under which the medication is reviewed.
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeMonitoringProgramType[] $monitoringProgram
     * @return self
     */
    public function setMonitoringProgram(array $monitoringProgram)
    {
        $this->monitoringProgram = $monitoringProgram;
        return $this;
    }

    /**
     * Adds as administrationGuidelines
     *
     * Guidelines for the administration of the medication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeAdministrationGuidelinesType $administrationGuidelines
     */
    public function addToAdministrationGuidelines(\TKusy\Hl7FhirR4\MedicationKnowledgeAdministrationGuidelinesType $administrationGuidelines)
    {
        $this->administrationGuidelines[] = $administrationGuidelines;
        return $this;
    }

    /**
     * isset administrationGuidelines
     *
     * Guidelines for the administration of the medication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdministrationGuidelines($index)
    {
        return isset($this->administrationGuidelines[$index]);
    }

    /**
     * unset administrationGuidelines
     *
     * Guidelines for the administration of the medication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdministrationGuidelines($index)
    {
        unset($this->administrationGuidelines[$index]);
    }

    /**
     * Gets as administrationGuidelines
     *
     * Guidelines for the administration of the medication.
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeAdministrationGuidelinesType[]
     */
    public function getAdministrationGuidelines()
    {
        return $this->administrationGuidelines;
    }

    /**
     * Sets a new administrationGuidelines
     *
     * Guidelines for the administration of the medication.
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeAdministrationGuidelinesType[] $administrationGuidelines
     * @return self
     */
    public function setAdministrationGuidelines(array $administrationGuidelines)
    {
        $this->administrationGuidelines = $administrationGuidelines;
        return $this;
    }

    /**
     * Adds as medicineClassification
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeMedicineClassificationType $medicineClassification
     */
    public function addToMedicineClassification(\TKusy\Hl7FhirR4\MedicationKnowledgeMedicineClassificationType $medicineClassification)
    {
        $this->medicineClassification[] = $medicineClassification;
        return $this;
    }

    /**
     * isset medicineClassification
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMedicineClassification($index)
    {
        return isset($this->medicineClassification[$index]);
    }

    /**
     * unset medicineClassification
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMedicineClassification($index)
    {
        unset($this->medicineClassification[$index]);
    }

    /**
     * Gets as medicineClassification
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeMedicineClassificationType[]
     */
    public function getMedicineClassification()
    {
        return $this->medicineClassification;
    }

    /**
     * Sets a new medicineClassification
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeMedicineClassificationType[] $medicineClassification
     * @return self
     */
    public function setMedicineClassification(array $medicineClassification)
    {
        $this->medicineClassification = $medicineClassification;
        return $this;
    }

    /**
     * Gets as packaging
     *
     * Information that only applies to packages (not products).
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgePackagingType
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * Sets a new packaging
     *
     * Information that only applies to packages (not products).
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgePackagingType $packaging
     * @return self
     */
    public function setPackaging(\TKusy\Hl7FhirR4\MedicationKnowledgePackagingType $packaging)
    {
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * Adds as drugCharacteristic
     *
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeDrugCharacteristicType $drugCharacteristic
     */
    public function addToDrugCharacteristic(\TKusy\Hl7FhirR4\MedicationKnowledgeDrugCharacteristicType $drugCharacteristic)
    {
        $this->drugCharacteristic[] = $drugCharacteristic;
        return $this;
    }

    /**
     * isset drugCharacteristic
     *
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDrugCharacteristic($index)
    {
        return isset($this->drugCharacteristic[$index]);
    }

    /**
     * unset drugCharacteristic
     *
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDrugCharacteristic($index)
    {
        unset($this->drugCharacteristic[$index]);
    }

    /**
     * Gets as drugCharacteristic
     *
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeDrugCharacteristicType[]
     */
    public function getDrugCharacteristic()
    {
        return $this->drugCharacteristic;
    }

    /**
     * Sets a new drugCharacteristic
     *
     * Specifies descriptive properties of the medicine, such as color, shape, imprints, etc.
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeDrugCharacteristicType[] $drugCharacteristic
     * @return self
     */
    public function setDrugCharacteristic(array $drugCharacteristic)
    {
        $this->drugCharacteristic = $drugCharacteristic;
        return $this;
    }

    /**
     * Adds as contraindication
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $contraindication
     */
    public function addToContraindication(\TKusy\Hl7FhirR4\ReferenceType $contraindication)
    {
        $this->contraindication[] = $contraindication;
        return $this;
    }

    /**
     * isset contraindication
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContraindication($index)
    {
        return isset($this->contraindication[$index]);
    }

    /**
     * unset contraindication
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContraindication($index)
    {
        unset($this->contraindication[$index]);
    }

    /**
     * Gets as contraindication
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }

    /**
     * Sets a new contraindication
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $contraindication
     * @return self
     */
    public function setContraindication(array $contraindication)
    {
        $this->contraindication = $contraindication;
        return $this;
    }

    /**
     * Adds as regulatory
     *
     * Regulatory information about a medication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeRegulatoryType $regulatory
     */
    public function addToRegulatory(\TKusy\Hl7FhirR4\MedicationKnowledgeRegulatoryType $regulatory)
    {
        $this->regulatory[] = $regulatory;
        return $this;
    }

    /**
     * isset regulatory
     *
     * Regulatory information about a medication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegulatory($index)
    {
        return isset($this->regulatory[$index]);
    }

    /**
     * unset regulatory
     *
     * Regulatory information about a medication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegulatory($index)
    {
        unset($this->regulatory[$index]);
    }

    /**
     * Gets as regulatory
     *
     * Regulatory information about a medication.
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeRegulatoryType[]
     */
    public function getRegulatory()
    {
        return $this->regulatory;
    }

    /**
     * Sets a new regulatory
     *
     * Regulatory information about a medication.
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeRegulatoryType[] $regulatory
     * @return self
     */
    public function setRegulatory(array $regulatory)
    {
        $this->regulatory = $regulatory;
        return $this;
    }

    /**
     * Adds as kinetics
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeKineticsType $kinetics
     */
    public function addToKinetics(\TKusy\Hl7FhirR4\MedicationKnowledgeKineticsType $kinetics)
    {
        $this->kinetics[] = $kinetics;
        return $this;
    }

    /**
     * isset kinetics
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKinetics($index)
    {
        return isset($this->kinetics[$index]);
    }

    /**
     * unset kinetics
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKinetics($index)
    {
        unset($this->kinetics[$index]);
    }

    /**
     * Gets as kinetics
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeKineticsType[]
     */
    public function getKinetics()
    {
        return $this->kinetics;
    }

    /**
     * Sets a new kinetics
     *
     * The time course of drug absorption, distribution, metabolism and excretion of a medication from the body.
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeKineticsType[] $kinetics
     * @return self
     */
    public function setKinetics(array $kinetics)
    {
        $this->kinetics = $kinetics;
        return $this;
    }


}

