#!/bin/bash

PROJECT_NAME=${1?Error: No PROJECT_NAME given}
curl -s https://laravel.build/$PROJECT_NAME | bash

