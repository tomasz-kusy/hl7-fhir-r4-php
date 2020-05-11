<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AllergyIntoleranceReactionType
 *
 * Risk of harmful or undesirable, physiological response which is unique to an individual and associated with exposure to a substance.
 * XSD Type: AllergyIntolerance.Reaction
 */
class AllergyIntoleranceReactionType extends BackboneElementType
{

    /**
     * Identification of the specific substance (or pharmaceutical product) considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'. If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $substance
     */
    private $substance = null;

    /**
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $manifestation
     */
    private $manifestation = null;

    /**
     * Text description about the reaction as a whole, including details of the manifestation if required.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $onset
     */
    private $onset = null;

    /**
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     *
     * @var \TKusy\Hl7FhirR4\AllergyIntoleranceSeverityType $severity
     */
    private $severity = null;

    /**
     * Identification of the route by which the subject was exposed to the substance.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $exposureRoute
     */
    private $exposureRoute = null;

    /**
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Gets as substance
     *
     * Identification of the specific substance (or pharmaceutical product) considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'. If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Sets a new substance
     *
     * Identification of the specific substance (or pharmaceutical product) considered to be responsible for the Adverse Reaction event. Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'. If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $substance
     * @return self
     */
    public function setSubstance(\TKusy\Hl7FhirR4\CodeableConceptType $substance)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Adds as manifestation
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $manifestation
     */
    public function addToManifestation(\TKusy\Hl7FhirR4\CodeableConceptType $manifestation)
    {
        $this->manifestation[] = $manifestation;
        return $this;
    }

    /**
     * isset manifestation
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManifestation($index)
    {
        return isset($this->manifestation[$index]);
    }

    /**
     * unset manifestation
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManifestation($index)
    {
        unset($this->manifestation[$index]);
    }

    /**
     * Gets as manifestation
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getManifestation()
    {
        return $this->manifestation;
    }

    /**
     * Sets a new manifestation
     *
     * Clinical symptoms and/or signs that are observed or associated with the adverse reaction event.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $manifestation
     * @return self
     */
    public function setManifestation(array $manifestation)
    {
        $this->manifestation = $manifestation;
        return $this;
    }

    /**
     * Gets as description
     *
     * Text description about the reaction as a whole, including details of the manifestation if required.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Text description about the reaction as a whole, including details of the manifestation if required.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as onset
     *
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getOnset()
    {
        return $this->onset;
    }

    /**
     * Sets a new onset
     *
     * Record of the date and/or time of the onset of the Reaction.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $onset
     * @return self
     */
    public function setOnset(\TKusy\Hl7FhirR4\DateTimeType $onset)
    {
        $this->onset = $onset;
        return $this;
    }

    /**
     * Gets as severity
     *
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     *
     * @return \TKusy\Hl7FhirR4\AllergyIntoleranceSeverityType
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * Clinical assessment of the severity of the reaction event as a whole, potentially considering multiple different manifestations.
     *
     * @param \TKusy\Hl7FhirR4\AllergyIntoleranceSeverityType $severity
     * @return self
     */
    public function setSeverity(\TKusy\Hl7FhirR4\AllergyIntoleranceSeverityType $severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as exposureRoute
     *
     * Identification of the route by which the subject was exposed to the substance.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getExposureRoute()
    {
        return $this->exposureRoute;
    }

    /**
     * Sets a new exposureRoute
     *
     * Identification of the route by which the subject was exposed to the substance.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $exposureRoute
     * @return self
     */
    public function setExposureRoute(\TKusy\Hl7FhirR4\CodeableConceptType $exposureRoute)
    {
        $this->exposureRoute = $exposureRoute;
        return $this;
    }

    /**
     * Adds as note
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7FhirR4\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Additional text about the adverse reaction event not captured in other fields.
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }


}

