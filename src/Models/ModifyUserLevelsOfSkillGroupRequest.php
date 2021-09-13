<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserLevelsOfSkillGroupRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $userLevelList;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'skillGroupId'  => 'SkillGroupId',
        'userLevelList' => 'UserLevelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->userLevelList) {
            $res['UserLevelList'] = $this->userLevelList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserLevelsOfSkillGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['UserLevelList'])) {
            $model->userLevelList = $map['UserLevelList'];
        }

        return $model;
    }
}
