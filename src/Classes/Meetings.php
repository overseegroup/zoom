<?php


namespace Oversee\Zoom\Classes;

use Oversee\Zoom\Http\Request;

class Meetings extends Request
{

    /**
     * List
     *
     * @param string $userId
     * @return array|mixed
     */
    public function list(string $userId)
    {
        return $this->get("users/{$userId}/meetings");
    }

    /**
     * Create
     *
     * @param string $userId
     * @param array $data
     * @return array|mixed
     */
    public function create(string $userId, array $data  = null)
    {
        return $this->post("users/{$userId}/meetings", $data);
    }

    /**
     * Meeting
     *
     * @param string $meetingId
     * @return array|mixed
     */
    public function meeting(string $meetingId)
    {
        return $this->get("meetings/{$meetingId}");
    }

    /**
     * Records
     *
     * @param string $meetingId
     * @return array|mixed
     */
    public function records(string $meetingId)
    {
        return $this->get("meetings/{$meetingId}/recordings");
    }

}