#!/usr/bin/env bash
CMD=$1
CNT=$2

for i in `seq 1 $CNT`; do
  $CMD
done
