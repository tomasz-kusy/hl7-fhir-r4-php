<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing QuestionnaireItemType
 *
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.
 * XSD Type: Questionnaire.Item
 */
class QuestionnaireItemType extends BackboneElementType
{

    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     *
     * @var string $linkId
     */
    private $linkId = null;

    /**
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides information about this item, including information that might otherwise be included in the instance of the Questionnaire resource. A detailed description of the construction of the URI is shown in Comments, below. If this element is present then the following element values MAY be derived from the Element Definition if the corresponding elements of this Questionnaire resource instance have no value:
     *
     * * code (ElementDefinition.code) 
     * * type (ElementDefinition.type) 
     * * required (ElementDefinition.min) 
     * * repeats (ElementDefinition.max) 
     * * maxLength (ElementDefinition.maxLength) 
     * * answerValueSet (ElementDefinition.binding)
     * * options (ElementDefinition.binding).
     *
     * @var \TKusy\Hl7FhirR4\UriType $definition
     */
    private $definition = null;

    /**
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @var \TKusy\Hl7FhirR4\CodingType[] $code
     */
    private $code = null;

    /**
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     *
     * @var string $prefix
     */
    private $prefix = null;

    /**
     * The name of a section, the text of a question or text content for a display item.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, coded choice, etc.).
     *
     * @var \TKusy\Hl7FhirR4\QuestionnaireItemTypeType $type
     */
    private $type = null;

    /**
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @var \TKusy\Hl7FhirR4\QuestionnaireEnableWhenType[] $enableWhen
     */
    private $enableWhen = null;

    /**
     * Controls how multiple enableWhen values are interpreted - whether all or any must be true.
     *
     * @var \TKusy\Hl7FhirR4\EnableWhenBehaviorType $enableBehavior
     */
    private $enableBehavior = null;

    /**
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse. If false, the item may be skipped when answering the questionnaire.
     *
     * @var bool $required
     */
    private $required = null;

    /**
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers for questions or multiple sets of answers for groups.
     *
     * @var bool $repeats
     */
    private $repeats = null;

    /**
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     *
     * @var bool $readOnly
     */
    private $readOnly = null;

    /**
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     *
     * @var \integer $maxLength
     */
    private $maxLength = null;

    /**
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $answerValueSet
     */
    private $answerValueSet = null;

    /**
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @var \TKusy\Hl7FhirR4\QuestionnaireAnswerOptionType[] $answerOption
     */
    private $answerOption = null;

    /**
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @var \TKusy\Hl7FhirR4\QuestionnaireInitialType[] $initial
     */
    private $initial = null;

    /**
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @var \TKusy\Hl7FhirR4\QuestionnaireItemType[] $item
     */
    private $item = null;

