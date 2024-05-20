<?php

namespace Container5ugmXBW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), ['Symfony\\Component\\Form\\Extension\\Core\\Type', 'App\\Form', 'Symfony\\Bridge\\Doctrine\\Form\\Type', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type', 'FOS\\CKEditorBundle\\Form\\Type'], ['App\\Form\\AboutType', 'App\\Form\\ActionType', 'App\\Form\\ArticleType', 'App\\Form\\ContactType', 'App\\Form\\MailerType', 'App\\Form\\NewzEditType', 'App\\Form\\NewzType', 'App\\Form\\ResetMdpRequestType', 'App\\Form\\ResetPasswordType', 'App\\Form\\SubscriberType', 'App\\Form\\UnsubscribeType', 'App\\Form\\UserEditType', 'App\\Form\\UserType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType', 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType'], ['Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\FormTypePasswordHasherExtension', 'Symfony\\Component\\Form\\Extension\\PasswordHasher\\Type\\PasswordTypePasswordHasherExtension', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'], ['Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ??= new \Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter(NULL)));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
