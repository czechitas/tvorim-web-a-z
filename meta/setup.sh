#!/usr/bin/env bash
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "$0")" || return; pwd)"
BASE_DIR="$SCRIPT_DIR/.."


if [ -z "${1-}" ]; then
  echo "Missing argument: namespace"
  exit 1
fi

NAMESPACE="$1"
REMOTE_PREFIX="https://github.com/$NAMESPACE"
REMOTE_SUFFIX=".git"

PODKLADY_DIR='podklady'
find "$BASE_DIR" -type d -name "$PODKLADY_DIR" | sort | while read dname; do
  dir=$(dirname "$dname")
  remote=$(basename $dir)
  remote_repo="$NAMESPACE/$remote"
  remote_url="$REMOTE_PREFIX/$remote$REMOTE_SUFFIX"
  echo "Setting up remote: $remote -> $remote_url"
  #git remote add "$remote" "$remote_url" || git remote set-url "$remote" "$remote_url"
  #git subtree split --prefix "$remote/$PODKLADY_DIR"
  echo $remote_repo
  hub create --remote-name "$remote" "$remote_repo"
  #echo "$REMOTE_PREFIX/$remote$REMOTE_SUFFIX"
done

# git subtree split --prefix lekce02/podklady
# git subtree push --prefix lekce02/podklady lekce02 master
