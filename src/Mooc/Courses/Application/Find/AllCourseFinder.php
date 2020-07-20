<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Mooc\Courses\Domain\NoCoursesFound;
use CodelyTv\Mooc\CoursesCounter\Application\Find\CoursesResponse;

final class AllCourseFinder
{
    private CourseRepository $repository;

    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): CoursesResponse
    {
        $courses = $this->repository->findAll();

        $this->ensureThereAreCourses($courses);

        return new CoursesResponse($courses);
    }

    private function ensureThereAreCourses(?array $courses): void
    {
        if (null === $courses) {
            throw new NoCoursesFound();
        }
    }
}
