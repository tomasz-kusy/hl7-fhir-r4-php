<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SPDXLicenseType
 *
 * The license that applies to an Implementation Guide (using an SPDX license Identifiers, or 'not-open-source'). The binding is required but new SPDX license Identifiers are allowed to be used (https://spdx.org/licenses/).If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: SPDXLicense
 */
class SPDXLicenseType extends ElementType
{

    /**
     * @var string $value
     */
    private $value = null;

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

