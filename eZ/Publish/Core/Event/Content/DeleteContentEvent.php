<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\Publish\Core\Event\Content;

use eZ\Publish\API\Repository\Values\Content\ContentInfo;
use eZ\Publish\Core\Event\AfterEvent;

final class DeleteContentEvent extends AfterEvent
{
    /** @var array */
    private $locations;

    /** @var \eZ\Publish\API\Repository\Values\Content\ContentInfo */
    private $contentInfo;

    public function __construct(
        array $locations,
        ContentInfo $contentInfo
    ) {
        $this->locations = $locations;
        $this->contentInfo = $contentInfo;
    }

    public function getLocations(): array
    {
        return $this->locations;
    }

    public function getContentInfo(): ContentInfo
    {
        return $this->contentInfo;
    }
}