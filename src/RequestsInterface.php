<?php

namespace Directus\SDK;

interface RequestsInterface
{
    /**
     * Gets list of all tables
     *
     * @param array $params
     *
     * @return array
     */
    public function getTables(array $params = []);

    /**
     * Gets list of the all columns
     *
     * @param array $params
     *
     * @return array
     */
    public function getColumns(array $params = []);

    /**
     * Fetch Information of a given table
     *
     * @param $tableName
     *
     * @return object
     */
    public function fetchTableInfo($tableName);

    /**
     * Fetch columns of a given table
     *
     * @param $tableName
     *
     * @return array
     */
    public function fetchColumns($tableName);

    /**
     * Fetch details of a given table's column
     *
     * @param $tableName
     * @param $columnName
     *
     * @return array
     */
    public function fetchColumnInfo($tableName, $columnName);

    /**
     * Fetch Items from a given table
     *
     * @param string $tableName
     * @param array $options
     *
     * @return object
     */
    public function getEntries($tableName, array $options = []);

    /**
     * Get an entry in a given table by the given ID
     *
     * @param mixed $id
     * @param string $tableName
     * @param array $options
     *
     * @return array
     */
    public function getEntry($tableName, $id, array $options = []);

    /**
     * Gets the list of users
     *
     * @param array $params
     *
     * @return array
     */
    public function getUsers(array $params = []);

    /**
     * Gets a user by the given id
     *
     * @param $id
     * @param array $params
     *
     * @return array
     */
    public function getUser($id, array $params = []);

    /**
     * Fetch List of User groups
     *
     * @return object
     */
    public function fetchGroups();

    /**
     * Fetch the information of a given user group
     *
     * @param $groupID
     *
     * @return object
     */
    public function fetchGroupInfo($groupID);

    /**
     * Fetch a given group privileges
     *
     * @param $groupID
     *
     * @return object
     */
    public function fetchGroupPrivileges($groupID);

    /**
     * Fetch list of files
     *
     * @return object
     */
    public function fetchFiles();

    /**
     * Fetch the information of a given file
     *
     * @param $fileID
     *
     * @return mixed
     */
    public function fetchFileInfo($fileID);

    /**
     * Fetch all settings
     *
     * @return object
     */
    public function fetchSettings();

    /**
     * Fetch all settings in a given collection name
     *
     * @param $collectionName
     *
     * @return object
     */
    public function fetchSettingCollection($collectionName);
}
