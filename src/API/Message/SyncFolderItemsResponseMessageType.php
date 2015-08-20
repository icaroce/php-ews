<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SyncFolderItemsResponseMessageType
 *
 *
 * XSD Type: SyncFolderItemsResponseMessageType
 *
 * @method SyncFolderItemsResponseMessageType getSyncState()
 * @method SyncFolderItemsResponseMessageType setSyncState(string $syncState)
 * @method SyncFolderItemsResponseMessageType getIncludesLastItemInRange()
 * @method SyncFolderItemsResponseMessageType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method SyncFolderItemsResponseMessageType getChanges()
 * @method SyncFolderItemsResponseMessageType setChanges(\jamesiarmes\PEWS\API\Type\SyncFolderItemsChangesType $changes)
 */
class SyncFolderItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @property string $syncState
     */
    protected $syncState = null;

    /**
     * @property boolean $includesLastItemInRange
     */
    protected $includesLastItemInRange = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SyncFolderItemsChangesType $changes
     */
    protected $changes = null;
}