<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.B1UZuxt' shared service.

return $this->privates['.service_locator.B1UZuxt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\BackofficeRegionController::delete' => ['privates', '.service_locator.vIHt.Cx', 'get_ServiceLocator_VIHt_CxService.php', true],
    'App\\Controller\\BackofficeRegionController::edit' => ['privates', '.service_locator.vIHt.Cx', 'get_ServiceLocator_VIHt_CxService.php', true],
    'App\\Controller\\BackofficeRegionController::index' => ['privates', '.service_locator.BPeAJFx', 'get_ServiceLocator_BPeAJFxService.php', true],
    'App\\Controller\\BackofficeRegionController::listRegionRooms' => ['privates', '.service_locator.vIHt.Cx', 'get_ServiceLocator_VIHt_CxService.php', true],
    'App\\Controller\\BackofficeRegionController::show' => ['privates', '.service_locator.vIHt.Cx', 'get_ServiceLocator_VIHt_CxService.php', true],
    'App\\Controller\\OwnerController::delete' => ['privates', '.service_locator.1sVfNg4', 'get_ServiceLocator_1sVfNg4Service.php', true],
    'App\\Controller\\OwnerController::edit' => ['privates', '.service_locator.1sVfNg4', 'get_ServiceLocator_1sVfNg4Service.php', true],
    'App\\Controller\\OwnerController::index' => ['privates', '.service_locator.KJS4slK', 'get_ServiceLocator_KJS4slKService.php', true],
    'App\\Controller\\OwnerController::show' => ['privates', '.service_locator.1sVfNg4', 'get_ServiceLocator_1sVfNg4Service.php', true],
    'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.wyrb61.', 'get_ServiceLocator_Wyrb61_Service.php', true],
    'App\\Controller\\ReservationController::confirm' => ['privates', '.service_locator.eH1R0Zw', 'get_ServiceLocator_EH1R0ZwService.php', true],
    'App\\Controller\\ReservationController::delete' => ['privates', '.service_locator.eH1R0Zw', 'get_ServiceLocator_EH1R0ZwService.php', true],
    'App\\Controller\\ReservationController::edit' => ['privates', '.service_locator.eH1R0Zw', 'get_ServiceLocator_EH1R0ZwService.php', true],
    'App\\Controller\\ReservationController::index' => ['privates', '.service_locator._yUaljH', 'get_ServiceLocator_YUaljHService.php', true],
    'App\\Controller\\ReservationController::show' => ['privates', '.service_locator.eH1R0Zw', 'get_ServiceLocator_EH1R0ZwService.php', true],
    'App\\Controller\\RoomController::consultRooms' => ['privates', '.service_locator.BkOHXLl', 'get_ServiceLocator_BkOHXLlService.php', true],
    'App\\Controller\\RoomController::delete' => ['privates', '.service_locator.BkOHXLl', 'get_ServiceLocator_BkOHXLlService.php', true],
    'App\\Controller\\RoomController::edit' => ['privates', '.service_locator.BkOHXLl', 'get_ServiceLocator_BkOHXLlService.php', true],
    'App\\Controller\\RoomController::index' => ['privates', '.service_locator.v9Nl9gk', 'get_ServiceLocator_V9Nl9gkService.php', true],
    'App\\Controller\\RoomController::show' => ['privates', '.service_locator.BkOHXLl', 'get_ServiceLocator_BkOHXLlService.php', true],
    'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\UnavailibilityController::delete' => ['privates', '.service_locator.00Wei2p', 'get_ServiceLocator_00Wei2pService.php', true],
    'App\\Controller\\UnavailibilityController::edit' => ['privates', '.service_locator.00Wei2p', 'get_ServiceLocator_00Wei2pService.php', true],
    'App\\Controller\\UnavailibilityController::index' => ['privates', '.service_locator.zWv6gwa', 'get_ServiceLocator_ZWv6gwaService.php', true],
    'App\\Controller\\BackofficeRegionController:delete' => ['privates', '.service_locator.vIHt.Cx', 'get_ServiceLocator_VIHt_CxService.php', true],
    'App\\Controller\\BackofficeRegionController:edit' => ['privates', '.service_locator.vIHt.Cx', 'get_ServiceLocator_VIHt_CxService.php', true],
    'App\\Controller\\BackofficeRegionController:index' => ['privates', '.service_locator.BPeAJFx', 'get_ServiceLocator_BPeAJFxService.php', true],
    'App\\Controller\\BackofficeRegionController:listRegionRooms' => ['privates', '.service_locator.vIHt.Cx', 'get_ServiceLocator_VIHt_CxService.php', true],
    'App\\Controller\\BackofficeRegionController:show' => ['privates', '.service_locator.vIHt.Cx', 'get_ServiceLocator_VIHt_CxService.php', true],
    'App\\Controller\\OwnerController:delete' => ['privates', '.service_locator.1sVfNg4', 'get_ServiceLocator_1sVfNg4Service.php', true],
    'App\\Controller\\OwnerController:edit' => ['privates', '.service_locator.1sVfNg4', 'get_ServiceLocator_1sVfNg4Service.php', true],
    'App\\Controller\\OwnerController:index' => ['privates', '.service_locator.KJS4slK', 'get_ServiceLocator_KJS4slKService.php', true],
    'App\\Controller\\OwnerController:show' => ['privates', '.service_locator.1sVfNg4', 'get_ServiceLocator_1sVfNg4Service.php', true],
    'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.wyrb61.', 'get_ServiceLocator_Wyrb61_Service.php', true],
    'App\\Controller\\ReservationController:confirm' => ['privates', '.service_locator.eH1R0Zw', 'get_ServiceLocator_EH1R0ZwService.php', true],
    'App\\Controller\\ReservationController:delete' => ['privates', '.service_locator.eH1R0Zw', 'get_ServiceLocator_EH1R0ZwService.php', true],
    'App\\Controller\\ReservationController:edit' => ['privates', '.service_locator.eH1R0Zw', 'get_ServiceLocator_EH1R0ZwService.php', true],
    'App\\Controller\\ReservationController:index' => ['privates', '.service_locator._yUaljH', 'get_ServiceLocator_YUaljHService.php', true],
    'App\\Controller\\ReservationController:show' => ['privates', '.service_locator.eH1R0Zw', 'get_ServiceLocator_EH1R0ZwService.php', true],
    'App\\Controller\\RoomController:consultRooms' => ['privates', '.service_locator.BkOHXLl', 'get_ServiceLocator_BkOHXLlService.php', true],
    'App\\Controller\\RoomController:delete' => ['privates', '.service_locator.BkOHXLl', 'get_ServiceLocator_BkOHXLlService.php', true],
    'App\\Controller\\RoomController:edit' => ['privates', '.service_locator.BkOHXLl', 'get_ServiceLocator_BkOHXLlService.php', true],
    'App\\Controller\\RoomController:index' => ['privates', '.service_locator.v9Nl9gk', 'get_ServiceLocator_V9Nl9gkService.php', true],
    'App\\Controller\\RoomController:show' => ['privates', '.service_locator.BkOHXLl', 'get_ServiceLocator_BkOHXLlService.php', true],
    'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\UnavailibilityController:delete' => ['privates', '.service_locator.00Wei2p', 'get_ServiceLocator_00Wei2pService.php', true],
    'App\\Controller\\UnavailibilityController:edit' => ['privates', '.service_locator.00Wei2p', 'get_ServiceLocator_00Wei2pService.php', true],
    'App\\Controller\\UnavailibilityController:index' => ['privates', '.service_locator.zWv6gwa', 'get_ServiceLocator_ZWv6gwaService.php', true],
], [
    'App\\Controller\\BackofficeRegionController::delete' => '?',
    'App\\Controller\\BackofficeRegionController::edit' => '?',
    'App\\Controller\\BackofficeRegionController::index' => '?',
    'App\\Controller\\BackofficeRegionController::listRegionRooms' => '?',
    'App\\Controller\\BackofficeRegionController::show' => '?',
    'App\\Controller\\OwnerController::delete' => '?',
    'App\\Controller\\OwnerController::edit' => '?',
    'App\\Controller\\OwnerController::index' => '?',
    'App\\Controller\\OwnerController::show' => '?',
    'App\\Controller\\RegistrationController::register' => '?',
    'App\\Controller\\ReservationController::confirm' => '?',
    'App\\Controller\\ReservationController::delete' => '?',
    'App\\Controller\\ReservationController::edit' => '?',
    'App\\Controller\\ReservationController::index' => '?',
    'App\\Controller\\ReservationController::show' => '?',
    'App\\Controller\\RoomController::consultRooms' => '?',
    'App\\Controller\\RoomController::delete' => '?',
    'App\\Controller\\RoomController::edit' => '?',
    'App\\Controller\\RoomController::index' => '?',
    'App\\Controller\\RoomController::show' => '?',
    'App\\Controller\\SecurityController::login' => '?',
    'App\\Controller\\UnavailibilityController::delete' => '?',
    'App\\Controller\\UnavailibilityController::edit' => '?',
    'App\\Controller\\UnavailibilityController::index' => '?',
    'App\\Controller\\BackofficeRegionController:delete' => '?',
    'App\\Controller\\BackofficeRegionController:edit' => '?',
    'App\\Controller\\BackofficeRegionController:index' => '?',
    'App\\Controller\\BackofficeRegionController:listRegionRooms' => '?',
    'App\\Controller\\BackofficeRegionController:show' => '?',
    'App\\Controller\\OwnerController:delete' => '?',
    'App\\Controller\\OwnerController:edit' => '?',
    'App\\Controller\\OwnerController:index' => '?',
    'App\\Controller\\OwnerController:show' => '?',
    'App\\Controller\\RegistrationController:register' => '?',
    'App\\Controller\\ReservationController:confirm' => '?',
    'App\\Controller\\ReservationController:delete' => '?',
    'App\\Controller\\ReservationController:edit' => '?',
    'App\\Controller\\ReservationController:index' => '?',
    'App\\Controller\\ReservationController:show' => '?',
    'App\\Controller\\RoomController:consultRooms' => '?',
    'App\\Controller\\RoomController:delete' => '?',
    'App\\Controller\\RoomController:edit' => '?',
    'App\\Controller\\RoomController:index' => '?',
    'App\\Controller\\RoomController:show' => '?',
    'App\\Controller\\SecurityController:login' => '?',
    'App\\Controller\\UnavailibilityController:delete' => '?',
    'App\\Controller\\UnavailibilityController:edit' => '?',
    'App\\Controller\\UnavailibilityController:index' => '?',
]);