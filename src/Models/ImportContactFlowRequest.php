<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ImportContactFlowRequest extends Model
{
    /**
     * @var string
     */
    public $flowPackageData;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flowPackageData' => 'FlowPackageData',
        'instanceId'      => 'InstanceId',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowPackageData) {
            $res['FlowPackageData'] = $this->flowPackageData;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FlowPackageData'])) {
            $model->flowPackageData = $map['FlowPackageData'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
