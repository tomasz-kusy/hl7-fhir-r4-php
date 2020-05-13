<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing PatientLinkType
 *
 * Demographics and other administrative information about an individual or animal receiving care or other health-related services.
 * XSD Type: Patient.Link
 */
class PatientLinkType extends BackboneElementType
{

    /**
     * The other patient resource that the link refers to.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $other
     */
    private $other = null;

    /**
     * The type of link between this patient resource and another patient resource.
     *
     * @var \TKusy\Hl7Fhir\R4\LinkTypeType $type
     */
    private $type = null;

    /**
     * Gets as other
     *
     * The other patient resource that the link refers to.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Sets a new other
     *
     * The other patient resource that the link refers to.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $other
     * @return self
     */
    public function setOther(\TKusy\Hl7Fhir\R4\ReferenceType $other)
    {
        $this->other = $other;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of link between this patient resource and another patient resource.
     *
     * @return \TKusy\Hl7Fhir\R4\LinkTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of link between this patient resource and another patient resource.
     *
     * @param \TKusy\Hl7Fhir\R4\LinkTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\LinkTypeType $type)
    {
        $this->type = $type;
        return $this;
    }


}

