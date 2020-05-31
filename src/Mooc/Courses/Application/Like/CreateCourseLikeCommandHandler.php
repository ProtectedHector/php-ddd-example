<?php
declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application\Like;

use CodelyTv\Mooc\Courses\Application\Create\CreateCourseCommand;
use CodelyTv\Mooc\Shared\Domain\Course\CourseId;
use CodelyTv\Shared\Domain\ValueObject\Uuid;

final class CreateCourseLikeCommandHandler implements \CodelyTv\Shared\Domain\Bus\Command\CommandHandler
{
    private CourseLikeCreator $courseLiker;

    public function __construct(CourseLikeCreator $courseLiker)
    {
        $this->courseLiker = $courseLiker;
    }

    public function __invoke(CreateCourseCommand $command): void
    {
        $courseId = new CourseId($command->id());
        $courseLikeId = new CourseLikeId($command->courseLikeId());
        $userId = new UserId($command->userId());

        $this->courseLiker->__invoke($courseId);
    }
}