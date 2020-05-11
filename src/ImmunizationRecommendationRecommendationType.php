<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImmunizationRecommendationRecommendationType
 *
 * A patient's point-in-time set of recommendations (i.e. forecasting) according to a published schedule with optional supporting justification.
 * XSD Type: ImmunizationRecommendation.Recommendation
 */
class ImmunizationRecommendationRecommendationType extends BackboneElementType
{

    /**
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $vaccineCode
     */
    private $vaccineCode = null;

    /**
     * The targeted disease for the recommendation.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $targetDisease
     */
    private $targetDisease = null;

    /**
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $contraindicatedVaccineCode
     */
    private $contraindicatedVaccineCode = null;

    /**
     * Indicates the patient status with respect to the path to immunity for the target disease.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $forecastStatus
     */
    private $forecastStatus = null;

    /**
     * The reason for the assigned forecast status.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $forecastReason
     */
    private $forecastReason = null;

    /**
     * Vaccine date recommendations. For example, earliest date to administer, latest date to administer, etc.
     *
     * @var \TKusy\Hl7FhirR4\ImmunizationRecommendationDateCriterionType[] $dateCriterion
     */
    private $dateCriterion = null;

    /**
     * Contains the description about the protocol under which the vaccine was administered.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     *
     * @var \TKusy\Hl7FhirR4\StringType $series
     */
    private $series = null;

    /**
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose). (choose any one of doseNumber*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $doseNumberPositiveInt
     */
    private $doseNumberPositiveInt = null;

    /**
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose). (choose any one of doseNumber*, but only one)
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
     * Immunization event history and/or evaluation that supports the status and recommendation.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $supportingImmunization
     */
    private $supportingImmunization = null;

    /**
     * Patient Information that supports the status and recommendation. This includes patient observations, adverse reactions and allergy/intolerance information.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $supportingPatientInformation
     */
    private $supportingPatientInformation = null;

    /**
     * Adds as vaccineCode
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $vaccineCode
     */
    public function addToVaccineCode(\TKusy\Hl7FhirR4\CodeableConceptType $vaccineCode)
    {
        $this->vaccineCode[] = $vaccineCode;
        return $this;
    }

    /**
     * isset vaccineCode
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVaccineCode($index)
    {
        return isset($this->vaccineCode[$index]);
    }

    /**
     * unset vaccineCode
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVaccineCode($index)
    {
        unset($this->vaccineCode[$index]);
    }

    /**
     * Gets as vaccineCode
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getVaccineCode()
    {
        return $this->vaccineCode;
    }

    /**
     * Sets a new vaccineCode
     *
     * Vaccine(s) or vaccine group that pertain to the recommendation.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $vaccineCode
     * @return self
     */
    public function setVaccineCode(array $vaccineCode)
    {
        $this->vaccineCode = $vaccineCode;
        return $this;
    }

    /**
     * Gets as targetDisease
     *
     * The targeted disease for the recommendation.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getTargetDisease()
    {
        return $this->targetDisease;
    }

    /**
     * Sets a new targetDisease
     *
     * The targeted disease for the recommendation.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $targetDisease
     * @return self
     */
    public function setTargetDisease(\TKusy\Hl7FhirR4\CodeableConceptType $targetDisease)
    {
        $this->targetDisease = $targetDisease;
        return $this;
    }

    /**
     * Adds as contraindicatedVaccineCode
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $contraindicatedVaccineCode
     */
    public function addToContraindicatedVaccineCode(\TKusy\Hl7FhirR4\CodeableConceptType $contraindicatedVaccineCode)
    {
        $this->contraindicatedVaccineCode[] = $contraindicatedVaccineCode;
        return $this;
    }

    /**
     * isset contraindicatedVaccineCode
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContraindicatedVaccineCode($index)
    {
        return isset($this->contraindicatedVaccineCode[$index]);
    }

    /**
     * unset contraindicatedVaccineCode
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContraindicatedVaccineCode($index)
    {
        unset($this->contraindicatedVaccineCode[$index]);
    }

    /**
     * Gets as contraindicatedVaccineCode
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getContraindicatedVaccineCode()
    {
        return $this->contraindicatedVaccineCode;
    }

    /**
     * Sets a new contraindicatedVaccineCode
     *
     * Vaccine(s) which should not be used to fulfill the recommendation.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $contraindicatedVaccineCode
     * @return self
     */
    public function setContraindicatedVaccineCode(array $contraindicatedVaccineCode)
    {
        $this->contraindicatedVaccineCode = $contraindicatedVaccineCode;
        return $this;
    }

    /**
     * Gets as forecastStatus
     *
     * Indicates the patient status with respect to the path to immunity for the target disease.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getForecastStatus()
    {
        return $this->forecastStatus;
    }

    /**
     * Sets a new forecastStatus
     *
     * Indicates the patient status with respect to the path to immunity for the target disease.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $forecastStatus
     * @return self
     */
    public function setForecastStatus(\TKusy\Hl7FhirR4\CodeableConceptType $forecastStatus)
    {
        $this->forecastStatus = $forecastStatus;
        return $this;
    }

    /**
     * Adds as forecastReason
     *
     * The reason for the assigned forecast status.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $forecastReason
     */
    public function addToForecastReason(\TKusy\Hl7FhirR4\CodeableConceptType $forecastReason)
    {
        $this->forecastReason[] = $forecastReason;
        return $this;
    }

