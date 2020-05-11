<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CodingType
 *
 * A reference to a code defined by a terminology system.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Coding
 */
class CodingType extends ElementType
{

    /**
     * The identification of the code system that defines the meaning of the symbol in the code.
     *
     * @var \TKusy\Hl7FhirR4\UriType $system
     */
    private $system = null;

    /**
     * The version of the code system which was used when choosing this code. Note that a well-maintained code system does not need the version reported, because the meaning of codes is consistent across versions. However this cannot consistently be assured, and when the meaning is not guaranteed to be consistent, the version SHOULD be exchanged.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * A symbol in syntax defined by the system. The symbol may be a predefined code or an expression in a syntax defined by the coding system (e.g. post-coordination).
     *
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * A representation of the meaning of the code in the system, following the rules of the system.
     *
     * @var string $display
     */
    private $display = null;

    /**
     * Indicates that this coding was chosen by a user directly - e.g. off a pick list of available items (codes or displays).
     *
     * @var bool $userSelected
     */
    private $userSelected = null;

    /**
     * Gets as system
     *
     * The identification of the code system that defines the meaning of the symbol in the code.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Sets a new system
     *
     * The identification of the code system that defines the meaning of the symbol in the code.
     *
     * @param \TKusy\Hl7FhirR4\UriType $system
     * @return self
     */
    public function setSystem(\TKusy\Hl7FhirR4\UriType $system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version of the code system which was used when choosing this code. Note that a well-maintained code system does not need the version reported, because the meaning of codes is consistent across versions. However this cannot consistently be assured, and when the meaning is not guaranteed to be consistent, the version SHOULD be exchanged.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version of the code system which was used when choosing this code. Note that a well-maintained code system does not need the version reported, because the meaning of codes is consistent across versions. However this cannot consistently be assured, and when the meaning is not guaranteed to be consistent, the version SHOULD be exchanged.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as code
     *
     * A symbol in syntax defined by the system. The symbol may be a predefined code or an expression in a syntax defined by the coding system (e.g. post-coordination).
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A symbol in syntax defined by the system. The symbol may be a predefined code or an expression in a syntax defined by the coding system (e.g. post-coordination).
     *
     * @param \TKusy\Hl7FhirR4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as display
     *
     * A representation of the meaning of the code in the system, following the rules of the system.
     *
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets a new display
     *
     * A representation of the meaning of the code in the system, following the rules of the system.
     *
     * @param string $display
     * @return self
     */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Gets as userSelected
     *
     * Indicates that this coding was chosen by a user directly - e.g. off a pick list of available items (codes or displays).
     *
     * @return bool
     */
    public function getUserSelected()
    {
        return $this->userSelected;
    }

    /**
     * Sets a new userSelected
     *
     * Indicates that this coding was chosen by a user directly - e.g. off a pick list of available items (codes or displays).
     *
     * @param bool $userSelected
     * @return self
     */
    public function setUserSelected($userSelected)
    {
        $this->userSelected = $userSelected;
        return $this;
    }


}

