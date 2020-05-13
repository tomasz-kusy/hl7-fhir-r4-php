<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ConsentDataType
 *
 * A record of a healthcare consumer’s choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 * XSD Type: Consent.Data
 */
class ConsentDataType extends BackboneElementType
{

    /**
     * How the resource reference is interpreted when testing consent restrictions.
     *
     * @var \TKusy\Hl7Fhir\R4\ConsentDataMeaningType $meaning
     */
    private $meaning = null;

    /**
     * A reference to a specific resource that defines which resources are covered by this consent.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $reference
     */
    private $reference = null;

    /**
     * Gets as meaning
     *
     * How the resource reference is interpreted when testing consent restrictions.
     *
     * @return \TKusy\Hl7Fhir\R4\ConsentDataMeaningType
     */
    public function getMeaning()
    {
        return $this->meaning;
    }

    /**
     * Sets a new meaning
     *
     * How the resource reference is interpreted when testing consent restrictions.
     *
     * @param \TKusy\Hl7Fhir\R4\ConsentDataMeaningType $meaning
     * @return self
     */
    public function setMeaning(\TKusy\Hl7Fhir\R4\ConsentDataMeaningType $meaning)
    {
        $this->meaning = $meaning;
        return $this;
    }

    /**
     * Gets as reference
     *
     * A reference to a specific resource that defines which resources are covered by this consent.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * A reference to a specific resource that defines which resources are covered by this consent.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7Fhir\R4\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

