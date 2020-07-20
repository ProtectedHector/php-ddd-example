<?php
declare(strict_types=1);

namespace CodelyTv\Tests\Mooc\CoursesCounter\Application\Find;

use CodelyTv\Mooc\CoursesCounter\Application\Find\CoursesResponse;
use CodelyTv\Tests\Mooc\Courses\Domain\CourseMother;

final class FindAllCoursesResponseMother
{
    public static function create(array $courses): CoursesResponse
    {
        return new CoursesResponse($courses);
    }

    public static function random(): CoursesResponse
    {
        return self::create([
            CourseMother::random(),
            CourseMother::random()
        ]);
    }
}