<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RiskEvidenceSynthesisSampleSizeType
 *
 * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a population plus exposure state where the risk estimate is derived from a combination of research studies.
 * XSD Type: RiskEvidenceSynthesis.SampleSize
 */
class RiskEvidenceSynthesisSampleSizeType extends BackboneElementType
{

    /**
     * Human-readable summary of sample size.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Number of studies included in this evidence synthesis.
     *
     * @var \integer $numberOfStudies
     */
    private $numberOfStudies = null;

    /**
     * Number of participants included in this evidence synthesis.
     *
     * @var \integer $numberOfParticipants
     */
    private $numberOfParticipants = null;

    /**
     * Gets as description
     *
     * Human-readable summary of sample size.
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
     * Human-readable summary of sample size.
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
     * Gets as numberOfStudies
     *
     * Number of studies included in this evidence synthesis.
     *
     * @return \integer
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
     * @param \integer $numberOfStudies
     * @return self
     */
    public function setNumberOfStudies(\integer $numberOfStudies)
    {
        $this->numberOfStudies = $numberOfStudies;
        return $this;
    }

    /**
     * Gets as numberOfParticipants
     *
     * Number of participants included in this evidence synthesis.
     *
     * @return \integer
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
     * @param \integer $numberOfParticipants
     * @return self
     */
    public function setNumberOfParticipants(\integer $numberOfParticipants)
    {
        $this->numberOfParticipants = $numberOfParticipants;
        return $this;
    }


}

