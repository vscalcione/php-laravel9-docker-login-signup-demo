#!/bin/bash

PROJECT_NAME=${1?Error: No PROJECT_NAME given}

curl -s https://laravel.build/$PROJECT_NAME | bash

if [$? -eq 0 ]; then
    echo 'Project generated with success!';
else
    echo 'Project not generated';
fi
