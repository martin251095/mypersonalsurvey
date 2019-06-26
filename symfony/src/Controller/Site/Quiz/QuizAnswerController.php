<?php

namespace App\Controller\Site\Quiz;

use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Quiz;
use App\Entity\QuizAnswer;
use App\Repository\QuizRepository;
use App\Service\NotificationManager;
use App\Service\PaginationManager;
use App\Service\ScoreCalculator;
use App\Service\TranslationManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class QuizController
 * @package App\Controller\Quiz
 * QuizController because create the view of the quiz for the user but fill in the fields of the SurveyAnswer Entity
 */
class QuizAnswerController extends AbstractController
{

}
