<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClinicalUseDefinitionContraindicationType
 *
 * A single issue - either an indication, contraindication, interaction or an undesirable effect for a medicinal product, medication, device or procedure.
 * XSD Type: ClinicalUseDefinition.Contraindication
 */
class ClinicalUseDefinitionContraindicationType extends BackboneElementType
{

    /**
     * The situation that is being documented as contraindicating against this item.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $diseaseSymptomProcedure
     */
    private $diseaseSymptomProcedure = null;

    /**
     * The status of the disease or symptom for the contraindication, for example "chronic" or "metastatic".
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $diseaseStatus
     */
    private $diseaseStatus = null;

    /**
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $comorbidity
     */
    private $comorbidity = null;

    /**
     * The indication which this is a contraidication for.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $indication
     */
    private $indication = null;

    /**
     * An expression that returns true or false, indicating whether the indication is applicable or not, after having applied its other elements.
     *
     * @var \TKusy\Hl7Fhir\R5\ExpressionType $applicability
     */
    private $applicability = null;

    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the contraindication.
     *
     * @var \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionOtherTherapyType[] $otherTherapy
     */
    private $otherTherapy = null;

    /**
     * Gets as diseaseSymptomProcedure
     *
     * The situation that is being documented as contraindicating against this item.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getDiseaseSymptomProcedure()
    {
        return $this->diseaseSymptomProcedure;
    }

    /**
     * Sets a new diseaseSymptomProcedure
     *
     * The situation that is being documented as contraindicating against this item.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $diseaseSymptomProcedure
     * @return self
     */
    public function setDiseaseSymptomProcedure(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $diseaseSymptomProcedure = null)
    {
        $this->diseaseSymptomProcedure = $diseaseSymptomProcedure;
        return $this;
    }

    /**
     * Gets as diseaseStatus
     *
     * The status of the disease or symptom for the contraindication, for example "chronic" or "metastatic".
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getDiseaseStatus()
    {
        return $this->diseaseStatus;
    }

    /**
     * Sets a new diseaseStatus
     *
     * The status of the disease or symptom for the contraindication, for example "chronic" or "metastatic".
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $diseaseStatus
     * @return self
     */
    public function setDiseaseStatus(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $diseaseStatus = null)
    {
        $this->diseaseStatus = $diseaseStatus;
        return $this;
    }

    /**
     * Adds as comorbidity
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $comorbidity
     */
    public function addToComorbidity(\TKusy\Hl7Fhir\R5\CodeableReferenceType $comorbidity)
    {
        $this->comorbidity[] = $comorbidity;
        return $this;
    }

    /**
     * isset comorbidity
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComorbidity($index)
    {
        return isset($this->comorbidity[$index]);
    }

    /**
     * unset comorbidity
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComorbidity($index)
    {
        unset($this->comorbidity[$index]);
    }

    /**
     * Gets as comorbidity
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getComorbidity()
    {
        return $this->comorbidity;
    }

    /**
     * Sets a new comorbidity
     *
     * A comorbidity (concurrent condition) or coinfection.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $comorbidity
     * @return self
     */
    public function setComorbidity(array $comorbidity = null)
    {
        $this->comorbidity = $comorbidity;
        return $this;
    }

    /**
     * Adds as indication
     *
     * The indication which this is a contraidication for.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $indication
     */
    public function addToIndication(\TKusy\Hl7Fhir\R5\ReferenceType $indication)
    {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * isset indication
     *
     * The indication which this is a contraidication for.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndication($index)
    {
        return isset($this->indication[$index]);
    }

    /**
     * unset indication
     *
     * The indication which this is a contraidication for.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndication($index)
    {
        unset($this->indication[$index]);
    }

    /**
     * Gets as indication
     *
     * The indication which this is a contraidication for.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Sets a new indication
     *
     * The indication which this is a contraidication for.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $indication
     * @return self
     */
    public function setIndication(array $indication = null)
    {
        $this->indication = $indication;
        return $this;
    }

    /**
     * Gets as applicability
     *
     * An expression that returns true or false, indicating whether the indication is applicable or not, after having applied its other elements.
     *
     * @return \TKusy\Hl7Fhir\R5\ExpressionType
     */
    public function getApplicability()
    {
        return $this->applicability;
    }

    /**
     * Sets a new applicability
     *
     * An expression that returns true or false, indicating whether the indication is applicable or not, after having applied its other elements.
     *
     * @param \TKusy\Hl7Fhir\R5\ExpressionType $applicability
     * @return self
     */
    public function setApplicability(?\TKusy\Hl7Fhir\R5\ExpressionType $applicability = null)
    {
        $this->applicability = $applicability;
        return $this;
    }

    /**
     * Adds as otherTherapy
     *
     * Information about the use of the medicinal product in relation to other therapies described as part of the contraindication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionOtherTherapyType $otherTherapy
     */
    public function addToOtherTherapy(\TKusy\Hl7Fhir\R5\ClinicalUseDefinitionOtherTherapyType $otherTherapy)
    {
        $this->otherTherapy[] = $otherTherapy;
        return $this;
    }

    /**
     * isset otherTherapy
     *
     * Information about the use of the medicinal product in relation to other therapies described as part of the contraindication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherTherapy($index)
    {
        return isset($this->otherTherapy[$index]);
    }

    /**
     * unset otherTherapy
     *
     * Information about the use of the medicinal product in relation to other therapies described as part of the contraindication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherTherapy($index)
    {
        unset($this->otherTherapy[$index]);
    }

    /**
     * Gets as otherTherapy
     *
     * Information about the use of the medicinal product in relation to other therapies described as part of the contraindication.
     *
     * @return \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionOtherTherapyType[]
     */
    public function getOtherTherapy()
    {
        return $this->otherTherapy;
    }

    /**
     * Sets a new otherTherapy
     *
     * Information about the use of the medicinal product in relation to other therapies described as part of the contraindication.
     *
     * @param \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionOtherTherapyType[] $otherTherapy
     * @return self
     */
    public function setOtherTherapy(array $otherTherapy = null)
    {
        $this->otherTherapy = $otherTherapy;
        return $this;
    }


}

