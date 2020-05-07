<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing BasicType
 *
 * Basic is used for handling concepts not yet defined in FHIR, narrative-only resources that don't map to an existing resource, and custom resources not appropriate for inclusion in the FHIR specification.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: Basic
 */
class BasicType extends DomainResourceType
{

    /**
     * Identifier assigned to the resource for business purposes, outside the context of FHIR.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Identifies the 'type' of resource - equivalent to the resource name for other resources.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Identifies the patient, practitioner, device or any other resource that is the "focus" of this resource.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Identifies when the resource was first created.
     *
     * @var \TKusy\Hl7FhirR4\DateType $created
     */
    private $created = null;

    /**
     * Indicates who was responsible for creating the resource instance.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $author
     */
    private $author = null;

    /**
     * Adds as identifier
     *
     * Identifier assigned to the resource for business purposes, outside the context of FHIR.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Identifier assigned to the resource for business purposes, outside the context of FHIR.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Identifier assigned to the resource for business purposes, outside the context of FHIR.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Identifier assigned to the resource for business purposes, outside the context of FHIR.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifier assigned to the resource for business purposes, outside the context of FHIR.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as code
     *
     * Identifies the 'type' of resource - equivalent to the resource name for other resources.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Identifies the 'type' of resource - equivalent to the resource name for other resources.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Identifies the patient, practitioner, device or any other resource that is the "focus" of this resource.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Identifies the patient, practitioner, device or any other resource that is the "focus" of this resource.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as created
     *
     * Identifies when the resource was first created.
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * Identifies when the resource was first created.
     *
     * @param \TKusy\Hl7FhirR4\DateType $created
     * @return self
     */
    public function setCreated(\TKusy\Hl7FhirR4\DateType $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as author
     *
     * Indicates who was responsible for creating the resource instance.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * Indicates who was responsible for creating the resource instance.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $author
     * @return self
     */
    public function setAuthor(\TKusy\Hl7FhirR4\ReferenceType $author)
    {
        $this->author = $author;
        return $this;
    }


}

