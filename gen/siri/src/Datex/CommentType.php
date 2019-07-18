<?php

namespace Calcinai\Siri\Objects\Datex;

/**
 * Class representing CommentType
 *
 * A free text comment with an optional date/time stamp that can be used by the operator to convey uncoded observations/information.
 * XSD Type: Comment
 */
class CommentType
{

    /**
     * A free text comment that can be used by the operator to convey uncoded observations/information.
     *
     * @property \Calcinai\Siri\Objects\Datex\CommentType\CommentAType\ValueAType[] $comment
     */
    private $comment = null;

    /**
     * The date/time at which the comment was made.
     *
     * @property \DateTime $commentDateTime
     */
    private $commentDateTime = null;

    /**
     * @property \Calcinai\Siri\Objects\Datex\ExtensionType $commentExtension
     */
    private $commentExtension = null;

    /**
     * Adds as value
     *
     * A free text comment that can be used by the operator to convey uncoded observations/information.
     *
     * @return self
     * @param \Calcinai\Siri\Objects\Datex\CommentType\CommentAType\ValueAType $value
     */
    public function addToComment(\Calcinai\Siri\Objects\Datex\CommentType\CommentAType\ValueAType $value)
    {
        $this->comment[] = $value;
        return $this;
    }

    /**
     * isset comment
     *
     * A free text comment that can be used by the operator to convey uncoded observations/information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * A free text comment that can be used by the operator to convey uncoded observations/information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * A free text comment that can be used by the operator to convey uncoded observations/information.
     *
     * @return \Calcinai\Siri\Objects\Datex\CommentType\CommentAType\ValueAType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A free text comment that can be used by the operator to convey uncoded observations/information.
     *
     * @param \Calcinai\Siri\Objects\Datex\CommentType\CommentAType\ValueAType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as commentDateTime
     *
     * The date/time at which the comment was made.
     *
     * @return \DateTime
     */
    public function getCommentDateTime()
    {
        return $this->commentDateTime;
    }

    /**
     * Sets a new commentDateTime
     *
     * The date/time at which the comment was made.
     *
     * @param \DateTime $commentDateTime
     * @return self
     */
    public function setCommentDateTime(\DateTime $commentDateTime)
    {
        $this->commentDateTime = $commentDateTime;
        return $this;
    }

    /**
     * Gets as commentExtension
     *
     * @return \Calcinai\Siri\Objects\Datex\ExtensionType
     */
    public function getCommentExtension()
    {
        return $this->commentExtension;
    }

    /**
     * Sets a new commentExtension
     *
     * @param \Calcinai\Siri\Objects\Datex\ExtensionType $commentExtension
     * @return self
     */
    public function setCommentExtension(\Calcinai\Siri\Objects\Datex\ExtensionType $commentExtension)
    {
        $this->commentExtension = $commentExtension;
        return $this;
    }


}

