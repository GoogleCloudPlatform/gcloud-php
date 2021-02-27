<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/job_service.proto

namespace Google\Cloud\Talent\V4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Mutation result of a job from a batch operation.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.JobResult</code>
 */
class JobResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Here [Job][google.cloud.talent.v4.Job] only contains basic information including [name][google.cloud.talent.v4.Job.name],
     * [company][google.cloud.talent.v4.Job.company], [language_code][google.cloud.talent.v4.Job.language_code]
     * and [requisition_id][google.cloud.talent.v4.Job.requisition_id], use getJob method to retrieve
     * detailed information of the created/updated job.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Job job = 1;</code>
     */
    private $job = null;
    /**
     * The status of the job processed. This field is populated if the
     * processing of the [job][google.cloud.talent.v4.JobResult.job] fails.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     */
    private $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Talent\V4\Job $job
     *           Here [Job][google.cloud.talent.v4.Job] only contains basic information including [name][google.cloud.talent.v4.Job.name],
     *           [company][google.cloud.talent.v4.Job.company], [language_code][google.cloud.talent.v4.Job.language_code]
     *           and [requisition_id][google.cloud.talent.v4.Job.requisition_id], use getJob method to retrieve
     *           detailed information of the created/updated job.
     *     @type \Google\Rpc\Status $status
     *           The status of the job processed. This field is populated if the
     *           processing of the [job][google.cloud.talent.v4.JobResult.job] fails.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Here [Job][google.cloud.talent.v4.Job] only contains basic information including [name][google.cloud.talent.v4.Job.name],
     * [company][google.cloud.talent.v4.Job.company], [language_code][google.cloud.talent.v4.Job.language_code]
     * and [requisition_id][google.cloud.talent.v4.Job.requisition_id], use getJob method to retrieve
     * detailed information of the created/updated job.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Job job = 1;</code>
     * @return \Google\Cloud\Talent\V4\Job|null
     */
    public function getJob()
    {
        return isset($this->job) ? $this->job : null;
    }

    public function hasJob()
    {
        return isset($this->job);
    }

    public function clearJob()
    {
        unset($this->job);
    }

    /**
     * Here [Job][google.cloud.talent.v4.Job] only contains basic information including [name][google.cloud.talent.v4.Job.name],
     * [company][google.cloud.talent.v4.Job.company], [language_code][google.cloud.talent.v4.Job.language_code]
     * and [requisition_id][google.cloud.talent.v4.Job.requisition_id], use getJob method to retrieve
     * detailed information of the created/updated job.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Job job = 1;</code>
     * @param \Google\Cloud\Talent\V4\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4\Job::class);
        $this->job = $var;

        return $this;
    }

    /**
     * The status of the job processed. This field is populated if the
     * processing of the [job][google.cloud.talent.v4.JobResult.job] fails.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * The status of the job processed. This field is populated if the
     * processing of the [job][google.cloud.talent.v4.JobResult.job] fails.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

}

