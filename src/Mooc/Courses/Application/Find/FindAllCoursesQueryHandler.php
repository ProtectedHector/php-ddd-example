<?php
declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Mooc\CoursesCounter\Application\Find\CoursesResponse;
use CodelyTv\Shared\Domain\Bus\Query\QueryHandler;

final class FindAllCoursesQueryHandler implements QueryHandler
{
    private AllCourseFinder $courseFinder;

    public function __construct(AllCourseFinder $courseFinder)
    {
        $this->courseFinder = $courseFinder;
    }

    public function __invoke(FindAllCoursesQuery $findAllCoursesQuery): CoursesResponse
    {
        return $this->courseFinder->__invoke();
    }
}