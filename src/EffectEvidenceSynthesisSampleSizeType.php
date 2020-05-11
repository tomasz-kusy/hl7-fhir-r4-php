<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing EffectEvidenceSynthesisSampleSizeType
 *
 * The EffectEvidenceSynthesis resource describes the difference in an outcome between exposures states in a population where the effect estimate is derived from a combination of research studies.
 * XSD Type: EffectEvidenceSynthesis.SampleSize
 */
class EffectEvidenceSynthesisSampleSizeType extends BackboneElementType
{

    /**
     * Human-readable summary of sample size.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Number of studies included in this evidence synthesis.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $numberOfStudies
     */
    private $numberOfStudies = null;

    /**
     * Number of participants included in this evidence synthesis.
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $numberOfParticipants
     */
    private $numberOfParticipants = null;

    /**
     * Gets as description
     *
     * Human-readable summary of sample size.
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
     * Human-readable summary of sample size.
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
     * Gets as numberOfStudies
     *
     * Number of studies included in this evidence synthesis.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getNumberOfStudies()
    {
        return $this->numberOfStudies;
    }

    /**
     * Sets a new numberOfStudies
     *
     * Number of studies included in this evidence synthesis.
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $numberOfStudies
     * @return self
     */
    public function setNumberOfStudies(\TKusy\Hl7FhirR4\IntegerType $numberOfStudies)
    {
        $this->numberOfStudies = $numberOfStudies;
        return $this;
    }

    /**
     * Gets as numberOfParticipants
     *
     * Number of participants included in this evidence synthesis.
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getNumberOfParticipants()
    {
        return $this->numberOfParticipants;
    }

    /**
     * Sets a new numberOfParticipants
     *
     * Number of participants included in this evidence synthesis.
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $numberOfParticipants
     * @return self
     */
    public function setNumberOfParticipants(\TKusy\Hl7FhirR4\IntegerType $numberOfParticipants)
    {
        $this->numberOfParticipants = $numberOfParticipants;
        return $this;
    }


}

