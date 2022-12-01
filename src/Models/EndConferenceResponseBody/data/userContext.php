<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\EndConferenceResponseBody\data;

use AlibabaCloud\Tea\Model;

class userContext extends Model
{
    /**
     * @var string
     */
    public $breakCode;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceState;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var bool
     */
    public $outboundScenario;

    /**
     * @var string[]
     */
    public $signedSkillGroupIdList;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userState;

    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'breakCode'              => 'BreakCode',
        'deviceId'               => 'DeviceId',
        'deviceState'            => 'DeviceState',
        'extension'              => 'Extension',
        'instanceId'             => 'InstanceId',
        'jobId'                  => 'JobId',
        'outboundScenario'       => 'OutboundScenario',
        'signedSkillGroupIdList' => 'SignedSkillGroupIdList',
        'userId'                 => 'UserId',
        'userState'              => 'UserState',
        'workMode'               => 'WorkMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->breakCode) {
            $res['BreakCode'] = $this->breakCode;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceState) {
            $res['DeviceState'] = $this->deviceState;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->outboundScenario) {
            $res['OutboundScenario'] = $this->outboundScenario;
        }
        if (null !== $this->signedSkillGroupIdList) {
            $res['SignedSkillGroupIdList'] = $this->signedSkillGroupIdList;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userState) {
            $res['UserState'] = $this->userState;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BreakCode'])) {
            $model->breakCode = $map['BreakCode'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceState'])) {
            $model->deviceState = $map['DeviceState'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['OutboundScenario'])) {
            $model->outboundScenario = $map['OutboundScenario'];
        }
        if (isset($map['SignedSkillGroupIdList'])) {
            if (!empty($map['SignedSkillGroupIdList'])) {
                $model->signedSkillGroupIdList = $map['SignedSkillGroupIdList'];
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserState'])) {
            $model->userState = $map['UserState'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
