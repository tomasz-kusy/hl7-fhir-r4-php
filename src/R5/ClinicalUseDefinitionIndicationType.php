<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClinicalUseDefinitionIndicationType
 *
 * A single issue - either an indication, contraindication, interaction or an undesirable effect for a medicinal product, medication, device or procedure.
 * XSD Type: ClinicalUseDefinition.Indication
 */
class ClinicalUseDefinitionIndicationType extends BackboneElementType
{

    /**
     * The situation that is being documented as an indicaton for this item.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $diseaseSymptomProcedure
     */
    private $diseaseSymptomProcedure = null;

    /**
     * The status of the disease or symptom for the indication, for example "chronic" or "metastatic".
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $diseaseStatus
     */
    private $diseaseStatus = null;

    /**
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $comorbidity
     */
    private $comorbidity = null;

    /**
     * The intended effect, aim or strategy to be achieved.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $intendedEffect
     */
    private $intendedEffect = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $durationRange
     */
    private $durationRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $durationString
     */
    private $durationString = null;

    /**
     * An unwanted side effect or negative outcome that may happen if you use the drug (or other subject of this resource) for this indication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $undesirableEffect
     */
    private $undesirableEffect = null;

    /**
     * An expression that returns true or false, indicating whether the indication is applicable or not, after having applied its other elements.
     *
     * @var \TKusy\Hl7Fhir\R5\ExpressionType $applicability
     */
    private $applicability = null;

    /**
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
     *
     * @var \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionOtherTherapyType[] $otherTherapy
     */
    private $otherTherapy = null;

    /**
     * Gets as diseaseSymptomProcedure
     *
     * The situation that is being documented as an indicaton for this item.
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
     * The situation that is being documented as an indicaton for this item.
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
     * The status of the disease or symptom for the indication, for example "chronic" or "metastatic".
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
     * The status of the disease or symptom for the indication, for example "chronic" or "metastatic".
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
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
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
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
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
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
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
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
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
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
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
     * Gets as intendedEffect
     *
     * The intended effect, aim or strategy to be achieved.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getIntendedEffect()
    {
        return $this->intendedEffect;
    }

    /**
     * Sets a new intendedEffect
     *
     * The intended effect, aim or strategy to be achieved.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $intendedEffect
     * @return self
     */
    public function setIntendedEffect(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $intendedEffect = null)
    {
        $this->intendedEffect = $intendedEffect;
        return $this;
    }

    /**
     * Gets as durationRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getDurationRange()
    {
        return $this->durationRange;
    }

    /**
     * Sets a new durationRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $durationRange
     * @return self
     */
    public function setDurationRange(?\TKusy\Hl7Fhir\R5\RangeType $durationRange = null)
    {
        $this->durationRange = $durationRange;
        return $this;
    }

    /**
     * Gets as durationString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDurationString()
    {
        return $this->durationString;
    }

    /**
     * Sets a new durationString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $durationString
     * @return self
     */
    public function setDurationString(?\TKusy\Hl7Fhir\R5\StringType $durationString = null)
    {
        $this->durationString = $durationString;
        return $this;
    }

    /**
     * Adds as undesirableEffect
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug (or other subject of this resource) for this indication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $undesirableEffect
     */
    public function addToUndesirableEffect(\TKusy\Hl7Fhir\R5\ReferenceType $undesirableEffect)
    {
        $this->undesirableEffect[] = $undesirableEffect;
        return $this;
    }

    /**
     * isset undesirableEffect
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug (or other subject of this resource) for this indication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUndesirableEffect($index)
    {
        return isset($this->undesirableEffect[$index]);
    }

    /**
     * unset undesirableEffect
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug (or other subject of this resource) for this indication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUndesirableEffect($index)
    {
        unset($this->undesirableEffect[$index]);
    }

    /**
     * Gets as undesirableEffect
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug (or other subject of this resource) for this indication.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getUndesirableEffect()
    {
        return $this->undesirableEffect;
    }

    /**
     * Sets a new undesirableEffect
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug (or other subject of this resource) for this indication.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $undesirableEffect
     * @return self
     */
    public function setUndesirableEffect(array $undesirableEffect = null)
    {
        $this->undesirableEffect = $undesirableEffect;
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
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
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
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
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
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
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
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
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
     * Information about the use of the medicinal product in relation to other therapies described as part of the indication.
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

