<?php
namespace DWenzel\T3events\Domain\Model;

/***************************************************************
     *  Copyright notice
     *  (c) 2012 Dirk Wenzel <wenzel@webfox01.de>, Agentur Webfox
     *  Michael Kasten <kasten@webfox01.de>, Agentur Webfox
     *  All rights reserved
     *  This script is part of the TYPO3 project. The TYPO3 project is
     *  free software; you can redistribute it and/or modify
     *  it under the terms of the GNU General Public License as published by
     *  the Free Software Foundation; either version 3 of the License, or
     *  (at your option) any later version.
     *  The GNU General Public License can be found at
     *  http://www.gnu.org/copyleft/gpl.html.
     *  This script is distributed in the hope that it will be useful,
     *  but WITHOUT ANY WARRANTY; without even the implied warranty of
     *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *  GNU General Public License for more details.
     *  This copyright notice MUST APPEAR in all copies of the script!
     ***************************************************************/

/**
 * @package t3events
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class EventType extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{
    use EqualsTrait;

    /**
     * title
     *
     * @var string
     */
    protected $title;

    /**
     * Link
     *
     * @var string
     */
    protected $link;

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


    /**
     * Gets the link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }
}
