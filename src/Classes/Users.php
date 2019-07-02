<?php

namespace Oversee\Zoom\Classes;

use Oversee\Zoom\Http\Request;


/**
 * Class Users
 * @package Oversee\Zoom\Classes
 *
 */
class Users extends Request
{


    /**
     * Create
     *
     * @param array $data
     * @return array|mixed
     */
    public function create(array $data)
    {
        return $this->post('users', $data);
    }

    /**
     * Get Users
     *
     * @return array
     */
    public function list() : array
    {
        return $this->get('users');
    }

    /**
     * Update
     *
     * @param string $userId
     * @param array $data
     * @return array|mixed
     */
    public function update(string $userId, array $data)
    {
        return $this->patch("users/{$userId}", $data);
    }

    /**
     * Retrieve
     *
     * @param string $userId
     * @param array $optional
     * @return array|mixed
     */
    public function retrieve(string $userId, $optional = [])
    {
        return $this->get("users/{$userId}", $optional);
    }

    /**
     * Remove
     *
     * @param string $userId
     * @return array|mixed
     */
    public function remove(string $userId)
    {
        return $this->delete("users/{$userId}");
    }

    /**
     * Users Assistants List
     *
     * @param string $userId
     * @return array|mixed
     */
    public function assistantsList(string $userId)
    {
        return $this->get("users/{$userId}/assistants");
    }

    /**
     * Add Assistant
     *
     * @param string $userId
     * @param array $data
     * @return array|mixed
     */
    public function addAssistant(string $userId, array $data)
    {
        return $this->post("users{$userId}/assistants", $data);
    }

    /**
     * Delete Assistants
     *
     * @param string $userId
     * @return array|mixed
     */
    public function deleteAssistants(string $userId)
    {
        return $this->delete("users/{$userId}/assistants");
    }

    /**
     * Delete Assistant
     *
     * @param string $userId
     * @param string $assistantId
     * @return array|mixed
     */
    public function deleteAssistant(string $userId, string $assistantId)
    {
        return $this->delete("users/{$userId}/assistants/{$assistantId}");
    }

    /**
     * Schedulers List
     *
     * @param string $userId
     * @return array|mixed
     */
    public function schedulersList(string $userId)
    {
        return $this->get("users/{$userId}/schedulers");
    }

    /**
     * Deletes Schedulers
     *
     * @param string $userId
     * @return array|mixed
     */
    public function deletesSchedulers(string $userId)
    {
        return $this->delete("users/{$userId}/schedulers");
    }

    /**
     * Deletes Scheduler
     *
     * @param string $userId
     * @param string $schedulerId
     * @return array|mixed
     */
    public function deletesScheduler(string $userId, string $schedulerId)
    {
        return $this->delete("users/{$userId}/schedulers/{$schedulerId}");
    }


    /**
     * Webinars
     *
     * @param string $userId
     * @param array $optional
     * @return array|mixed
     */
    public function listWebinars(string $userId, $optional = [])
    {
        return $this->get("users/{$userId}/webinars", $optional);
    }



    /**
     * Webinars Occurences
     *
     * @param string $userId
     * @param array $optional
     * @return array|mixed
     */
    public function getWebinarOccurences(string $webinarId, $optional = [])
    {
        return $this->get("webinars/{$webinarId}", $optional);
    }



     /**
     * Get Webinar Registrants
     *
     * @param string $userId
     * @param array $optional
     * @return array|mixed
     */
    public function getWebinar(string $webinarId, $optional = [])
    {
        return $this->get("webinars/{$webinarId}/registrants", $optional);
    }


    /**
     * Add Webinar Registrant
     *
     * @param string $userId
     * @param array $data
     * @return array|mixed
     */
    public function addWebinarRegistrant(string $webinarId, array $data)
    {
        return $this->post("webinars/{$webinarId}/registrants", $data);
    }


     /**
     * Get Webinar Registrants
     *
     * @param string $userId
     * @param array $optional
     * @return array|mixed
     */
    public function getWebinarAttendance(string $webinarId, $optional = [])
    {
        return $this->get("reports/webinars/{$webinarId}/participants", $optional);
    }




}