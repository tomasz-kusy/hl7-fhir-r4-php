<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing OperationDefinitionBindingType
 *
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).
 * XSD Type: OperationDefinition.Binding
 */
class OperationDefinitionBindingType extends BackboneElementType
{

    /**
     * Indicates the degree of conformance expectations associated with this binding - that is, the degree to which the provided value set must be adhered to in the instances.
     *
     * @var \TKusy\Hl7Fhir\R4\BindingStrengthType $strength
     */
    private $strength = null;

    /**
     * Points to the value set or external definition (e.g. implicit value set) that identifies the set of codes to be used.
     *
     * @var \TKusy\Hl7Fhir\R4\CanonicalType $valueSet
     */
    private $valueSet = null;

    /**
     * Gets as strength
     *
     * Indicates the degree of conformance expectations associated with this binding - that is, the degree to which the provided value set must be adhered to in the instances.
     *
     * @return \TKusy\Hl7Fhir\R4\BindingStrengthType
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Sets a new strength
     *
     * Indicates the degree of conformance expectations associated with this binding - that is, the degree to which the provided value set must be adhered to in the instances.
     *
     * @param \TKusy\Hl7Fhir\R4\BindingStrengthType $strength
     * @return self
     */
    public function setStrength(\TKusy\Hl7Fhir\R4\BindingStrengthType $strength)
    {
        $this->strength = $strength;
        return $this;
    }

    /**
     * Gets as valueSet
     *
     * Points to the value set or external definition (e.g. implicit value set) that identifies the set of codes to be used.
     *
     * @return \TKusy\Hl7Fhir\R4\CanonicalType
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * Sets a new valueSet
     *
     * Points to the value set or external definition (e.g. implicit value set) that identifies the set of codes to be used.
     *
     * @param \TKusy\Hl7Fhir\R4\CanonicalType $valueSet
     * @return self
     */
    public function setValueSet(\TKusy\Hl7Fhir\R4\CanonicalType $valueSet)
    {
        $this->valueSet = $valueSet;
        return $this;
    }


}