    /**
     * Gets as linkId
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     *
     * @return string
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     *
     * @param string $linkId
     * @return self
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as definition
     *
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides information about this item, including information that might otherwise be included in the instance of the Questionnaire resource. A detailed description of the construction of the URI is shown in Comments, below. If this element is present then the following element values MAY be derived from the Element Definition if the corresponding elements of this Questionnaire resource instance have no value:
     *
     * * code (ElementDefinition.code) 
     * * type (ElementDefinition.type) 
     * * required (ElementDefinition.min) 
     * * repeats (ElementDefinition.max) 
     * * maxLength (ElementDefinition.maxLength) 
     * * answerValueSet (ElementDefinition.binding)
     * * options (ElementDefinition.binding).
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides information about this item, including information that might otherwise be included in the instance of the Questionnaire resource. A detailed description of the construction of the URI is shown in Comments, below. If this element is present then the following element values MAY be derived from the Element Definition if the corresponding elements of this Questionnaire resource instance have no value:
     *
     * * code (ElementDefinition.code) 
     * * type (ElementDefinition.type) 
     * * required (ElementDefinition.min) 
     * * repeats (ElementDefinition.max) 
     * * maxLength (ElementDefinition.maxLength) 
     * * answerValueSet (ElementDefinition.binding)
     * * options (ElementDefinition.binding).
     *
     * @param \TKusy\Hl7FhirR4\UriType $definition
     * @return self
     */
    public function setDefinition(\TKusy\Hl7FhirR4\UriType $definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Adds as code
     *
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodingType $code
     */
    public function addToCode(\TKusy\Hl7FhirR4\CodingType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @return \TKusy\Hl7FhirR4\CodingType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @param \TKusy\Hl7FhirR4\CodingType[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as prefix
     *
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Sets a new prefix
     *
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     *
     * @param string $prefix
     * @return self
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Gets as text
     *
     * The name of a section, the text of a question or text content for a display item.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The name of a section, the text of a question or text content for a display item.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, coded choice, etc.).
     *
     * @return \TKusy\Hl7FhirR4\QuestionnaireItemTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, coded choice, etc.).
     *
     * @param \TKusy\Hl7FhirR4\QuestionnaireItemTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\QuestionnaireItemTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as enableWhen
     *
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\QuestionnaireEnableWhenType $enableWhen
     */
    public function addToEnableWhen(\TKusy\Hl7FhirR4\QuestionnaireEnableWhenType $enableWhen)
    {
        $this->enableWhen[] = $enableWhen;
        return $this;
    }

    /**
     * isset enableWhen
     *
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnableWhen($index)
    {
        return isset($this->enableWhen[$index]);
    }

    /**
     * unset enableWhen
     *
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnableWhen($index)
    {
        unset($this->enableWhen[$index]);
    }

    /**
     * Gets as enableWhen
     *
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @return \TKusy\Hl7FhirR4\QuestionnaireEnableWhenType[]
     */
    public function getEnableWhen()
    {
        return $this->enableWhen;
    }

    /**
     * Sets a new enableWhen
     *
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @param \TKusy\Hl7FhirR4\QuestionnaireEnableWhenType[] $enableWhen
     * @return self
     */
    public function setEnableWhen(array $enableWhen)
    {
        $this->enableWhen = $enableWhen;
        return $this;
    }

    /**
     * Gets as enableBehavior
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any must be true.
     *
     * @return \TKusy\Hl7FhirR4\EnableWhenBehaviorType
     */
    public function getEnableBehavior()
    {
        return $this->enableBehavior;
    }

    /**
     * Sets a new enableBehavior
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any must be true.
     *
     * @param \TKusy\Hl7FhirR4\EnableWhenBehaviorType $enableBehavior
     * @return self
     */
    public function setEnableBehavior(\TKusy\Hl7FhirR4\EnableWhenBehaviorType $enableBehavior)
    {
        $this->enableBehavior = $enableBehavior;
        return $this;
    }

    /**
     * Gets as required
     *
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse. If false, the item may be skipped when answering the questionnaire.
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse. If false, the item may be skipped when answering the questionnaire.
     *
     * @param bool $required
     * @return self
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * Gets as repeats
     *
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers for questions or multiple sets of answers for groups.
     *
     * @return bool
     */
    public function getRepeats()
    {
        return $this->repeats;
    }

    /**
     * Sets a new repeats
     *
     * An indication, if true, that the item may occur multiple times in the response, collecting multiple answers for questions or multiple sets of answers for groups.
     *
     * @param bool $repeats
     * @return self
     */
    public function setRepeats($repeats)
    {
        $this->repeats = $repeats;
        return $this;
    }

    /**
     * Gets as readOnly
     *
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     *
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * Sets a new readOnly
     *
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     *
     * @param bool $readOnly
     * @return self
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
        return $this;
    }

    /**
     * Gets as maxLength
     *
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     *
     * @return \integer
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * Sets a new maxLength
     *
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     *
     * @param \integer $maxLength
     * @return self
     */
    public function setMaxLength(\integer $maxLength)
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * Gets as answerValueSet
     *
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getAnswerValueSet()
    {
        return $this->answerValueSet;
    }

    /**
     * Sets a new answerValueSet
     *
     * A reference to a value set containing a list of codes representing permitted answers for a "choice" or "open-choice" question.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $answerValueSet
     * @return self
     */
    public function setAnswerValueSet(\TKusy\Hl7FhirR4\CanonicalType $answerValueSet)
    {
        $this->answerValueSet = $answerValueSet;
        return $this;
    }

    /**
     * Adds as answerOption
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\QuestionnaireAnswerOptionType $answerOption
     */
    public function addToAnswerOption(\TKusy\Hl7FhirR4\QuestionnaireAnswerOptionType $answerOption)
    {
        $this->answerOption[] = $answerOption;
        return $this;
    }

    /**
     * isset answerOption
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnswerOption($index)
    {
        return isset($this->answerOption[$index]);
    }

    /**
     * unset answerOption
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnswerOption($index)
    {
        unset($this->answerOption[$index]);
    }

    /**
     * Gets as answerOption
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @return \TKusy\Hl7FhirR4\QuestionnaireAnswerOptionType[]
     */
    public function getAnswerOption()
    {
        return $this->answerOption;
    }

    /**
     * Sets a new answerOption
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @param \TKusy\Hl7FhirR4\QuestionnaireAnswerOptionType[] $answerOption
     * @return self
     */
    public function setAnswerOption(array $answerOption)
    {
        $this->answerOption = $answerOption;
        return $this;
    }

    /**
     * Adds as initial
     *
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\QuestionnaireInitialType $initial
     */
    public function addToInitial(\TKusy\Hl7FhirR4\QuestionnaireInitialType $initial)
    {
        $this->initial[] = $initial;
        return $this;
    }

    /**
     * isset initial
     *
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInitial($index)
    {
        return isset($this->initial[$index]);
    }

    /**
     * unset initial
     *
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInitial($index)
    {
        unset($this->initial[$index]);
    }

    /**
     * Gets as initial
     *
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @return \TKusy\Hl7FhirR4\QuestionnaireInitialType[]
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * Sets a new initial
     *
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @param \TKusy\Hl7FhirR4\QuestionnaireInitialType[] $initial
     * @return self
     */
    public function setInitial(array $initial)
    {
        $this->initial = $initial;
        return $this;
    }

    /**
     * Adds as item
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\QuestionnaireItemType $item
     */
    public function addToItem(\TKusy\Hl7FhirR4\QuestionnaireItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * Text, questions and other groups to be nested beneath a question or group.
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
     * Text, questions and other groups to be nested beneath a question or group.
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
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @return \TKusy\Hl7FhirR4\QuestionnaireItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @param \TKusy\Hl7FhirR4\QuestionnaireItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }


}

