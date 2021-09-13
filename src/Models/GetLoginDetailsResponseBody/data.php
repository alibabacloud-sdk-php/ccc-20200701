<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetLoginDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $sipServerUrl;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $agentServerUrl;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userKey;
    protected $_name = [
        'displayName'    => 'DisplayName',
        'extension'      => 'Extension',
        'signature'      => 'Signature',
        'sipServerUrl'   => 'SipServerUrl',
        'deviceId'       => 'DeviceId',
        'agentServerUrl' => 'AgentServerUrl',
        'userId'         => 'UserId',
        'userKey'        => 'UserKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->sipServerUrl) {
            $res['SipServerUrl'] = $this->sipServerUrl;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->agentServerUrl) {
            $res['AgentServerUrl'] = $this->agentServerUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userKey) {
            $res['UserKey'] = $this->userKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['SipServerUrl'])) {
            $model->sipServerUrl = $map['SipServerUrl'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['AgentServerUrl'])) {
            $model->agentServerUrl = $map['AgentServerUrl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserKey'])) {
            $model->userKey = $map['UserKey'];
        }

        return $model;
    }
}
