<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\StringType $series
     */
    private $series = null;

    /**
     * Indicates the authority who published the protocol (e.g. ACIP) that is being followed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $authority
     */
    private $authority = null;

    /**
     * The vaccine preventable disease the dose is being administered against.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $targetDisease
     */
    private $targetDisease = [
        
    ];

    /**
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $doseNumberPositiveInt
     */
    private $doseNumberPositiveInt = null;

    /**
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $doseNumberString
     */
    private $doseNumberString = null;

    /**
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $seriesDosesPositiveInt
     */
    private $seriesDosesPositiveInt = null;

    /**
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $seriesDosesString
     */
    private $seriesDosesString = null;

    /**
     * Gets as series
     *
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $series
     * @return self
     */
    public function setSeries(\TKusy\Hl7FhirR4\StringType $series)
    {
        $this->series = $series;
        return $this;
    }

    /**
     * Gets as authority
     *
     * Indicates the authority who published the protocol (e.g. ACIP) that is being followed.
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
     * Indicates the authority who published the protocol (e.g. ACIP) that is being followed.
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
     * Adds as targetDisease
     *
     * The vaccine preventable disease the dose is being administered against.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $targetDisease
     */
    public function addToTargetDisease(\TKusy\Hl7FhirR4\CodeableConceptType $targetDisease)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $targetDisease
     * @return self
     */
    public function setTargetDisease(array $targetDisease)
    {
        $this->targetDisease = $targetDisease;
        return $this;
    }

    /**
     * Gets as doseNumberPositiveInt
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getDoseNumberPositiveInt()
    {
        return $this->doseNumberPositiveInt;
    }

    /**
     * Sets a new doseNumberPositiveInt
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $doseNumberPositiveInt
     * @return self
     */
    public function setDoseNumberPositiveInt(\TKusy\Hl7FhirR4\PositiveIntType $doseNumberPositiveInt)
    {
        $this->doseNumberPositiveInt = $doseNumberPositiveInt;
        return $this;
    }

    /**
     * Gets as doseNumberString
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDoseNumberString()
    {
        return $this->doseNumberString;
    }

    /**
     * Sets a new doseNumberString
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $doseNumberString
     * @return self
     */
    public function setDoseNumberString(\TKusy\Hl7FhirR4\StringType $doseNumberString)
    {
        $this->doseNumberString = $doseNumberString;
        return $this;
    }

    /**
     * Gets as seriesDosesPositiveInt
     *
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getSeriesDosesPositiveInt()
    {
        return $this->seriesDosesPositiveInt;
    }

    /**
     * Sets a new seriesDosesPositiveInt
     *
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $seriesDosesPositiveInt
     * @return self
     */
    public function setSeriesDosesPositiveInt(\TKusy\Hl7FhirR4\PositiveIntType $seriesDosesPositiveInt)
    {
        $this->seriesDosesPositiveInt = $seriesDosesPositiveInt;
        return $this;
    }

    /**
     * Gets as seriesDosesString
     *
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getSeriesDosesString()
    {
        return $this->seriesDosesString;
    }

    /**
     * Sets a new seriesDosesString
     *
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $seriesDosesString
     * @return self
     */
    public function setSeriesDosesString(\TKusy\Hl7FhirR4\StringType $seriesDosesString)
    {
        $this->seriesDosesString = $seriesDosesString;
        return $this;
    }


}

