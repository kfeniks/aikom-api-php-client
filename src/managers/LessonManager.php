<?php
declare(strict_types=1);

namespace Aikom\managers;

use Aikom\context\scenario\lesson\LessonCreateEndpoint;
use Aikom\context\scenario\lesson\LessonIndexEndpoint;
use Aikom\context\scenario\lesson\LessonTypeListEndpoint;
use Aikom\context\scenario\lesson\LessonUpdateEndpoint;
use Aikom\context\scenario\lesson\LessonViewEndpoint;
use Aikom\context\scenario\response\ErrorResponseScenario;
use Aikom\handlers\ErrorResponseHandler;
use Aikom\validators\ResponseValidator;

/**
 * Class LessonManager
 * @version 1.0.0
 * @access public
 * @package Aikom\managers
 **/
class LessonManager extends BasicManager
{
    /**
     * @return array
     * @throws \Exception
     */
    public function index(): array
    {
        $response = $this->getClient()->send(
            new LessonIndexEndpoint()
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param int $id
     * @return array
     * @throws \Exception
     */
    public function view(int $id): array
    {
        $response = $this->getClient()->send(
            new LessonViewEndpoint($id)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param int $id
     * @param array $data
     * @return array
     * @throws \Exception
     */
    public function update(int $id, array $data): array
    {
        $response = $this->getClient()->send(
            new LessonUpdateEndpoint($id, $data)
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function types(): array
    {
        $response = $this->getClient()->send(
            new LessonTypeListEndpoint()
        );

        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }

    /**
     * @param int $personalId
     * @param int $classId
     * @param int $subGroupId
     * @param int $roomId
     * @param int $buzzerId
     * @param int $subjectId
     * @param int|null $typeId
     * @param string $date
     * @param string $topic
     * @param string|null $description
     * @param int $sortIndex
     * @param string|null $homework
     * @param string|null $homeworkTo
     * @param string|null $homeworkHistory
     * @return array
     * @throws \Exception
     */
    public function create(
        int $personalId,
        int $classId,
        int $subGroupId,
        int $roomId,
        int $buzzerId,
        int $subjectId,
        ?int $typeId,
        string $date,
        string $topic,
        ?string $description,
        int $sortIndex,
        ?string $homework,
        ?string $homeworkTo,
        ?string $homeworkHistory
    ): array
    {
        $response = $this->getClient()->send(
            new LessonCreateEndpoint([
                'personal_id' => $personalId,
                'class_id' => $classId,
                'subgroup_id' => $subGroupId,
                'room_id' => $roomId,
                'buzzer_id' => $buzzerId,
                'predmet_id' => $subjectId,
                'lesson_type_id' => $typeId,
                'lesson_date' => $date,
                'lesson_topic' => $topic,
                'lesson_description' => $description,
                'lesson_number_in_plan' => $sortIndex,
                'hometask' => $homework,
                'hometask_to' => $homeworkTo,
                'hometask_history' => $homeworkHistory,
            ])
        );
        $responseAsArray = json_decode($response, true);

        $validator = new ResponseValidator(new ErrorResponseScenario());
        $errorHandler = new ErrorResponseHandler($validator);
        $errorHandler->handle($responseAsArray);

        return $responseAsArray;
    }
}