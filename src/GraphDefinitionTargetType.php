<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing GraphDefinitionTargetType
 *
 * A formal computable definition of a graph of resources - that is, a coherent set of resources that form a graph by following references. The Graph Definition resource defines a set and makes rules about the set.
 * XSD Type: GraphDefinition.Target
 */
class GraphDefinitionTargetType extends BackboneElementType
{

    /**
     * Type of resource this link refers to.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $type
     */
    private $type = null;

    /**
     * A set of parameters to look up.
     *
     * @var string $params
     */
    private $params = null;

    /**
     * Profile for the target resource.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $profile
     */
    private $profile = null;

    /**
     * Compartment Consistency Rules.
     *
     * @var \TKusy\Hl7FhirR4\GraphDefinitionCompartmentType[] $compartment
     */
    private $compartment = null;

    /**
     * Additional links from target resource.
     *
     * @var \TKusy\Hl7FhirR4\GraphDefinitionLinkType[] $link
     */
    private $link = null;

    /**
     * Gets as type
     *
     * Type of resource this link refers to.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of resource this link refers to.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as params
     *
     * A set of parameters to look up.
     *
     * @return string
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Sets a new params
     *
     * A set of parameters to look up.
     *
     * @param string $params
     * @return self
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * Gets as profile
     *
     * Profile for the target resource.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Profile for the target resource.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $profile
     * @return self
     */
    public function setProfile(\TKusy\Hl7FhirR4\CanonicalType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Adds as compartment
     *
     * Compartment Consistency Rules.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\GraphDefinitionCompartmentType $compartment
     */
    public function addToCompartment(\TKusy\Hl7FhirR4\GraphDefinitionCompartmentType $compartment)
    {
        $this->compartment[] = $compartment;
        return $this;
    }

    /**
     * isset compartment
     *
     * Compartment Consistency Rules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompartment($index)
    {
        return isset($this->compartment[$index]);
    }

    /**
     * unset compartment
     *
     * Compartment Consistency Rules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompartment($index)
    {
        unset($this->compartment[$index]);
    }

    /**
     * Gets as compartment
     *
     * Compartment Consistency Rules.
     *
     * @return \TKusy\Hl7FhirR4\GraphDefinitionCompartmentType[]
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * Sets a new compartment
     *
     * Compartment Consistency Rules.
     *
     * @param \TKusy\Hl7FhirR4\GraphDefinitionCompartmentType[] $compartment
     * @return self
     */
    public function setCompartment(array $compartment)
    {
        $this->compartment = $compartment;
        return $this;
    }

    /**
     * Adds as link
     *
     * Additional links from target resource.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\GraphDefinitionLinkType $link
     */
    public function addToLink(\TKusy\Hl7FhirR4\GraphDefinitionLinkType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * Additional links from target resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLink($index)
    {
        return isset($this->link[$index]);
    }

    /**
     * unset link
     *
     * Additional links from target resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLink($index)
    {
        unset($this->link[$index]);
    }

    /**
     * Gets as link
     *
     * Additional links from target resource.
     *
     * @return \TKusy\Hl7FhirR4\GraphDefinitionLinkType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * Additional links from target resource.
     *
     * @param \TKusy\Hl7FhirR4\GraphDefinitionLinkType[] $link
     * @return self
     */
    public function setLink(array $link)
    {
        $this->link = $link;
        return $this;
    }


}

