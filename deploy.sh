#!/bin/bash
# deploy.sh
REMOTE="strato-nv:~/STRATO-apps/wordpress_01/app/wp-content/themes/fofo/"
LOCAL="./"
# ensure connection is alive
ssh -O check strato-nv 2>/dev/null || ssh -fN strato-nv

rsync -avz \
  --exclude='*.map' \
  --exclude='.git' \
  --exclude='deploy.sh' \
  "$LOCAL" "$REMOTE"