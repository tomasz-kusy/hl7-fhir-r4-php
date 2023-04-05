<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicinalProductDefinitionContactType
 *
 * A medicinal product, being a substance or combination of substances that is intended to treat, prevent or diagnose a disease, or to restore, correct or modify physiological functions by exerting a pharmacological, immunological or metabolic action. This resource is intended to define and detail such products and their properties, for uses other than direct patient care (e.g. regulatory use, or drug catalogs).
 * XSD Type: MedicinalProductDefinition.Contact
 */
class MedicinalProductDefinitionContactType extends BackboneElementType
{

    /**
     * Allows the contact to be classified, for example QPPV, Pharmacovigilance Enquiry Information.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A product specific contact, person (in a role), or an organization.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $contact
     */
    private $contact = null;

    /**
     * Gets as type
     *
     * Allows the contact to be classified, for example QPPV, Pharmacovigilance Enquiry Information.
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
     * Allows the contact to be classified, for example QPPV, Pharmacovigilance Enquiry Information.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as contact
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $contact
     * @return self
     */
    public function setContact(\TKusy\Hl7Fhir\R5\ReferenceType $contact)
    {
        $this->contact = $contact;
        return $this;
    }


}

