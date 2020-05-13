<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing CodeSystemConceptType
 *
 * The CodeSystem resource is used to declare the existence of and describe a code system or code system supplement and its key properties, and optionally define a part or all of its content.
 * XSD Type: CodeSystem.Concept
 */
class CodeSystemConceptType extends BackboneElementType
{

    /**
     * A code - a text symbol - that uniquely identifies the concept within the code system.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType $code
     */
    private $code = null;

    /**
     * A human readable string that is the recommended default way to present this concept to a user.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $display
     */
    private $display = null;

    /**
     * The formal definition of the concept. The code system resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $definition
     */
    private $definition = null;

    /**
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeSystemDesignationType[] $designation
     */
    private $designation = null;

    /**
     * A property value for this concept.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeSystemProperty1Type[] $property
     */
    private $property = null;

    /**
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeSystemConceptType[] $concept
     */
    private $concept = null;

    /**
     * Gets as code
     *
     * A code - a text symbol - that uniquely identifies the concept within the code system.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code - a text symbol - that uniquely identifies the concept within the code system.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as display
     *
     * A human readable string that is the recommended default way to present this concept to a user.
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
     * A human readable string that is the recommended default way to present this concept to a user.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $display
     * @return self
     */
    public function setDisplay(\TKusy\Hl7Fhir\R4\StringType $display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Gets as definition
     *
     * The formal definition of the concept. The code system resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * The formal definition of the concept. The code system resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $definition
     * @return self
     */
    public function setDefinition(\TKusy\Hl7Fhir\R4\StringType $definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Adds as designation
     *
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeSystemDesignationType $designation
     */
    public function addToDesignation(\TKusy\Hl7Fhir\R4\CodeSystemDesignationType $designation)
    {
        $this->designation[] = $designation;
        return $this;
    }

    /**
     * isset designation
     *
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDesignation($index)
    {
        return isset($this->designation[$index]);
    }

    /**
     * unset designation
     *
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDesignation($index)
    {
        unset($this->designation[$index]);
    }

    /**
     * Gets as designation
     *
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeSystemDesignationType[]
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Sets a new designation
     *
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeSystemDesignationType[] $designation
     * @return self
     */
    public function setDesignation(array $designation)
    {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Adds as property
     *
     * A property value for this concept.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeSystemProperty1Type $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R4\CodeSystemProperty1Type $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * A property value for this concept.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * A property value for this concept.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * A property value for this concept.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeSystemProperty1Type[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * A property value for this concept.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeSystemProperty1Type[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Adds as concept
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeSystemConceptType $concept
     */
    public function addToConcept(\TKusy\Hl7Fhir\R4\CodeSystemConceptType $concept)
    {
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * isset concept
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConcept($index)
    {
        return isset($this->concept[$index]);
    }

    /**
     * unset concept
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConcept($index)
    {
        unset($this->concept[$index]);
    }

    /**
     * Gets as concept
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeSystemConceptType[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Sets a new concept
     *
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeSystemConceptType[] $concept
     * @return self
     */
    public function setConcept(array $concept)
    {
        $this->concept = $concept;
        return $this;
    }


}

