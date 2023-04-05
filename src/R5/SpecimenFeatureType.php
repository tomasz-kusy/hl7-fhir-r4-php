<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SpecimenFeatureType
 *
 * A sample to be used for analysis.
 * XSD Type: Specimen.Feature
 */
class SpecimenFeatureType extends BackboneElementType
{

    /**
     * The landmark or feature being highlighted.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Description of the feature of the specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * Gets as type
     *
     * The landmark or feature being highlighted.
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
     * The landmark or feature being highlighted.
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
     * Gets as description
     *
     * Description of the feature of the specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of the feature of the specimen.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R5\StringType $description)
    {
        $this->description = $description;
        return $this;
    }


}

