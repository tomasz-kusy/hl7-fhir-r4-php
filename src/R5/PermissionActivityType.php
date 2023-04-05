<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PermissionActivityType
 *
 * Permission resource holds access rules for a given data and context.
 * XSD Type: Permission.Activity
 */
class PermissionActivityType extends BackboneElementType
{

    /**
     * The actor(s) authorized for the defined activity.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $actor
     */
    private $actor = null;

    /**
     * Actions controlled by this Rule.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $action
     */
    private $action = null;

    /**
     * The purpose for which the permission is given.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $purpose
     */
    private $purpose = null;

    /**
     * Adds as actor
     *
     * The actor(s) authorized for the defined activity.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    public function addToActor(\TKusy\Hl7Fhir\R5\ReferenceType $actor)
    {
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * isset actor
     *
     * The actor(s) authorized for the defined activity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActor($index)
    {
        return isset($this->actor[$index]);
    }

    /**
     * unset actor
     *
     * The actor(s) authorized for the defined activity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActor($index)
    {
        unset($this->actor[$index]);
    }

    /**
     * Gets as actor
     *
     * The actor(s) authorized for the defined activity.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * The actor(s) authorized for the defined activity.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $actor
     * @return self
     */
    public function setActor(array $actor = null)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Adds as action
     *
     * Actions controlled by this Rule.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $action
     */
    public function addToAction(\TKusy\Hl7Fhir\R5\CodeableConceptType $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * Actions controlled by this Rule.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAction($index)
    {
        return isset($this->action[$index]);
    }

    /**
     * unset action
     *
     * Actions controlled by this Rule.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAction($index)
    {
        unset($this->action[$index]);
    }

    /**
     * Gets as action
     *
     * Actions controlled by this Rule.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Actions controlled by this Rule.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $action
     * @return self
     */
    public function setAction(array $action = null)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Adds as purpose
     *
     * The purpose for which the permission is given.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $purpose
     */
    public function addToPurpose(\TKusy\Hl7Fhir\R5\CodeableConceptType $purpose)
    {
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * isset purpose
     *
     * The purpose for which the permission is given.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurpose($index)
    {
        return isset($this->purpose[$index]);
    }

    /**
     * unset purpose
     *
     * The purpose for which the permission is given.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurpose($index)
    {
        unset($this->purpose[$index]);
    }

    /**
     * Gets as purpose
     *
     * The purpose for which the permission is given.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * The purpose for which the permission is given.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $purpose
     * @return self
     */
    public function setPurpose(array $purpose = null)
    {
        $this->purpose = $purpose;
        return $this;
    }


}

