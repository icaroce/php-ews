<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UpdateItemType
 *
 *
 * XSD Type: UpdateItemType
 *
 * @method UpdateItemType getConflictResolution()
 * @method UpdateItemType setConflictResolution(string $conflictResolution)
 * @method UpdateItemType getMessageDisposition()
 * @method UpdateItemType setMessageDisposition(string $messageDisposition)
 * @method UpdateItemType getSendMeetingInvitationsOrCancellations()
 * @method UpdateItemType setSendMeetingInvitationsOrCancellations(string $sendMeetingInvitationsOrCancellations)
 * @method UpdateItemType getSavedItemFolderId()
 * @method UpdateItemType setSavedItemFolderId(\jamesiarmes\PEWS\API\Type\TargetFolderIdType $savedItemFolderId)
 * @method UpdateItemType getItemChanges()
 * @method UpdateItemType setItemChanges(array $itemChanges)
 */
class UpdateItemType extends BaseRequestType
{

    /**
     * @property string $conflictResolution
     */
    protected $conflictResolution = null;

    /**
     * @property string $messageDisposition
     */
    protected $messageDisposition = null;

    /**
     * @property string $sendMeetingInvitationsOrCancellations
     */
    protected $sendMeetingInvitationsOrCancellations = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TargetFolderIdType $savedItemFolderId
     */
    protected $savedItemFolderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemChangeType[] $itemChanges
     */
    protected $itemChanges = null;
}