<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PatientLinkType
 *
 * Demographics and other administrative information about an individual or animal receiving care or other health-related services.
 * XSD Type: Patient.Link
 */
class PatientLinkType extends BackboneElementType
{

    /**
     * Link to a Patient or RelatedPerson resource that concerns the same actual individual.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $other
     */
    private $other = null;

    /**
     * The type of link between this patient resource and another patient resource.
     *
     * @var \TKusy\Hl7Fhir\R5\LinkTypeType $type
     */
    private $type = null;

    /**
     * Gets as other
     *
     * Link to a Patient or RelatedPerson resource that concerns the same actual individual.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Sets a new other
     *
     * Link to a Patient or RelatedPerson resource that concerns the same actual individual.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $other
     * @return self
     */
    public function setOther(\TKusy\Hl7Fhir\R5\ReferenceType $other)
    {
        $this->other = $other;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of link between this patient resource and another patient resource.
     *
     * @return \TKusy\Hl7Fhir\R5\LinkTypeType
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
     * @param \TKusy\Hl7Fhir\R5\LinkTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\LinkTypeType $type)
    {
        $this->type = $type;
        return $this;
    }


}

