<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ElementDefinitionAdditionalType
 *
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ElementDefinition.Additional
 */
class ElementDefinitionAdditionalType extends BackboneTypeType
{

    /**
     * The use of this additional binding.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $purpose
     */
    private $purpose = null;

    /**
     * The valueSet that is being bound for the purpose.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $valueSet
     */
    private $valueSet = null;

    /**
     * Documentation of the purpose of use of the bindingproviding additional information about how it is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $documentation
     */
    private $documentation = null;

    /**
     * Concise documentation - for summary tables.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $shortDoco
     */
    private $shortDoco = null;

    /**
     * Qualifies the usage of the binding. Typically bindings are qualified by jurisdiction, but they may also be qualified by gender, workflow status, clinical domain etc. The information to decide whether a usege context applies is usually outside the resource, determined by context, and this might present challenges for validation tooling.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $usage
     */
    private $usage = null;

    /**
     * Whether the binding applies to all repeats, or just to any one of them. This is only relevant for elements that can repeat.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $any
     */
    private $any = null;

    /**
     * Gets as purpose
     *
     * The use of this additional binding.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * The use of this additional binding.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $purpose
     * @return self
     */
    public function setPurpose(\TKusy\Hl7Fhir\R5\CodeType $purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as valueSet
     *
     * The valueSet that is being bound for the purpose.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * Sets a new valueSet
     *
     * The valueSet that is being bound for the purpose.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $valueSet
     * @return self
     */
    public function setValueSet(\TKusy\Hl7Fhir\R5\CanonicalType $valueSet)
    {
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Documentation of the purpose of use of the bindingproviding additional information about how it is intended to be used.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Documentation of the purpose of use of the bindingproviding additional information about how it is intended to be used.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $documentation
     * @return self
     */
    public function setDocumentation(?\TKusy\Hl7Fhir\R5\MarkdownType $documentation = null)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Gets as shortDoco
     *
     * Concise documentation - for summary tables.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getShortDoco()
    {
        return $this->shortDoco;
    }

    /**
     * Sets a new shortDoco
     *
     * Concise documentation - for summary tables.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $shortDoco
     * @return self
     */
    public function setShortDoco(?\TKusy\Hl7Fhir\R5\StringType $shortDoco = null)
    {
        $this->shortDoco = $shortDoco;
        return $this;
    }

    /**
     * Adds as usage
     *
     * Qualifies the usage of the binding. Typically bindings are qualified by jurisdiction, but they may also be qualified by gender, workflow status, clinical domain etc. The information to decide whether a usege context applies is usually outside the resource, determined by context, and this might present challenges for validation tooling.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UsageContextType $usage
     */
    public function addToUsage(\TKusy\Hl7Fhir\R5\UsageContextType $usage)
    {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * isset usage
     *
     * Qualifies the usage of the binding. Typically bindings are qualified by jurisdiction, but they may also be qualified by gender, workflow status, clinical domain etc. The information to decide whether a usege context applies is usually outside the resource, determined by context, and this might present challenges for validation tooling.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsage($index)
    {
        return isset($this->usage[$index]);
    }

    /**
     * unset usage
     *
     * Qualifies the usage of the binding. Typically bindings are qualified by jurisdiction, but they may also be qualified by gender, workflow status, clinical domain etc. The information to decide whether a usege context applies is usually outside the resource, determined by context, and this might present challenges for validation tooling.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsage($index)
    {
        unset($this->usage[$index]);
    }

    /**
     * Gets as usage
     *
     * Qualifies the usage of the binding. Typically bindings are qualified by jurisdiction, but they may also be qualified by gender, workflow status, clinical domain etc. The information to decide whether a usege context applies is usually outside the resource, determined by context, and this might present challenges for validation tooling.
     *
     * @return \TKusy\Hl7Fhir\R5\UsageContextType[]
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * Qualifies the usage of the binding. Typically bindings are qualified by jurisdiction, but they may also be qualified by gender, workflow status, clinical domain etc. The information to decide whether a usege context applies is usually outside the resource, determined by context, and this might present challenges for validation tooling.
     *
     * @param \TKusy\Hl7Fhir\R5\UsageContextType[] $usage
     * @return self
     */
    public function setUsage(array $usage = null)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Gets as any
     *
     * Whether the binding applies to all repeats, or just to any one of them. This is only relevant for elements that can repeat.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * Sets a new any
     *
     * Whether the binding applies to all repeats, or just to any one of them. This is only relevant for elements that can repeat.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $any
     * @return self
     */
    public function setAny(?\TKusy\Hl7Fhir\R5\BooleanType $any = null)
    {
        $this->any = $any;
        return $this;
    }


}

