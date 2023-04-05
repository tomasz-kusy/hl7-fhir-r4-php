<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationKnowledgeType
 *
 * Information about a medication that is used to support knowledge.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicationKnowledge
 */
class MedicationKnowledgeType extends MetadataResourceType
{

    /**
     * Business identifier for this medication.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A code that specifies this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A code to indicate if the medication referred to by this MedicationKnowledge is in active use within the drug database or inventory system. The status refers to the validity about the information of the medication and not to its medicinal properties.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeStatusCodesType $status
     */
    private $status = null;

    /**
     * The creator or owner of the knowledge or information about the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    private $author = null;

    /**
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $intendedJurisdiction
     */
    private $intendedJurisdiction = null;

    /**
     * All of the names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $name
     */
    private $name = null;

    /**
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeRelatedMedicationKnowledgeType[] $relatedMedicationKnowledge
     */
    private $relatedMedicationKnowledge = null;

    /**
     * Links to associated medications that could be prescribed, dispensed or administered.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $associatedMedication
     */
    private $associatedMedication = null;

    /**
     * Category of the medication or product (e.g. branded product, therapeutic moeity, generic product, innovator product, etc.).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $productType
     */
    private $productType = null;

    /**
     * Associated documentation about the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeMonographType[] $monograph
     */
    private $monograph = null;

    /**
     * The instructions for preparing the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $preparationInstruction
     */
    private $preparationInstruction = null;

    /**
     * The price of the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeCostType[] $cost
     */
    private $cost = null;

    /**
     * The program under which the medication is reviewed.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeMonitoringProgramType[] $monitoringProgram
     */
    private $monitoringProgram = null;

    /**
     * Guidelines or protocols that are applicable for the administration of the medication based on indication.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeIndicationGuidelineType[] $indicationGuideline
     */
    private $indicationGuideline = null;

    /**
     * Categorization of the medication within a formulary or classification system.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeMedicineClassificationType[] $medicineClassification
     */
    private $medicineClassification = null;

    /**
     * Information that only applies to packages (not products).
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgePackagingType[] $packaging
     */
    private $packaging = null;

    /**
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $clinicalUseIssue
     */
    private $clinicalUseIssue = null;

    /**
     * Information on how the medication should be stored, for example, refrigeration temperatures and length of stability at a given temperature.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeStorageGuidelineType[] $storageGuideline
     */
    private $storageGuideline = null;

    /**
     * Regulatory information about a medication.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeRegulatoryType[] $regulatory
     */
    private $regulatory = null;

    /**
     * Along with the link to a Medicinal Product Definition resource, this information provides common definitional elements that are needed to understand the specific medication that is being described.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeDefinitionalType $definitional
     */
    private $definitional = null;

