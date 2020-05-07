<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing OperationOutcomeType
 *
 * A collection of error, warning, or information messages that result from a system action.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: OperationOutcome
 */
class OperationOutcomeType extends DomainResourceType
{

    /**
     * An error, warning, or information message that results from a system action.
     *
     * @var \TKusy\Hl7FhirR4\OperationOutcomeIssueType[] $issue
     */
    private $issue = [
        
    ];

    /**
     * Adds as issue
     *
     * An error, warning, or information message that results from a system action.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\OperationOutcomeIssueType $issue
     */
    public function addToIssue(\TKusy\Hl7FhirR4\OperationOutcomeIssueType $issue)
    {
        $this->issue[] = $issue;
        return $this;
    }

    /**
     * isset issue
     *
     * An error, warning, or information message that results from a system action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIssue($index)
    {
        return isset($this->issue[$index]);
    }

    /**
     * unset issue
     *
     * An error, warning, or information message that results from a system action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIssue($index)
    {
        unset($this->issue[$index]);
    }

    /**
     * Gets as issue
     *
     * An error, warning, or information message that results from a system action.
     *
     * @return \TKusy\Hl7FhirR4\OperationOutcomeIssueType[]
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Sets a new issue
     *
     * An error, warning, or information message that results from a system action.
     *
     * @param \TKusy\Hl7FhirR4\OperationOutcomeIssueType[] $issue
     * @return self
     */
    public function setIssue(array $issue)
    {
        $this->issue = $issue;
        return $this;
    }


}

