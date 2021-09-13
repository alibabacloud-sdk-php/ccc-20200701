<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AssignUsersResponseBody extends Model
{
    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sync;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $workflowId;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'httpStatusCode' => 'HttpStatusCode',
        'data'           => 'Data',
        'requestId'      => 'RequestId',
        'sync'           => 'Sync',
        'code'           => 'Code',
        'workflowId'     => 'WorkflowId',
        'message'        => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sync) {
            $res['Sync'] = $this->sync;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignUsersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sync'])) {
            $model->sync = $map['Sync'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
