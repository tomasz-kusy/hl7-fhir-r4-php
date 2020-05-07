<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CapabilityStatementOperationType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.Operation
 */
class CapabilityStatementOperationType extends BackboneElementType
{

    /**
     * The name of the operation or query. For an operation, this is the name prefixed with $ and used in the URL. For a query, this is the name used in the _query parameter when the query is called.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * Where the formal definition can be found. If a server references the base definition of an Operation (i.e. from the specification itself such as ```http://hl7.org/fhir/OperationDefinition/ValueSet-expand```), that means it supports the full capabilities of the operation - e.g. both GET and POST invocation. If it only supports a subset, it must define its own custom [[[OperationDefinition]]] with a 'base' of the original OperationDefinition. The custom definition would describe the specific subset of functionality supported.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $definition
     */
    private $definition = null;

    /**
     * Documentation that describes anything special about the operation behavior, possibly detailing different behavior for system, type and instance-level invocation of the operation.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $documentation
     */
    private $documentation = null;

    /**
     * Gets as name
     *
     * The name of the operation or query. For an operation, this is the name prefixed with $ and used in the URL. For a query, this is the name used in the _query parameter when the query is called.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the operation or query. For an operation, this is the name prefixed with $ and used in the URL. For a query, this is the name used in the _query parameter when the query is called.
     *
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as definition
     *
     * Where the formal definition can be found. If a server references the base definition of an Operation (i.e. from the specification itself such as ```http://hl7.org/fhir/OperationDefinition/ValueSet-expand```), that means it supports the full capabilities of the operation - e.g. both GET and POST invocation. If it only supports a subset, it must define its own custom [[[OperationDefinition]]] with a 'base' of the original OperationDefinition. The custom definition would describe the specific subset of functionality supported.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * Where the formal definition can be found. If a server references the base definition of an Operation (i.e. from the specification itself such as ```http://hl7.org/fhir/OperationDefinition/ValueSet-expand```), that means it supports the full capabilities of the operation - e.g. both GET and POST invocation. If it only supports a subset, it must define its own custom [[[OperationDefinition]]] with a 'base' of the original OperationDefinition. The custom definition would describe the specific subset of functionality supported.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $definition
     * @return self
     */
    public function setDefinition(\TKusy\Hl7FhirR4\CanonicalType $definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Documentation that describes anything special about the operation behavior, possibly detailing different behavior for system, type and instance-level invocation of the operation.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Documentation that describes anything special about the operation behavior, possibly detailing different behavior for system, type and instance-level invocation of the operation.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $documentation
     * @return self
     */
    public function setDocumentation(\TKusy\Hl7FhirR4\MarkdownType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

