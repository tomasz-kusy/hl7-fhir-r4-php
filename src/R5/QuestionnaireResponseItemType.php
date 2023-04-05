<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing QuestionnaireResponseItemType
 *
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the questionnaire being responded to.
 * XSD Type: QuestionnaireResponse.Item
 */
class QuestionnaireResponseItemType extends BackboneElementType
{

    /**
     * The item from the Questionnaire that corresponds to this item in the QuestionnaireResponse resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $linkId
     */
    private $linkId = null;

    /**
     * A reference to an [ElementDefinition](elementdefinition.html) that provides the details for the item.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $definition
     */
    private $definition = null;

    /**
     * Text that is displayed above the contents of the group or as the text of the question being answered.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $text
     */
    private $text = null;

    /**
     * The respondent's answer(s) to the question.
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireResponseAnswerType[] $answer
     */
    private $answer = null;

    /**
     * Sub-questions, sub-groups or display items nested beneath a group.
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireResponseItemType[] $item
     */
    private $item = null;

    /**
     * Gets as linkId
     *
     * The item from the Questionnaire that corresponds to this item in the QuestionnaireResponse resource.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * The item from the Questionnaire that corresponds to this item in the QuestionnaireResponse resource.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $linkId
     * @return self
     */
    public function setLinkId(\TKusy\Hl7Fhir\R5\StringType $linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as definition
     *
     * A reference to an [ElementDefinition](elementdefinition.html) that provides the details for the item.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * A reference to an [ElementDefinition](elementdefinition.html) that provides the details for the item.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $definition
     * @return self
     */
    public function setDefinition(?\TKusy\Hl7Fhir\R5\UriType $definition = null)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text that is displayed above the contents of the group or as the text of the question being answered.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text that is displayed above the contents of the group or as the text of the question being answered.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $text
     * @return self
     */
    public function setText(?\TKusy\Hl7Fhir\R5\StringType $text = null)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as answer
     *
     * The respondent's answer(s) to the question.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireResponseAnswerType $answer
     */
    public function addToAnswer(\TKusy\Hl7Fhir\R5\QuestionnaireResponseAnswerType $answer)
    {
        $this->answer[] = $answer;
        return $this;
    }

    /**
     * isset answer
     *
     * The respondent's answer(s) to the question.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnswer($index)
    {
        return isset($this->answer[$index]);
    }

    /**
     * unset answer
     *
     * The respondent's answer(s) to the question.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnswer($index)
    {
        unset($this->answer[$index]);
    }

    /**
     * Gets as answer
     *
     * The respondent's answer(s) to the question.
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireResponseAnswerType[]
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Sets a new answer
     *
     * The respondent's answer(s) to the question.
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireResponseAnswerType[] $answer
     * @return self
     */
    public function setAnswer(array $answer = null)
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * Adds as item
     *
     * Sub-questions, sub-groups or display items nested beneath a group.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireResponseItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R5\QuestionnaireResponseItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * Sub-questions, sub-groups or display items nested beneath a group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * Sub-questions, sub-groups or display items nested beneath a group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * Sub-questions, sub-groups or display items nested beneath a group.
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireResponseItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Sub-questions, sub-groups or display items nested beneath a group.
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireResponseItemType[] $item
     * @return self
     */
    public function setItem(array $item = null)
    {
        $this->item = $item;
        return $this;
    }


}

