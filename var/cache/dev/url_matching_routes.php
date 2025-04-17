<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/evenements' => [[['_route' => 'admin_evenements', '_controller' => 'App\\Controller\\Gestion_Evennement\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/evenement/new' => [[['_route' => 'admin_evenement_new', '_controller' => 'App\\Controller\\Gestion_Evennement\\AdminController::new'], null, ['POST' => 0], null, false, false, null]],
        '/client/evenements' => [[['_route' => 'client_evenements', '_controller' => 'App\\Controller\\Gestion_Evennement\\ClientController::index'], null, null, null, false, false, null]],
        '/client/evenement/new' => [[['_route' => 'client_evenement_new', '_controller' => 'App\\Controller\\Gestion_Evennement\\ClientController::new'], null, ['POST' => 0], null, false, false, null]],
        '/sponsor/demandes' => [[['_route' => 'sponsor_demandes', '_controller' => 'App\\Controller\\Gestion_Evennement\\DSponsorController::index'], null, null, null, false, false, null]],
        '/test-email' => [[['_route' => 'test_email', '_controller' => 'App\\Controller\\Gestion_Evennement\\DSponsorController::sendTestEmail'], null, null, null, false, false, null]],
        '/employe/evenements' => [[['_route' => 'App_employe', '_controller' => 'App\\Controller\\Gestion_Evennement\\EmployeController::index'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\HomeController::client'], null, null, null, false, false, null]],
        '/sponsor' => [[['_route' => 'app_sponsor', '_controller' => 'App\\Controller\\HomeController::sponsor'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\HomeController::admin'], null, null, null, false, false, null]],
        '/employ' => [[['_route' => 'app_employe', '_controller' => 'App\\Controller\\HomeController::employe'], null, null, null, false, false, null]],
        '/bookings/search' => [[['_route' => 'bookings_search', '_controller' => 'App\\Controller\\gestion_de_depence\\BookinglistController::searchBookings'], null, ['GET' => 0], null, false, false, null]],
        '/create-payment-session' => [[['_route' => 'create_payment_session', '_controller' => 'App\\Controller\\gestion_de_depence\\BookinglistController::createPaymentSession'], null, ['POST' => 0], null, false, false, null]],
        '/payment/success' => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\gestion_de_depence\\BookinglistController::paymentSuccess'], null, null, null, false, false, null]],
        '/payment/cancel' => [[['_route' => 'payment_cancel', '_controller' => 'App\\Controller\\gestion_de_depence\\BookinglistController::paymentCancel'], null, null, null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'create_checkout_session', '_controller' => 'App\\Controller\\gestion_de_depence\\BookinglistController::createCheckoutSession'], null, ['POST' => 0], null, false, false, null]],
        '/admin/paid-bookings' => [[['_route' => 'admin_paid_bookings', '_controller' => 'App\\Controller\\gestion_de_depence\\PaidBookingsController::index'], null, null, null, false, false, null]],
        '/admin/bookings' => [[['_route' => 'admin_bookings_list', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingAdminController::list'], null, null, null, true, false, null]],
        '/booking' => [[['_route' => 'app_booking', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingController::index'], null, null, null, false, false, null]],
        '/booking/save' => [[['_route' => 'app_booking_save', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingController::save'], null, ['POST' => 0], null, false, false, null]],
        '/bookings' => [[['_route' => 'app_bookings_list', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingController::list'], null, null, null, false, false, null]],
        '/conference-locations' => [[['_route' => 'app_conference_locations', '_controller' => 'App\\Controller\\gestion_de_reservation\\ConferenceLocationController::index'], null, null, null, false, false, null]],
        '/conference-locations/select' => [[['_route' => 'app_conference_location_select', '_controller' => 'App\\Controller\\gestion_de_reservation\\ConferenceLocationController::selectLocation'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\gestion_de_reservation\\EvenementController::index'], null, null, null, false, false, null]],
        '/evenement/select' => [[['_route' => 'app_evenement_select', '_controller' => 'App\\Controller\\gestion_de_reservation\\EvenementController::selectEvent'], null, null, null, false, false, null]],
        '/flights' => [[['_route' => 'app_flights', '_controller' => 'App\\Controller\\gestion_de_reservation\\FlightController::index'], null, null, null, false, false, null]],
        '/flights/select' => [[['_route' => 'app_flight_select', '_controller' => 'App\\Controller\\gestion_de_reservation\\FlightController::selectFlight'], null, null, null, false, false, null]],
        '/hotels' => [[['_route' => 'app_hotels', '_controller' => 'App\\Controller\\gestion_de_reservation\\HotelController::index'], null, null, null, false, false, null]],
        '/hotels/select' => [[['_route' => 'app_hotel_select', '_controller' => 'App\\Controller\\gestion_de_reservation\\HotelController::select'], null, null, null, false, false, null]],
        '/transport' => [[['_route' => 'app_transport', '_controller' => 'App\\Controller\\gestion_de_reservation\\TransportController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\gestion_user\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\gestion_user\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\gestion_user\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\gestion_user\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\gestion_user\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|evenement(?'
                        .'|s/user/([^/]++)(*:206)'
                        .'|/([^/]++)/(?'
                            .'|edit(*:231)'
                            .'|delete(*:245)'
                            .'|accept(*:259)'
                            .'|reject(*:273)'
                        .')'
                    .')'
                    .'|bookings/([^/]++)(?'
                        .'|(*:303)'
                        .'|/(?'
                            .'|update\\-status(*:329)'
                            .'|validate(*:345)'
                        .')'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|/edit(*:376)'
                        .'|(*:384)'
                    .')'
                .')'
                .'|/client/evenement/([^/]++)/(?'
                    .'|edit(*:428)'
                    .'|delete(*:442)'
                .')'
                .'|/e(?'
                    .'|dit/([^/]++)(*:468)'
                    .'|venement/([^/]++)(?'
                        .'|/assign\\-employees(?'
                            .'|(*:517)'
                            .'|/submit(*:532)'
                        .')'
                        .'|(*:541)'
                    .')'
                .')'
                .'|/d_sponsor/([^/]++)(*:570)'
                .'|/sponsor/demande/([^/]++)/(?'
                    .'|accepter(*:615)'
                    .'|refuser(*:630)'
                .')'
                .'|/booking(?'
                    .'|s/user/([^/]++)(*:665)'
                    .'|/(?'
                        .'|update/([^/]++)(?'
                            .'|(*:695)'
                            .'|/(?'
                                .'|process(*:714)'
                                .'|final(*:727)'
                            .')'
                        .')'
                        .'|([^/]++)(*:745)'
                        .'|update/([^/]++)/select/([^/]++)(*:784)'
                        .'|([^/]++)/review(*:807)'
                    .')'
                .')'
                .'|/transport/select/([^/]++)(*:843)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'admin_evenements_par_user', '_controller' => 'App\\Controller\\Gestion_Evennement\\AdminController::indexParUser'], ['id'], null, null, false, true, null]],
        231 => [[['_route' => 'admin_evenement_edit', '_controller' => 'App\\Controller\\Gestion_Evennement\\AdminController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
        245 => [[['_route' => 'admin_evenement_delete', '_controller' => 'App\\Controller\\Gestion_Evennement\\AdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        259 => [[['_route' => 'admin_evenement_accept', '_controller' => 'App\\Controller\\Gestion_Evennement\\AdminController::acceptEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        273 => [[['_route' => 'admin_evenement_reject', '_controller' => 'App\\Controller\\Gestion_Evennement\\AdminController::rejectEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        303 => [[['_route' => 'admin_booking_show', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingAdminController::show'], ['id'], null, null, false, true, null]],
        329 => [[['_route' => 'admin_booking_update_status', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingAdminController::updateStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        345 => [[['_route' => 'admin_booking_validate', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingAdminController::validate'], ['id'], ['POST' => 0], null, false, false, null]],
        376 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\gestion_user\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        384 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\gestion_user\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        428 => [[['_route' => 'client_evenement_edit', '_controller' => 'App\\Controller\\Gestion_Evennement\\ClientController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
        442 => [[['_route' => 'client_evenement_delete', '_controller' => 'App\\Controller\\Gestion_Evennement\\ClientController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        468 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\Gestion_Evennement\\ClientController::edit'], ['id'], null, null, false, true, null]],
        517 => [[['_route' => 'assign_employees_to_event', '_controller' => 'App\\Controller\\Gestion_Evennement\\EmployeController::assignEmployees'], ['id'], null, null, false, false, null]],
        532 => [[['_route' => 'submit_employee_assignments', '_controller' => 'App\\Controller\\Gestion_Evennement\\EmployeController::submitAssignments'], ['id'], ['POST' => 0], null, false, false, null]],
        541 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\gestion_de_reservation\\EvenementController::show'], ['id'], null, null, false, true, null]],
        570 => [[['_route' => 'app_d_sponsor', '_controller' => 'App\\Controller\\Gestion_Evennement\\DSponsorController::createSponsorshipRequest'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        615 => [[['_route' => 'demande_sponsoring_accepter', '_controller' => 'App\\Controller\\Gestion_Evennement\\DSponsorController::accept'], ['id'], ['POST' => 0], null, false, false, null]],
        630 => [[['_route' => 'demande_sponsoring_refuser', '_controller' => 'App\\Controller\\Gestion_Evennement\\DSponsorController::refuse'], ['id'], ['POST' => 0], null, false, false, null]],
        665 => [[['_route' => 'bookings_by_user', '_controller' => 'App\\Controller\\gestion_de_depence\\BookinglistController::showBookingsByUser'], ['userid'], null, null, false, true, null]],
        695 => [[['_route' => 'app_booking_update', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        714 => [[['_route' => 'app_booking_update_process', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingController::updateProcess'], ['id'], ['POST' => 0], null, false, false, null]],
        727 => [[['_route' => 'app_booking_update_final', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingController::updateFinal'], ['id'], ['POST' => 0], null, false, false, null]],
        745 => [[['_route' => 'app_booking_delete', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        784 => [[['_route' => 'app_booking_update_select', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingController::updateSelect'], ['id', 'type'], null, null, false, true, null]],
        807 => [[['_route' => 'app_booking_review', '_controller' => 'App\\Controller\\gestion_de_reservation\\BookingController::review'], ['id'], null, null, false, false, null]],
        843 => [
            [['_route' => 'app_transport_select', '_controller' => 'App\\Controller\\gestion_de_reservation\\TransportController::select'], ['transport_id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