    /**
     * Adds as identifier
     *
     * Business identifier for this medication.
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
     * Business identifier for this medication.
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
     * Business identifier for this medication.
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
     * Business identifier for this medication.
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
     * Business identifier for this medication.
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
     * Gets as code
     *
     * A code that specifies this medication, or a textual description if no code is available. Usage note: This could be a standard medication code such as a code from RxNorm, SNOMED CT, IDMP etc. It could also be a national or local formulary code, optionally with translations to other code systems.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code to indicate if the medication referred to by this MedicationKnowledge is in active use within the drug database or inventory system. The status refers to the validity about the information of the medication and not to its medicinal properties.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code to indicate if the medication referred to by this MedicationKnowledge is in active use within the drug database or inventory system. The status refers to the validity about the information of the medication and not to its medicinal properties.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeStatusCodesType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\MedicationKnowledgeStatusCodesType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as author
     *
     * The creator or owner of the knowledge or information about the medication.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * The creator or owner of the knowledge or information about the medication.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $author
     * @return self
     */
    public function setAuthor(?\TKusy\Hl7Fhir\R5\ReferenceType $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Adds as intendedJurisdiction
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $intendedJurisdiction
     */
    public function addToIntendedJurisdiction(\TKusy\Hl7Fhir\R5\CodeableConceptType $intendedJurisdiction)
    {
        $this->intendedJurisdiction[] = $intendedJurisdiction;
        return $this;
    }

    /**
     * isset intendedJurisdiction
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntendedJurisdiction($index)
    {
        return isset($this->intendedJurisdiction[$index]);
    }

    /**
     * unset intendedJurisdiction
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntendedJurisdiction($index)
    {
        unset($this->intendedJurisdiction[$index]);
    }

    /**
     * Gets as intendedJurisdiction
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getIntendedJurisdiction()
    {
        return $this->intendedJurisdiction;
    }

    /**
     * Sets a new intendedJurisdiction
     *
     * Lists the jurisdictions that this medication knowledge was written for.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $intendedJurisdiction
     * @return self
     */
    public function setIntendedJurisdiction(array $intendedJurisdiction = null)
    {
        $this->intendedJurisdiction = $intendedJurisdiction;
        return $this;
    }

    /**
     * Adds as name
     *
     * All of the names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     */
    public function addToName(\TKusy\Hl7Fhir\R5\StringType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * All of the names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
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
     * All of the names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
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
     * All of the names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * All of the names for a medication, for example, the name(s) given to a medication in different countries. For example, acetaminophen and paracetamol or salbutamol and albuterol.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $name
     * @return self
     */
    public function setName(array $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as relatedMedicationKnowledge
     *
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeRelatedMedicationKnowledgeType $relatedMedicationKnowledge
     */
    public function addToRelatedMedicationKnowledge(\TKusy\Hl7Fhir\R5\MedicationKnowledgeRelatedMedicationKnowledgeType $relatedMedicationKnowledge)
    {
        $this->relatedMedicationKnowledge[] = $relatedMedicationKnowledge;
        return $this;
    }

    /**
     * isset relatedMedicationKnowledge
     *
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor.
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
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor.
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
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeRelatedMedicationKnowledgeType[]
     */
    public function getRelatedMedicationKnowledge()
    {
        return $this->relatedMedicationKnowledge;
    }

    /**
     * Sets a new relatedMedicationKnowledge
     *
     * Associated or related medications. For example, if the medication is a branded product (e.g. Crestor), this is the Therapeutic Moeity (e.g. Rosuvastatin) or if this is a generic medication (e.g. Rosuvastatin), this would link to a branded product (e.g. Crestor.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeRelatedMedicationKnowledgeType[] $relatedMedicationKnowledge
     * @return self
     */
    public function setRelatedMedicationKnowledge(array $relatedMedicationKnowledge = null)
    {
        $this->relatedMedicationKnowledge = $relatedMedicationKnowledge;
        return $this;
    }

    /**
     * Adds as associatedMedication
     *
     * Links to associated medications that could be prescribed, dispensed or administered.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $associatedMedication
     */
    public function addToAssociatedMedication(\TKusy\Hl7Fhir\R5\ReferenceType $associatedMedication)
    {
        $this->associatedMedication[] = $associatedMedication;
        return $this;
    }

    /**
     * isset associatedMedication
     *
     * Links to associated medications that could be prescribed, dispensed or administered.
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
     * Links to associated medications that could be prescribed, dispensed or administered.
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
     * Links to associated medications that could be prescribed, dispensed or administered.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAssociatedMedication()
    {
        return $this->associatedMedication;
    }

    /**
     * Sets a new associatedMedication
     *
     * Links to associated medications that could be prescribed, dispensed or administered.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $associatedMedication
     * @return self
     */
    public function setAssociatedMedication(array $associatedMedication = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $productType
     */
    public function addToProductType(\TKusy\Hl7Fhir\R5\CodeableConceptType $productType)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $productType
     * @return self
     */
    public function setProductType(array $productType = null)
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
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeMonographType $monograph
     */
    public function addToMonograph(\TKusy\Hl7Fhir\R5\MedicationKnowledgeMonographType $monograph)
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
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeMonographType[]
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
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeMonographType[] $monograph
     * @return self
     */
    public function setMonograph(array $monograph = null)
    {
        $this->monograph = $monograph;
        return $this;
    }

    /**
     * Gets as preparationInstruction
     *
     * The instructions for preparing the medication.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $preparationInstruction
     * @return self
     */
    public function setPreparationInstruction(?\TKusy\Hl7Fhir\R5\MarkdownType $preparationInstruction = null)
    {
        $this->preparationInstruction = $preparationInstruction;
        return $this;
    }

    /**
     * Adds as cost
     *
     * The price of the medication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeCostType $cost
     */
    public function addToCost(\TKusy\Hl7Fhir\R5\MedicationKnowledgeCostType $cost)
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
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeCostType[]
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
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeCostType[] $cost
     * @return self
     */
    public function setCost(array $cost = null)
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
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeMonitoringProgramType $monitoringProgram
     */
    public function addToMonitoringProgram(\TKusy\Hl7Fhir\R5\MedicationKnowledgeMonitoringProgramType $monitoringProgram)
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
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeMonitoringProgramType[]
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
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeMonitoringProgramType[] $monitoringProgram
     * @return self
     */
    public function setMonitoringProgram(array $monitoringProgram = null)
    {
        $this->monitoringProgram = $monitoringProgram;
        return $this;
    }

    /**
     * Adds as indicationGuideline
     *
     * Guidelines or protocols that are applicable for the administration of the medication based on indication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeIndicationGuidelineType $indicationGuideline
     */
    public function addToIndicationGuideline(\TKusy\Hl7Fhir\R5\MedicationKnowledgeIndicationGuidelineType $indicationGuideline)
    {
        $this->indicationGuideline[] = $indicationGuideline;
        return $this;
    }

    /**
     * isset indicationGuideline
     *
     * Guidelines or protocols that are applicable for the administration of the medication based on indication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndicationGuideline($index)
    {
        return isset($this->indicationGuideline[$index]);
    }

    /**
     * unset indicationGuideline
     *
     * Guidelines or protocols that are applicable for the administration of the medication based on indication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndicationGuideline($index)
    {
        unset($this->indicationGuideline[$index]);
    }

    /**
     * Gets as indicationGuideline
     *
     * Guidelines or protocols that are applicable for the administration of the medication based on indication.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeIndicationGuidelineType[]
     */
    public function getIndicationGuideline()
    {
        return $this->indicationGuideline;
    }

    /**
     * Sets a new indicationGuideline
     *
     * Guidelines or protocols that are applicable for the administration of the medication based on indication.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeIndicationGuidelineType[] $indicationGuideline
     * @return self
     */
    public function setIndicationGuideline(array $indicationGuideline = null)
    {
        $this->indicationGuideline = $indicationGuideline;
        return $this;
    }

    /**
     * Adds as medicineClassification
     *
     * Categorization of the medication within a formulary or classification system.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeMedicineClassificationType $medicineClassification
     */
    public function addToMedicineClassification(\TKusy\Hl7Fhir\R5\MedicationKnowledgeMedicineClassificationType $medicineClassification)
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
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeMedicineClassificationType[]
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
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeMedicineClassificationType[] $medicineClassification
     * @return self
     */
    public function setMedicineClassification(array $medicineClassification = null)
    {
        $this->medicineClassification = $medicineClassification;
        return $this;
    }

    /**
     * Adds as packaging
     *
     * Information that only applies to packages (not products).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgePackagingType $packaging
     */
    public function addToPackaging(\TKusy\Hl7Fhir\R5\MedicationKnowledgePackagingType $packaging)
    {
        $this->packaging[] = $packaging;
        return $this;
    }

    /**
     * isset packaging
     *
     * Information that only applies to packages (not products).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackaging($index)
    {
        return isset($this->packaging[$index]);
    }

    /**
     * unset packaging
     *
     * Information that only applies to packages (not products).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackaging($index)
    {
        unset($this->packaging[$index]);
    }

    /**
     * Gets as packaging
     *
     * Information that only applies to packages (not products).
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgePackagingType[]
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
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgePackagingType[] $packaging
     * @return self
     */
    public function setPackaging(array $packaging = null)
    {
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * Adds as clinicalUseIssue
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $clinicalUseIssue
     */
    public function addToClinicalUseIssue(\TKusy\Hl7Fhir\R5\ReferenceType $clinicalUseIssue)
    {
        $this->clinicalUseIssue[] = $clinicalUseIssue;
        return $this;
    }

    /**
     * isset clinicalUseIssue
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClinicalUseIssue($index)
    {
        return isset($this->clinicalUseIssue[$index]);
    }

    /**
     * unset clinicalUseIssue
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClinicalUseIssue($index)
    {
        unset($this->clinicalUseIssue[$index]);
    }

    /**
     * Gets as clinicalUseIssue
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getClinicalUseIssue()
    {
        return $this->clinicalUseIssue;
    }

    /**
     * Sets a new clinicalUseIssue
     *
     * Potential clinical issue with or between medication(s) (for example, drug-drug interaction, drug-disease contraindication, drug-allergy interaction, etc.).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $clinicalUseIssue
     * @return self
     */
    public function setClinicalUseIssue(array $clinicalUseIssue = null)
    {
        $this->clinicalUseIssue = $clinicalUseIssue;
        return $this;
    }

    /**
     * Adds as storageGuideline
     *
     * Information on how the medication should be stored, for example, refrigeration temperatures and length of stability at a given temperature.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeStorageGuidelineType $storageGuideline
     */
    public function addToStorageGuideline(\TKusy\Hl7Fhir\R5\MedicationKnowledgeStorageGuidelineType $storageGuideline)
    {
        $this->storageGuideline[] = $storageGuideline;
        return $this;
    }

    /**
     * isset storageGuideline
     *
     * Information on how the medication should be stored, for example, refrigeration temperatures and length of stability at a given temperature.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStorageGuideline($index)
    {
        return isset($this->storageGuideline[$index]);
    }

    /**
     * unset storageGuideline
     *
     * Information on how the medication should be stored, for example, refrigeration temperatures and length of stability at a given temperature.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStorageGuideline($index)
    {
        unset($this->storageGuideline[$index]);
    }

    /**
     * Gets as storageGuideline
     *
     * Information on how the medication should be stored, for example, refrigeration temperatures and length of stability at a given temperature.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeStorageGuidelineType[]
     */
    public function getStorageGuideline()
    {
        return $this->storageGuideline;
    }

    /**
     * Sets a new storageGuideline
     *
     * Information on how the medication should be stored, for example, refrigeration temperatures and length of stability at a given temperature.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeStorageGuidelineType[] $storageGuideline
     * @return self
     */
    public function setStorageGuideline(array $storageGuideline = null)
    {
        $this->storageGuideline = $storageGuideline;
        return $this;
    }

    /**
     * Adds as regulatory
     *
     * Regulatory information about a medication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeRegulatoryType $regulatory
     */
    public function addToRegulatory(\TKusy\Hl7Fhir\R5\MedicationKnowledgeRegulatoryType $regulatory)
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
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeRegulatoryType[]
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
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeRegulatoryType[] $regulatory
     * @return self
     */
    public function setRegulatory(array $regulatory = null)
    {
        $this->regulatory = $regulatory;
        return $this;
    }

    /**
     * Gets as definitional
     *
     * Along with the link to a Medicinal Product Definition resource, this information provides common definitional elements that are needed to understand the specific medication that is being described.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeDefinitionalType
     */
    public function getDefinitional()
    {
        return $this->definitional;
    }

    /**
     * Sets a new definitional
     *
     * Along with the link to a Medicinal Product Definition resource, this information provides common definitional elements that are needed to understand the specific medication that is being described.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeDefinitionalType $definitional
     * @return self
     */
    public function setDefinitional(?\TKusy\Hl7Fhir\R5\MedicationKnowledgeDefinitionalType $definitional = null)
    {
        $this->definitional = $definitional;
        return $this;
    }


}

