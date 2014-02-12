<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // pes_front_acceuil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pes_front_acceuil');
            }

            return array (  '_controller' => 'Pes\\FrontBundle\\Controller\\FrontController::accueilAction',  '_route' => 'pes_front_acceuil',);
        }

        // pes_front_voir_news
        if (0 === strpos($pathinfo, '/news/voir') && preg_match('#^/news/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pes_front_voir_news')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\FrontController::voirNewsAction',));
        }

        if (0 === strpos($pathinfo, '/co')) {
            if (0 === strpos($pathinfo, '/competition')) {
                // pes_front_voir_competition
                if (0 === strpos($pathinfo, '/competition/voir') && preg_match('#^/competition/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pes_front_voir_competition')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\FrontController::voirCompetitionAction',));
                }

                // pes_front_liste_competitions
                if ($pathinfo === '/competition/liste') {
                    return array (  '_controller' => 'Pes\\FrontBundle\\Controller\\FrontController::listeCompetitionsAction',  '_route' => 'pes_front_liste_competitions',);
                }

            }

            if (0 === strpos($pathinfo, '/courrier')) {
                // pes_courrier_list
                if ($pathinfo === '/courrier/liste') {
                    return array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CourrierController::indexAction',  '_route' => 'pes_courrier_list',);
                }

                // pes_courrier_show
                if (preg_match('#^/courrier/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pes_courrier_show')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CourrierController::showAction',));
                }

                // pes_courrier_create
                if ($pathinfo === '/courrier/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pes_courrier_create;
                    }

                    return array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CourrierController::createAction',  '_route' => 'pes_courrier_create',);
                }
                not_pes_courrier_create:

                // pes_courrier_edit
                if (preg_match('#^/courrier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pes_courrier_edit')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CourrierController::editAction',));
                }

                // pes_courrier_update
                if (preg_match('#^/courrier/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_pes_courrier_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pes_courrier_update')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CourrierController::updateAction',));
                }
                not_pes_courrier_update:

                // pes_courrier_delete
                if (preg_match('#^/courrier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_pes_courrier_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pes_courrier_delete')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CourrierController::deleteAction',));
                }
                not_pes_courrier_delete:

            }

            // pes_courrier_new
            if ($pathinfo === '/contact') {
                return array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CourrierController::newAction',  '_route' => 'pes_courrier_new',);
            }

        }

        if (0 === strpos($pathinfo, '/tournoi')) {
            // tournoi
            if (rtrim($pathinfo, '/') === '/tournoi') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tournoi');
                }

                return array (  '_controller' => 'Pes\\FrontBundle\\Controller\\TournoiController::indexAction',  '_route' => 'tournoi',);
            }

            // tournoi_show
            if (preg_match('#^/tournoi/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournoi_show')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\TournoiController::showAction',));
            }

            // tournoi_new
            if ($pathinfo === '/tournoi/new') {
                return array (  '_controller' => 'Pes\\FrontBundle\\Controller\\TournoiController::newAction',  '_route' => 'tournoi_new',);
            }

            // tournoi_create
            if ($pathinfo === '/tournoi/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tournoi_create;
                }

                return array (  '_controller' => 'Pes\\FrontBundle\\Controller\\TournoiController::createAction',  '_route' => 'tournoi_create',);
            }
            not_tournoi_create:

            // tournoi_edit
            if (preg_match('#^/tournoi/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournoi_edit')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\TournoiController::editAction',));
            }

            // tournoi_update
            if (preg_match('#^/tournoi/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tournoi_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournoi_update')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\TournoiController::updateAction',));
            }
            not_tournoi_update:

            // tournoi_delete
            if (preg_match('#^/tournoi/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tournoi_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournoi_delete')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\TournoiController::deleteAction',));
            }
            not_tournoi_delete:

        }

        if (0 === strpos($pathinfo, '/competition')) {
            // competition
            if (rtrim($pathinfo, '/') === '/competition') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'competition');
                }

                return array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CompetitionController::indexAction',  '_route' => 'competition',);
            }

            // competition_show
            if (preg_match('#^/competition/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competition_show')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CompetitionController::showAction',));
            }

            // competition_new
            if ($pathinfo === '/competition/new') {
                return array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CompetitionController::newAction',  '_route' => 'competition_new',);
            }

            // competition_create
            if ($pathinfo === '/competition/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_competition_create;
                }

                return array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CompetitionController::createAction',  '_route' => 'competition_create',);
            }
            not_competition_create:

            // competition_edit
            if (preg_match('#^/competition/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competition_edit')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CompetitionController::editAction',));
            }

            // competition_update
            if (preg_match('#^/competition/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_competition_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competition_update')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CompetitionController::updateAction',));
            }
            not_competition_update:

            // competition_delete
            if (preg_match('#^/competition/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_competition_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competition_delete')), array (  '_controller' => 'Pes\\FrontBundle\\Controller\\CompetitionController::deleteAction',));
            }
            not_competition_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
