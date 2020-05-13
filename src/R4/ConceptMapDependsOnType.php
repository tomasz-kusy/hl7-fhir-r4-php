<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ConceptMapDependsOnType
 *
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 * XSD Type: ConceptMap.DependsOn
 */
class ConceptMapDependsOnType extends BackboneElementType
{

    /**
     * A reference to an element that holds a coded value that corresponds to a code system property. The idea is that the information model carries an element somewhere that is labeled to correspond with a code system property.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $property
     */
    private $property = null;

    /**
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     *
     * @var \TKusy\Hl7Fhir\R4\CanonicalType $system
     */
    private $system = null;

    /**
     * Identity (code or path) or the element/item/ValueSet/text that the map depends on / refers to.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $value
     */
    private $value = null;

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $display
     */
    private $display = null;

    /**
     * Gets as property
     *
     * A reference to an element that holds a coded value that corresponds to a code system property. The idea is that the information model carries an element somewhere that is labeled to correspond with a code system property.
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * A reference to an element that holds a coded value that corresponds to a code system property. The idea is that the information model carries an element somewhere that is labeled to correspond with a code system property.
     *
     * @param \TKusy\Hl7Fhir\R4\UriType $property
     * @return self
     */
    public function setProperty(\TKusy\Hl7Fhir\R4\UriType $property)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Gets as system
     *
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     *
     * @return \TKusy\Hl7Fhir\R4\CanonicalType
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Sets a new system
     *
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     *
     * @param \TKusy\Hl7Fhir\R4\CanonicalType $system
     * @return self
     */
    public function setSystem(\TKusy\Hl7Fhir\R4\CanonicalType $system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Gets as value
     *
     * Identity (code or path) or the element/item/ValueSet/text that the map depends on / refers to.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Identity (code or path) or the element/item/ValueSet/text that the map depends on / refers to.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R4\StringType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as display
     *
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets a new display
     *
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $display
     * @return self
     */
    public function setDisplay(\TKusy\Hl7Fhir\R4\StringType $display)
    {
        $this->display = $display;
        return $this;
    }


}

