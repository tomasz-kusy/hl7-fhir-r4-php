<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionGuidelineType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.Guideline
 */
class DeviceDefinitionGuidelineType extends BackboneElementType
{

    /**
     * The circumstances that form the setting for using the device.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * Detailed written and visual directions for the user on how to use the device.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $usageInstruction
     */
    private $usageInstruction = null;

    /**
     * A source of information or reference for this guideline.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $relatedArtifact
     */
    private $relatedArtifact = null;

    /**
     * A clinical condition for which the device was designed to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $indication
     */
    private $indication = null;

    /**
     * A specific situation when a device should not be used because it may cause harm.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $contraindication
     */
    private $contraindication = null;

    /**
     * Specific hazard alert information that a user needs to know before using the device.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $warning
     */
    private $warning = null;

    /**
     * A description of the general purpose or medical use of the device or its function.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $intendedUse
     */
    private $intendedUse = null;

    /**
     * Adds as useContext
     *
     * The circumstances that form the setting for using the device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UsageContextType $useContext
     */
    public function addToUseContext(\TKusy\Hl7Fhir\R5\UsageContextType $useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * isset useContext
     *
     * The circumstances that form the setting for using the device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUseContext($index)
    {
        return isset($this->useContext[$index]);
    }

    /**
     * unset useContext
     *
     * The circumstances that form the setting for using the device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUseContext($index)
    {
        unset($this->useContext[$index]);
    }

    /**
     * Gets as useContext
     *
     * The circumstances that form the setting for using the device.
     *
     * @return \TKusy\Hl7Fhir\R5\UsageContextType[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * Sets a new useContext
     *
     * The circumstances that form the setting for using the device.
     *
     * @param \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     * @return self
     */
    public function setUseContext(array $useContext = null)
    {
        $this->useContext = $useContext;
        return $this;
    }

    /**
     * Gets as usageInstruction
     *
     * Detailed written and visual directions for the user on how to use the device.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getUsageInstruction()
    {
        return $this->usageInstruction;
    }

    /**
     * Sets a new usageInstruction
     *
     * Detailed written and visual directions for the user on how to use the device.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $usageInstruction
     * @return self
     */
    public function setUsageInstruction(?\TKusy\Hl7Fhir\R5\MarkdownType $usageInstruction = null)
    {
        $this->usageInstruction = $usageInstruction;
        return $this;
    }

    /**
     * Adds as relatedArtifact
     *
     * A source of information or reference for this guideline.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType $relatedArtifact
     */
    public function addToRelatedArtifact(\TKusy\Hl7Fhir\R5\RelatedArtifactType $relatedArtifact)
    {
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * isset relatedArtifact
     *
     * A source of information or reference for this guideline.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedArtifact($index)
    {
        return isset($this->relatedArtifact[$index]);
    }

    /**
     * unset relatedArtifact
     *
     * A source of information or reference for this guideline.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedArtifact($index)
    {
        unset($this->relatedArtifact[$index]);
    }

    /**
     * Gets as relatedArtifact
     *
     * A source of information or reference for this guideline.
     *
     * @return \TKusy\Hl7Fhir\R5\RelatedArtifactType[]
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
    }

    /**
     * Sets a new relatedArtifact
     *
     * A source of information or reference for this guideline.
     *
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $relatedArtifact
     * @return self
     */
    public function setRelatedArtifact(array $relatedArtifact = null)
    {
        $this->relatedArtifact = $relatedArtifact;
        return $this;
    }

    /**
     * Adds as indication
     *
     * A clinical condition for which the device was designed to be used.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $indication
     */
    public function addToIndication(\TKusy\Hl7Fhir\R5\CodeableConceptType $indication)
    {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * isset indication
     *
     * A clinical condition for which the device was designed to be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndication($index)
    {
        return isset($this->indication[$index]);
    }

    /**
     * unset indication
     *
     * A clinical condition for which the device was designed to be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndication($index)
    {
        unset($this->indication[$index]);
    }

    /**
     * Gets as indication
     *
     * A clinical condition for which the device was designed to be used.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Sets a new indication
     *
     * A clinical condition for which the device was designed to be used.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $indication
     * @return self
     */
    public function setIndication(array $indication = null)
    {
        $this->indication = $indication;
        return $this;
    }

    /**
     * Adds as contraindication
     *
     * A specific situation when a device should not be used because it may cause harm.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $contraindication
     */
    public function addToContraindication(\TKusy\Hl7Fhir\R5\CodeableConceptType $contraindication)
    {
        $this->contraindication[] = $contraindication;
        return $this;
    }

    /**
     * isset contraindication
     *
     * A specific situation when a device should not be used because it may cause harm.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContraindication($index)
    {
        return isset($this->contraindication[$index]);
    }

    /**
     * unset contraindication
     *
     * A specific situation when a device should not be used because it may cause harm.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContraindication($index)
    {
        unset($this->contraindication[$index]);
    }

    /**
     * Gets as contraindication
     *
     * A specific situation when a device should not be used because it may cause harm.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }

    /**
     * Sets a new contraindication
     *
     * A specific situation when a device should not be used because it may cause harm.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $contraindication
     * @return self
     */
    public function setContraindication(array $contraindication = null)
    {
        $this->contraindication = $contraindication;
        return $this;
    }

    /**
     * Adds as warning
     *
     * Specific hazard alert information that a user needs to know before using the device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $warning
     */
    public function addToWarning(\TKusy\Hl7Fhir\R5\CodeableConceptType $warning)
    {
        $this->warning[] = $warning;
        return $this;
    }

    /**
     * isset warning
     *
     * Specific hazard alert information that a user needs to know before using the device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarning($index)
    {
        return isset($this->warning[$index]);
    }

    /**
     * unset warning
     *
     * Specific hazard alert information that a user needs to know before using the device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarning($index)
    {
        unset($this->warning[$index]);
    }

    /**
     * Gets as warning
     *
     * Specific hazard alert information that a user needs to know before using the device.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Sets a new warning
     *
     * Specific hazard alert information that a user needs to know before using the device.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $warning
     * @return self
     */
    public function setWarning(array $warning = null)
    {
        $this->warning = $warning;
        return $this;
    }

    /**
     * Gets as intendedUse
     *
     * A description of the general purpose or medical use of the device or its function.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getIntendedUse()
    {
        return $this->intendedUse;
    }

    /**
     * Sets a new intendedUse
     *
     * A description of the general purpose or medical use of the device or its function.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $intendedUse
     * @return self
     */
    public function setIntendedUse(?\TKusy\Hl7Fhir\R5\StringType $intendedUse = null)
    {
        $this->intendedUse = $intendedUse;
        return $this;
    }


}

