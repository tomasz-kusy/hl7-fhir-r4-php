<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationContributionInstanceType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.ContributionInstance
 */
class CitationContributionInstanceType extends BackboneElementType
{

    /**
     * The specific contribution.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The time that the contribution was made.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $time
     */
    private $time = null;

    /**
     * Gets as type
     *
     * The specific contribution.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The specific contribution.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as time
     *
     * The time that the contribution was made.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * The time that the contribution was made.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $time
     * @return self
     */
    public function setTime(?\TKusy\Hl7Fhir\R5\DateTimeType $time = null)
    {
        $this->time = $time;
        return $this;
    }


}

