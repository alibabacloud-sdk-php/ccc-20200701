<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody\data\inbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody\data\outbound;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var inbound[]
     */
    public $inbound;

    /**
     * @var outbound[]
     */
    public $outbound;
    protected $_name = [
        'inbound'  => 'Inbound',
        'outbound' => 'Outbound',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inbound) {
            $res['Inbound'] = [];
            if (null !== $this->inbound && \is_array($this->inbound)) {
                $n = 0;
                foreach ($this->inbound as $item) {
                    $res['Inbound'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outbound) {
            $res['Outbound'] = [];
            if (null !== $this->outbound && \is_array($this->outbound)) {
                $n = 0;
                foreach ($this->outbound as $item) {
                    $res['Outbound'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Inbound'])) {
            if (!empty($map['Inbound'])) {
                $model->inbound = [];
                $n              = 0;
                foreach ($map['Inbound'] as $item) {
                    $model->inbound[$n++] = null !== $item ? inbound::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Outbound'])) {
            if (!empty($map['Outbound'])) {
                $model->outbound = [];
                $n               = 0;
                foreach ($map['Outbound'] as $item) {
                    $model->outbound[$n++] = null !== $item ? outbound::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
