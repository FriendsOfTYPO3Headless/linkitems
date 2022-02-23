<?php

declare(strict_types=1);

namespace FriendsOfTypo3Headless\Linkitems\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class LinkItem extends AbstractEntity
{
    private string $text = '';

    private string $link = '';

    private string $style = '';

    private string $icon = '';

    private string $iconPosition = '';

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getStyle(): string
    {
        return $this->style;
    }

    public function setStyle(string $style): self
    {
        $this->style = $style;

        return $this;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIconPosition(): string
    {
        return $this->iconPosition;
    }

    public function setIconPosition(string $iconPosition): self
    {
        $this->iconPosition = $iconPosition;

        return $this;
    }
}
