<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $additionalBroker;
    /**
     * @var string
     */
    public $agentIds;
    /**
     * @var string
     */
    public $agentNames;
    /**
     * @var string
     */
    public $broker;
    /**
     * @var string
     */
    public $callDuration;
    /**
     * @var string
     */
    public $callIds;
    /**
     * @var string
     */
    public $calledNumber;
    /**
     * @var string
     */
    public $calleeLocation;
    /**
     * @var string
     */
    public $callerLocation;
    /**
     * @var string
     */
    public $callingNumber;
    /**
     * @var string
     */
    public $contactDisposition;
    /**
     * @var string
     */
    public $contactId;
    /**
     * @var string
     */
    public $contactType;
    /**
     * @var int
     */
    public $dialingTime;
    /**
     * @var string
     */
    public $earlyMediaState;
    /**
     * @var int
     */
    public $establishedTime;
    /**
     * @var int
     */
    public $heldTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $ivrTime;
    /**
     * @var int
     */
    public $queueTime;
    /**
     * @var int
     */
    public $recordingDuration;
    /**
     * @var bool
     */
    public $recordingReady;
    /**
     * @var string
     */
    public $releaseInitiator;
    /**
     * @var string
     */
    public $releaseReason;
    /**
     * @var int
     */
    public $releaseTime;
    /**
     * @var int
     */
    public $ringTime;
    /**
     * @var string
     */
    public $satisfactionDescription;
    /**
     * @var int
     */
    public $satisfactionIndex;
    /**
     * @var string
     */
    public $satisfactionSurveyChannel;
    /**
     * @var bool
     */
    public $satisfactionSurveyOffered;
    /**
     * @var string
     */
    public $skillGroupIds;
    /**
     * @var string
     */
    public $skillGroupNames;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var int
     */
    public $talkTime;
    /**
     * @var int
     */
    public $waitTime;
    protected $_name = [
        'additionalBroker'          => 'AdditionalBroker',
        'agentIds'                  => 'AgentIds',
        'agentNames'                => 'AgentNames',
        'broker'                    => 'Broker',
        'callDuration'              => 'CallDuration',
        'callIds'                   => 'CallIds',
        'calledNumber'              => 'CalledNumber',
        'calleeLocation'            => 'CalleeLocation',
        'callerLocation'            => 'CallerLocation',
        'callingNumber'             => 'CallingNumber',
        'contactDisposition'        => 'ContactDisposition',
        'contactId'                 => 'ContactId',
        'contactType'               => 'ContactType',
        'dialingTime'               => 'DialingTime',
        'earlyMediaState'           => 'EarlyMediaState',
        'establishedTime'           => 'EstablishedTime',
        'heldTime'                  => 'HeldTime',
        'instanceId'                => 'InstanceId',
        'ivrTime'                   => 'IvrTime',
        'queueTime'                 => 'QueueTime',
        'recordingDuration'         => 'RecordingDuration',
        'recordingReady'            => 'RecordingReady',
        'releaseInitiator'          => 'ReleaseInitiator',
        'releaseReason'             => 'ReleaseReason',
        'releaseTime'               => 'ReleaseTime',
        'ringTime'                  => 'RingTime',
        'satisfactionDescription'   => 'SatisfactionDescription',
        'satisfactionIndex'         => 'SatisfactionIndex',
        'satisfactionSurveyChannel' => 'SatisfactionSurveyChannel',
        'satisfactionSurveyOffered' => 'SatisfactionSurveyOffered',
        'skillGroupIds'             => 'SkillGroupIds',
        'skillGroupNames'           => 'SkillGroupNames',
        'startTime'                 => 'StartTime',
        'talkTime'                  => 'TalkTime',
        'waitTime'                  => 'WaitTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalBroker) {
            $res['AdditionalBroker'] = $this->additionalBroker;
        }

        if (null !== $this->agentIds) {
            $res['AgentIds'] = $this->agentIds;
        }

        if (null !== $this->agentNames) {
            $res['AgentNames'] = $this->agentNames;
        }

        if (null !== $this->broker) {
            $res['Broker'] = $this->broker;
        }

        if (null !== $this->callDuration) {
            $res['CallDuration'] = $this->callDuration;
        }

        if (null !== $this->callIds) {
            $res['CallIds'] = $this->callIds;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->calleeLocation) {
            $res['CalleeLocation'] = $this->calleeLocation;
        }

        if (null !== $this->callerLocation) {
            $res['CallerLocation'] = $this->callerLocation;
        }

        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }

        if (null !== $this->contactDisposition) {
            $res['ContactDisposition'] = $this->contactDisposition;
        }

        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }

        if (null !== $this->dialingTime) {
            $res['DialingTime'] = $this->dialingTime;
        }

        if (null !== $this->earlyMediaState) {
            $res['EarlyMediaState'] = $this->earlyMediaState;
        }

        if (null !== $this->establishedTime) {
            $res['EstablishedTime'] = $this->establishedTime;
        }

        if (null !== $this->heldTime) {
            $res['HeldTime'] = $this->heldTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ivrTime) {
            $res['IvrTime'] = $this->ivrTime;
        }

        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }

        if (null !== $this->recordingDuration) {
            $res['RecordingDuration'] = $this->recordingDuration;
        }

        if (null !== $this->recordingReady) {
            $res['RecordingReady'] = $this->recordingReady;
        }

        if (null !== $this->releaseInitiator) {
            $res['ReleaseInitiator'] = $this->releaseInitiator;
        }

        if (null !== $this->releaseReason) {
            $res['ReleaseReason'] = $this->releaseReason;
        }

        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }

        if (null !== $this->ringTime) {
            $res['RingTime'] = $this->ringTime;
        }

        if (null !== $this->satisfactionDescription) {
            $res['SatisfactionDescription'] = $this->satisfactionDescription;
        }

        if (null !== $this->satisfactionIndex) {
            $res['SatisfactionIndex'] = $this->satisfactionIndex;
        }

        if (null !== $this->satisfactionSurveyChannel) {
            $res['SatisfactionSurveyChannel'] = $this->satisfactionSurveyChannel;
        }

        if (null !== $this->satisfactionSurveyOffered) {
            $res['SatisfactionSurveyOffered'] = $this->satisfactionSurveyOffered;
        }

        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
        }

        if (null !== $this->skillGroupNames) {
            $res['SkillGroupNames'] = $this->skillGroupNames;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->talkTime) {
            $res['TalkTime'] = $this->talkTime;
        }

        if (null !== $this->waitTime) {
            $res['WaitTime'] = $this->waitTime;
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
        if (isset($map['AdditionalBroker'])) {
            $model->additionalBroker = $map['AdditionalBroker'];
        }

        if (isset($map['AgentIds'])) {
            $model->agentIds = $map['AgentIds'];
        }

        if (isset($map['AgentNames'])) {
            $model->agentNames = $map['AgentNames'];
        }

        if (isset($map['Broker'])) {
            $model->broker = $map['Broker'];
        }

        if (isset($map['CallDuration'])) {
            $model->callDuration = $map['CallDuration'];
        }

        if (isset($map['CallIds'])) {
            $model->callIds = $map['CallIds'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CalleeLocation'])) {
            $model->calleeLocation = $map['CalleeLocation'];
        }

        if (isset($map['CallerLocation'])) {
            $model->callerLocation = $map['CallerLocation'];
        }

        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }

        if (isset($map['ContactDisposition'])) {
            $model->contactDisposition = $map['ContactDisposition'];
        }

        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }

        if (isset($map['DialingTime'])) {
            $model->dialingTime = $map['DialingTime'];
        }

        if (isset($map['EarlyMediaState'])) {
            $model->earlyMediaState = $map['EarlyMediaState'];
        }

        if (isset($map['EstablishedTime'])) {
            $model->establishedTime = $map['EstablishedTime'];
        }

        if (isset($map['HeldTime'])) {
            $model->heldTime = $map['HeldTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IvrTime'])) {
            $model->ivrTime = $map['IvrTime'];
        }

        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }

        if (isset($map['RecordingDuration'])) {
            $model->recordingDuration = $map['RecordingDuration'];
        }

        if (isset($map['RecordingReady'])) {
            $model->recordingReady = $map['RecordingReady'];
        }

        if (isset($map['ReleaseInitiator'])) {
            $model->releaseInitiator = $map['ReleaseInitiator'];
        }

        if (isset($map['ReleaseReason'])) {
            $model->releaseReason = $map['ReleaseReason'];
        }

        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        if (isset($map['RingTime'])) {
            $model->ringTime = $map['RingTime'];
        }

        if (isset($map['SatisfactionDescription'])) {
            $model->satisfactionDescription = $map['SatisfactionDescription'];
        }

        if (isset($map['SatisfactionIndex'])) {
            $model->satisfactionIndex = $map['SatisfactionIndex'];
        }

        if (isset($map['SatisfactionSurveyChannel'])) {
            $model->satisfactionSurveyChannel = $map['SatisfactionSurveyChannel'];
        }

        if (isset($map['SatisfactionSurveyOffered'])) {
            $model->satisfactionSurveyOffered = $map['SatisfactionSurveyOffered'];
        }

        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = $map['SkillGroupIds'];
        }

        if (isset($map['SkillGroupNames'])) {
            $model->skillGroupNames = $map['SkillGroupNames'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TalkTime'])) {
            $model->talkTime = $map['TalkTime'];
        }

        if (isset($map['WaitTime'])) {
            $model->waitTime = $map['WaitTime'];
        }

        return $model;
    }
}
