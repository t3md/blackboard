<?php
declare(strict_types = 1);

return [
    \T3md\Blackboard\Domain\Model\FileReference::class => [
        'tableName' => 'sys_file_reference',
        'properties' => [
            'uid_local' => [
                'fieldName' => 'originalFileIdentifier',
            ],
        ],
    ],
];
