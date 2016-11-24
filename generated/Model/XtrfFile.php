<?php

namespace drunomics\XtrfClient\Model;

class XtrfFile
{
    /**
     * @var string
     */
    protected $deleteType;
    /**
     * @var string
     */
    protected $deleteUrl;
    /**
     * @var XtrfFileStats
     */
    protected $fileStats;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $size;
    /**
     * @var string
     */
    protected $url;
    /**
     * @return string
     */
    public function getDeleteType()
    {
        return $this->deleteType;
    }
    /**
     * @param string $deleteType
     *
     * @return self
     */
    public function setDeleteType($deleteType = null)
    {
        $this->deleteType = $deleteType;
        return $this;
    }
    /**
     * @return string
     */
    public function getDeleteUrl()
    {
        return $this->deleteUrl;
    }
    /**
     * @param string $deleteUrl
     *
     * @return self
     */
    public function setDeleteUrl($deleteUrl = null)
    {
        $this->deleteUrl = $deleteUrl;
        return $this;
    }
    /**
     * @return XtrfFileStats
     */
    public function getFileStats()
    {
        return $this->fileStats;
    }
    /**
     * @param XtrfFileStats $fileStats
     *
     * @return self
     */
    public function setFileStats(XtrfFileStats $fileStats = null)
    {
        $this->fileStats = $fileStats;
        return $this;
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * @param int $size
     *
     * @return self
     */
    public function setSize($size = null)
    {
        $this->size = $size;
        return $this;
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url = null)
    {
        $this->url = $url;
        return $this;
    }
}