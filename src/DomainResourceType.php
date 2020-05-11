<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DomainResourceType
 *
 * A resource that includes narrative, extensions, and contained resources.
 * XSD Type: DomainResource
 */
class DomainResourceType extends ResourceType
{

    /**
     * A human-readable narrative that contains a summary of the resource and can be used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative. Resource definitions may define what content should be represented in the narrative to ensure clinical safety.
     *
     * @var \TKusy\Hl7FhirR4\NarrativeType $text
     */
    private $text = null;

    /**
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
     *
     * @var \TKusy\Hl7FhirR4\ResourceContainerType[] $contained
     */
    private $contained = null;

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     *
     * @var \TKusy\Hl7FhirR4\ExtensionType[] $extension
     */
    private $extension = null;

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource and that modifies the understanding of the element that contains it and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     *
     * Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     *
     * @var \TKusy\Hl7FhirR4\ExtensionType[] $modifierExtension
     */
    private $modifierExtension = null;

    /**
     * Gets as text
     *
     * A human-readable narrative that contains a summary of the resource and can be used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative. Resource definitions may define what content should be represented in the narrative to ensure clinical safety.
     *
     * @return \TKusy\Hl7FhirR4\NarrativeType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * A human-readable narrative that contains a summary of the resource and can be used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative. Resource definitions may define what content should be represented in the narrative to ensure clinical safety.
     *
     * @param \TKusy\Hl7FhirR4\NarrativeType $text
     * @return self
     */
    public function setText(\TKusy\Hl7FhirR4\NarrativeType $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as contained
     *
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ResourceContainerType $contained
     */
    public function addToContained(\TKusy\Hl7FhirR4\ResourceContainerType $contained)
    {
        $this->contained[] = $contained;
        return $this;
    }

    /**
     * isset contained
     *
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContained($index)
    {
        return isset($this->contained[$index]);
    }

    /**
     * unset contained
     *
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContained($index)
    {
        unset($this->contained[$index]);
    }

    /**
     * Gets as contained
     *
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
     *
     * @return \TKusy\Hl7FhirR4\ResourceContainerType[]
     */
    public function getContained()
    {
        return $this->contained;
    }

    /**
     * Sets a new contained
     *
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
     *
     * @param \TKusy\Hl7FhirR4\ResourceContainerType[] $contained
     * @return self
     */
    public function setContained(array $contained)
    {
        $this->contained = $contained;
        return $this;
    }

    /**
     * Adds as extension
     *
     * May be used to represent additional information that is not part of the basic definition of the resource. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExtensionType $extension
     */
    public function addToExtension(\TKusy\Hl7FhirR4\ExtensionType $extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * isset extension
     *
     * May be used to represent additional information that is not part of the basic definition of the resource. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtension($index)
    {
        return isset($this->extension[$index]);
    }

    /**
     * unset extension
     *
     * May be used to represent additional information that is not part of the basic definition of the resource. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtension($index)
    {
        unset($this->extension[$index]);
    }

    /**
     * Gets as extension
     *
     * May be used to represent additional information that is not part of the basic definition of the resource. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     *
     * @return \TKusy\Hl7FhirR4\ExtensionType[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * May be used to represent additional information that is not part of the basic definition of the resource. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     *
     * @param \TKusy\Hl7FhirR4\ExtensionType[] $extension
     * @return self
     */
    public function setExtension(array $extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Adds as modifierExtension
     *
     * May be used to represent additional information that is not part of the basic definition of the resource and that modifies the understanding of the element that contains it and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     *
     * Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExtensionType $modifierExtension
     */
    public function addToModifierExtension(\TKusy\Hl7FhirR4\ExtensionType $modifierExtension)
    {
        $this->modifierExtension[] = $modifierExtension;
        return $this;
    }

    /**
     * isset modifierExtension
     *
     * May be used to represent additional information that is not part of the basic definition of the resource and that modifies the understanding of the element that contains it and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     *
     * Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModifierExtension($index)
    {
        return isset($this->modifierExtension[$index]);
    }

    /**
     * unset modifierExtension
     *
     * May be used to represent additional information that is not part of the basic definition of the resource and that modifies the understanding of the element that contains it and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     *
     * Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModifierExtension($index)
    {
        unset($this->modifierExtension[$index]);
    }

    /**
     * Gets as modifierExtension
     *
     * May be used to represent additional information that is not part of the basic definition of the resource and that modifies the understanding of the element that contains it and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     *
     * Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     *
     * @return \TKusy\Hl7FhirR4\ExtensionType[]
     */
    public function getModifierExtension()
    {
        return $this->modifierExtension;
    }

    /**
     * Sets a new modifierExtension
     *
     * May be used to represent additional information that is not part of the basic definition of the resource and that modifies the understanding of the element that contains it and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     *
     * Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     *
     * @param \TKusy\Hl7FhirR4\ExtensionType[] $modifierExtension
     * @return self
     */
    public function setModifierExtension(array $modifierExtension)
    {
        $this->modifierExtension = $modifierExtension;
        return $this;
    }


}

