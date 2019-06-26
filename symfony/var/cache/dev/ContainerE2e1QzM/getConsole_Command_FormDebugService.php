<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\UserBundle\\Form\\Type', 4 => 'FOS\\CKEditorBundle\\Form\\Type'], [0 => 'App\\Form\\AdminUsersAddType', 1 => 'App\\Form\\AdminUsersType', 2 => 'App\\Form\\AnswerSurveyType', 3 => 'App\\Form\\AnswerType', 4 => 'App\\Form\\ApplicationType', 5 => 'App\\Form\\CategoryTreeType', 6 => 'App\\Form\\QuestionSurveyType', 7 => 'App\\Form\\QuestionType', 8 => 'App\\Form\\QuizCategoryEmbeddedForm', 9 => 'App\\Form\\QuizType', 10 => 'App\\Form\\SurveyAnswerType', 11 => 'App\\Form\\SurveyType', 12 => 'App\\Form\\UsersQuizType', 13 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 14 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 15 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 16 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 17 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 18 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 19 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 20 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', 21 => 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

$instance->setName('debug:form');

return $instance;
