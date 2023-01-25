#!/bin/bash

exec rsync --progress -av kimr@webtech-in16.webtech-uva.nl:sync download_dir
