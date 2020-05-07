<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImmunizationRecommendationType
 *
 * A patient's point-in-time set of recommendations (i.e. forecasting) according to a published schedule with optional supporting justification.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: ImmunizationRecommendation
 */
class ImmunizationRecommendationType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this particular recommendation record.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The patient the recommendation(s) are for.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The date the immunization recommendation(s) were created.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * Indicates the authority who published the protocol (e.g. ACIP).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $authority
     */
    private $authority = null;

    /**
     * Vaccine administration recommendations.
     *
     * @var \TKusy\Hl7FhirR4\ImmunizationRecommendationRecommendationType[] $recommendation
     */
    private $recommendation = [
        
    ];

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this particular recommendation record.
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
     * A unique identifier assigned to this particular recommendation record.
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
     * A unique identifier assigned to this particular recommendation record.
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
     * A unique identifier assigned to this particular recommendation record.
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
     * A unique identifier assigned to this particular recommendation record.
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
     * Gets as patient
     *
     * The patient the recommendation(s) are for.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The patient the recommendation(s) are for.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7FhirR4\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date the immunization recommendation(s) were created.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date the immunization recommendation(s) were created.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as authority
     *
     * Indicates the authority who published the protocol (e.g. ACIP).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Sets a new authority
     *
     * Indicates the authority who published the protocol (e.g. ACIP).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $authority
     * @return self
     */
    public function setAuthority(\TKusy\Hl7FhirR4\ReferenceType $authority)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * Adds as recommendation
     *
     * Vaccine administration recommendations.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImmunizationRecommendationRecommendationType $recommendation
     */
    public function addToRecommendation(\TKusy\Hl7FhirR4\ImmunizationRecommendationRecommendationType $recommendation)
    {
        $this->recommendation[] = $recommendation;
        return $this;
    }

    /**
     * isset recommendation
     *
     * Vaccine administration recommendations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecommendation($index)
    {
        return isset($this->recommendation[$index]);
    }

    /**
     * unset recommendation
     *
     * Vaccine administration recommendations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecommendation($index)
    {
        unset($this->recommendation[$index]);
    }

    /**
     * Gets as recommendation
     *
     * Vaccine administration recommendations.
     *
     * @return \TKusy\Hl7FhirR4\ImmunizationRecommendationRecommendationType[]
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * Sets a new recommendation
     *
     * Vaccine administration recommendations.
     *
     * @param \TKusy\Hl7FhirR4\ImmunizationRecommendationRecommendationType[] $recommendation
     * @return self
     */
    public function setRecommendation(array $recommendation)
    {
        $this->recommendation = $recommendation;
        return $this;
    }


}

