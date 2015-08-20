<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ProtectionRuleAndType
 *
 *
 * XSD Type: ProtectionRuleAndType
 *
 * @method ProtectionRuleAndType getAllInternal()
 * @method ProtectionRuleAndType setAllInternal(array $allInternal)
 * @method ProtectionRuleAndType getAnd()
 * @method ProtectionRuleAndType setAnd(array $and)
 * @method ProtectionRuleAndType getRecipientIs()
 * @method ProtectionRuleAndType setRecipientIs(array $recipientIs)
 * @method ProtectionRuleAndType getSenderDepartments()
 * @method ProtectionRuleAndType setSenderDepartments(array $senderDepartments)
 * @method ProtectionRuleAndType getTrue()
 * @method ProtectionRuleAndType setTrue(array $true)
 */
class ProtectionRuleAndType extends Type
{

    /**
     * @property string[] $allInternal
     */
    protected $allInternal = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ProtectionRuleAndType[] $and
     */
    protected $and = null;

    /**
     * @property string[] $recipientIs
     */
    protected $recipientIs = null;

    /**
     * @property string[] $senderDepartments
     */
    protected $senderDepartments = null;

    /**
     * @property string[] $true
     */
    protected $true = null;
}