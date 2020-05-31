<?php
declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application\Like;

use CodelyTv\Mooc\Courses\Application\Find\CourseFinder;
use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Mooc\Shared\Domain\Course\CourseId;

final class CourseLikeCreator
{
    private CourseRepository $repository;
    private CourseFinder     $finder;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->repository = $courseRepository;
        $this->finder     = new CourseFinder($this->repository);
    }

    public function __invoke(CourseId $id): void
    {
        $course = $this->finder->__invoke($id);

        $course->like();

        $this->repository->save($course);
    }
}