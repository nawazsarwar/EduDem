<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'notification' => [
        'title'          => 'Notifications',
        'title_singular' => 'Notification',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'mode'              => 'Mode',
            'mode_helper'       => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'data'              => 'Data',
            'data_helper'       => ' ',
            'try_count'         => 'Try Count',
            'try_count_helper'  => ' ',
            'done'              => 'Done',
            'done_helper'       => ' ',
            'remarks'           => 'Remarks',
            'remarks_helper'    => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'member' => [
        'title'          => 'Members',
        'title_singular' => 'Member',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'name'                         => 'Name',
            'name_helper'                  => ' ',
            'department'                   => 'Department',
            'department_helper'            => ' ',
            'designation'                  => 'Designation',
            'designation_helper'           => ' ',
            'email'                        => 'Email',
            'email_helper'                 => ' ',
            'mobile'                       => 'Mobile',
            'mobile_helper'                => ' ',
            'gender'                       => 'Gender',
            'gender_helper'                => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'institution'                  => 'Institution',
            'institution_helper'           => ' ',
            'district'                     => 'District',
            'district_helper'              => ' ',
            'first_name'                   => 'First Name',
            'first_name_helper'            => ' ',
            'middle_name'                  => 'Middle Name',
            'middle_name_helper'           => ' ',
            'last_name'                    => 'Last Name',
            'last_name_helper'             => ' ',
            'booth_name'                   => 'Booth Name',
            'booth_name_helper'            => ' ',
            'booth_no'                     => 'Booth No',
            'booth_no_helper'              => ' ',
            'address'                      => 'Address',
            'address_helper'               => ' ',
            'subject'                      => 'Subject',
            'subject_helper'               => ' ',
            'religion'                     => 'Religion',
            'religion_helper'              => ' ',
            'disability'                   => 'Disability',
            'disability_helper'            => ' ',
            'disability_type'              => 'Disability Type',
            'disability_type_helper'       => ' ',
            'assembly_constituency'        => 'Assembly Constituency',
            'assembly_constituency_helper' => ' ',
            'state'                        => 'State',
            'state_helper'                 => ' ',
            'home_state'                   => 'Home State',
            'home_state_helper'            => ' ',
            'dob'                          => 'Date of Birth',
            'dob_helper'                   => ' ',
        ],
    ],
    'institution' => [
        'title'          => 'Institution',
        'title_singular' => 'Institution',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'district'          => 'District',
            'district_helper'   => ' ',
            'address'           => 'Address',
            'address_helper'    => ' ',
            'level'             => 'Level',
            'level_helper'      => ' ',
        ],
    ],
    'district' => [
        'title'          => 'District',
        'title_singular' => 'District',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'state' => [
        'title'          => 'State',
        'title_singular' => 'State',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],

];
