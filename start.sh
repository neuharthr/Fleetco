#!/bin/sh
docker run --name fleetco -p 41061:22 -p 8080:80 -d -v /Users/korede/Documents/Projects/eco/Fleetco/fleetco:/www tomsik68/xampp:5
