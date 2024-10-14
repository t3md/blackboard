<?php
declare(strict_types = 1);

return [
    \Gg\Blackboard\Domain\Model\FileReference::class => [
        'tableName' => 'sys_file_reference',
        'properties' => [
            'uid_local' => [
                'fieldName' => 'originalFileIdentifier',
            ],
        ],
    ],
];
