<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportResponseBody\data\inbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportResponseBody\data\outbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportResponseBody\data\overall;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $statsTime;

    /**
     * @var inbound
     */
    public $inbound;

    /**
     * @var outbound
     */
    public $outbound;

    /**
     * @var overall
     */
    public $overall;
    protected $_name = [
        'statsTime' => 'StatsTime',
        'inbound'   => 'Inbound',
        'outbound'  => 'Outbound',
        'overall'   => 'Overall',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statsTime) {
            $res['StatsTime'] = $this->statsTime;
        }
        if (null !== $this->inbound) {
            $res['Inbound'] = null !== $this->inbound ? $this->inbound->toMap() : null;
        }
        if (null !== $this->outbound) {
            $res['Outbound'] = null !== $this->outbound ? $this->outbound->toMap() : null;
        }
        if (null !== $this->overall) {
            $res['Overall'] = null !== $this->overall ? $this->overall->toMap() : null;
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
        if (isset($map['StatsTime'])) {
            $model->statsTime = $map['StatsTime'];
        }
        if (isset($map['Inbound'])) {
            $model->inbound = inbound::fromMap($map['Inbound']);
        }
        if (isset($map['Outbound'])) {
            $model->outbound = outbound::fromMap($map['Outbound']);
        }
        if (isset($map['Overall'])) {
            $model->overall = overall::fromMap($map['Overall']);
        }

        return $model;
    }
}