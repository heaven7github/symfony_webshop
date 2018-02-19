<?php

namespace AppBundle\Entity;

/**
 * Products
 */
class Products
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $productId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $price;

    /**
     * @var int
     */
    private $categoryId;

    /**
     * @var string
     */
    private $availability;

    /**
     * @var string
     */
    private $productCondition;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $details;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return Products
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Products
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Products
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return Products
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set availability
     *
     * @param string $availability
     *
     * @return Products
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get availability
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set productCondition
     *
     * @param string $productCondition
     *
     * @return Products
     */
    public function setProductCondition($productCondition)
    {
        $this->productCondition = $productCondition;

        return $this;
    }

    /**
     * Get productCondition
     *
     * @return string
     */
    public function getProductCondition()
    {
        return $this->productCondition;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Products
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Products
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Products
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }
}

