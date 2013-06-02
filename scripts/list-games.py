#!/usr/bin/env python

import re

GOOGLE_URL = "https://www.google.com/"
GOOGLE_QUERY = "?q="
GOOGLE_QUALIFIER = "+game+boy+rom+-color"

game_file = "games.txt"

with open(game_file) as f:
  for line in f:
    game = line.strip().lower().replace("'", "").replace("-", "").replace("&", "and").replace(".", "")
    keywords = re.split(r"\s+", game)

    search_term = "+".join(keywords)
    url = GOOGLE_URL + GOOGLE_QUERY + search_term + GOOGLE_QUALIFIER

    print "<a href='%s' target='_blank'>%s</a>," % (url, line.strip())

