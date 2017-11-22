<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/formarmor')) {
            // form_armor_homepage
            if (rtrim($pathinfo, '/') === '/formarmor') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'form_armor_homepage');
                }

                return array (  '_controller' => 'FormArmorBundle\\Controller\\AccueilController::indexAction',  '_route' => 'form_armor_homepage',);
            }

            // form_armor_formations
            if (0 === strpos($pathinfo, '/formarmor/formations') && preg_match('#^/formarmor/formations(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_formations')), array (  '_controller' => 'FormArmorBundle\\Controller\\FormationsController::listeAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/formarmor/admin')) {
                // form_armor_admin
                if ($pathinfo === '/formarmor/admin') {
                    return array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::authentifAction',  '_route' => 'form_armor_admin',);
                }

                if (0 === strpos($pathinfo, '/formarmor/admin/statut')) {
                    // form_armor_admin_statut
                    if (preg_match('#^/formarmor/admin/statut(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_statut')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::listeStatutAction',  'page' => 1,));
                    }

                    // form_armor_admin_statut_modif
                    if (0 === strpos($pathinfo, '/formarmor/admin/statut/modif') && preg_match('#^/formarmor/admin/statut/modif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_statut_modif')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::modifStatutAction',));
                    }

                    // form_armor_admin_statut_supp
                    if (0 === strpos($pathinfo, '/formarmor/admin/statut/supp') && preg_match('#^/formarmor/admin/statut/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_statut_supp')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::suppStatutAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/formarmor/admin/client')) {
                    // form_armor_admin_client
                    if (preg_match('#^/formarmor/admin/client(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_client')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::listeClientAction',  'page' => 1,));
                    }

                    // form_armor_admin_client_modif
                    if (0 === strpos($pathinfo, '/formarmor/admin/client/modif') && preg_match('#^/formarmor/admin/client/modif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_client_modif')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::modifClientAction',));
                    }

                    // form_armor_admin_client_supp
                    if (0 === strpos($pathinfo, '/formarmor/admin/client/supp') && preg_match('#^/formarmor/admin/client/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_client_supp')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::suppClientAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/formarmor/admin/formation')) {
                    // form_armor_admin_formation
                    if (preg_match('#^/formarmor/admin/formation(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_formation')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::listeFormationAction',  'page' => 1,));
                    }

                    // form_armor_admin_formation_modif
                    if (0 === strpos($pathinfo, '/formarmor/admin/formation/modif') && preg_match('#^/formarmor/admin/formation/modif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_formation_modif')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::modifFormationAction',));
                    }

                    // form_armor_admin_formation_supp
                    if (0 === strpos($pathinfo, '/formarmor/admin/formation/supp') && preg_match('#^/formarmor/admin/formation/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_formation_supp')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::suppFormationAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/formarmor/admin/session')) {
                    // form_armor_admin_session
                    if (preg_match('#^/formarmor/admin/session(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_session')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::listeSessionAction',  'page' => 1,));
                    }

                    // form_armor_admin_session_modif
                    if (0 === strpos($pathinfo, '/formarmor/admin/session/modif') && preg_match('#^/formarmor/admin/session/modif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_session_modif')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::modifSessionAction',));
                    }

                    // form_armor_admin_session_supp
                    if (0 === strpos($pathinfo, '/formarmor/admin/session/supp') && preg_match('#^/formarmor/admin/session/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_session_supp')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::suppSessionAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/formarmor/admin/planformation')) {
                    // form_armor_admin_planformation
                    if (preg_match('#^/formarmor/admin/planformation(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_planformation')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::listePlanFormationAction',  'page' => 1,));
                    }

                    // form_armor_admin_planformation_modif
                    if (0 === strpos($pathinfo, '/formarmor/admin/planformation/modif') && preg_match('#^/formarmor/admin/planformation/modif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_planformation_modif')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::modifPlanFormationAction',));
                    }

                    // form_armor_admin_planformation_supp
                    if (0 === strpos($pathinfo, '/formarmor/admin/planformation/supp') && preg_match('#^/formarmor/admin/planformation/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'form_armor_admin_planformation_supp')), array (  '_controller' => 'FormArmorBundle\\Controller\\AdminController::suppPlanFormationAction',));
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
