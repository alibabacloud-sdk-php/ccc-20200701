<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalSkillGroupReportResponseBody\data;

use AlibabaCloud\Tea\Model;

class inbound extends Model
{
    /**
     * @var float
     */
    public $abandonRate;

    /**
     * @var float
     */
    public $averageAbandonTime;

    /**
     * @var float
     */
    public $averageAbandonedInQueueTime;

    /**
     * @var float
     */
    public $averageAbandonedInRingTime;

    /**
     * @var float
     */
    public $averageHoldTime;

    /**
     * @var float
     */
    public $averageRingTime;

    /**
     * @var float
     */
    public $averageTalkTime;

    /**
     * @var float
     */
    public $averageWaitTime;

    /**
     * @var float
     */
    public $averageWorkTime;

    /**
     * @var int
     */
    public $callsAbandoned;

    /**
     * @var int
     */
    public $callsAbandonedInQueue;

    /**
     * @var int
     */
    public $callsAbandonedInRing;

    /**
     * @var int
     */
    public $callsAttendedTransferIn;

    /**
     * @var int
     */
    public $callsAttendedTransferOut;

    /**
     * @var int
     */
    public $callsBlindTransferIn;

    /**
     * @var int
     */
    public $callsBlindTransferOut;

    /**
     * @var int
     */
    public $callsHandled;

    /**
     * @var int
     */
    public $callsHold;

    /**
     * @var int
     */
    public $callsOffered;

    /**
     * @var int
     */
    public $callsOverflow;

    /**
     * @var int
     */
    public $callsQueued;

    /**
     * @var int
     */
    public $callsRinged;

    /**
     * @var int
     */
    public $callsTimeout;

    /**
     * @var float
     */
    public $handleRate;

    /**
     * @var int
     */
    public $maxAbandonTime;

    /**
     * @var int
     */
    public $maxAbandonedInQueueTime;

    /**
     * @var int
     */
    public $maxAbandonedInRingTime;

    /**
     * @var int
     */
    public $maxHoldTime;

    /**
     * @var int
     */
    public $maxRingTime;

    /**
     * @var int
     */
    public $maxTalkTime;

    /**
     * @var int
     */
    public $maxWaitTime;

    /**
     * @var int
     */
    public $maxWorkTime;

    /**
     * @var float
     */
    public $satisfactionIndex;

    /**
     * @var float
     */
    public $satisfactionRate;

    /**
     * @var int
     */
    public $satisfactionSurveysOffered;

    /**
     * @var int
     */
    public $satisfactionSurveysResponded;

    /**
     * @var float
     */
    public $serviceLevel20;

    /**
     * @var int
     */
    public $totalAbandonTime;

    /**
     * @var int
     */
    public $totalAbandonedInQueueTime;

    /**
     * @var int
     */
    public $totalAbandonedInRingTime;

    /**
     * @var int
     */
    public $totalHoldTime;

    /**
     * @var int
     */
    public $totalRingTime;

    /**
     * @var int
     */
    public $totalTalkTime;

    /**
     * @var int
     */
    public $totalWaitTime;

