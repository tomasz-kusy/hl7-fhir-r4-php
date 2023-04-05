<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImmunizationProtocolAppliedType
 *
 * Describes the event of a patient being administered a vaccine or a record of an immunization as reported by a patient, a clinician or another party.
 * XSD Type: Immunization.ProtocolApplied
 */
class ImmunizationProtocolAppliedType extends BackboneElementType
{

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $series
     */
    private $series = null;

    /**
     * Indicates the authority who published the protocol (e.g. ACIP) that is being followed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $authority
     */
    private $authority = null;

    /**
     * The vaccine preventable disease the dose is being administered against.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $targetDisease
     */
    private $targetDisease = null;

    /**
     * Nominal position in a series as intended by the practitioner administering the dose.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $doseNumber
     */
    private $doseNumber = null;

    /**
     * The recommended number of doses to achieve immunity as intended by the practitioner administering the dose.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $seriesDoses
     */
    private $seriesDoses = null;

    /**
     * Gets as series
     *
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Sets a new series
     *
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $series
     * @return self
     */
    public function setSeries(?\TKusy\Hl7Fhir\R5\StringType $series = null)
    {
        $this->series = $series;
        return $this;
    }

    /**
     * Gets as authority
     *
     * Indicates the authority who published the protocol (e.g. ACIP) that is being followed.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Sets a new authority
     *
     * Indicates the authority who published the protocol (e.g. ACIP) that is being followed.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $authority
     * @return self
     */
    public function setAuthority(?\TKusy\Hl7Fhir\R5\ReferenceType $authority = null)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * Adds as targetDisease
     *
     * The vaccine preventable disease the dose is being administered against.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $targetDisease
     */
    public function addToTargetDisease(\TKusy\Hl7Fhir\R5\CodeableConceptType $targetDisease)
    {
        $this->targetDisease[] = $targetDisease;
        return $this;
    }

    /**
     * isset targetDisease
     *
     * The vaccine preventable disease the dose is being administered against.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTargetDisease($index)
    {
        return isset($this->targetDisease[$index]);
    }

    /**
     * unset targetDisease
     *
     * The vaccine preventable disease the dose is being administered against.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTargetDisease($index)
    {
        unset($this->targetDisease[$index]);
    }

    /**
     * Gets as targetDisease
     *
     * The vaccine preventable disease the dose is being administered against.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getTargetDisease()
    {
        return $this->targetDisease;
    }

    /**
     * Sets a new targetDisease
     *
     * The vaccine preventable disease the dose is being administered against.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $targetDisease
     * @return self
     */
    public function setTargetDisease(array $targetDisease = null)
    {
        $this->targetDisease = $targetDisease;
        return $this;
    }

    /**
     * Gets as doseNumber
     *
     * Nominal position in a series as intended by the practitioner administering the dose.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDoseNumber()
    {
        return $this->doseNumber;
    }

    /**
     * Sets a new doseNumber
     *
     * Nominal position in a series as intended by the practitioner administering the dose.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $doseNumber
     * @return self
     */
    public function setDoseNumber(\TKusy\Hl7Fhir\R5\StringType $doseNumber)
    {
        $this->doseNumber = $doseNumber;
        return $this;
    }

    /**
     * Gets as seriesDoses
     *
     * The recommended number of doses to achieve immunity as intended by the practitioner administering the dose.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSeriesDoses()
    {
        return $this->seriesDoses;
    }

    /**
     * Sets a new seriesDoses
     *
     * The recommended number of doses to achieve immunity as intended by the practitioner administering the dose.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $seriesDoses
     * @return self
     */
    public function setSeriesDoses(?\TKusy\Hl7Fhir\R5\StringType $seriesDoses = null)
    {
        $this->seriesDoses = $seriesDoses;
        return $this;
    }


}

