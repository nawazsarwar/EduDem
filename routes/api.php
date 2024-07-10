<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Notifications
    Route::apiResource('notifications', 'NotificationsApiController');

    // Members
    Route::apiResource('members', 'MembersApiController');

    // Institution
    Route::apiResource('institutions', 'InstitutionApiController');

    // District
    Route::apiResource('districts', 'DistrictApiController');

    // State
    Route::apiResource('states', 'StateApiController');
});
