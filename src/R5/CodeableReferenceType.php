<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CodeableReferenceType
 *
 * A reference to a resource (by instance), or instead, a reference to a concept defined in a terminology or ontology (by class).
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: CodeableReference
 */
class CodeableReferenceType extends DataTypeType
{

    /**
     * A reference to a concept - e.g. the information is identified by its general class to the degree of precision found in the terminology.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $concept
     */
    private $concept = null;

    /**
     * A reference to a resource the provides exact details about the information being referenced.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reference
     */
    private $reference = null;

    /**
     * Gets as concept
     *
     * A reference to a concept - e.g. the information is identified by its general class to the degree of precision found in the terminology.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Sets a new concept
     *
     * A reference to a concept - e.g. the information is identified by its general class to the degree of precision found in the terminology.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $concept
     * @return self
     */
    public function setConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $concept = null)
    {
        $this->concept = $concept;
        return $this;
    }

    /**
     * Gets as reference
     *
     * A reference to a resource the provides exact details about the information being referenced.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * A reference to a resource the provides exact details about the information being referenced.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reference
     * @return self
     */
    public function setReference(?\TKusy\Hl7Fhir\R5\ReferenceType $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }


}

