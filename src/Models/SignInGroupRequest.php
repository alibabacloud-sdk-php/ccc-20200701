<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class SignInGroupRequest extends Model
{
    /**
     * @var bool
     */
    public $additivity;

    /**
     * @var string
     */
    public $chatDeviceId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $signedSkillGroupIdList;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'additivity' => 'Additivity',
        'chatDeviceId' => 'ChatDeviceId',
        'deviceId' => 'DeviceId',
        'instanceId' => 'InstanceId',
        'signedSkillGroupIdList' => 'SignedSkillGroupIdList',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additivity) {
            $res['Additivity'] = $this->additivity;
        }

        if (null !== $this->chatDeviceId) {
            $res['ChatDeviceId'] = $this->chatDeviceId;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->signedSkillGroupIdList) {
            $res['SignedSkillGroupIdList'] = $this->signedSkillGroupIdList;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Additivity'])) {
            $model->additivity = $map['Additivity'];
        }

        if (isset($map['ChatDeviceId'])) {
            $model->chatDeviceId = $map['ChatDeviceId'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SignedSkillGroupIdList'])) {
            $model->signedSkillGroupIdList = $map['SignedSkillGroupIdList'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
