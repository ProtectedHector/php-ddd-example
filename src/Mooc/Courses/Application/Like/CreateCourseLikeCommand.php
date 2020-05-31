<?php
declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application\Like;

use CodelyTv\Shared\Domain\Bus\Command\Command;
use CodelyTv\Shared\Domain\ValueObject\Uuid;

final class CreateCourseLikeCommand implements Command
{

    private string $videoLikeId;
    private string $videoId;
    private string $userId;

    public function __construct(Uuid $commandId, string $videoLikeId, string $videoId, string $userId)
    {
        $this->videoLikeId = $videoLikeId;
        $this->videoId = $videoId;
        $this->userId = $userId;
    }
}