    /**
     * isset forecastReason
     *
     * The reason for the assigned forecast status.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetForecastReason($index)
    {
        return isset($this->forecastReason[$index]);
    }

    /**
     * unset forecastReason
     *
     * The reason for the assigned forecast status.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetForecastReason($index)
    {
        unset($this->forecastReason[$index]);
    }

    /**
     * Gets as forecastReason
     *
     * The reason for the assigned forecast status.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getForecastReason()
    {
        return $this->forecastReason;
    }

    /**
     * Sets a new forecastReason
     *
     * The reason for the assigned forecast status.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $forecastReason
     * @return self
     */
    public function setForecastReason(array $forecastReason)
    {
        $this->forecastReason = $forecastReason;
        return $this;
    }

    /**
     * Adds as dateCriterion
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest date to administer, etc.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImmunizationRecommendationDateCriterionType $dateCriterion
     */
    public function addToDateCriterion(\TKusy\Hl7FhirR4\ImmunizationRecommendationDateCriterionType $dateCriterion)
    {
        $this->dateCriterion[] = $dateCriterion;
        return $this;
    }

    /**
     * isset dateCriterion
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest date to administer, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDateCriterion($index)
    {
        return isset($this->dateCriterion[$index]);
    }

    /**
     * unset dateCriterion
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest date to administer, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDateCriterion($index)
    {
        unset($this->dateCriterion[$index]);
    }

    /**
     * Gets as dateCriterion
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest date to administer, etc.
     *
     * @return \TKusy\Hl7FhirR4\ImmunizationRecommendationDateCriterionType[]
     */
    public function getDateCriterion()
    {
        return $this->dateCriterion;
    }

    /**
     * Sets a new dateCriterion
     *
     * Vaccine date recommendations. For example, earliest date to administer, latest date to administer, etc.
     *
     * @param \TKusy\Hl7FhirR4\ImmunizationRecommendationDateCriterionType[] $dateCriterion
     * @return self
     */
    public function setDateCriterion(array $dateCriterion)
    {
        $this->dateCriterion = $dateCriterion;
        return $this;
    }

    /**
     * Gets as description
     *
     * Contains the description about the protocol under which the vaccine was administered.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Contains the description about the protocol under which the vaccine was administered.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

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
     * Gets as doseNumberPositiveInt
     *
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose). (choose any one of doseNumber*, but only one)
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
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose). (choose any one of doseNumber*, but only one)
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
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose). (choose any one of doseNumber*, but only one)
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
     * Nominal position of the recommended dose in a series (e.g. dose 2 is the next recommended dose). (choose any one of doseNumber*, but only one)
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

    /**
     * Adds as supportingImmunization
     *
     * Immunization event history and/or evaluation that supports the status and recommendation.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $supportingImmunization
     */
    public function addToSupportingImmunization(\TKusy\Hl7FhirR4\ReferenceType $supportingImmunization)
    {
        $this->supportingImmunization[] = $supportingImmunization;
        return $this;
    }

    /**
     * isset supportingImmunization
     *
     * Immunization event history and/or evaluation that supports the status and recommendation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingImmunization($index)
    {
        return isset($this->supportingImmunization[$index]);
    }

    /**
     * unset supportingImmunization
     *
     * Immunization event history and/or evaluation that supports the status and recommendation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingImmunization($index)
    {
        unset($this->supportingImmunization[$index]);
    }

    /**
     * Gets as supportingImmunization
     *
     * Immunization event history and/or evaluation that supports the status and recommendation.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSupportingImmunization()
    {
        return $this->supportingImmunization;
    }

    /**
     * Sets a new supportingImmunization
     *
     * Immunization event history and/or evaluation that supports the status and recommendation.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $supportingImmunization
     * @return self
     */
    public function setSupportingImmunization(array $supportingImmunization)
    {
        $this->supportingImmunization = $supportingImmunization;
        return $this;
    }

    /**
     * Adds as supportingPatientInformation
     *
     * Patient Information that supports the status and recommendation. This includes patient observations, adverse reactions and allergy/intolerance information.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $supportingPatientInformation
     */
    public function addToSupportingPatientInformation(\TKusy\Hl7FhirR4\ReferenceType $supportingPatientInformation)
    {
        $this->supportingPatientInformation[] = $supportingPatientInformation;
        return $this;
    }

    /**
     * isset supportingPatientInformation
     *
     * Patient Information that supports the status and recommendation. This includes patient observations, adverse reactions and allergy/intolerance information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingPatientInformation($index)
    {
        return isset($this->supportingPatientInformation[$index]);
    }

    /**
     * unset supportingPatientInformation
     *
     * Patient Information that supports the status and recommendation. This includes patient observations, adverse reactions and allergy/intolerance information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingPatientInformation($index)
    {
        unset($this->supportingPatientInformation[$index]);
    }

    /**
     * Gets as supportingPatientInformation
     *
     * Patient Information that supports the status and recommendation. This includes patient observations, adverse reactions and allergy/intolerance information.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSupportingPatientInformation()
    {
        return $this->supportingPatientInformation;
    }

    /**
     * Sets a new supportingPatientInformation
     *
     * Patient Information that supports the status and recommendation. This includes patient observations, adverse reactions and allergy/intolerance information.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $supportingPatientInformation
     * @return self
     */
    public function setSupportingPatientInformation(array $supportingPatientInformation)
    {
        $this->supportingPatientInformation = $supportingPatientInformation;
        return $this;
    }


}

