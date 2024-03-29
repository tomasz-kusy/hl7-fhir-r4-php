<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing BackboneTypeType
 *
 * Base definition for the few data types that are allowed to carry modifier extensions.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: BackboneType
 */
class BackboneTypeType extends DataTypeType
{

    /**
     * May be used to represent additional information that is not part of the basic definition of the element and that modifies the understanding of the element in which it is contained and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and managable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     *
     * Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     *
     * @var \TKusy\Hl7Fhir\R5\ExtensionType[] $modifierExtension
     */
    private $modifierExtension = null;

    /**
     * Adds as modifierExtension
     *
     * May be used to represent additional information that is not part of the basic definition of the element and that modifies the understanding of the element in which it is contained and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and managable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     *
     * Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExtensionType $modifierExtension
     */
    public function addToModifierExtension(\TKusy\Hl7Fhir\R5\ExtensionType $modifierExtension)
    {
        $this->modifierExtension[] = $modifierExtension;
        return $this;
    }

    /**
     * isset modifierExtension
     *
     * May be used to represent additional information that is not part of the basic definition of the element and that modifies the understanding of the element in which it is contained and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and managable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
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
     * May be used to represent additional information that is not part of the basic definition of the element and that modifies the understanding of the element in which it is contained and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and managable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
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
     * May be used to represent additional information that is not part of the basic definition of the element and that modifies the understanding of the element in which it is contained and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and managable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     *
     * Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     *
     * @return \TKusy\Hl7Fhir\R5\ExtensionType[]
     */
    public function getModifierExtension()
    {
        return $this->modifierExtension;
    }

    /**
     * Sets a new modifierExtension
     *
     * May be used to represent additional information that is not part of the basic definition of the element and that modifies the understanding of the element in which it is contained and/or the understanding of the containing element's descendants. Usually modifier elements provide negation or qualification. To make the use of extensions safe and managable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.
     *
     * Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     *
     * @param \TKusy\Hl7Fhir\R5\ExtensionType[] $modifierExtension
     * @return self
     */
    public function setModifierExtension(array $modifierExtension = null)
    {
        $this->modifierExtension = $modifierExtension;
        return $this;
    }


}

