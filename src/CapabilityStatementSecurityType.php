<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CapabilityStatementSecurityType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.Security
 */
class CapabilityStatementSecurityType extends BackboneElementType
{

    /**
     * Server adds CORS headers when responding to requests - this enables Javascript applications to use the server.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $cors
     */
    private $cors = null;

    /**
     * Types of security services that are supported/required by the system.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $service
     */
    private $service = [
        
    ];

    /**
     * General description of how security works.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * Gets as cors
     *
     * Server adds CORS headers when responding to requests - this enables Javascript applications to use the server.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getCors()
    {
        return $this->cors;
    }

    /**
     * Sets a new cors
     *
     * Server adds CORS headers when responding to requests - this enables Javascript applications to use the server.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $cors
     * @return self
     */
    public function setCors(\TKusy\Hl7FhirR4\BooleanType $cors)
    {
        $this->cors = $cors;
        return $this;
    }

    /**
     * Adds as service
     *
     * Types of security services that are supported/required by the system.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $service
     */
    public function addToService(\TKusy\Hl7FhirR4\CodeableConceptType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * Types of security services that are supported/required by the system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Types of security services that are supported/required by the system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Types of security services that are supported/required by the system.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Types of security services that are supported/required by the system.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Gets as description
     *
     * General description of how security works.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * General description of how security works.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\MarkdownType $description)
    {
        $this->description = $description;
        return $this;
    }


}