    /**
     * @var int
     */
    public $totalWorkTime;
    protected $_name = [
        'abandonRate'                  => 'AbandonRate',
        'averageAbandonTime'           => 'AverageAbandonTime',
        'averageAbandonedInQueueTime'  => 'AverageAbandonedInQueueTime',
        'averageAbandonedInRingTime'   => 'AverageAbandonedInRingTime',
        'averageHoldTime'              => 'AverageHoldTime',
        'averageRingTime'              => 'AverageRingTime',
        'averageTalkTime'              => 'AverageTalkTime',
        'averageWaitTime'              => 'AverageWaitTime',
        'averageWorkTime'              => 'AverageWorkTime',
        'callsAbandoned'               => 'CallsAbandoned',
        'callsAbandonedInQueue'        => 'CallsAbandonedInQueue',
        'callsAbandonedInRing'         => 'CallsAbandonedInRing',
        'callsAttendedTransferIn'      => 'CallsAttendedTransferIn',
        'callsAttendedTransferOut'     => 'CallsAttendedTransferOut',
        'callsBlindTransferIn'         => 'CallsBlindTransferIn',
        'callsBlindTransferOut'        => 'CallsBlindTransferOut',
        'callsHandled'                 => 'CallsHandled',
        'callsHold'                    => 'CallsHold',
        'callsOffered'                 => 'CallsOffered',
        'callsOverflow'                => 'CallsOverflow',
        'callsQueued'                  => 'CallsQueued',
        'callsRinged'                  => 'CallsRinged',
        'callsTimeout'                 => 'CallsTimeout',
        'handleRate'                   => 'HandleRate',
        'maxAbandonTime'               => 'MaxAbandonTime',
        'maxAbandonedInQueueTime'      => 'MaxAbandonedInQueueTime',
        'maxAbandonedInRingTime'       => 'MaxAbandonedInRingTime',
        'maxHoldTime'                  => 'MaxHoldTime',
        'maxRingTime'                  => 'MaxRingTime',
        'maxTalkTime'                  => 'MaxTalkTime',
        'maxWaitTime'                  => 'MaxWaitTime',
        'maxWorkTime'                  => 'MaxWorkTime',
        'satisfactionIndex'            => 'SatisfactionIndex',
        'satisfactionRate'             => 'SatisfactionRate',
        'satisfactionSurveysOffered'   => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'serviceLevel20'               => 'ServiceLevel20',
        'totalAbandonTime'             => 'TotalAbandonTime',
        'totalAbandonedInQueueTime'    => 'TotalAbandonedInQueueTime',
        'totalAbandonedInRingTime'     => 'TotalAbandonedInRingTime',
        'totalHoldTime'                => 'TotalHoldTime',
        'totalRingTime'                => 'TotalRingTime',
        'totalTalkTime'                => 'TotalTalkTime',
        'totalWaitTime'                => 'TotalWaitTime',
        'totalWorkTime'                => 'TotalWorkTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abandonRate) {
            $res['AbandonRate'] = $this->abandonRate;
        }
        if (null !== $this->averageAbandonTime) {
            $res['AverageAbandonTime'] = $this->averageAbandonTime;
        }
        if (null !== $this->averageAbandonedInQueueTime) {
            $res['AverageAbandonedInQueueTime'] = $this->averageAbandonedInQueueTime;
        }
        if (null !== $this->averageAbandonedInRingTime) {
            $res['AverageAbandonedInRingTime'] = $this->averageAbandonedInRingTime;
        }
        if (null !== $this->averageHoldTime) {
            $res['AverageHoldTime'] = $this->averageHoldTime;
        }
        if (null !== $this->averageRingTime) {
            $res['AverageRingTime'] = $this->averageRingTime;
        }
        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
        }
        if (null !== $this->averageWaitTime) {
            $res['AverageWaitTime'] = $this->averageWaitTime;
        }
        if (null !== $this->averageWorkTime) {
            $res['AverageWorkTime'] = $this->averageWorkTime;
        }
        if (null !== $this->callsAbandoned) {
            $res['CallsAbandoned'] = $this->callsAbandoned;
        }
        if (null !== $this->callsAbandonedInQueue) {
            $res['CallsAbandonedInQueue'] = $this->callsAbandonedInQueue;
        }
        if (null !== $this->callsAbandonedInRing) {
            $res['CallsAbandonedInRing'] = $this->callsAbandonedInRing;
        }
        if (null !== $this->callsAttendedTransferIn) {
            $res['CallsAttendedTransferIn'] = $this->callsAttendedTransferIn;
        }
        if (null !== $this->callsAttendedTransferOut) {
            $res['CallsAttendedTransferOut'] = $this->callsAttendedTransferOut;
        }
        if (null !== $this->callsBlindTransferIn) {
            $res['CallsBlindTransferIn'] = $this->callsBlindTransferIn;
        }
        if (null !== $this->callsBlindTransferOut) {
            $res['CallsBlindTransferOut'] = $this->callsBlindTransferOut;
        }
        if (null !== $this->callsHandled) {
            $res['CallsHandled'] = $this->callsHandled;
        }
        if (null !== $this->callsHold) {
            $res['CallsHold'] = $this->callsHold;
        }
        if (null !== $this->callsOffered) {
            $res['CallsOffered'] = $this->callsOffered;
        }
        if (null !== $this->callsOverflow) {
            $res['CallsOverflow'] = $this->callsOverflow;
        }
        if (null !== $this->callsQueued) {
            $res['CallsQueued'] = $this->callsQueued;
        }
        if (null !== $this->callsRinged) {
            $res['CallsRinged'] = $this->callsRinged;
        }
        if (null !== $this->callsTimeout) {
            $res['CallsTimeout'] = $this->callsTimeout;
        }
        if (null !== $this->handleRate) {
            $res['HandleRate'] = $this->handleRate;
        }
        if (null !== $this->maxAbandonTime) {
            $res['MaxAbandonTime'] = $this->maxAbandonTime;
        }
        if (null !== $this->maxAbandonedInQueueTime) {
            $res['MaxAbandonedInQueueTime'] = $this->maxAbandonedInQueueTime;
        }
        if (null !== $this->maxAbandonedInRingTime) {
            $res['MaxAbandonedInRingTime'] = $this->maxAbandonedInRingTime;
        }
        if (null !== $this->maxHoldTime) {
            $res['MaxHoldTime'] = $this->maxHoldTime;
        }
        if (null !== $this->maxRingTime) {
            $res['MaxRingTime'] = $this->maxRingTime;
        }
        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }
        if (null !== $this->maxWaitTime) {
            $res['MaxWaitTime'] = $this->maxWaitTime;
        }
        if (null !== $this->maxWorkTime) {
            $res['MaxWorkTime'] = $this->maxWorkTime;
        }
        if (null !== $this->satisfactionIndex) {
            $res['SatisfactionIndex'] = $this->satisfactionIndex;
        }
        if (null !== $this->satisfactionRate) {
            $res['SatisfactionRate'] = $this->satisfactionRate;
        }
        if (null !== $this->satisfactionSurveysOffered) {
            $res['SatisfactionSurveysOffered'] = $this->satisfactionSurveysOffered;
        }
        if (null !== $this->satisfactionSurveysResponded) {
            $res['SatisfactionSurveysResponded'] = $this->satisfactionSurveysResponded;
        }
        if (null !== $this->serviceLevel20) {
            $res['ServiceLevel20'] = $this->serviceLevel20;
        }
        if (null !== $this->totalAbandonTime) {
            $res['TotalAbandonTime'] = $this->totalAbandonTime;
        }
        if (null !== $this->totalAbandonedInQueueTime) {
            $res['TotalAbandonedInQueueTime'] = $this->totalAbandonedInQueueTime;
        }
        if (null !== $this->totalAbandonedInRingTime) {
            $res['TotalAbandonedInRingTime'] = $this->totalAbandonedInRingTime;
        }
        if (null !== $this->totalHoldTime) {
            $res['TotalHoldTime'] = $this->totalHoldTime;
        }
        if (null !== $this->totalRingTime) {
            $res['TotalRingTime'] = $this->totalRingTime;
        }
        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
        }
        if (null !== $this->totalWaitTime) {
            $res['TotalWaitTime'] = $this->totalWaitTime;
        }
        if (null !== $this->totalWorkTime) {
            $res['TotalWorkTime'] = $this->totalWorkTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inbound
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbandonRate'])) {
            $model->abandonRate = $map['AbandonRate'];
        }
        if (isset($map['AverageAbandonTime'])) {
            $model->averageAbandonTime = $map['AverageAbandonTime'];
        }
        if (isset($map['AverageAbandonedInQueueTime'])) {
            $model->averageAbandonedInQueueTime = $map['AverageAbandonedInQueueTime'];
        }
        if (isset($map['AverageAbandonedInRingTime'])) {
            $model->averageAbandonedInRingTime = $map['AverageAbandonedInRingTime'];
        }
        if (isset($map['AverageHoldTime'])) {
            $model->averageHoldTime = $map['AverageHoldTime'];
        }
        if (isset($map['AverageRingTime'])) {
            $model->averageRingTime = $map['AverageRingTime'];
        }
        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
        }
        if (isset($map['AverageWaitTime'])) {
            $model->averageWaitTime = $map['AverageWaitTime'];
        }
        if (isset($map['AverageWorkTime'])) {
            $model->averageWorkTime = $map['AverageWorkTime'];
        }
        if (isset($map['CallsAbandoned'])) {
            $model->callsAbandoned = $map['CallsAbandoned'];
        }
        if (isset($map['CallsAbandonedInQueue'])) {
            $model->callsAbandonedInQueue = $map['CallsAbandonedInQueue'];
        }
        if (isset($map['CallsAbandonedInRing'])) {
            $model->callsAbandonedInRing = $map['CallsAbandonedInRing'];
        }
        if (isset($map['CallsAttendedTransferIn'])) {
            $model->callsAttendedTransferIn = $map['CallsAttendedTransferIn'];
        }
        if (isset($map['CallsAttendedTransferOut'])) {
            $model->callsAttendedTransferOut = $map['CallsAttendedTransferOut'];
        }
        if (isset($map['CallsBlindTransferIn'])) {
            $model->callsBlindTransferIn = $map['CallsBlindTransferIn'];
        }
        if (isset($map['CallsBlindTransferOut'])) {
            $model->callsBlindTransferOut = $map['CallsBlindTransferOut'];
        }
        if (isset($map['CallsHandled'])) {
            $model->callsHandled = $map['CallsHandled'];
        }
        if (isset($map['CallsHold'])) {
            $model->callsHold = $map['CallsHold'];
        }
        if (isset($map['CallsOffered'])) {
            $model->callsOffered = $map['CallsOffered'];
        }
        if (isset($map['CallsOverflow'])) {
            $model->callsOverflow = $map['CallsOverflow'];
        }
        if (isset($map['CallsQueued'])) {
            $model->callsQueued = $map['CallsQueued'];
        }
        if (isset($map['CallsRinged'])) {
            $model->callsRinged = $map['CallsRinged'];
        }
        if (isset($map['CallsTimeout'])) {
            $model->callsTimeout = $map['CallsTimeout'];
        }
        if (isset($map['HandleRate'])) {
            $model->handleRate = $map['HandleRate'];
        }
        if (isset($map['MaxAbandonTime'])) {
            $model->maxAbandonTime = $map['MaxAbandonTime'];
        }
        if (isset($map['MaxAbandonedInQueueTime'])) {
            $model->maxAbandonedInQueueTime = $map['MaxAbandonedInQueueTime'];
        }
        if (isset($map['MaxAbandonedInRingTime'])) {
            $model->maxAbandonedInRingTime = $map['MaxAbandonedInRingTime'];
        }
        if (isset($map['MaxHoldTime'])) {
            $model->maxHoldTime = $map['MaxHoldTime'];
        }
        if (isset($map['MaxRingTime'])) {
            $model->maxRingTime = $map['MaxRingTime'];
        }
        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }
        if (isset($map['MaxWaitTime'])) {
            $model->maxWaitTime = $map['MaxWaitTime'];
        }
        if (isset($map['MaxWorkTime'])) {
            $model->maxWorkTime = $map['MaxWorkTime'];
        }
        if (isset($map['SatisfactionIndex'])) {
            $model->satisfactionIndex = $map['SatisfactionIndex'];
        }
        if (isset($map['SatisfactionRate'])) {
            $model->satisfactionRate = $map['SatisfactionRate'];
        }
        if (isset($map['SatisfactionSurveysOffered'])) {
            $model->satisfactionSurveysOffered = $map['SatisfactionSurveysOffered'];
        }
        if (isset($map['SatisfactionSurveysResponded'])) {
            $model->satisfactionSurveysResponded = $map['SatisfactionSurveysResponded'];
        }
        if (isset($map['ServiceLevel20'])) {
            $model->serviceLevel20 = $map['ServiceLevel20'];
        }
        if (isset($map['TotalAbandonTime'])) {
            $model->totalAbandonTime = $map['TotalAbandonTime'];
        }
        if (isset($map['TotalAbandonedInQueueTime'])) {
            $model->totalAbandonedInQueueTime = $map['TotalAbandonedInQueueTime'];
        }
        if (isset($map['TotalAbandonedInRingTime'])) {
            $model->totalAbandonedInRingTime = $map['TotalAbandonedInRingTime'];
        }
        if (isset($map['TotalHoldTime'])) {
            $model->totalHoldTime = $map['TotalHoldTime'];
        }
        if (isset($map['TotalRingTime'])) {
            $model->totalRingTime = $map['TotalRingTime'];
        }
        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }
        if (isset($map['TotalWaitTime'])) {
            $model->totalWaitTime = $map['TotalWaitTime'];
        }
        if (isset($map['TotalWorkTime'])) {
            $model->totalWorkTime = $map['TotalWorkTime'];
        }

        return $model;
    }
}
