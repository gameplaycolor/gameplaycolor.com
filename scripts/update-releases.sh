#!/bin/bash

set -e
set -o pipefail
set -x
set -u

SCRIPTS_DIRECTORY="$( cd "$( dirname "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )"
ROOT_DIRECTORY="${SCRIPTS_DIRECTORY}/.."
GAMEPLAYCOLOR_DIRECTORY="${ROOT_DIRECTORY}/gameplaycolor"
CHANGES_DIRECTORY="${GAMEPLAYCOLOR_DIRECTORY}/scripts/changes"

CHANGES_PATH="${CHANGES_DIRECTORY}/changes"
CHANGES_PIPFILE_PATH="${CHANGES_DIRECTORY}/Pipfile"
RELEASES_TEMPLATE_PATH="${ROOT_DIRECTORY}/templates/releases.markdown"
GAMEPLAYCOLOR_HISTORY_PATH="${GAMEPLAYCOLOR_DIRECTORY}/history.yaml"
RELEASES_PATH="${ROOT_DIRECTORY}/docs/releases/index.markdown"

cd "$ROOT_DIRECTORY"

if [ ! -d "$GAMEPLAYCOLOR_DIRECTORY" ] ; then
    git clone https://github.com/gameplaycolor/gameplaycolor.git
fi

cd "$GAMEPLAYCOLOR_DIRECTORY"
git fetch origin --prune --prune-tags
git checkout origin/main
git submodule update --init --recursive

PIPENV_PIPFILE="$CHANGES_PIPFILE_PATH" pipenv install
"$CHANGES_PATH" notes --all --released --history "$GAMEPLAYCOLOR_HISTORY_PATH" --template "$RELEASES_TEMPLATE_PATH" > "$RELEASES_PATH"
