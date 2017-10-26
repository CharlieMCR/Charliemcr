#!/usr/bin/env bash

ROOT=$( cd $(dirname "$0") && pwd )

cd $ROOT/themes/charliemcr/src

npm run build:production

cd $ROOT

hugo