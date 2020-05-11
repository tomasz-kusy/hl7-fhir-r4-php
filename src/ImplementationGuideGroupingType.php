<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImplementationGuideGroupingType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Grouping
 */
class ImplementationGuideGroupingType extends BackboneElementType
{

    /**
     * The human-readable title to display for the package of resources when rendering the implementation guide.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Human readable text describing the package.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as name
     *
     * The human-readable title to display for the package of resources when rendering the implementation guide.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The human-readable title to display for the package of resources when rendering the implementation guide.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * Human readable text describing the package.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Human readable text describing the package.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

