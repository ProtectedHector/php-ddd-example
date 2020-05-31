<?php
declare(strict_types=1);

namespace CodelyTv\Apps\Backoffice\Backend\Controller\Courses;

use CodelyTv\Apps\Mooc\Backend\Controller\Courses\CreateCourseLikeCommand;
use CodelyTv\Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class CourseLikePostController extends ApiController
{

    protected function exceptions(): array
    {
        return [];
    }

    public function __invoke(Request $request): void
    {
        $command = new CreateCourseLikeCommand($request->get('id'));

        $this->dispatch($command);

        return new ApiHttpCreatedResponse();
    }
}