<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;
use AppBundle\Form\Type\RegistrationType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;


class SecurityController extends Controller
{
  /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {

          /** @var $session \Symfony\Component\HttpFoundation\Session\Session */
          $session = $request->getSession();

          if (class_exists('\Symfony\Component\Security\Core\Security')) {
              $authErrorKey = Security::AUTHENTICATION_ERROR;
              $lastUsernameKey = Security::LAST_USERNAME;
          } else {
              // BC for SF < 2.6
              $authErrorKey = SecurityContextInterface::AUTHENTICATION_ERROR;
              $lastUsernameKey = SecurityContextInterface::LAST_USERNAME;
          }

          // get the error if any (works with forward and redirect -- see below)
          if ($request->attributes->has($authErrorKey)) {
              $error = $request->attributes->get($authErrorKey);
          } elseif (null !== $session && $session->has($authErrorKey)) {
              $error = $session->get($authErrorKey);
              $session->remove($authErrorKey);
          } else {
              $error = null;
          }

          if (!$error instanceof AuthenticationException) {
              $error = null; // The value does not come from the security component.
          }

          // last username entered by the user
          $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

          if ($this->has('security.csrf.token_manager')) {
              $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
          } else {
              // BC for SF < 2.4
              $csrfToken = $this->has('form.csrf_provider')
                  ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                  : null;
          }

          return $this->render('AppBundle:Default:login.html.twig',array(
              'last_username' => $lastUsername,
              'error' => $error,
              'csrf_token' => $csrfToken,
          ));
      // $authenticationUtils = $this->get('security.authentication_utils');
      //
      // // get the login error if there is one
      // $error = $authenticationUtils->getLastAuthenticationError();
      //
      // // last username entered by the user
      // $lastUsername = $authenticationUtils->getLastUsername();

      // $authenticationUtils = $this->get('security.authentication_utils');
      //   // get the login error if there is one
      //   $error = $authenticationUtils->getLastAuthenticationError();
      //   // last username entered by the user
      //   $lastUsername = $authenticationUtils->getLastUsername();
      //   return $this->render(
      //       'AppBundle:Default:login.html.twig',
      //       array(
      //           // last username entered by the user
      //           'last_username' => $lastUsername,
      //           'error'         => $error,
      //       )
      //   );
      }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
    }

    /**
       * @Route("/register", name="register")
       */
      public function registerAction(Request $request)
      {
        $user = new User();

        $registerForm = $this->createForm(new RegistrationType(), $user);
        $registerForm->handleRequest($request);
        // $form = $this->createForm(new RegistrationType(), $user, ['action' => $this->generateUrl('create'), 'method' => 'POST']);

        if ($registerForm->isValid()){

          $user->setRoles(["ROLE_USER"]);

          $em = $this->get("doctrine")->getManager();
          $em->persist($user);
          $em->flush();
              dump($user);
              //Create a message for the user
          $this->addFlash(
                  'notice',
                  'Votre compte a bien été crée !'
              );
          return $this->redirectToRoute('login');
        }


        return $this->render(
            'AppBundle:Default:register.html.twig', ['registerForm' => $registerForm->createView()]);


      }


}
?>
